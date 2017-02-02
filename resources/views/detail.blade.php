@extends('template')
@yield('title')
    Student {{ $id }}
@stop
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12" >
                <p>This page will show the details of student with this {{ $id }}.</p>
            </div>
        </div>
    </div>
@stop