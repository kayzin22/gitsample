@extends('layouts.app')
@section('title')
 dashboard
@stop

@section('content')
<!-- slider -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
 			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
			    	<div class="carousel-item active" data-interval="10000">
			      		<img src="{{ asset('img/background.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
			    	<div class="carousel-item" data-interval="2000">
			     		<img src="{{ asset('img/coffee.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
			    	<div class="carousel-item">
			     		<img src="{{ asset('img/mainbackground.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
				</a>
			</div>
 		</div>
 		<div class="col-md-4">
 			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
			    	<div class="carousel-item active" data-interval="10000">
			      		<img src="{{ asset('img/background.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
			    	<div class="carousel-item" data-interval="2000">
			     		<img src="{{ asset('img/coffee.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
			    	<div class="carousel-item">
			     		<img src="{{ asset('img/mainbackground.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
				</a>
			</div>
 		</div>
 		<div class="col-md-4">
 			<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
			    	<div class="carousel-item active" data-interval="10000">
			      		<img src="{{ asset('img/background.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
			    	<div class="carousel-item" data-interval="2000">
			     		<img src="{{ asset('img/coffee.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
			    	<div class="carousel-item">
			     		<img src="{{ asset('img/mainbackground.jpg') }}" class="d-block w-100" alt="..." width=100% height="350px">
			    	</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="sr-only">Next</span>
				</a>
			</div>
 		</div>
	</div>
</div>
<br>
 <!-- context -->
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-3">
			<span class="badge badge-primary">Primary</span>
			<span class="badge badge-secondary">Secondary</span>
			<span class="badge badge-success">Success</span>
			<span class="badge badge-danger">Danger</span>
			<span class="badge badge-warning">Warning</span>
			<span class="badge badge-info">Info</span>
			<span class="badge badge-light">Light</span>
			<span class="badge badge-dark">Dark</span>
			<span class="badge badge-secondary">Working</span>
		</div>
	</div>	
</div>
<br>
 <!-- card -->
 <div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Secondary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Success card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
				<div class="card-header">Header</div>
				<div class="card-body">
					<h5 class="card-title">Danger card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop