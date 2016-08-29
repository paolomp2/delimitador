<?php

namespace App\Http\Containers;

use Auth;
use App\User;

use App\Http\Libraries\Breadcrumb;

class generalContainer
{

	private $page_name="<button type='button' class='btn btn-danger'>Configure el nombre 1 de la página</button>";
	private $page_name_2="<button type='button' class='btn btn-danger'>Configure el nombre 2 de la página</button>";

	private $page_description="<button type='button' class='btn btn-danger'>Configure la descripción 1 de la página</button>";
	private $page_description_2="<button type='button' class='btn btn-danger'>Configure la descripción 2 de la página</button>";

	private $msg_add_elements = "No name configurated";
	
	//GENERAL FLAGS
	private $form=false;
	private $date=false;
	private $table=false; //En caso se use una tabla
	private $relative_path="";
	private $create=false;// En caso se inserte un mnuevo elemento
	private $trash = false;//En caso esté viendo la papelera
	private $select = false;//En caso esté viendo la papelera
	private $add_elements = false;
	private $picture = false;
	private $breadcrumb =null;
	private $default_buttons=true;

	//USER INFORMATION
		//Nombre de usuario por defecto
	private $username= "No name detected";
		//Rol de usuario por defecto
	private $id_rol=-1;
		//imagen de la imagen por defecto
	private $image="cms/images/img.jpg";

	//ENTITIES
	private $entity_to_edit = null;
	private $looper = array();

		//base of url
	private $url_base = "no_link";

	public function __construct()
	{
		$this->username = Auth::user()->name;
		$this->id_rol = Auth::user()->id_rol;
		
	}

	public function __get($property) {
	    if (property_exists($this, $property)) {
	  		return $this->$property;
	    }
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}

		return $this;
	}

	public function breadcrumb($route){
		$bc = new Breadcrumb($route);
		$this->breadcrumb =  $bc->route_list();
	}
}
?>