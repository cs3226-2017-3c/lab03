@extends('template')
@section('title')
Create Student
@endsection
@section('main')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			{!! Form::open() !!} {{-- Blade shortcut for creating HTML5 form --}}
			<div class="form-group"> {{-- Group related form components together --}}
				{!! Form::label('name', 'What is your name:', ['class' => 'control-label']) !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('mcq', 'What is your answer:', ['class' => 'control-label']) !!}
				{!! Form::radio('mcq', '9', false, ['class' => 'form-control']) !!}A.9
				{!! Form::radio('mcq', '10', false, ['class' => 'form-control']) !!}B.10
				{!! Form::radio('mcq', '11', false, ['class' => 'form-control']) !!}C.11
			</div>
			<div class="form-group">
			{!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['multiple' => true]) !!}
			</div>
			<div class="form-group"> {{-- Don't forget to create a submit button --}}
				{!! Form::submit('Submit', ['class' => 'form-control']) !!}
			</div>
			@if (count($errors) > 0) {{-- just list down all errors found --}}
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
