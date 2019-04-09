<?php

session_start();

if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}

?>

 

 <?php
 include('connexion.php');
 
     $pid  = $_SESSION['id'];

  
 
  //récupération de l'identifiant de la personne:
 

  $username = $_POST['login_etud'] ;
$email = $_POST['email_etud'] ;
$telephone = $_POST['tel_etud'] ;
$password = $_POST['mdp_etud']; 
    
$id=$username;      










$result="select * from etudiant where id_etud='$id'";

$query=mysql_query($result);
	
$result_="select * from recruteur ";
$query_=mysql_query($result_);


$base = mysql_fetch_array($query);
$base_ = mysql_fetch_array($query_);

 










   
	
		
if($_SESSION['username'] == $username ){
 
		
         

		
   
    
  
		
		
		 ?>
 <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 
            <?php 
		
	
 
		
   		
   $sql = "UPDATE etudiant SET   login_etud= '$username',id_etud= '$id',email_etud= '$email',tel_etud= '$telephone',    mdp_etud= '$password'
	          
		                            WHERE  id_etud= '$pid' " ;     
  $requete = mysql_query($sql) or die( mysql_error() );
		
    }
    else
    {
      
      
       
     
   
  if($base_['login_rec'] == $username )
	 
	{ 
?>
 <SCRIPT LANGUAGE="Javascript">alert(" Votre Nom d Utilisateur existe D\351j\340");window.location.replace("modifie_compte_etudiant.php");
            </SCRIPT> <?php 
    
            } else
  {
if($base['login_etud'] == $username ){?>
 <SCRIPT LANGUAGE="Javascript">alert(" Votre Nom d Utilisateur existe D\351j\340");window.location.replace("modifie_compte_etudiant.php");
            </SCRIPT> <?php }
        
        
        
        else{
    
		
   $sql = "UPDATE etudiant SET   login_etud= '$username',id_etud= '$id',email_etud= '$email',tel_etud= '$telephone',    mdp_etud= '$password'
	          
		                            WHERE  id_etud= '$pid' " ;     
  $requete = mysql_query($sql) or die( mysql_error() );
         
	
	
	?>
 <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 correctement effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> <?php 
	
	           } } }

	
	
	
	
	
	
	
	
  
?>