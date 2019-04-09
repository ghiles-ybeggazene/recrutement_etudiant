<?php 
session_start();
include('../connexion.php');
if(!$_GET['in']){
    $pageid2= '1';}
else{
    $pageid2 = preg_replace("[^0-9]","", $_GET['in']);
}
$query = mysql_query("SELECT id_etud, login_etud FROM etudiant WHERE login_etud='".$_SESSION['username']."'");
while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_etud"];
    $username = $row["login_etud"];
    
}
mysql_free_result($query);

$query = mysql_query("SELECT id, userid,username,to_userid,  title, content, senddate FROM message WHERE id='$pageid2' AND to_userid='$pid'");
if (!$query) { // add this check.
    die('Invalid query: ' . mysql_error());
}
while ($row =mysql_fetch_array($query))
{
    $Hid =$row["id"];
    $Huserid = $row["userid"];
    $Hfrom_id = $row["to_userid"];
    $Hfrom_username = $row["username"];
    $Htitle = $row["title"];
    $Hcontent = $row["content"];
    $Hrecievedate = $row["senddate"];

}

mysql_free_result($query);
$query= mysql_query("UPDATE message SET viewed='1' WHERE id='$pageid2'") or die (mysql_error());

 $reponse ="SELECT * FROM recruteur ";
        $rs= mysql_query($reponse);
     
$donnees = mysql_fetch_array($rs);
  $to_userid=$donnees['id_rec'];
?>

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voir Message reçu</title>
          <link href="../css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="style.css" rel="stylesheet">
    <style> 
      .msg{margin-left: 22.5vw}
    
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
               <i class="material-icons prefix">perm_identity</i><b>Envoyé par :</b></div>
               
            <p><?php print $Hfrom_username;?></p>
         
          </div>
          <div class="row">
           <div class="col s3 m6 s6">
               <i class="material-icons prefix">today</i><b>Date de reception:</b></div>
           
            <p><?php print $Hrecievedate;?></p>
         
    </div>
       <div class="row">
        <div class="col s3 m6 s12">
            <i class="material-icons prefix">message</i><b>Message :</b></div>
           
            <p id="textarea1" class="materialize-textarea"><?php print $Hcontent;?></p>
         </div>
     <div class="row">
             <div class="col">
              <form method="post" action="pm_send_to_etu.php" >
                    <input type="hidden" name="to_userid" value= <?php echo $to_userid; ?> >
                     <button type="submit" name="submit1" id="submit1" class="btn envoi">Répondre
             </button>
                </form>
                </div>
         
         </div>
    </div>
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      

</body>
<?php include('footer.php'); ?>

    

</html>