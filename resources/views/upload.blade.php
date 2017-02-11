@extends('template')
@section('title')
{{ $student->name }} - Student Detail
@endsection
@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" >
      <header>
        {!! Form::open(['url' => 'student/upload']) !!}
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
        <div class="form-group"> {{-- Don't forget to create a submit button --}}
          {!! Form::submit('Submit', ['class' => 'form-control']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  @endsection
