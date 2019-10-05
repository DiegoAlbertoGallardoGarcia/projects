@extends('template.template1')

@section('title', 'New Career')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>New Career</h2>
			<form action="/careers" method="post" enctype="multipart/form-data">
				@csrf
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Name</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Career" name="name">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Logo</label>
			    	<input type="file" class="form-control" id="exampleFormControlInput1" placeholder="" name="logo">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Career number</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Career number" name="number">
			  	</div>
			  	<button type="submit" class="btn btn-warning rounded-0">Save</button>
			</form>			
		</div>
	</div>
</div>
@endsection