@extends('template')
@section('title')
    {{ $name }} - Student Detail
@endsection
@section('main')
     <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-xs-12" >
            <header>
              <h3><strong>Delano Edwards</strong> in CS3233 S1 AY 2020/21</h3>
              <p><a href="#">Kattis account <img src="../img/kattis.png" alt="Kattis" width="20" height="15"></a></p>
              <p><strong>SPE</strong>(ed) component: <strong>{{ $mc }} + {{ $tc }} = {{ $spe }}</strong><br>
              <strong>DIL</strong>(igence) component: <strong>{{ $hw }} + {{ $bs }} + {{ $ks }} + {{ $ac }} = {{ $dil }}</strong><br>
              <strong>Sum = SPE + DIL = {{ $spe }} + {{ $dil }} = {{ $sum }}</strong></p>
            </header>
          </div>
          <div class="col-md-6 hidden-xs hidden-sm">
            <img class="pull-right" id="photo" src="../img/locked.png" alt="Photo of {{ $name }}" width="96" height="150">
            <img class="pull-right" id="flag" src="../img/CHN.png" alt="China Flag" width="100">
          </div>
        </div>
    </div>
@endsection