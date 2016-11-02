<?php
echo '<div class="panel panel-default">
    	<div class="panel-heading">
            <h3 class="panel-title"><a href="who.php">Who We Are</a></h3>
        </div>
        <div class="list-group ">';
        
			echo "<a href='committees.php' class='list-group-item";	 
			echo ($_SERVER['PHP_SELF'] == '/pages/committees.php' ? ' active' : '');
			echo "'>Committees</a>";
			
			echo "<a href='members.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/members.php' ? ' active' : '');
			echo "'>Members</a>";
			  
			echo "<a href='allies.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/allies.php' ? ' active' : '');
			echo "'>WiC Allies</a>";
			
			echo "<a href='alumni.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/alumni.php' ? ' active' : '');
			echo "'>Alumni</a>";
			            
			echo "</div></div>";
?>


						