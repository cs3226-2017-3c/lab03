@extends('template')
@section('title')
{{ $student->name }} - Edit
@endsection
@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" >
		<h2>Edit Info for <strong>{{ $student->name }}</strong></h2>
		{!! Form::open() !!} {{-- Blade shortcut for creating HTML5 form --}}
		<div class="form-group"> {{-- Group related form components together --}}
			{!! Form::label('nickname', 'Nick name:', ['class' => 'control-label']) !!}
			{!! Form::text('nickname', '{{ $student->nickname }}', ['class' => 'form-control']) !!}
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
			{!! Form::label('mc', 'Mini contest scores:', ['class' => 'control-label']) !!}
			{!! Form::text('mc', '', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('tc', 'Team contest scores:', ['class' => 'control-label']) !!}
			{!! Form::text('tc', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('hw', 'Homework scores:', ['class' => 'control-label']) !!}
			{!! Form::text('hw', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('bs', 'Problem B scores:', ['class' => 'control-label']) !!}
			{!! Form::text('bs', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ks', 'Kattis set scores:', ['class' => 'control-label']) !!}
			{!! Form::text('ks', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('ac', 'Achievement scores:', ['class' => 'control-label']) !!}
			{!! Form::text('ac', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sum', 'Sum of scores:', ['class' => 'control-label']) !!}
			{!! Form::text('sum', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('comment', 'Specific comments:', ['class' => 'control-label']) !!}
			{!! Form::text('comment', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group"> {{-- Don't forget to create a submit button --}}
			{!! Form::submit('Update', ['class' => 'form-control']) !!}
		</div>
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        
      </div>
    </div>
  </div>
  @endsection
