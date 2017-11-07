<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<?php
session_start ();

session_unset();

session_destroy();

header ('location: index.htm')
?>

</body>
</html>
