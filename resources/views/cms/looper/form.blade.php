@extends('cms.templates.template')

@section('content')

@if($gc->create==true)
{!!Form::open(['route'=>$gc->url_base.'.store','method'=>'POST', 'class'=>'form-horizontal form-label-left'])!!}
@else
{!!Form::open(['route'=> [$gc->url_base.'.update', $gc->entity_to_edit->id],'method'=>'PUT', 'class'=>'form-horizontal form-label-left'])!!}
@endif

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-9 col-xs-12">
      <input autofocus type="text" minlength="5" maxlength="50"  id="name" name="name" class="form-control col-md-7 col-xs-12" placeholder="Nombre del repositorio" value={!!'"'.$gc->entity_to_edit->name.'"'!!}>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">URL<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-12 col-xs-12">
      <input type="text" minlength="5" id="url" name="url" required="required" class="form-control col-md-7 col-xs-12" placeholder="URL del repositorio" value={!!'"'.$gc->entity_to_edit->url.'"'!!}>
    </div>
  </div>

  <div class="ln_solid"></div>
  <div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <a href="/{!!$gc->url_base!!}/" type="submit" class="btn btn-primary"><i class="fa fa-times">&nbsp</i> Cancelar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-save">&nbsp</i>Guardar</button>
    </div>
  </div>

</form>

@endsection


@section('scripts')
 
@endsection