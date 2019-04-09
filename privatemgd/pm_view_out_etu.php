<?php 
session_start();
include('../connexion.php');
if(!$_GET['out']){
    $pageid= '1';}
else{
    $pageid = preg_replace("[^0-9]","", $_GET['out']);
}
$query = mysql_query("SELECT id_etud, login_etud FROM etudiant WHERE login_etud='".$_SESSION['username']."'");
while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_etud"];
    $username = $row["login_etud"];
    
}
mysql_free_result($query);

$query = mysql_query("SELECT id, userid,to_userid, to_username, title, content, senddate FROM message WHERE id='$pageid' AND userid='$pid'");
if (!$query) { // add this check.
    die('Invalid query: ' . mysql_error());
}
while ($row =mysql_fetch_array($query))
{
    $Hid =$row["id"];
    $Huserid = $row["userid"];
    $Hfrom_id = $row["to_userid"];
    $Hfrom_username = $row["to_username"];
    $Htitle = $row["title"];
    $Hcontent = $row["content"];
    $Hrecievedate = $row["senddate"];

}

mysql_free_result($query);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voir Message envoyé</title>
          <link href="../css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
 <link href="style.css" rel="stylesheet">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
    .msg{margin-left: 22.5vw;margin-right: 20vw;margin-top: 8vh;padding: 20px;padding-bottom: 10vh;font-size: 1.2em} 
    i{margin-right: 1vw} 
    @media screen and (max-width:680px){.msg{margin:0 0;margin-top: 2vh}
        }
    </style>
</head>
<body>

 <?php require_once "pm_check_etu.php"; ?>
    <div class="msg #fafafa grey lighten-5">
    <div class="row">
       
        <div class="col s3 m6 s6">
            <i class="material-icons prefix">subject</i><b>Sujet :</b></div>
            
            <p><?php print $Htitle;?></p>
    
    </div>
          <div class="row">
           <div class="col s3 m6 s6">
               <i class="material-icons prefix">perm_identity</i><b>Envoyé à :</b></div>
               
            <p><?php print $Hfrom_username;?></p>
         
          </div>
          <div class="row">
           <div class="col s3 m6 s6">
               <i class="material-icons prefix">today</i><b>Date d'envoi:</b></div>
           
            <p><?php print $Hrecievedate;?></p>
         
    </div>
       <div class="row s">
        <div class="col s3 m6 s12">
            <i class="material-icons prefix">message</i><b>Message :</b></div>
            <div class="input-field col s6">
            <p id="textarea1" class="materialize-textarea"><?php print $Hcontent;?></p>
         </div></div>

    </div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      

</body>
<?php include('footer.php'); ?>
</html>