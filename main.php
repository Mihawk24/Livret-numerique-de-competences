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
		Pr�nom : <input type="text" name="prenom" placeholder = "Pr�nom">
		<input type="submit" value="OK"> 
		</form>
	</body>
</html>