 <?php
if(isset($_POST['submit']))
{
    
  
$nom=$_POST['nom_etud'];
$prenom=$_POST['prenom_etud'];
$email=$_POST['email_etud'];
$telephone=$_POST['tel_etud'];
$username=$_POST['login_etud'];
$password=$_POST['mdp_etud'];
$fonction=$_POST['fonction_etud'];
$secteur=$_POST['secteur'];
$choix=$_POST['type_empl'];
$lieu=$_POST['lieu'];
$pass=$_POST['pass2'];
$avatar = $_FILES['avatar']['name'];
$avatar_tmp = $_FILES['avatar']['tmp_name'];
 $id=$username; 	




    mysql_connect('127.0.0.1','root','') ;

mysql_select_db('recrutement');
    

        
        
        
        
         


$result=mysql_query("select * from recruteur")or die("failed to query database".mysql_error());

$row = mysql_fetch_array($result);

$result_=mysql_query("select * from etudiant")or die("failed to query database".mysql_error());

$row_ = mysql_fetch_array($result_);




if($row['login_rec']==$username){
    ?>
    <script type="text/javascript" language="Javascript">
       alert("le nom d\'utilisateur existe deja");window.location.replace("inscription_etudiant.php");
</script><?php
	
}
else{
    
    
  if($row_['login_etud']==$username){
    ?>
    <script type="text/javascript" language="Javascript">
       alert("le nom d\'utilisateur existe deja");window.location.replace("inscription_etudiant.php");
</script><?php
	
}  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    else{
        
        
        
	
		$image= explode('.',$avatar);
		$image_ext=end($image);
	
	
	if(in_array(strtolower($image_ext),array('png','gif','jpeg','jpg'))===false)
	{

            ?>
            <SCRIPT LANGUAGE="Javascript">alert("Veuillez saisir une image");window.location.replace("inscription_etudiant.php");
            </SCRIPT>    <?php

		}
        else{
        
       
        
        
        
        
        
        
        
        
    
    mysql_connect('127.0.0.1','root','') ;

mysql_select_db('recrutement');
    

        
        
        
    
    
 @mysql_query("insert into etudiant VALUES('$id','$nom','$prenom','$email','$telephone','$username','$password','$fonction','$secteur','$choix', '$lieu','$avatar','$avatar_tmp')");
        
        
        
        move_uploaded_file( $_FILES['avatar']['tmp_name'], 'img-cv/'.$_FILES['avatar']['name']);
		
?>
<script type="text/javascript" language="Javascript">
       alert("Inscription effectuee");window.location.replace("accueil.php");
</script><?php






}
 }   }}
?>
   




