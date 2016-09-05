@extends('layout.principal')
<script type="text/javascript">
function cambiarClase(){
	var a = document.getElementById('div1');
	if(a.classname == 'banner'){
		a.classname = 'banner1';
	}
}

</script>

@section('navigation')
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
		<li class="active"><a href="\" id="index" onclick="javascript:cambiarClase">Inicio</a></li>
		<li><a href="rooms" id="rooms" onclick="javascript:cambiarClase">Rooms</a></li>
		<li><a href="reserva" id="reserva" onclick="javascript:cambiarClase">Reservar</a></li>
		<li><a href="contact" id="contact" onclick="javascript:cambiarClase">Contacto</a></li>
	</ul>
</div>
@stop

@section('dates')
@stop

@section('content')
	<div class="single">
		<div class="container">
			<div class="single-top">
				<div class="col-md-6 single-left">
					<a href="details.html"><img src="images/14.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="col-md-6 single-right">
					<h3><a href="details.html">Publishing software like Aldus</a></h3>
					<p>The point of using Lorem Ipsum is that it has a <strong>more-or-less normal</strong> distribution of letters, as opposed to using 'Content here, content here'</p>
					<p>when an unknown printer took a s that it has galley of type and scrambled it to make a type </p>
					<h5>*The Booking detials for must be Ipsum is that it has.</h5>
					<h6>• Our stylish hotel is ideally located</h6>
					<div class="sinbt">
						<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="single-top">
				<div class="col-md-6 single-right">
					<h3><a href="details.html">There are many variations</a></h3>
					<p>The point of using Lorem Ipsum is that it has a <strong>more-or-less normal</strong> distribution of letters, as opposed to using 'Content here, content here'</p>
					<p>when an unknown printer took a s that it has galley of type and scrambled it to make a type </p>
					<h5>*The Booking detials for must be Ipsum is that it has.</h5>
					<h6>• Our stylish hotel is ideally located</h6>
					<div class="sinbt">
						<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
					</div>
				</div>
				<div class="col-md-6 single-left">
					<a href="details.html"><img src="images/15.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="single-top">
				<div class="col-md-6 single-left">
					<a href="details.html"><img src="images/13.jpg" class="img-responsive" alt=""></a>
				</div>
				<div class="col-md-6 single-right">
					<h3><a href="details.html">Lorem Ipsum is that it has</a></h3>
					<p>The point of using Lorem Ipsum is that it has a <strong>more-or-less normal</strong> distribution of letters, as opposed to using 'Content here, content here'</p>
					<p>when an unknown printer took a s that it has galley of type and scrambled it to make a type </p>
					<h5>*The Booking detials for must be Ipsum is that it has.</h5>
					<h6>• Our stylish hotel is ideally located</h6>
					<div class="sinbt">
						<a class="hvr-shutter-in-horizontal" href="details.html">Book Now</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
	</div>
@stop
