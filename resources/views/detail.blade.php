@extends('template')
@section('title')
{{ $student->name }} - Student Detail
@endsection
@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-xs-12" >
      <h3><strong>{{ $student->name }}</strong> <a href="#"><img src="../img/kattis.png" alt="Kattis" width="20" height="15"></a> in CS3233 S1 AY 2020/21</h3>
      <p><strong>SPE</strong>(ed) component: <strong>{{ $student->mc }} + {{ $student->tc }} = {{ $student->mc+$student->tc }}</strong><br>
        <strong>DIL</strong>(igence) component: <strong>{{ $student->hw }} + {{ $student->bs }} + {{ $student->ks }} + {{ $student->ac }} = {{ $student->hw+$student->bs+$student->ks+$student->ac }}</strong><br>
        <strong>Sum = SPE + DIL = {{ $student->mc+$student->tc }} + {{ $student->hw+$student->bs+$student->ks+$student->ac }} = {{ $student->mc+$student->tc+$student->hw+$student->bs+$student->ks+$student->ac }}</strong></p>
    </div>
    <div class="col-md-4 hidden-xs hidden-sm">
      <img class="pull-right" id="photo" src="@if($student->avatar) {{Storage::url($student->avatar)}} @else ../img/locked.png @endif" alt="Photo of {{ $student->name }}" width="100" height="100">
      <img class="pull-right" id="flag" src="../flags/4x3/{{strtolower($student->country)}}.svg" alt="{{$student->country}} Flag" width="100">
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-xs-12" >
      <p>Detailed scores:</p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Component</th>
            <th>Sum</th>
            <th class="hidden-xs">01</th>
            <th class="hidden-xs">02</th>
            <th class="hidden-xs">03</th>
            <th class="hidden-xs">04</th>
            <th class="hidden-xs">05</th>
            <th class="hidden-xs">06</th>
            <th class="hidden-xs">07</th>
            <th class="hidden-xs">08</th>
            <th class="hidden-xs">09</th>
            <th class="hidden-xs">10</th>
            <th class="hidden-xs">11</th>
            <th class="hidden-xs">12</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mini Contests</td>
            <td>{{$student->mc}}</td>
            @foreach($student->mc_i as $mc)
            <td class="hidden-xs">{{$mc}}</td>
            @endforeach
            @for($i = 0; $i < 12 - count($student->mc_i); $i++)
            <td class="hidden-xs"></td>
            @endfor
          </tr>
          <tr>
            <td>Team Contests</td>
            <td>{{$student->tc}}</td>
            @foreach($student->tc_i as $tc)
            <td class="hidden-xs">{{$tc}}</td>
            @endforeach
            @for($i = 0; $i < 12 - count($student->tc_i); $i++)
            <td class="hidden-xs"></td>
            @endfor
          </tr>
          <tr>
            <td>Homework</td>
            <td>{{$student->hw}}</td>
            @foreach($student->hw_i as $hw)
            <td class="hidden-xs">{{$hw}}</td>
            @endforeach
            @for($i = 0; $i < 12 - count($student->hw_i); $i++)
            <td class="hidden-xs"></td>
            @endfor
          </tr>
          <tr>
            <td>Problem Bs</td>
            <td>{{$student->bs}}</td>
            @foreach($student->bs_i as $bs)
            <td class="hidden-xs">{{$bs}}</td>
            @endforeach
            @for($i = 0; $i < 12 - count($student->bs_i); $i++)
            <td class="hidden-xs"></td>
            @endfor
          </tr>
          <tr>
            <td>Kattis Sets</td>
            <td>{{$student->ks}}</td>
            @foreach($student->ks_i as $ks)
            <td class="hidden-xs">{{$ks}}</td>
            @endforeach
            @for($i = 0; $i < 12 - count($student->ks_i); $i++)
            <td class="hidden-xs"></td>
            @endfor
          </tr>
          <tr>
            <td>Achievements</td>
            <td>{{$student->ac}}</td>
            @foreach($student->ac_i as $ac)
            <td class="hidden-xs">{{$ac}}</td>
            @endforeach
            @for($i = 0; $i < 12 - count($student->ac_i); $i++)
            <td class="hidden-xs"></td>
            @endfor
          </tr>
        </tbody>
      </table>
      <p>Specific (public) comments about this student: <strong>{{$student->comment}}</strong></p>
    </div>
    <div class="col-md-4 hidden-xs hidden-sm">
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
            data: [{{$student->mc/36}},{{$student->tc/24}},{{$student->hw/15}},{{$student->bs/9}},{{$student->ks/12}},{{$student->ac/17}}],
          },
           {
            label: "[Leader] {{$leader->name}}",
            backgroundColor: "rgba(255,99,132,0.2)",
            borderColor: "rgba(255,99,132,1)",
            pointBackgroundColor: "rgba(255,99,132,1)",
            pointBorderColor: "#fff",
            pointHoverBackgroundColor: "#fff",
            pointHoverBorderColor: "rgba(255,99,132,1)",
            data: [{{$leader->mc/36}},{{$leader->tc/24}},{{$leader->hw/15}},{{$leader->bs/9}},{{$leader->ks/12}},{{$leader->ac/17}}],
          },         
        ],
      },
      options: {
        scale: {
          ticks: {
            min: 0,
            max: 1,
          }
        }
      }
    });
  </script>
  @endsection