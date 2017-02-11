@extends('template') <!-- use template from previous slide -->
@section('title')
Home
@endsection
@section('main') <!-- define a section called main -->

<?php

// Determining value of first, second, third and last

	$sums = [];
	$i = 0;
	foreach($student as $s) {
		$sum = $s->mc+$s->tc+$s->hw+$s->bs+$s->ks+$s->ac;
		$sums[$i] = $sum;
		$i++;
	}
	
	arsort($sums);
	$last = $sums[count($sums)-1];
	$first = $sums[0];
	
	$i = 0;
	foreach($sums as $sum){

		if($sums[$i] == $first){
			unset($sums[$i]);
		}
	$i++;
	}

	$sums = array_values($sums);

	$second = $sums[0];
	
	$i = 0;
	foreach($sums as $sum){

		if($sums[$i] == $second){
			unset($sums[$i]);
		}
	$i++;
	}

	$sums = array_values($sums);

	$third = $sums[0];

//Determining highest value for each category
	$noofcategories = 8;
	$categories = ["mc", "tc", "mctc", "hw", "bs", "ks", "ac", "$s->hw+$s->bs+$s->ks+$s->ac"];
	$highest = [0,0,0,0,0,0,0,0];
	for($i=0;$i<$noofcategories;$i++){
		foreach ($student as $s) {
			switch ($i{
				case "0":
					if($s->mc > $highest[$i]){
						$highest[$i] = $s->mc;
					}
				case "1":
					if($s->tc > $highest[$i]){
						$highest[$i] = $s->tc;
					}
				case "2":
					if($s->tc+$s->mc > $highest[$i]){
						$highest[$i] = $s->tc+$s->mc;
					}
				case "3":
					if($s->hw > $highest[$i]){
						$highest[$i] = $s->hw;
					}		
				case "4":
					if($s->bs > $highest[$i]){
						$highest[$i] = $s->bs;
					}			
				case "5":
					if($s->ks > $highest[$i]){
						$highest[$i] = $s->ks;
					}		
				case "6":
					if($s->ac > $highest[$i]){
						$highest[$i] = $s->ac;
					}		
				case "7":
					if($s->hw+$s->bs+$s->ks+$s->ac > $highest[$i]){
						$highest[$i] = $s->hw+$s->bs+$s->ks+$s->ac;
					}		
					
			}


		}
	}
	var_dump($highest);

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
					<?php $sum = $s->mc+$s->tc+$s->hw+$s->bs+$s->ks+$s->ac; ?>

					@if($sum == $first)
					<tr class = "first">
					@elseif($sum == $second)
					<tr class = "second">					
					@elseif($sum == $third)
					<tr class = "third">					
					@elseif($sum == $last)
					<tr class = "last">					
					@endif

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
