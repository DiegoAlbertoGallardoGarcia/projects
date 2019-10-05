@extends('template.template1')

@section('title', 'Library')

@section('content')
	<!-- SECOND ROW -->
	<div class="row">
		<div class="col">
			<div id="img-1">
				<div id="img-jb" class="jumbotron rounded-0">
				  	<h1 class="display-4">WELCOME TO OUR LIBRARY</h1>
				  	<a class="btn btn-warning btn-lg rounded-0" href="#" role="button">BUY</a>
				</div>
			</div>
		</div>
	</div>

	<!-- THIRD ROW -->
	<div class="row">
		<div class="col">
			<div id="txt-1">
				FREE DELIVERIES FOR ALL THE WORLD
			</div>
			<div id="txt-2">
				<h2>ALL YEAR</h2>
				<hr>
				The most interesting
			</div>
		</div>
	</div>

	<div class="row justify-content-md-center">
		<div class="col-2">
			<img class="img-fluid" src="img/book-1.jpg">
		</div>
		<div class="col-2">
			<img class="img-fluid" src="img/book-2.jpg">
		</div>
		<div class="col-2">
			<img class="img-fluid" src="img/book-3.jpg">
		</div>
	</div>
@endsection
