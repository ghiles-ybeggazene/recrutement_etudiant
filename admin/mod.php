<?php

session_start();

if (!isset($_SESSION['admin'])) {
	
	header ('Location: admin.php');
	exit();
}

?>

 

 <?php
 include('../connexion.php');
 
     $id  = $_SESSION['id'];

  
 
  //récupération de l'identifiant de la personne:
 

  $pass = $_POST['pass2'] ;
  $username = $_POST['login_adm'] ;
$password = $_POST['mdp_adm']; 
         






	if($pass!=$password){
         ?>
 <SCRIPT LANGUAGE="Javascript">alert(" Les deux mot de passe ne sont pas identiques!");
	 window.location.replace("mod_cmpt.php");
            </SCRIPT> 
            <?php 
    }else{
		

 
		
         

		
   
    
  
		
		
		 ?>
 <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 effectu\351e avec succ\350s !");
	 window.location.replace("admin.php");
            </SCRIPT> 
            <?php 
		
	
 
		
   		
   $sql = "UPDATE login SET   login_adm= '$username', mdp_adm= '$password'
	          
		                            WHERE  id_adm= '$id' " ;     
  $requete = mysql_query($sql) or die( mysql_error() );
		
    
   }
	
	
	
	
	
  
?>