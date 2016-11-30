<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<title>PAGE D'ACCUEIL POUR CONNEXION</title>
	<body> 
		<form method="post" action="mainConnected.php">
		Login : <input type="text" name="login">
		<br/>
		Mot de passe : <input type="password" name="password">
		<input type="submit" value="OK"> 
		</form>
	</body>
</html>