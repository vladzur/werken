@extends('../auth')

@section('content')
	<div class="container">
		<div class="row">
			{!! Form::open(['url' => 'auth/register']) !!}
			{!! csrf_field() !!}

			<div class="form-group">
				{!! Form::label('name', 'name') !!}
				{!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email', 'e-mail') !!}
				{!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('password', 'password') !!}
				{!! Form::password('password', ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('password_confirmation', 'confirm password') !!}
				{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
			</div>
			{!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
			{!! Form::close() !!}
		</div>
	</div>
@endsection