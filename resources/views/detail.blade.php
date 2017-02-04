@extends('template')
@section('title')
    {{ $student->name }} - Student Detail
@endsection
@section('main')
     <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xs-12" >
            <header>
              <h3><strong>{{ $student->name }}</strong> <a href="#"><img src="../img/kattis.png" alt="Kattis" width="20" height="15"></a> in CS3233 S1 AY 2020/21</h3>
              <p><strong>SPE</strong>(ed) component: <strong>{{ $student->mc }} + {{ $student->tc }} = {{ $student->mc+$student->tc }}</strong><br>
              <strong>DIL</strong>(igence) component: <strong>{{ $student->hw }} + {{ $student->bs }} + {{ $student->ks }} + {{ $student->ac }} = {{ $student->hw+$student->bs+$student->ks+$student->ac }}</strong><br>
              <strong>Sum = SPE + DIL = {{ $student->mc+$student->tc }} + {{ $student->hw+$student->bs+$student->ks+$student->ac }} = {{ $student->mc+$student->tc+$student->hw+$student->bs+$student->ks+$student->ac }}</strong></p>
            </header>
          </div>
          <div class="col-md-6 hidden-xs hidden-sm">
            <img class="pull-right" id="photo" src="../img/locked.png" alt="Photo of {{ $student->name }}" width="96" height="150">
            <img class="pull-right" id="flag" src="../img/CHN.png" alt="China Flag" width="100">
          </div>
        </div>
    </div>
@endsection