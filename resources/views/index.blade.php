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
							<th width="10px">R</th>
							<th width="70px" class="hidden-xs" onclick= "setAllSameHeight()">Flag</th>
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
							<td class="hidden-xs"><img src="img/CHN.png" width="25px">CHN</td>
							<td><img src="img/user1.png" height="20px"><img src="img/prof.png" height="15px"><a href="student/1">User 1</a></td>
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
							<td class="hidden-xs"><img src="img/SGP.png" width="25px">SGP</td>
							<td><img src="img/user2.png" height="20px"><img src="img/prof.png" height="15px"><a href="student/2">User 2</a></td>
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
							<td class="hidden-xs"><img src="img/IDN.png" width="25px">IDN</td>
							<td><img src="img/user3.png" height="20px"><img src="img/prof.png" height="15px"><a href="student/3">User 3</a></td>
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
							<td class="hidden-xs"><img src="img/VNM.png" width="25px">VNM</td>
							<td><img src="img/user4.png" height="20px"><img src="img/prof.png" height="15px">User 4</td>
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
							<td class="hidden-xs"><img src="img/MYS.png" width="25px">MYS</td>
							<td><img src="img/user5.png" height="20px"><img src="img/prof.png" height="15px">User 5</td>
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
							<td class="hidden-xs"><img src="img/CHN.png" width="25px">CHN</td>
							<td><img src="img/user6.png" height="20px"><img src="img/prof.png" height="15px">User 6</td>
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
							<td class="hidden-xs"><img src="img/CHN.png" width="25px">CHN</td>
							<td><img src="img/user7.png" height="20px"><img src="img/prof.png" height="15px">User 7</td>
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