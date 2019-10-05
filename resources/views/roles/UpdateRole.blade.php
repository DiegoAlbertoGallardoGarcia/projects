@extends('template.template1')

@section('title', 'Update role')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Edit Role</h2>
			<form method="post" action="/roles/{{$roles->id}}">
				@csrf
				<input type="hidden" name="_method" value="PUT">
			  	<div class="form-group">
			    	<label for="exampleInputEmail1">Name of the role</label>
			    	<input type="text" class="form-control ronded-0" name="name" value="{{$roles->name}}">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>
</div>

@endsection