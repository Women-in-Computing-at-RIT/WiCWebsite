<!DOCTYPE html>
<html>
<head lang="en">
	<title>WiC at RIT</title>
	<?php include '../includes/headinfo.php';
?>
</head>

<body class="WiColor">

<?php include '../includes/wicheader.php';
?>
<!--Wic Content -->
	<div class="container">
		<div class="row content-row">
			<div class="col-md-3">
				<div  role="complimentary">
					<?php include '../includes/sidelistevents.php';
					?>
				</div>
			</div>
			<div class="col-md-9 WiCcolorBK">
				<h1>Annual Events</h1>
				<div id="upcomingEvents">
						<h2>WiCHacks</h2>
							<h3>WiCHacks is a collaborative programming event in which participants create an app, website, game, or other piece of software over the course of the event. Hackathon participants can be female college or high school students who are at least 16 years of age.</h3>
							<p>
								<a target='_blank' href='http://wic-hacks.rit.edu/'>More information here.</a>
							</p>
						<h2>WiC After Hours</h2>
							<h3>The Women in Computing After Hours Program is an overnight program for women accepted into the B. Thomas Golisano College of Computing. This free program includes learning about Study Abroad, Housing, Academic Support Services, Cooperative Education, leadership opportunities and much more.</h3>
							<p>
								<a target='_blank' href='http://wic-after-hours.rit.edu/'>More information here.</a>
							</p>
						<h2>WiConnects</h2>
							<h3>An evening event celebrating Golisano College female computing professionals and allies.  The event is comprised of a keynote, tech talk, networking event, dinner and lasting words of inspiration.</h3>
				</div>
			</div>
		</div>
	</div>

<?php include '../includes/footer.php';
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
