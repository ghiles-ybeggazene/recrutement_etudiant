<?php 
	
include('../connexion.php');
$id=$_GET['id'];
mysql_query("delete from contact where id='$id'")or die (mysql_error());
?> 
<SCRIPT LANGUAGE="Javascript">    alert("Supprimé avec succés!");window.location.replace("contact.php"); </SCRIPT>
