@extends('template.template1')

@section('title', 'Roles')

@section('content')

<div class="container">
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Roles list</h2>
			<table class="table table-hover">
				<tr>
					<td>#</td>
					<td>ROLE</td>
					<td>EDIT</td>
					<td>DELETE</td>
				</tr>
				@foreach($roles as $role)
					<tr>
						<td>{{$loop->index+1}}</td>
						<td>{{$role->name}}</td>
						<td><a href="/roles/{{$role->id}}/edit" class="btn btn-warning rounded-0" role='button'>Edit</a></td>
						<td>
							<form method="post" action="/roles/{{$role->id}}">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger rounded-0">Delete</button>
							</form>
						</td>
					</tr>
				@endforeach
			</table>
			<br>
			<a href="{{url('roles/create')}}" role='button' class="btn btn-primary btn-lg rounded-0">ADD NEW ROLE</a>
			<br><br>
		</div>
	</div>
</div>

@endsection