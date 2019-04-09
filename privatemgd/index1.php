<?php 
session_start();

require_once '../connexion.php';

$username = false;
 
if (isset($_SESSION['username'])) {
    $query = mysql_query("SELECT id_etud, login_etud FROM etudiant WHERE login_etud='".$_SESSION['username']."'");
    


while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_etud"];
    $username = $row["login_etud"];
    
}
mysql_free_result($query);}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messagerie</title>
     <link href="style.css" rel="stylesheet">
      <style>
        @media screen and (min-width:680px){
        .row{width:55vw;
        margin-top: 10vh;}
       
        } 
       
    </style>
</head>
<body>
   
           <?php require_once "pm_check_etu.php"; ?>
   <div class="valign-wrapper ">
     <div class="row">
        <div class="col s12">
          <div class="card #37474f blue-grey darken-3">
            <div class="card-content white-text center-align">
              <i class=" large material-icons prefix">message</i>
              <p> Bienvenu <?php print $username ;?> dans votre espace messagerie ici </p>
            </div>
         
          </div>
        </div>
      </div>
      </div>
         <?php  include ("footer.php"); ?>
</body>
</html>