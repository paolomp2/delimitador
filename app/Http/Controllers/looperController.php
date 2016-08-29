<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Containers\generalContainer;

use Auth;

use Redirect;

use App\Looper;

use Hashids;

use App\Http\Libraries\SPARQL;

class looperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loopers = Looper::all();

        $gc = new generalContainer;
        
        $gc->url_base = "looper";
        $gc->table = true;
        $gc->page_name = "Lista de Repositorios";
        $gc->page_description = "Esta lista contiene los conceptos";
        $gc->breadcrumb('looper');

        $gc->looper = $loopers;

        return view('cms.looper.list', compact('gc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gc = new generalContainer;
        $gc->create = true;
        $gc->url_base = "looper";
        $gc->page_name = "Enlazar nuevo Repositorio";
        $gc->page_description = "Inserte los campos requeridos";
        $gc->form = true;
        $gc->breadcrumb('looper.create');
        $gc->entity_to_edit = new Looper;
        return view('cms.looper.form', compact('gc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $looper = new Looper;
        $looper->name = $request->name;
        $looper->url = $request->url;
        $looper->created_by = Auth::user()->id;
        $looper->save();

        $looper->id_md5 = Hashids::encode($looper->id+1000000);
        $looper->save();

        return Redirect::to('/looper');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $looper = Looper::find(Hashids::decode($id)[0]-1000000);

        $gc = new generalContainer;
        $gc->url_base = "looper";
        $gc->page_name = "Enlazar nuevo Repositorio";
        $gc->page_description = "Inserte los campos requeridos";
        $gc->form = true;
        $gc->breadcrumb('looper.edit');
        $gc->entity_to_edit = $looper;

        return view('cms.looper.form', compact('gc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $looper = Looper::find($id);
        if($looper==null)
        {
            return Redirect::to('/looper');
        }
        $looper->name = $request->name;
        $looper->url = $request->url;
        $looper->created_by = Auth::user()->id;
        $looper->save();

        return Redirect::to('/looper');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function inactive($id)
    {
        $looper = Looper::find(Hashids::decode($id)[0]-1000000);
        $looper->delete();

        return Redirect::to('/looper');
    }

    public function trash()
    {
        $loopers = Looper::onlyTrashed()->get();

        $gc = new generalContainer;
        
        $gc->url_base = "looper";
        $gc->table = true;
        $gc->trash = true;
        $gc->page_name = "Lista de Repositorios eliminados";
        $gc->page_description = "Esta lista contiene los conceptos";
        $gc->breadcrumb('looper');

        $gc->looper = $loopers;

        return view('cms.looper.list', compact('gc'));
    }

    public function untrashed($id)
    {
        Looper::onlyTrashed()->find(Hashids::decode($id)[0]-1000000)->restore();
        return Redirect::to('looper/trash/trash');
    }

    public function latency()
    {
        $loopers = Looper::all();

        $result = array();

        $i=0;

        foreach ($loopers as $looper) {
            
            $sparql = new SPARQL;
            $sparql->setUrl($looper->url);
            $sparql->set_query("ASK WHERE{ ?s ?p ?o . }");            
            
            $response = $sparql->launch();
            //echo dd($response["boolean"]);
            $ind = $response["boolean"];
            $result[$i]["id"] = $looper->id;

            if($ind){                
                $result[$i]["seg"] = $sparql->exec_time();                
            }else{
                $result[$i]["seg"] = "Desconectado";
            }
            $i++;
        }        

        return response()->json([
                "total" => $i,
                "result" => $result,
                ]);

        echo dd($result);
    }
}
