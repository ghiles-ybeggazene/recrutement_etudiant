<?php 
/*session_start();*/
include('../connexion.php');
$query = mysql_query("SELECT id_rec, login_rec FROM recruteur WHERE login_rec='".$_SESSION['username']."'");
while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_rec"];
    $username = $row["login_rec"];
    
}
mysql_free_result($query);

//check for new message
$query = mysql_query("SELECT COUNT(id) AS numbers FROM message WHERE to_userid='$pid' AND viewed='0'");
$result = mysql_fetch_assoc($query);
$inboxMessagesNew = $result['numbers'];


// check for all msg in the inbox


$query = mysql_query("SELECT COUNT(id) AS numbers FROM message WHERE to_userid='$pid'");
$result = mysql_fetch_assoc($query);
$inboxMessagesTotal = $result['numbers'];

// check for all msg in the outbox

$query = mysql_query("SELECT COUNT(id) AS numbers FROM message WHERE userid='$pid'");
$result = mysql_fetch_assoc($query);
$outboxMessages = $result['numbers'];


?>
<?php
if ($_SESSION['id']) {?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <link href="../css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Messagerie</title>
    <style>
     .box{margin-top: 4vh;margin-left: 25.5vw}
        
        @media screen and (max-width:680px){.bt{width: 100%}
            .box{margin-left: 0vw;margin-right: 0;padding: 0}à
            
            }
    </style>
  

</head>
<body>
  <?php include("menu1.php"); ?>
   <div class="box">
    <a href ="pm_inbox.php" class="waves-effect #37474f blue-grey darken-3 btn bt"> Messages Reçus
    <?php 
if ($inboxMessagesNew >0)
{
    print '<b class="vw">('.$inboxMessagesNew.')</b>';
}else {}

?>
<?php echo'<b>'.$inboxMessagesTotal.'</b>';?></a>
<a href="pm_outbox.php" class="waves-effect #37474f blue-grey darken-3 btn bt"> Messages Envoyés
<?php
    print $outboxMessages;
    ?></a> 
    <a href="pm_send.php" class="waves-effect #37474f blue-grey darken-3 btn bt">Nouveau Message</a>

    <?php
} else {echo "vous devez vous connecter";}


?>

</div>


    </body></html>