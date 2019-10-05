@extends('template.template1')

@section('title', 'Edit book')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Edit Book</h2>
			<form action="/books/{{$book->id}}" method="post">
				@csrf
				<input type="hidden" name="_method" value="PUT">
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Title</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title" value="{{$book->title}}">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">ISBN</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ISBN" name="isbn" value="{{$book->isbn}}">
			  	</div>
			  	<div class="form-group">
			    	<label for="exampleFormControlInput1">Author</label>
			    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Author" name="author" value="{{$book->author}}">
			  	</div>
			  	<div class="form-group">
				    <label for="exampleFormControlSelect1">Career</label>
				    <select class="form-control" id="career" name='career_id'>
				      	<option value="0">Select a career</option>
				      	@foreach($careers as $career)
				      		<option value="{{$career->id}}" {{ $selectedCareer == $career->id ? 'selected="selected"' : '' }}> 
				      			{{$career->name}}
				      		</option>
				      	@endforeach
				    </select>
				</div>
				<div class="form-group">
				    <label for="exampleFormControlSelect2">Category</label>
				    <select class="form-control" id="category" name='category_id'>
				      	<option value="0">Select a category</option>
				      	@foreach($categories as $category)
				      		<option value="{{$category->id}}" {{ $selectedCategory == $category->id ? 'selected="selected"' : '' }}>
				      			{{$category->name}}
				      		</option>
				      	@endforeach
				    </select>
				</div>
			  	<button type="submit" class="btn btn-warning rounded-0">Save</button>
			</form>	
		</div>
	</div>
</div>

@endsection