
@extends('template')
@section('header')
<script type="text/javascript" src="js/Chart.js"></script>
@endsection
@section('title')
{{ $student->name }} - Student Detail
@endsection
@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-xs-12" >
      <header>
        <h3><strong>{{ $student->name }}</strong> <a href="#"><img src="../img/kattis.png" alt="Kattis" width="20" height="15"></a> in CS3233 S1 AY 2020/21</h3>
        <p><strong>SPE</strong>(ed) component: <strong>{{ $student->mc }} + {{ $student->tc }} = {{ $student->mc+$student->tc }}</strong><br>
          <strong>DIL</strong>(igence) component: <strong>{{ $student->hw }} + {{ $student->bs }} + {{ $student->ks }} + {{ $student->ac }} = {{ $student->hw+$student->bs+$student->ks+$student->ac }}</strong><br>
          <strong>Sum = SPE + DIL = {{ $student->mc+$student->tc }} + {{ $student->hw+$student->bs+$student->ks+$student->ac }} = {{ $student->mc+$student->tc+$student->hw+$student->bs+$student->ks+$student->ac }}</strong></p>
        </header>
      </div>
      <div class="col-md-4 hidden-xs hidden-sm">
        <img class="pull-right" id="photo" src="@if($student->avatar) {{Storage::url($student->avatar)}} @else ../img/locked.png @endif" alt="Photo of {{ $student->name }}" width="100" height="100">
        <img class="pull-right" id="flag" src="../flags/4x3/{{strtolower($student->country)}}.svg" alt="{{$student->country}} Flag" width="100">
      </div>
    </div>
  </div>
  <canvas id="myChart" width="400" height="400"></canvas>
  @endsection
@section('footer')
  <script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
      type: 'radar',
      data: {
          labels: ["MC", "TC", "HW", "Bs", "KS", "Ac"],
          datasets: [{
              label: '# of Votes',
              data: [$student->mc,$student->tc,$student->hw,$student->bs,$student->ks,$student->ac],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
  </script>
@endsection