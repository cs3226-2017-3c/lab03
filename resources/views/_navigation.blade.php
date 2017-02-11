  <!-- Static navbar -->
  <nav class="navbar navbar-default">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-brand" href="/">CS3233 Ranklist 2020</a>
  		</div>
  		<div id="navbar" class="navbar-collapse collapse">
  			<ul class="nav navbar-nav">
  				<li id="home" @if(Request::path()=="/")class="active"@endif}}><a href="/">Home</a></li>
  				<li id="help" @if(Request::is('help'))class="active"@endif}}><a href="/help">Help</a></li>
          @if(Request::is('student/create'))<li id="Create Student Mode" class="active"><a href="#">Create Student Mode</a></li>
          @elseif(Request::is('*/edit'))<li id="Edit Mode" class="active"><a href="#">Edit Mode</a></li>
          @elseif(Request::is('*/upload'))<li id="Upload Mode" class="active"><a href="#">Upload Mode</a></li>
          @elseif(Request::is('student/*'))<li id="Detail Mode" class="active"><a href="#">Detail Mode</a></li>@else@endif
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div><!--/.container-fluid -->
  </nav>
