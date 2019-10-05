@extends('template.template1')

@section('title', 'Edit Career')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>UPDATE CAREER</h2>
			<form action="/careers/{{$career->id}}" method="post" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="_method" value="PUT">
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Name</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Career" name="name" value="{{$career->name}}">
			  	</div>
			  	<img class="img-fluid" src="img/{{$career->logo}}" style="height: 50px;">
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Logo</label>
			    	<input type="file" class="form-control" id="exampleFormControlInput1" placeholder="" name="logo">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Career number</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Career number" name="number"  value="{{$career->number}}">
			  	</div>
			  	<button type="submit" class="btn btn-warning rounded-0">Save</button>
			</form>			
		</div>
	</div>
</div>
@endsection