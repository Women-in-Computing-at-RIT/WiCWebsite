<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
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
				<h1>Upcoming Events</h1>
				<div class="row">
				<iframe class="eCalender" src="https://www.google.com/calendar/embed?src=wicatrit%40gmail.com&ctz=America/New_York" frameborder="0" scrolling="no">
        </iframe>
			</div>
		</div>
	</div>

<?php include '../includes/footer.php';
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
