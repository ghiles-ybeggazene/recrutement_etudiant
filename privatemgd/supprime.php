<?php 
include('../connexion.php');

$id=$_GET['id'];
    mysql_query("delete from message where id='$id'")or die (mysql_error());
header('location:pm_outbox.php');
?> 