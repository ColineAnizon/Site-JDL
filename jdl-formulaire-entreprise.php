<?php  
$nom = $_POST['Nom-Prenom'];
$societe = $_POST['Nom-Societe'];
$fonction = $_POST['Fonction'];
$tel = $_POST['Tel'];
$email = $_POST['Email'];
$message = $_POST['Message'];


$to = "johdel390@gmail.com";
$subject = "This is subject";


$message .= "<h1>Titre</h1>";
$message = "<p>Mon message</p>";


$header = "From:coline.anz@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";


$retval = mail ($to,$subject,$message,$header);
?>