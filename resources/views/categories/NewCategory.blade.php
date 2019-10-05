@extends('template.template1')

@section('title', 'New Category')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>NEW CATEGORY</h2>
			<div class="row">
				<div class="col">
					<br><br>
					<form method="post" action="/categories">
						@csrf
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Name of the category</label>
					    	<input type="text" class="form-control ronded-0" id="exampleInputEmail1" name="name" id="name">
					  	</div>
					  	<button type="submit" class="btn btn-primary">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection