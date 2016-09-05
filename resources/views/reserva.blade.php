@extends('layout.principal')

@section('navigation')
<div class="banner1">
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1><a href="\">Hotel</a></h1>
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
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="\">Inicio</a></li>
							<li><a href="rooms">Habitaciones</a></li>
							<li class="active"><a href="reserva">Reserva</a></li>
							<li><a href="contact.html">Contacto</a></li>
						</ul>
					</div>
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
</div>
@stop

@section('content')
<div class="login-page">
		<div class="container">
			<div class="account_grid">
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3>Formulario de Reserva</h3>
					<form>
						<div>
							<span>Nombres<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Apellidos<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Número pasaporte<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>E-mail<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Nacionalidad<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>País de orígen<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Universidad o Centro<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Programa de Postgrado o Proyecto de Investigación<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Motivo visita<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Académico UACh de Contacto<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Facultad / Instituto<label>*</label></span>
							<input type="text">
						</div>
						<div>
							<span>Modalidad de Pago<label>*</label></span>
							<input type="text">
						</div>
						<input type="submit" value="Enviar">
					</form>
			   </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@stop
