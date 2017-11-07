<?php
echo '<div class="panel panel-default">
    	<div class="panel-heading">
            <h3 class="panel-title"><a href="../../pages/blog.php">Blog Posts</a></h3>
        </div>
        <div class="list-group ">';

			#need to set link from docroot because interviews are in seperate directory
	echo "<a href='/pages/interviews/projectsupdate.php' class='list-group-item";
		echo ($_SERVER['PHP_SELF'] == '/pages/interviews/projectsupdate.php' ? ' active' : '');
		echo "'<a>Projects Committee Update</a>";

	echo "<a href='/pages/interviews/coreos.php' class='list-group-item";
		echo ($_SERVER['PHP_SELF'] == '/pages/interviews/coreos.php' ? ' active' : '');
		echo "'<a>CoreOS Visit</a>";

      echo "<a href='/pages/interviews/labelle.php' class='list-group-item";
			echo ($_SERVER['PHP_SELF'] == '/pages/interviews/labelle.php' ? ' active' : '');
			echo "'<a>Earnst & Young Visit</a>";



			echo "</div></div>";
?>
