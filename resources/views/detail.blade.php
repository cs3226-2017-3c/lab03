@extends('template')
@section('title')
    Student {{ $id }}
@endsection
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12" >
                <p>This page will show the details of student with this {{ $id }}.</p>
            </div>
        </div>
    </div>
@endsection