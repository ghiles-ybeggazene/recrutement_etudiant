<?php 
include('../connexion.php');

$id=$_GET['id'];

$query="UPDATE recruteur SET valide='1' WHERE id_rec='$id'";
$q=mysql_query($query);

if($q){
    header('location:recruteur.php');
 }else  {?>   
 
 <SCRIPT LANGUAGE="Javascript">alert("Erreur lors de la validation ! Veuillez reesayer.");
	 window.location.replace("recruteur.php");
            </SCRIPT> 
 <?php }
?> 