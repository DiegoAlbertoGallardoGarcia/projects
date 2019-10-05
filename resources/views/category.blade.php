@extends('template.template1')

@section('title', 'New Category')

@section('content')

	<h2>NEW CATEGORY</h2>
	<div class="row">
		<div class="col">
			<form>
			  	<div class="form-group">
			    	<label for="exampleInputEmail1">Name of the category</label>
			    	<input type="email" class="form-control ronded-0" id="exampleInputEmail1" name="category" id="category">
			  	</div>
			  	<button type="submit" class="btn btn-primary">Save</button>
			</form>
		</div>
	</div>

@endsection