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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@if(Request::is('student/create')) Create Student Mode @elseif(Request::is('student/*/edit')) Edit Mode @elseif(Request::is('student/*')) Detail Mode @else @endif <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Edit Mode</a></li>
              <li><a href="#">Upload Mode</a></li>
              <li><a href="#">Detail Mode</a></li>
            </ul>
          </li>
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div><!--/.container-fluid -->
  </nav>
