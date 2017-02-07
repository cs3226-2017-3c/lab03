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
  				<li><a href="/">Home</a></li>
  				<li><a href="/help">Help</a></li>
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div><!--/.container-fluid -->
  </nav>
  <script type="text/javascript">
  $(document).ready(function() {
	// get current URL path and assign 'active' class
	var pathname = window.location.pathname;
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
})

  </script>