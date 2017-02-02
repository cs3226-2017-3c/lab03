@extends('template') <!-- use template from previous slide -->
@section('title')
    Home
@endsection
@section('main') <!-- define a section called main -->
	    <div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<table id="test" class="table table-condensed table-hover tablesorter">
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
						<tr>
							<td id="hej">1</td>
							<td class="hidden-xs"><img alt="" src="img/CHN.png" width="25">CHN</td>
							<td><img alt="" src="img/user1.png" height="20"><img alt="" src="img/prof.png" height="15"><a href="student/1">User 1</a></td>
							<td class="hidden-xs hidden-sm">3</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">3</td>
							<td class="hidden-xs hidden-sm">1.5</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">2</td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs">8.5</td>
							<td>11.5</td>
						</tr>
						<tr>
							<td>2</td>
							<td class="hidden-xs"><img alt="" src="img/SGP.png" width="25">SGP</td>
							<td><img alt="" src="img/user2.png" height="20"><img alt="" src="img/prof.png" height="15"><a href="student/2">User 2</a></td>
							<td class="hidden-xs hidden-sm">3</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">3</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">2</td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs">8</td>
							<td>11</td>
						</tr>
						<tr>
							<td>3</td>
							<td class="hidden-xs"><img alt="" src="img/IDN.png" width="25">IDN</td>
							<td><img alt="" src="img/user3.png" height="20"><img alt="" src="img/prof.png" height="15"><a href="student/3">User 3</a></td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">4</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs">7</td>
							<td>11</td>
						</tr>
						<tr>
							<td>4</td>
							<td class="hidden-xs"><img alt="" src="img/VNM.png" width="25">VNM</td>
							<td><img alt="" src="img/user4.png" height="20"><img alt="" src="img/prof.png" height="15">User 4</td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">4</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">3</td>
							<td class="hidden-xs">6</td>
							<td>10</td>
						</tr>
						<tr>
							<td>5</td>
							<td class="hidden-xs"><img alt="" src="img/MYS.png" width="25">MYS</td>
							<td><img alt="" src="img/user5.png" height="20"><img alt="" src="img/prof.png" height="15">User 5</td>
							<td class="hidden-xs hidden-sm">3.5</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">3.5</td>
							<td class="hidden-xs hidden-sm">1.5</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">2</td>
							<td class="hidden-xs hidden-sm">2</td>
							<td class="hidden-xs">6.5</td>
							<td>10</td>
						</tr>
						<tr>
							<td>6</td>
							<td class="hidden-xs"><img alt="" src="img/CHN.png" width="25">CHN</td>
							<td><img alt="" src="img/user6.png" height="20"><img alt="" src="img/prof.png" height="15">User 6</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">1</td>
							<td class="hidden-xs hidden-sm">1.5</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">2</td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs">8.5</td>
							<td>9.5</td>
						</tr>
						<tr>
							<td>7</td>
							<td class="hidden-xs"><img alt="" src="img/CHN.png" width="25">CHN</td>
							<td><img alt="" src="img/user7.png" height="20"><img alt="" src="img/prof.png" height="15">User 7</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">0</td>
							<td class="hidden-xs">1</td>
							<td class="hidden-xs hidden-sm">1.5</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">1</td>
							<td class="hidden-xs hidden-sm">4</td>
							<td class="hidden-xs">7.5</td>
							<td>8.5</td>
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
@endsection
@section('footer')
    <script type="text/javascript" src="js/highlight.js"></script>
@endsection