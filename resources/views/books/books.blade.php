@extends('template.template1')

@section('title', 'Books')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Books list</h2>
			<table class="table table-hover">
				<tr>
					<td>#</td>
					<td>TITLE</td>
					<td>ISBN</td>
					<td>AUTHOR</td>
					<td>CATEGORY</td>
					<td>CAREER</td>
					<td>EDIT</td>
					<td>DELETE</td>
				</tr>
				@foreach($books as $book)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$book->title}}</td>
						<td>{{$book->isbn}}</td>
						<td>{{$book->author}}</td>
						<td>{{$book->category->name}}</td>
						<td>{{$book->career->name}}</td>
						<td><a href="/books/{{$book->id}}/edit" class="btn btn-warning rounded-0" role='button'>Edit</a></td>
						<td>
							<form method="post" action="/books/{{$book->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger rounded-0">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</table>
			<br>
			<a href="{{url('books/create')}}" role='button' class="btn btn-primary btn-lg rounded-0">ADD NEW BOOK</a>
			<br><br>
		</div>
	</div>
</div>

@endsection