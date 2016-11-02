<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>WiC at RIT</title>
   <?php include '../includes/headinfo.php';
?>
</head>

<body class='WiColor'>

<?php include '../includes/wicheader.php';
?>
	<!--Wic Content -->
	<div  class="container WiCcolorBK">
		<div class="row content-row">
			<div class="col-md-2">&nbsp;</div>
			<div  class="col-md-8">
				<h1 class="article">Contact Us</h1>
				<!-- Form goes here -->

	<form method="post" action="mailme.php" >

		<fieldset>
		<div class="form-group ">
		  	<label class="control-label" for="yourName">Your Name</label>
		  	<div class="controls">
		   		<input type="text"  id="yourName" name="yourName" placeholder="Jane Smith" class="form-control input-xlarge" required>
		  	</div>
		</div>

		<!-- Text input-->
		<div class="form-group ">
		  	<label class="control-label" for="yourEmail">Your Email</label>
		 	<div class="controls">
		    	<input type="email" id="yourEmail" name="yourEmail"  placeholder="somebody@example.com" class="form-control input-xlarge" required>
			</div>
		</div>

		<!-- Select Basic -->
		<div class="form-group">
		  	<label class="control-label" for="recipient">Recipient</label>
		  	<div class="controls">
		   		<select id="recipient" name="recipient" class="form-control input-xlarge">
		   			<option value="who">Who do you want to contact?</option>
		   			<option value="Director@wic.rit.edu">Director</option>
					<option value="PR@wic.rit.edu">Public Relations</option>
					<option value="Events@wic.rit.edu">Events</option>
					<option value="Logistics@wic.rit.edu">Logistics</option>
					<option value="Outreach@wic.rit.edu">Outreach</option>
					<option value="Projects@wic.rit.edu">Projects</option>
					<option value="WiCHacks@wic.rit.edu">WiCHacks</option>
					<!-- <option value="WebMaster@wic.rit.edu"></option> -->
				</select>
		  	</div>
		</div>
		<!-- Textarea -->
		<div class="form-group">
		 	<label class="control-label" for="message">Message</label>
		  	<div class="controls">                     
		    	<textarea class="form-control" id="message" name="message" rows="7">Message</textarea>
		  	</div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  	<label class="control-label" for="submit"></label>
		  	<div class="controls">
		    	<button type="submit" name="submit" class="btn btn-primary">Send</button>
		  	</div>
		</div>
	</fieldset>
	</form>



			</div>
			<div class="col-md-2">&nbsp;</div>
		</div>	
	</div><!-- End Wic Content -->

	<?php include '../includes/footer.php';
?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>