<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$message=$_POST['message'];

include('connexion.php');

$requete="insert into contact values('','$nom','$prenom','$email','$tel','$message')";
mysql_query($requete);?>

 <SCRIPT LANGUAGE="Javascript">alert(" Le message a \340 \351t\351 envoy\351 avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 