<?php 
include('../connexion.php');
$id=$_GET['id'];
    mysql_query("delete from recruteur where id_rec='$id'")or die (mysql_error());

?> <SCRIPT LANGUAGE="Javascript">    alert("Le recruteur a \351t\351 Supprim\351 avec succ\351s!");window.location.replace("recruteur.php"); </SCRIPT> <?php


?>
