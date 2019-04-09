<?php
session_start();

if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}?>
 

 <?php
include('connexion.php');

 $id  = $_SESSION['id'];
   


 
       

$nom=$_POST['nom_etud'];
$prenom=$_POST['prenom_etud'];
$fonction=$_POST['fonction_etud'];
$secteur=$_POST['secteur'];
$choix=$_POST['type_empl'];
$lieu=$_POST['lieu'];

  //création de la requête SQL:
  $sql = "UPDATE etudiant SET   nom_etud= '$nom',prenom_etud= '$prenom',fonction_etud= '$fonction',secteur= '$secteur',type_empl= '$choix',lieu= '$lieu'  WHERE  id_etud= '$id' " ;
		
          

  //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  { ?>
   <SCRIPT LANGUAGE="Javascript">alert(" La modification \340 \351t\351 effectu\351e avec succ\350s !");
	 window.location.replace("accueil.php");
            </SCRIPT> 
<?php  }
  else
  { ?>
    '<SCRIPT LANGUAGE="Javascript">alert(" La modification \340  echou\351e! veuillez reesayer.");
	 window.location.replace("accueil.php");
            </SCRIPT> ';
 <?php }
?>