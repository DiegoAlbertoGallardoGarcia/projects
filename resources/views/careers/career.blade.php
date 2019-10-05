@extends('template.template1')

@section('title', 'Careers')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Careers list</h2>
			<table class="table table-hover">
				<tr>
					<th>#</th>
					<th>LOGO</th>
					<th>NAME</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
				@foreach($careers as $career)
					<tr>
						<td>{{$career->number}}</td>
						<td>
							<img class="img-career" src="img/{{$career->logo}}">
							<!--<img class="img-fluid" src="{{asset('img/'.$career->logo)}}">-->
						</td>
						<td>{{$career->name}}</td>
						<td><a href="/careers/{{$career->id}}/edit" class="btn btn-warning rounded-0" role='button'>Edit</a></td>
						<td>
							<form method="post" action="/careers/{{$career->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger rounded-0">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</table>
			<br>
			<a href="{{url('careers/create')}}" role='button' class="btn btn-primary btn-lg rounded-0">ADD NEW CAREER</a>
			<br><br>
		</div>
	</div>
</div>

@endsection