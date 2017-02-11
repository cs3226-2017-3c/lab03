@extends('template')
@section('title')
{{ $student->name }} - Edit
@endsection
@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" >
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <h2>Edit Info for <strong>{{ $student->name }}</strong></h2>
      </div>
    </div>
  </div>
  @endsection
