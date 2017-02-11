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
  				<li id="home" {{ Request::path() == "/" ? 'class="active"' : '' }}"><a href="/">Home</a></li>
  				<li id="help" {{ Request::is('help') ? 'class="active"' : '' }}><a href="/help">Help</a></li>
          {{ Request::is('student/create') ? '<li id="Create Student Mode" class="active"><a href="#">Create Student Mode</a></li>' : '' }}
          {{ Request::is('*/edit') ? '<li id="Edit Mode" class="active"><a href="#">Edit Mode</a></li>' : '' }}
          {{ Request::is('student/*') ? '<li id="Detail Mode" class="active"><a href="#">Detail Mode</a></li>' : '' }}
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div><!--/.container-fluid -->
  </nav>
