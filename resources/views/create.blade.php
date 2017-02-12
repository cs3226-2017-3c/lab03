@extends('template')
@section('title')
Create Student
@endsection
@section('main')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			@if (count($errors) > 0) {{-- just list down all errors found --}}
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			{!! Form::open() !!} {{-- Blade shortcut for creating HTML5 form --}}
			<div class="form-group"> {{-- Group related form components together --}}
				{!! Form::label('nickname', 'Nick name:', ['class' => 'control-label']) !!}
				{!! Form::text('nickname', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('fullname', 'Full name:', ['class' => 'control-label']) !!}
				{!! Form::text('fullname', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('kattisacct', 'Kattis account:', ['class' => 'control-label']) !!}
				{!! Form::text('kattisacct', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
			{!! Form::label('nationality', 'Nationality:', ['class' => 'control-label']) !!}
			{!! Form::text('nationality', null, ['class' => 'form-control']) !!}
       		</div>
       		<div class="form-group">
          		{!! app('captcha')->display(); !!}
			</div>
			<div class="form-group"> {{-- Don't forget to create a submit button --}}
				{!! Form::submit('Create', ['class' => 'btn btn-primary btn-lg']) !!}
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
