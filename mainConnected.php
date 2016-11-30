<?php
session_start();
$db=new PDO('mysql:host=localhost;dbname=livretnumeriquedecompetences','root','');
?>
<!DOCTYPE html>
<html>
<header><a href='logout.php'>Se deconnecter</a></header>
<title>PAGE D'ACCUEIL APRES CONNEXION</title>
	<body>
	<?php 
		$query = $db->prepare('SELECT * FROM Personne WHERE `login`= :login AND `mdp`= :password');
		$query->execute(array(':login' =>$_POST['login'],':password'=>$_POST['password']));
		while($result = $query ->fetch()){
			if($result['login']==$_POST['login'] and  $result['mdp']==$_POST['password']){
			$_SESSION['name']=$result['Prenom'];
			$_SESSION['id']=$result['PersonneID'];
			$_SESSION['status']=$result['Statut'];
			}
		}
		if(isset($_SESSION['name'])!=true){
			header('Location: mainUnconnected.php');
		}
	if($_SESSION['status']==0){
		include 'mainCoordo.php';
	}
	?>
	</body>
</html>