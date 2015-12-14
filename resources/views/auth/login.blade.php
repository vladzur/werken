@extends('../auth')
@section('content')
	@if (session('message'))
		<div class="alert alert-danger">
			{{ session('message') }}
		</div>
	@endif
	<form class="form-signin" action="{!! url('auth/login') !!}" method="post">
		{!! csrf_field() !!}
		<h2 class="form-signin-heading">Acceder</h2>
		<label for="inputEmail" class="sr-only">Dirección de correo</label>
		<input type="email" name="email" value="{{ old('email') }}" id="inputEmail" class="form-control"
			   placeholder="Dirección de correo" required autofocus>
		<label for="inputPassword" class="sr-only">Contraseña</label>
		<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña"
			   required>

		<div class="checkbox">
			<label>
				<input type="checkbox" name="remember"> Recordarme
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
	</form>
@endsection