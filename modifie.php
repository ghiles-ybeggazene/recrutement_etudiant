<?php
session_start();

if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}
?>
 

 <?php
include('connexion.php');
 
  
 
  //récupération de l'identifiant de la personne:
 $pid  = $_SESSION['id'];
   

  $username = $_POST['login_rec'] ;

$email   = $_POST['email_rec'] ;
$password = $_POST['mdp_rec']; 
$id=$username;
       
$result="select * from recruteur where id_rec='$id'";

$query=mysql_query($result);
	
$result_="select * from etudiant ";
$query_=mysql_query($result_);


$base = mysql_fetch_array($query);
$base_ = mysql_fetch_array($query_);

 


 $sql = "UPDATE recruteur SET   login_rec= '$username',id_rec= '$id',email_rec= '$email', mdp_rec= '$password'
	          
		                            WHERE  id_rec= '$pid' " ;








if($_SESSION['username'] == $username )

   
	{
		
		
		 ?>
 <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 
            <?php 
		
	
 
		
         $sql = "UPDATE recruteur SET   login_rec= '$username',id_rec= '$id',email_rec= '$email', mdp_rec= '$password'
	          
		                            WHERE  id_rec= '$pid' " ;
  $requete = mysql_query($sql) or die( mysql_error() ) ;
		
    }
    else
    {
        
   
  if($base['login_rec'] == $username )
	{  


?>
 <SCRIPT LANGUAGE="Javascript">alert(" Votre Nom d Utilisateur existe D\351j\340");window.location.replace("modifier_profil.php");
            </SCRIPT> <?php 
    
            } 
	
	
	
	else{
    if($base_['login_etud'] == $username )
	{  


?>
 <SCRIPT LANGUAGE="Javascript">alert(" Votre Nom d Utilisateur existe D\351j\340");window.location.replace("modifier_profil.php");
            </SCRIPT> <?php 
    
            } 
	
	
	
	else{    
		
		
        
  $requete = mysql_query($sql) or die( mysql_error() );
         
	
	
	?>
 <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> <?php 
	
	
	
	
	}}}
	
	
	
	
	
 
?>