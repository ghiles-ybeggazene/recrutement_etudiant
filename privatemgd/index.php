<?php 
session_start();

include('../connexion.php');

$username = false;
 
if (isset($_SESSION['username'])) {
    $query = mysql_query("SELECT id_rec, login_rec FROM recruteur WHERE login_rec='".$_SESSION['username']."'");
    


while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_rec"];
    $username = $row["login_rec"];
    
}
mysql_free_result($query);}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <link href="../css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Messagerie</title>
    <style>
        @media screen and (min-width:680px){
        .row{width:50vw;
        margin-top: 10vh;
        margin-right: 20vw}
       
        } 
       
    </style>
</head>
<body>
  
    <?php  include ("pm_check.php"); ?>
    
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