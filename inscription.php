<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membres', 'root', '');


	$lastname = htmlspecialchars($_POST['lastname']);
	$firstname = htmlspecialchars($_POST['firstname']);
	$email = htmlspecialchars($_POST['email']);
	$pwd = sha1($_POST['pwd']);
	$mobile = htmlspecialchars($_POST['mobile']);
	$address = htmlspecialchars($_POST['address']);
	$city = htmlspecialchars($_POST['city']);
	$postal = htmlspecialchars($_POST['postal']);

	if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
        $reqmail = $bdd->prepare("SELECT * FROM membre WHERE Email = ?");
        $reqmail->execute(array($email));
        $mailexist = $reqmail->rowCount();
        if($mailexist == 0) 
        {
            $insertmbr = $bdd->prepare("INSERT INTO membre(Nom, Prenom, Email, Motdepasse, Telephone, Adresse, Ville, CodePostal) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
			$insertmbr->execute(array($lastname, $firstname, $email, $pwd, $mobile, $address, $city, $postal));
			echo("Votre compte a bien été créé ! <a href=\"home.html\">Retourner à la page d'accueil</a>");
        }
        else 
        {
            echo("Adresse mail déjà utilisée ! <a href=\"userRegistration.html\">Retourner à la page inscription</a>") ;
        }
	}
?>