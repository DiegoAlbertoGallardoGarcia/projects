<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		<!-- -------- NAVBAR -------- -->
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
				  	<a class="navbar-brand" href="{{url('/library')}}">Library</a>
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>

				  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
				    	<ul class="navbar-nav mr-auto">
				      		<!--<li class="nav-item dropdown">
				        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          			Categories
				        		</a>
				        		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          			<a class="dropdown-item" href="/categories">Category</a>
				          			<a class="dropdown-item" href="/categories/create">New Category</a>
				          			<div class="dropdown-divider"></div>
				          			<a class="dropdown-item" href="#">Something else here</a>
				        		</div>
				      		</li>-->
				      		<li class="nav-item">
				        		<a class="nav-link" href="{{url('/categories')}}" tabindex="-1" aria-disabled="false">Categories</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="{{url('/careers')}}" tabindex="-1" aria-disabled="false">Careers</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="{{url('/books')}}" tabindex="-1" aria-disabled="false">Books</a>
				      		</li>
				      		<li class="nav-item">
				        		<a class="nav-link" href="{{url('/roles')}}" tabindex="-1" aria-disabled="false">Roles</a>
				      		</li>
				    	</ul>
				    	<form class="form-inline my-2 my-lg-0">
				      		<input class="form-control mr-sm-2 rounded-0" type="search" placeholder="Search" aria-label="Search">
				      		<button class="btn btn-outline-warning my-2 my-sm-0 rounded-0" type="submit">Search</button>
				    	</form>
				  	</div>
				</nav>
			</div>
		</div>
		@yield('content')
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-dark bg-dark">
  					<a class="navbar-brand" href="#">Navbar</a>
				</nav>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>