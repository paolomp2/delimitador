<div class="col-md-3 left_col">
  <div class="left_col scroll-view">

    <div class="navbar nav_title" style="border: 0;">
      <div>
        <img src={!!asset("images/logo.png")!!}  class="login__logo" />
        <img src={!!asset("images/logo.png")!!}  class="logo" />
      </div>
      <div class="title_logo">
          Delimitador
      </div>
    </div>
    <div class="clearfix"></div>

    <!-- menu prile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src={!!asset("images/user_default.png")!!} alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Bienvenido,</span>
        <h2>{{$gc->username}}</h2>
      </div>
    </div>
    <!-- /menu prile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <p>
      <div class="menu_section">
        <h3>&nbsp</h3>
        
        <h3>Objetivo 1</h3>
        <ul class="nav side-menu">
          
          <li><a><i class="fa fa-pencil-square-o"></i> Linked Data<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu" style="display: none">
              <li><a href="/looper/">Repositorios semánticos</a></li>
            </ul>
          </li>

        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">            
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>