@extends('template.template1')

@section('title', 'New Category')

@section('content')

	<h2>UPDATE CATEGORY</h2>
	<div class="row">
		<div class="col">
			<br><br>
			<form method="post" action="/categories/{{$category->id}}">
				@csrf
			  	<div class="form-group">
			  		<input type="hidden" name="_method" value="PUT">
			    	<label for="exampleInputEmail1">Name of the category</label>
			    	<input type="text" class="form-control ronded-0" id="exampleInputEmail1" name="name" id="name" value="{{$category->name}}">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>

@endsection