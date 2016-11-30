<?php
$db=new PDO('mysql:host=localhost;dbname=livretnumeriquedecompetences','root','');
?>
<!DOCTYPE html>
<html>
	<title>ACCUEIL COORDONATEUR</title>
	<header>
	<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('classes').checked) {
        int i = 0;
        i = <?php include 'classes.php'; ?>;
        alert (i); 
    } else if (document.getElementById('pupils').checked) {
        <?php 
        	include 'pupils.php';
        ?>
    }
</script>
</header>

	<body> 
	<form action="mainCoordo.php" method="get">
		Gestion des classes<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="classes"/>
		Gestion des élèves<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="pupils"/>
	</form>
	<?php 
	if (isset($_GET["classes"])){
		include 'classes.php';
	}
			?>
	</body>
</html>