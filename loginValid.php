<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membres', 'root', '');

$emailconnect = htmlspecialchars($_POST['email']);
$pwdconnect = sha1($_POST['pwd']);

$requser = $bdd->prepare("SELECT * FROM membre WHERE Email = ? AND Motdepasse = ?");
$requser->execute(array($emailconnect, $pwdconnect));
$userexist = $requser->rowCount();
if($userexist == 1)
{
	$userinfo = $requser->fetch();
	$_SESSION['id'] = $userinfo['id'];
	$_SESSION['Email'] = $userinfo['Email'];
	/*header("Location: home.html");*/
	header("Location: profil.php?id=".$_SESSION['id']);
}
else
{
	echo("Mauvais identifiant ou mauvais mot de passe");
}
?>