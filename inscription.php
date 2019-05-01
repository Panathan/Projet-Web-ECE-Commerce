<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "myDB");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$firstname = mysqli_real_escape_string($link, $_POST['firstname']);
$lastname = mysqli_real_escape_string($link, $_POST['lastname']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$postal = mysqli_real_escape_string($link, $_POST['postal']);
$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
$adresse=mysqli_real_escape_string($link,$_POST['address']); 
$city=mysqli_real_escape_string($link,$_POST['city']); 
$password=mysqli_real_escape_string($link,$_POST['password']); 
// attempt insert query execution
$sql = "INSERT INTO ece_amazon (firstname,lastname,email,city,mobile,password,address,city,postal) VALUES ('$firstname','$lastname', '$email', '$city','$mobile',$password','$address','$city','$postal')";
if(mysqli_query($link, $sql)){
    echo "Inscription réussie";
} else{
    echo "ERREUR: Impossible d'exécuter $sql. " . mysqli_error($link);
}
 header('Location: home.html');
exit();

?>
 