@extends('template')
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
        <canvas id="myChart" width="350" height="350"></canvas>
      </div>
    </div>
  </div>
  @endsection
  @section('footer')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'radar',
      data: {
        labels: ["MC", "TC", "HW", "Bs", "KS", "Ac"],
        datasets: 
        [
          {
            label: "{{$student->name}}",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderColor: "rgba(179,181,198,1)",
            pointBackgroundColor: "rgba(179,181,198,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(179,181,198,1)",
            data: [{{$student->mc}},{{$student->tc}},{{$student->hw}},{{$student->bs}},{{$student->ks}},{{$student->ac}}],
          },
           {
            label: "[Leader] {{$leader->name}}",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [{{$leader->mc}},{{$leader->tc}},{{$leader->hw}},{{$leader->bs}},{{$leader->ks}},{{$leader->ac}}],
          },         
        ],
      },
      options: {
        scale: {
          ticks: {
            min: 0,
            max: 9,
          }
        }
      }
    });
  </script>
  @endsection