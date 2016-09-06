<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel UACh para estudiantes extranjeros</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
{!! Html::style('css/bootstrap.css')!!}
{!! Html::style('css/style.css')!!}
{!! Html::style('//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css')!!}
<!-- Custom Theme files -->
{!! Html::script('js/jquery-1.11.1.min.js') !!}
{!! Html::script('https://code.jquery.com/ui/1.12.0/jquery-ui.js')!!}
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600' rel='stylesheet' type='text/css'>
   <!--//webfonts-->
{!! Html::script('js/bootstrap.js') !!}

</head>
<body>
<!-- banner -->
	<div class="banner" id="div1">
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="/">Hotel</a></h1>
				</div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!--/.navbar-header-->
						@yield('navigation')
						<!--/.navbar-collapse-->
					</nav>
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form>
							<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
							</form>
					</div>
				</div>
					<div class="clearfix"> </div>

				<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
					<script>
						new UISearch( document.getElementById( 'sb-search' ) );
					</script>
				<!-- //search-scripts -->

			</div>
		</div>
    @yield('dates')
	</div>
	<!-- banner -->

@yield('content')

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-2 deco">
				<h4>Navegación</h4>
				<li><a href="\">Inicio</a></li>
				<li><a href="sigin">Inicio Sesion</a></li>
				<li><a href="contact">Contacto</a></li>
			</div>
			<div class="col-md-2 deco">
				<h4>Links</h4>
				<li><a href="#">Qui Sommes-Nous ?</a></li>
				<li><a href="#">Mentions Légales </a></li>
				<li><a href="#">Conditions D'Utilisation </a></li>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
			<div class="container">
				<p>© 2015 Motel. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	<!-- footer -->
</body>
</html>
