@if (Session::has('success') )	

	<div class="alert alert-success fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4><strong>Success:</strong></h4>
		 <p> {{ Session::get('success') }} </p> 
	</div>

@endif

<!-- This condition checks for error -->
@if (count($errors) > 0 )

	<div class="alert alert-danger fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h4><strong>Oh snap!</strong> </h4>
		<ul>
			@foreach ($errors->all() as $error)
				<li> {{$error}} </li>

			@endforeach
		</ul>

	</div>

@endif