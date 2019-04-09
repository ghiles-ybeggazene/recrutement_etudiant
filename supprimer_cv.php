<?php
session_start();

if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}?>

<?php
include('connexion.php');


 
include'menu3.php';
$id=$_SESSION['id'];
    mysql_query("delete from etudiant where id_etud='$id'")or die (mysql_error());

?> <SCRIPT LANGUAGE="Javascript">    alert("Supprimé avec succés!");window.location.replace("accueil.php"); </SCRIPT> 
