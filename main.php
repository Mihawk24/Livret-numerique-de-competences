<?php
session.start();
$_SESSION['name']=$_POST['prenom'];
?>
<!DOCTYPE html>
<html>
	<body> 
		<?php
		echo $_SESSION['name'];
		?>
		Prénom : <input type="text" name="prenom" placeholder = "Prénom">
		<input type="submit" value="OK"> 
		</form>
	</body>
</html>