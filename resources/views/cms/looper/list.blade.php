@extends('cms.templates.template')

@section('content')

<table id="list_table" class="display dataTable">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Endpoint</th>
      <th>Creado por</th>
      <th>Latencia</th>
      <th>Opciones</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;?>
    @foreach($gc->looper as $loop)
    <tr>
      <th scope="row">{!!$i!!}</th>
      <td>{!!$loop->name!!}</td>
      <td>{!!$loop->url!!}</td>      
      <td>{!!$loop->CreatedBy->name!!}</td>
      <td class="red_td" id="lat_{!!$loop->id!!}" >----</td>
      <td>
        <?php 
          if (is_null($loop->deleted_at)) {
            $route_edit = "/".$gc->url_base."/".$loop->id_md5."/edit/";
            $route_destroy = "/".$gc->url_base."/".$loop->id_md5."/inactive/";

            $status = "active";
          }else{

            $route_untrashed = "/".$gc->url_base."/".$loop->id_md5."/untrashed/";
            $status = "inactive";
          }
        ?>

        @if($status == "active")                      
        <a href=<?php echo $route_edit;?> class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Editar </a>
        <a href=<?php echo $route_destroy;?> class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Desactivar </a>
        @else
        <a href=<?php echo $route_untrashed;?> class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Restaurar </a>
        @endif

        
      </td>         
    </tr>
    <?php $i++;?>
    @endforeach

    <input type="hidden" id="total_repositories" name="total_repositories" value={!!$i!!}>
                  
  </tbody>
</table>
@endsection


@section('scripts')

<script type="text/javascript">
  console.log("Latencia");

  setInterval(function(){
  $.ajax({
      url: '/looper/latency/latency',
      type: 'GET'
    })
    .done(function(succes) {
      var total = succes['total'];
      var result = succes['result'];
      console.log(total);

      for (var i = 0; i < parseInt(total); i++) {
        console.log(succes['result'][i]);
        document.getElementById("lat_"+result[i]['id']).innerHTML = result[i]['seg'];
      };
    })
    .fail(function(succes) {
      
    });

  },2000);  

</script>

@endsection