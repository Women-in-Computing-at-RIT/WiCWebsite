<?php
echo '<div class="panel panel-default">
    	<div class="panel-heading">
            <h3 class="panel-title"><a href="what.php">What We Do</a></h3>
        </div>
        <div class="list-group ">';

			echo "<a href='prospective.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/prospective.php' ? ' active' : '');
			echo "'>Prospective Students</a>";

			echo "<a href='outreach.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/outreach.php' ? ' active' : '');
			echo "'>Outreach</a>";

			echo "<a href='projects.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/projects.php' ? ' active' : '');
			echo "'>Projects</a>";

      echo "<a target='_blank' href='https://wichacks.io/' class='list-group-item'>";
      echo "WiCHacks </a>";

			echo "</div></div>";
?>
