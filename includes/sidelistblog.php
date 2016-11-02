<?php
echo '<div class="panel panel-default">
    	<div class="panel-heading">
            <h3 class="panel-title"><a href="../../pages/blog.php">Interviwees</a></h3>
        </div>
        <div class="list-group ">';

			#need to set link from docroot because interviews are in seperate directory
      echo "<a href='/pages/interviews/labelle.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/interviews/labelle.php' ? ' active' : '');
			echo "'>Deborah LaBelle</a>";

      echo "<a href='/pages/interviews/lake.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/interviews/lake.php' ? ' active' : '');
			echo "'>Matt Lake</a>";

			echo "</div></div>";
?>
