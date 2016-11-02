 <?php  echo'
	<div class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
      <div class="container">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="http://www.rit.edu/">
            <img src="/images/idbar-black.gif" id="rit-logo">
          </a>
        </div>

      </div>
    </div>';

echo '
<!--WiC Header Content -->
<div class="header">
	<div class="row">			
		<!-- Large and medium Screens-->
		<div class="hidden-sm hidden-xs">
			<div class="col-md-3">
				<a href="http://wic.rit.edu/">
          <img class="logo pull-left responsive-image" src="/images/WiCHi2_Purple.png">
        </a>
			</div>
			<div class="col-md-9 header-right">
				<h1 class="toppad">Women in Computing at RIT</h1>
			</div>
		</div>
		<!-- Small and extra small screens -->
		<div class="hidden-lg hidden-md">
			<div class="text-center">
				<img class="logo" src="/images/WicHis_white.png">
				<h6>Women in Computing at RIT</h6>
			</div>
		</div>
	</div>
</div>
<div class=btnheader">
	<div class="row">
		<div class="navbar pull-left wicmenu" role="navigation">
			<ul class="h3 big-nav nav navbar-nav">
				<li><a href="/index.php">Home</a></li>
				<li><a href="/pages/who.php">Who We Are</a></li>
				<li><a href="/pages/what.php">What We Do</a></li>
				<li><a href="/pages/events.php">Events</a></li>
        <li><a href="/pages/blog.php">Blog</a></li>
				<li><a href="/pages/contact.php">Contact Us</a></li>
			</ul>
		</div>		
        <div class="navbar navbar-default hidden-lg hidden-md text-center" role="navigation">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
       			<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse wicmenu" id="collapse">
         		<ul class="small-nav nav navbar-nav">
            		<li class="tognav"><a href="/index.php">Home</a></li>
					<li class="tognav"><a href="/pages/who.php">Who We Are</a></li>
					<li class="tognav"><a href="/pages/what.php">What We Do</a></li>
					<li class="tognav"><a href="/pages/events.php">Events</a></li>
					<li class="tognav"><a href="/pages/contact.php">Contact Us</a></li>
        		</ul>
        	</div>
        </div>
	</div>
</div>		
<!-- End WiC Header -->
	';
?>
     