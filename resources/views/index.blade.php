@extends('layout.principal')


@section('navigation')
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="active"><a href="\" id="index">Inicio</a></li>
			<li><a href="rooms" id="rooms">Habitaciones</a></li>
			<li><a href="reserva" id="reserva">Reservar</a></li>
			<li><a href="contact" id="contact">Contacto</a></li>
		</ul>
	</div>
@stop

@section('dates')
<div class="banner-info">
	<div class="container">
		<div class="detalle-1">
			<div class="col-md-10 dropdown-buttons">
				<div class="col-md-3 dropdown-button">
					<div class="input-group">
						<input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Name" type="text" required="">
					</div>
				</div>
				<!---strat-date-piker---->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
						<script>
								$(function() {
								$( "#datepicker,#datepicker1" ).datepicker();
								});
						</script>
				<!---/End-date-piker---->

				<div class="col-md-3 dropdown-button">
					<div class="book_date">
						<form>
							<input class="date" id="datepicker" type="text" value="Check In" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Check In';}">
						</form>
					</div>
				</div>
				<div class="col-md-3 dropdown-button">
					<div class="book_date">
						<form>
							<input class="date1" id="datepicker1" type="text" value="Check Out" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Check Out';}">
						</form>
					</div>
				</div>
				<div class="col-md-3 dropdown-button">
					<div class="section_1">
					 <select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">Double Room</option>
						<option value="null">Sigle Room</option>
						<option value="AX">Suit Room</option>
						<option value="AX">Guest Room</option>
					 </select>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-2 submit_button">
				<form action="detalle">
					<input type="submit" value="Search">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
@stop

@section('content')

<!-- hod -->
<div class="hod">
<div class="container">
	<div class="col-md-6 hod-left">
		<img src="images/14.jpg" class="img-responsive" alt="">
	</div>
	<div class="col-md-6 hod-right">
		<h2>Publishing packages and web page</h2>
		<p>The point of using as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' </p>
		<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
		<a class="hvr-shutter-in-horizontal" href="detalle">Book Now</a>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<!-- hod -->
<!-- tels -->
<div class="tels">
<div class="container">
	<div class="col-md-4 tels-left">
		<h4>Single room <span>110$</span></h4>
		<img src="images/4.jpg" class="img-responsive" alt="">
		<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
		<a class="hvr-shutter-in-horizontal" href="detalle">Book Now</a>
	</div>
	<div class="col-md-4 tels-left">
		<h4>Double room <span>150$</span></h4>
		<img src="images/9.jpg" class="img-responsive" alt="">
		<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
		<a class="hvr-shutter-in-horizontal" href="detalle">Book Now</a>
	</div>
	<div class="col-md-4 tels-left">
		<h4>Private room <span>200$</span></h4>
		<img src="images/3.jpg" class="img-responsive" alt="">
		<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
		<a class="hvr-shutter-in-horizontal" href="detalle">Book Now</a>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<!-- tels -->

@stop
