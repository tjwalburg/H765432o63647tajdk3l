@extends('layout.principal')

@section('navigation')
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li><a href="\" id="index" onclick="javascript:cambiarClase">Inicio</a></li>
		<li><a href="rooms" id="rooms" onclick="javascript:cambiarClase">Habitaciones</a></li>
		<li class="active"><a href="reserva" id="reserva" onclick="javascript:cambiarClase">Reservar</a></li>
		<li><a href="contact" id="contact" onclick="javascript:cambiarClase">Contacto</a></li>
	</ul>
</div>
@stop

@section('content')
<div class="login-page">
		<div class="container">
			<div class="account_grid">
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3>Formulario de Reserva</h3>
					{!! Form::open() !!}
						<div>
							{!! Form::label('Nombres: ')!!}
							{!! Form::text('nombres_huesped')}
						</div>

					{!! Form::close() !!}
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
