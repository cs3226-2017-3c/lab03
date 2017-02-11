@extends('template') <!-- use template from previous slide -->
@section('title')
Home
@endsection
@section('main') <!-- define a section called main -->

<?php
	$sums = [];
	$i = 0;
	foreach($student as $s) {
		$sum = $s->mc+$s->tc+$s->hw+$s->bs+$s->ks+$s->ac;
		$sums[$i] = $sum;
		$i = $i+1;
	}
	arsort($sums);
	echo count($sums);
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<table id="myTable" class="table table-condensed table-hover tablesorter">
				<thead>
					<tr>
						<th class="rank">R</th>
						<th class="hidden-xs flag" onclick= "setAllSameHeight()">Flag</th>
						<th onclick="setAllSameHeight()">Name</th>
						<th class="hidden-xs sortInitialOrder-desc" onclick= "setAllSameHeight()">MC</th>
						<th class="hidden-xs sortInitialOrder-desc" onclick= "setAllSameHeight()">TC</th>
						<th class="sortInitialOrder-desc" onclick="setAllSameHeight()">SPE</th>
						<th class="hidden-xs sortInitialOrder-desc" onclick= "setAllSameHeight()">HW</th>
						<th class="hidden-xs sortInitialOrder-desc" onclick= "setAllSameHeight()">Bs</th>
						<th class="hidden-xs sortInitialOrder-desc" onclick= "setAllSameHeight()">KS</th>
						<th class="hidden-xs sortInitialOrder-desc" onclick= "setAllSameHeight()">Ac</th>
						<th class="sortInitialOrder-desc"	onclick="setAllSameHeight()">DIL</th>
						<th onclick="setAllDifferentHeight()">Sum</th>
					</tr>
				</thead>
				<tbody>
					@foreach($student as $s)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td class="hidden-xs"><span class="flag-icon flag-icon-{{strtolower($s->country)}}"></span>{{$s->country}}</td>
						<td><img class="hidden-xs" alt="" src="img/prof.png" height="15"><a href="student/{{$s->id}}">{{$s->name}}</a></td>
						<td class="hidden-xs">{{$s->mc}}</td>
						<td class="hidden-xs">{{$s->tc}}</td>
						<td>{{$s->mc+$s->tc}}</td>
						<td class="hidden-xs">{{$s->hw}}</td>
						<td class="hidden-xs">{{$s->bs}}</td>
						<td class="hidden-xs">{{$s->ks}}</td>
						<td class="hidden-xs">{{$s->ac}}</td>
						<td>{{$s->hw+$s->bs+$s->ks+$s->ac}}</td>
						<td class ="sum">{{$s->mc+$s->tc+$s->hw+$s->bs+$s->ks+$s->ac}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
@section('footer')
<script type="text/javascript" src="js/highlight.js"></script>
@endsection
