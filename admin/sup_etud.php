<?php 
include('../connexion.php');
$id=$_GET['id'];
mysql_query("delete from etudiant where id_etud='$id'")or die (mysql_error());

?> <SCRIPT LANGUAGE="Javascript">    alert("Le candidat a \351t\351 Supprim\351 avec succ\351s!");window.location.replace("etudiant.php"); </SCRIPT> <?php


?>
