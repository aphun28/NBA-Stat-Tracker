<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Player Search </title>
</head>
<?php include("../navigationBar.html");?>
<body>
	<form action="results.php" method="post">
		<fieldset>
		<legend style="color:blue"> Results </legend>
			<p>
				<input type="text" name="name" placeHolder="Player's Name" id="name">	
			</p>
			<input type = "submit">
		</fieldset>
	</form>
	<?php
		$count = 0;
		$history = array();
		
		function init() {
			global $count;
			global $history;
			if(isset($_SESSION["count"])) {
				$count = $_SESSION["count"];
				$count++;
			}
			else {
				$history = array();
				$_SESSION["count"] = 1;
				$_SESSION["history"] = $history;
				$count = 1;
			}
		}
		
		function search() {
			global $history;
			$name = filter_input(INPUT_POST, "name");
			array_push($_SESSION['history'],$name);
		}
		
		init();
		search();
	?>
</body>
</html>