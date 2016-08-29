<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="login_p/css/bootstrap.min.css" rel="stylesheet">
	<link href="login_p/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="login_p/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="login_p/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="login_p/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="login_p/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="login_p/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(login_p/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="/"><i class="halflings-icon home"></i></a>
					</div>



					<h2>Ingresa tus datos</h2>
					<h3>{!!$msg or ""!!}</h3>
					<form class="form-horizontal" action="login_store" method="post">

						<input type="hidden" name="_token" value="{!!csrf_token()!!}">

						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="Usuario"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="Contraseña"/>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Recordarme</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Acceder</button>
							</div>
							<div class="clearfix"></div>
					</form>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="login_p/js/jquery-1.9.1.min.js"></script>
	<script src="login_p/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="login_p/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="login_p/js/jquery.ui.touch-punch.js"></script>
	
		<script src="login_p/js/modernizr.js"></script>
	
		<script src="login_p/js/bootstrap.min.js"></script>
	
		<script src="login_p/js/jquery.cookie.js"></script>
	
		<script src='login/js/fullcalendar.min.js'></script>
	
		<script src='login/js/jquery.dataTables.min.js'></script>

		<script src="login_p/js/excanvas.js"></script>
	<script src="login_p/js/jquery.flot.js"></script>
	<script src="login_p/js/jquery.flot.pie.js"></script>
	<script src="login_p/js/jquery.flot.stack.js"></script>
	<script src="login_p/js/jquery.flot.resize.min.js"></script>
	
		<script src="login_p/js/jquery.chosen.min.js"></script>
	
		<script src="login_p/js/jquery.uniform.min.js"></script>
		
		<script src="login_p/js/jquery.cleditor.min.js"></script>
	
		<script src="login_p/js/jquery.noty.js"></script>
	
		<script src="login_p/js/jquery.elfinder.min.js"></script>
	
		<script src="login_p/js/jquery.raty.min.js"></script>
	
		<script src="login_p/js/jquery.iphone.toggle.js"></script>
	
		<script src="login_p/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="login_p/js/jquery.gritter.min.js"></script>
	
		<script src="login_p/js/jquery.imagesloaded.js"></script>
	
		<script src="login_p/js/jquery.masonry.min.js"></script>
	
		<script src="login_p/js/jquery.knob.modified.js"></script>
	
		<script src="login_p/js/jquery.sparkline.min.js"></script>
	
		<script src="login_p/js/counter.js"></script>
	
		<script src="login_p/js/retina.js"></script>

		<script src="login_p/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
