<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
	
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';
	echo '<body>';
	echo 'Votre Login: '.$_SESSION['login'].' et votre mot de passe: '$_SESSION['pwd'].'.';
	echo '<br />';
	echo '<a href="./logout.php">Déconnection</a>';
	
	
 else {
	echo 'Les variables ne sont pas déclarées.';	
}
?>

</body>
</html>
