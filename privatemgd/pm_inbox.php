<?php 
session_start();
include('../connexion.php');
$query = mysql_query("SELECT id_rec, login_rec FROM recruteur WHERE login_rec='".$_SESSION['username']."'");
while ($row =mysql_fetch_array($query))
{
    $pid =$row["id_rec"];
    $username = $row["login_rec"];
    
}
mysql_free_result($query);


// check for all msg in the inbox


$query = mysql_query("SELECT COUNT(id) AS numbers FROM message WHERE userid='$pid' ");
$result = mysql_fetch_assoc($query);
$inboxMessages = $result['numbers'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message Reçu</title>
      <link href="style.css" rel="stylesheet">
      <style>   .msgg{margin-left: 22vw} @media screen and (max-width:680px){.msgg{width: 130vw;margin-left: 2vw}}</style>
</head>
<body>
    <?php require_once "pm_check.php"; ?>
    
    <br>
    <?php
       include('../connexion.php');
        $result = mysql_query("SELECT * FROM message WHERE to_userid= '$pid'  ORDER BY id DESC");
        $count=mysql_num_rows($result);
    ?>
         

    <form action="pm_inbox.php" name="form1" method="post">
       <?php if ($inboxMessages > 0){?>
             <div class="msgg">
            <table class="bordered responsive #f5f5f5 grey lighten-4">
              <thead>
        <tr>
        <th>
            
            <i class="material-icons prefix">subject</i><b>titre:</b>
            
            </th>
            <th>
            
            <i class="material-icons prefix">perm_identity</i><b>envoyé par:</b>
            </th>
            <th> <b> supprimer</b> </th>
         </tr>
        </thead>
        <?php
        while($rows=mysql_fetch_array($result)){
            ?>
            <tbody >
            <tr>
            
            <td> 
        <?php echo $rows['title'];?> <br>   <a href="pm_view_in.php?in=<?php echo $rows['id'];?>" class="aa">(voir)</a></td> 
        
           <td>
            <?php echo $rows['username'];?>
            </td> 
            
          <td> 
            <a href="supprime.php?id=<?php echo $rows['id']?>" onclick="if(window.confirm('voulez vous vraiment supprimer le message?')){return true;}else{return false;}" ><i class="material-icons c">delete</i></a> 
             </td> 
        
                </tr>
                </tbody>
                 
     <?php }  
     
     
     
             
     
     
     
     
    
       
               }
        else
                print "Aucun message reçu";?>
            </table>
            
    </div>
     
    
        
    </form>

    
  <?php  include("footer.php"); ?>


</body>
</html>