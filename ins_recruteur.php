 <?php

$nom=$_POST['nom_sct'];
$tel=$_POST['tel_sct'];
$adresse=$_POST['adresse_sct'];
$nom_representant=$_POST['nom_rec'];
$fonction=$_POST['fonction_rec'];
$email=$_POST['email_rec'];
$username=$_POST['login_rec'];
$password=$_POST['mdp_rec'];
$num_carte=$_POST['num_carte'];
$date_exp=$_POST['date_exp'];
$pass=$_POST['mdp_carte'];
 $a=$_POST['date_exp'];
 $id=$username;  
 $valide='0';


include('connexion.php');
$result=mysql_query("select * from recruteur where login_rec='$username'")or die("failed to query database".mysql_error());

$row = mysql_fetch_array($result);

$result_=mysql_query("select * from etudiant where login_etud='$username'")or die("failed to query database".mysql_error());

$row_ = mysql_fetch_array($result_);




if($row['login_rec']==$username){
    ?>
    <script type="text/javascript" language="Javascript">
       alert("le nom d\'utilisateur existe deja");window.location.replace("inscription_recruteur.php");
</script><?php
	
}
else{
    
    
  if($row_['login_etud']==$username){
    ?>
    <script type="text/javascript" language="Javascript">
       alert("le nom d\'utilisateur existe deja");window.location.replace("inscription_recruteur.php");
</script><?php
	
}  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    else{
    
   
    $b=date("Y-m-d");
        if($a<$b){
              ?>
    <script type="text/javascript" language="Javascript">
       alert("votre carte de paiement nest plus valide!");window.location.replace("inscription_recruteur.php");
</script><?php
	  
        }else{
  
    
    
 $requete="insert into recruteur     VALUES('$id','$nom','$tel','$adresse','$nom_representant','$fonction','$email','$username','$password','$num_carte','$date_exp','$pass','$valide')";
mysql_query($requete);
        ?>
    <script type="text/javascript" language="Javascript">
       alert("inscription effectuée avec succes !");window.location.replace("accueil.php");
</script><?php
	  

}}}
?>
   




