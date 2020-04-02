<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Calc Money 2000 - Result</title>
		<link rel="stylesheet" type="text/css" href=""/>
	</head>
	<body>
		<center>
		<?php
			$val1 = $_POST['primeiro'];
			$val2 = $_POST['segundo'];
			$val3 = $_POST['terceiro'];
			
			$result = pow($val1,2) + pow($val2,2) + pow($val3,2);
			
			echo "Calc Money 2000<br><br>";
			echo "Operação finalizada!<br>";
			echo "(".$val1." x ".$val1.") + (".$val2." x ".$val2.") + (".$val3." x ".$val3.") = ".$result;
		?>
		</center>
	</body>
</html>