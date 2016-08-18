<DOCTYPE html>
<html>
<?php include("../navigationBar.html"); ?>
<head>
</head>
<body>
<h1> You've been logout! </h1>
	<?php
		session_start();
		session_destroy();
	?>
</body>
</html>