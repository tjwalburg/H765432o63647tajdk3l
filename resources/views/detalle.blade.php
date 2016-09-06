@extends('layout.principal')

@section('navigation')
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li><a href="\" id="index">Inicio</a></li>
		<li><a href="rooms" id="rooms">Habitaciones</a></li>
		<li><a href="reserva" id="reserva">Reservar</a></li>
		<li><a href="contact" id="contact">Contacto</a></li>
	</ul>
</div>
@stop

@section('content')
<div class="container">
	<div class="grid_3 grid_5">
		<h3 class="bars">Formulario reserva</h3>
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#huesped" id="huesped-tab" role="tab" data-toggle="tab" aria-controls="huesped" aria-expanded="true">Datos del huésped</a></li>
				<li role="presentation"><a href="#docente" role="tab" id="docente-tab" data-toggle="tab" aria-controls="docente">Datos del docente</a></li>
				<li role="presentation"><a href="#reserva" role="tab" id="reserva-tab" data-toggle="tab" aria-controls="reserva">Datos del prueba</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="huesped" aria-labelledby="huesped-tab">
					<div class="booking-form">
						 <div class="col-md-6">
							 {!!Form::open()!!}
								{!!Form::label('Nombres: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('nombre_h')!!}
								{!!Form::label('Pasaporte: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('pasaporte_h')!!}
								{!!Form::label('Universidad: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('universidad_h')!!}
								{!!Form::label('Nacionalidad: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('nacionalidad_h')!!}
						</div>
						<div class="col-md-6">
							{!!Form::label('Apellidos: ',null,['class'=>'booking-label'])!!}
							{!!Form::text('apellidos_h')!!}
							{!!Form::label('Pais: ',null,['class'=>'booking-label'])!!}
							{!!Form::text('pais_h')!!}
							{!!Form::label('E-mail: ',null,['class'=>'booking-label'])!!}
 						 	{!!Form::text('email_h')!!}
							{!!Form::submit('Guardar')!!}
						 {!!Form::close()!!}
					 </div>

					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="docente" aria-labelledby="docente-tab">
					<div class="booking-form">
						 <div class="col-md-6">
							 {!!Form::open()!!}
								{!!Form::label('Nombres: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('nombre_d')!!}
								{!!Form::label('Pasaporte: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('pasaporte_d')!!}
								{!!Form::label('Universidad: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('universidad_d')!!}
								{!!Form::label('Nacionalidad: ',null,['class'=>'booking-label'])!!}
								{!!Form::text('nacionalidad_d')!!}
						</div>
						<div class="col-md-6">
							{!!Form::label('Apellidos: ',null,['class'=>'booking-label'])!!}
							{!!Form::text('apellidos_d')!!}
							{!!Form::label('Pais: ',null,['class'=>'booking-label'])!!}
							{!!Form::text('pais_d')!!}
							{!!Form::label('Facultad: ',null,['class'=>'booking-label'])!!}
							{!!Form::text('facultad_d')!!}
							{!!Form::label('E-mail: ',null,['class'=>'booking-label'])!!}
 						 	{!!Form::text('email_d')!!}
							{!!Form::submit('Guardar')!!}
						 {!!Form::close()!!}
					 </div>

					</div>
				</div>
				<div class="tab-pane fade" role="tabpanel" id="reserva" aria-labelledby="reserva-tab">
					{!!Form::open()!!}
					{!!Form::label('Hola: ')!!}
					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop
