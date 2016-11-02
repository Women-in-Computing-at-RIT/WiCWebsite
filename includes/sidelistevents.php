
<?php
echo '<div class="panel panel-default">
    	<div class="panel-heading">
            <h3 class="panel-title"><a href="what.php">What We Do</a></h3>
        </div>
        <div class="list-group ">';
        
			echo "<a href='pastevents.php' class='list-group-item";	 
			echo ($_SERVER['PHP_SELF'] == '/pages/pastevents.php' ? ' active' : '');
			echo "'>Past Events</a>";
			
			echo "<a href='annual.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/annual.php' ? ' active' : '');
			echo "'>Annual Events</a>";
			  
			echo "<a href='conferences.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/conferences.php' ? ' active' : '');
			echo "'>Conferences</a>";
			            
			echo "</div></div>";
?>
