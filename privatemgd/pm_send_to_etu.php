<?php 
session_start();
include('../connexion.php');
$query = mysql_query("SELECT id_etud, login_etud FROM etudiant WHERE login_etud='".$_SESSION['username']."'");
while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_etud"];
    $username = $row["login_etud"];
    
}
mysql_free_result($query);
$to_userid = $_POST['to_userid'];
$query = mysql_query("SELECT id_rec, login_rec FROM recruteur WHERE id_rec='$to_userid' LIMIT 1");
while ($row =mysql_fetch_array($query))
{
    $TOid =$row['id_rec'];
    $TOuser = $row['login_rec'];
}
mysql_free_result($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link href="../css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>envoi message</title>
  <link href="style.css" rel="stylesheet">
  <style>
      .msg{margin-left: 21vw}
      @media screen and (max-width:680px){.msg{margin:0 0;margin-top: 2vh}
      textarea{max-width: 80vw}   }
    </style>
</head>
<body>
    
             <?php require_once "pm_check_etu.php"; ?>
    
 <br>
<div class="msg #f5f5f5 grey lighten-4">
     <form action="pm_send_to_etu.php" method="post">
         <div class="row">
             <div class="col s3 m6 s6 "> <i class="material-icons prefix">perm_identity</i><b>Destinataire:</b></div>
             <div class="col s6"><input  class="black-text" type="text" name="to_username" id="to_username" readonly="readonly" value="<?php print $TOuser;?>"></div>
             
         </div>
         <div class="row">
                 <div class="col s3 m6 s6"> <i class="material-icons prefix">subject</i><b>Titre :</b> </div>
             <div class="col s6"><input type="text" name="title" id="title"></div>
             
         </div>  
             <div class="row">
                     <div class="col s3 m6 s12"><i class="material-icons prefix">message</i> <b>Message :</b> </div>
                 <div class=" input field col s6"><textarea  name="message" id="textarea1" class="materialize-textarea"> </textarea></div>
         </div>
         <div class="row">
             <div class="col">
             <button type="submit" name="submit1" id="submit1" class="btn envoi" value="<?php print $TOuser; ?>">Envoyer
             <input type="hidden" name="to_userid" id="to_userid" value="<?php print $TOid;?>" > 
             <input type="hidden" name="userid" id="userid" value="<?php print $pid;?>"> 
             <input type="hidden" name="from_username" id="from_username" value="<?php print $username;?>" >
              <input type="hidden" name="senddate" id="senddate" value="<?php echo date(" d-m-Y H:i:s");?>"></button> </div>
         
         </div>
         <?php 
         if(!empty($_POST['submit1'])){
            $to_username = $_POST['to_username'];
             $title = $_POST['title'];
             $message = $_POST['message'];
             $to_userid = $_POST['to_userid'];
             $userid = $_POST['userid'];
             $from_username = $_POST ['from_username'];
             $senddate = $_POST['senddate'];
              
             
             
             include('../connexion.php');
             $query = mysql_query("INSERT INTO message (userid, username, to_userid,to_username, title, content,senddate) VALUES ('$userid','$from_username','$to_userid','$to_username','$title','$message','$senddate')") or die (mysql_error());
         echo 'message envoye';
             
            header ('Location: pm_outbox_etu.php');
          
             exit();
         }?>
     </form>

 </div>
 <?php include('footer.php'); ?>
</body>
</html>