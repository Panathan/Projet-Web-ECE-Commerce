<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membres', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<meta charset="utf-8">
</head>
<body>
	<div align='center'>
		<h2>Votre profil</h2>
		<br /><br />
		Nom = <?php echo $userinfo['Nom']; ?><br />
		Prénom = <?php echo $userinfo['Prenom']; ?><br />
		Mail = <?php echo $userinfo['Email']; ?><br />
		Adresse = <?php echo $userinfo['Adresse']; ?><br />
		Ville = <?php echo $userinfo['Ville']; ?><br />
		Code Postal = <?php echo $userinfo['CodePostal']; ?><br />
		Téléphone = <?php echo $userinfo['Telephone']; ?><br />

		<?php
		if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
		{
		?>
		<br><a href="#">Editer mon profil</a><br>
		<br><a href="deconnexion.php">Se déconnecter</a>
		<?php
		}
		?>
	</div>
	
</body>

<body>

</body>
</html>

<?php
}
?>