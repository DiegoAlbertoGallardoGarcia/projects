@extends('template.template1')

@section('title', 'Show Category')

@section('content')
<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Categories</h2>
			<br>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Category</th>
					<th>Edit</th>
					<th></th>
				</tr>

				@foreach($categories as $category)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$category->name}}</td>
						<td><a href="/categories/{{$category->id}}/edit" class="btn btn-warning rounded-0" role='button'>Edit</a></td>
						<td>
							<form method="post" action="/categories/{{$category->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger rounded-0">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</table>
			<br>
			<a href="{{url('categories/create')}}" role='button' class="btn btn-primary btn-lg rounded-0">ADD NEW CATEGORY</a>
			<br><br>
		</div>
	</div>
</div>

@endsection