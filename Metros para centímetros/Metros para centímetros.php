<!DOCTYPE html>
<html>
<head>
	<title>Metros para centímetros</title>
</head>
<body>
<form action='Metros para centímetros.php' method="get">
 <input type="text" name="num"> Metro(s)
	<input type="submit">
</form>

<?php  

$numero = @$_GET['num'];
echo "Centímetro(s): ", 100*$numero;


?>



</body>
</html>