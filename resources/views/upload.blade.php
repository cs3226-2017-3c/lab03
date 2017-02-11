@extends('template')
@section('title')
{{ $student->name }} - Student Detail
@endsection
@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" >
        <h2>Upload image for <strong>{{ $student->name }}</strong></h2>
        {!! Form::open(['url' => 'StudentController@upload_image', 'files' => 'true']) !!}
        <div class="form-group">
          {!! Form::file('image') !!}
        </div>
        <div class="form-group"> 
          {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-lg']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  @endsection
