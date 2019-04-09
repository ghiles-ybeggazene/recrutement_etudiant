<?php session_start (); ?>


<?php 


 include('../connexion.php');

?>
	<?php 

if (isset($_POST['mdp'])) {
     
        $mdp = $_POST['mdp'];
        $pseudo = $_POST['pseudo'];
        $nb = @mysql_fetch_array(mysql_query("select * from login where login_adm='$pseudo' and mdp_adm='$mdp'"));
    
        if ($pseudo== $nb['login_adm'] && $mdp==$nb['mdp_adm']) {
            $_SESSION['id'] = $nb['id_adm'];
              $_SESSION['admin'] = $nb['login_adm'];
            
               header("location:base.php");
        } 
    else {

            ?>
            <SCRIPT LANGUAGE="Javascript">alert("Login ou mot de passe incorrect");window.location.replace("admin.php");
            </SCRIPT>    <?php
			
			


        }
   

    
} else{
	
	if (isset($_GET['sortir'])) {
    unset($_SESSION);
    session_destroy();
    header("location:admin.php");
}
if (!(isset($_SESSION['admin']))) {
    header('Location:admin.php');
    exit;}
	}

            ?>
