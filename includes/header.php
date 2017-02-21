<?php
echo '

<div class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
    <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://www.rit.edu/">
            <img src="/images/idbar-black.gif" id="rit-logo">
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://www.rit.edu/directories/">Directories</a></li>
          </ul>
        </div>
    </div>
	<!--WiC Header Content -->			
	<!-- Large and medium Screens-->
	<div class="row hidden-sm hidden-xs">
			<div class="col-md-4">
				<img class="logo pull-left" src="/images/WicHi_white.png">
			</div>
			<div class="col-md-8 header-right">
				<h1>Women in Computing at --RIT</h1>
			<!--	<div class="navbar pull-left wicmenu" role="navigation"> -->
					
				<div class="btn-group" role="group">
  					<button type="button" class="btn btn-default"><a href="/index.php">Home</a></button>
  					<button type="button" class="btn btn-default"><a href="/pages/who.php">Who We Are</a></button>
  					<button type="button" class="btn btn-default"><a href="/pages/what.php">What We Do</a></button>
  					<button type="button" class="btn btn-default"><a href="/pages/events.php">Events</a></button>
            <button type="button" class="btn btn-default"><a href="/pages/after-hours.php">After Hours</a></button>       
  					<button type="button" class="btn btn-default"><a href="/pages/contact.php">Contact Us</a></button>
					</div>
						
			<!--	</div> -->
			</div>
	</div>
	<!-- Small and extra small screens -->
	<div class="row hidden-lg hidden-md">
		<h6 class="text-center">Women in Computing at RIT</h6>
        <div class="navbar navbar-default navbar-inverse" role="navigation">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           		<span class="sr-only">Toggle navigation</span>
           		<span class="icon-bar"></span>
           		<span class="icon-bar"></span>
           		<span class="icon-bar"></span>
         	</button>	
        	<!-- Collect the nav links, forms, and other content for toggling -->
        	<div class="collapse navbar-collapse" id="collapse">
           	 	<ul class="nav navbar-nav">
               		<li><a href="/index.php">Home</a></li>
					<li><a href="/pages/who.php">Who We Are</a></li>
					<li><a href="/pages/what.php">What We Do</a></li>
					<li><a href="/pages/events.php">Events</a></li>
					<li><a href="/pages/contact.php">Contact Us</a></li>
           		</ul>
        	</div>
       	</div>
	</div>
</div><!-- End Header --> ' ;
?>
