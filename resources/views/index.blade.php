@extends('template') <!-- use template from previous slide -->
@section('title')
    Home
@endsection
@section('main') <!-- define a section called main -->
	    <div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<table id="myTable" class="table table-condensed table-hover tablesorter">
					<thead>
						<tr>
							<th class="rank">R</th>
							<th class="hidden-xs flag" onclick= "setAllSameHeight()">Flag</th>
							<th onclick= "setAllSameHeight()">Name</th>
							<th class="hidden-xs hidden-sm" onclick= "setAllSameHeight()">MC</th>
							<th class="hidden-xs hidden-sm" onclick= "setAllSameHeight()">TC</th>
							<th class="hidden-xs" onclick= "setAllSameHeight()">SPE</th>
							<th class="hidden-xs hidden-sm" onclick= "setAllSameHeight()">HW</th>
							<th class="hidden-xs hidden-sm" onclick= "setAllSameHeight()">Bs</th>
							<th class="hidden-xs hidden-sm" onclick= "setAllSameHeight()">KS</th>
							<th class="hidden-xs hidden-sm" onclick= "setAllSameHeight()">Ac</th>
							<th class="hidden-xs" onclick= "setAllSameHeight()">DIL</th>
							<th>Sum</th>
						</tr>
					</thead>
					<tbody>
					<?php $count=1 ?>
					@foreach($student as $s)
						<tr>
							<td><?php echo $count++ ?></td>
							<td class="hidden-xs"><img alt="" src="img/CHN.png" width="25">CHN</td>
							<td><img alt="" src="img/prof.png" height="15"><a href="student/{{$s->id}}">{{$s->name}}</a></td>
							<td class="hidden-xs hidden-sm">{{$s->mc}}</td>
							<td class="hidden-xs hidden-sm">{{$s->tc}}</td>
							<td class="hidden-xs">{{$s->mc+$s->tc}}</td>
							<td class="hidden-xs hidden-sm">{{$s->hw}}</td>
							<td class="hidden-xs hidden-sm">{{$s->bs}}</td>
							<td class="hidden-xs hidden-sm">{{$s->ks}}</td>
							<td class="hidden-xs hidden-sm">{{$s->ac}}</td>
							<td class="hidden-xs">{{$s->hw+$s->bs+$s->ks+$s->ac}}</td>
							<td>{{$s->mc+$s->tc+$s->hw+$s->bs+$s->ks+$s->ac}}</td>
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