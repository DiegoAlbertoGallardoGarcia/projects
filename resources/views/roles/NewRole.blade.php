@extends('template.template1')

@section('title', 'Roles')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>New Role</h2>
			<form method="post" action="/roles">
				@csrf
			  	<div class="form-group">
			    	<label for="exampleInputEmail1">Name of the role</label>
			    	<input type="text" class="form-control ronded-0" id="rol" name="name" id="role">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

@endsection