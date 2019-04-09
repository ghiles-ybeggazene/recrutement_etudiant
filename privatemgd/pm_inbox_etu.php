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


// check for all msg in the inbox


$query = mysql_query("SELECT COUNT(id) AS numbers FROM message WHERE to_username='$username'");
$result = mysql_fetch_assoc($query);
$inboxMessages = $result['numbers'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message Reçu</title> <link href="style.css" rel="stylesheet">
    <style> 
        .msgg{margin-left: 22.5vw}
        @media screen and (max-width:680px){.msgg{width: 130vw;margin-left: 2vw}}</style>
</head>
<body>
    <?php require_once "pm_check_etu.php"; ?>
    
    <br>
    <?php
       include('../connexion.php');
        $result = mysql_query("SELECT * FROM message WHERE to_userid= '$pid'  ORDER BY id DESC");
        $count=mysql_num_rows($result);
    ?>
         

    <form action="pm_inbox_etu.php" name="form1" method="post">
       <?php if ($inboxMessages > 0){?>
        <div class="msgg">
            <table class="bordered responsive #f5f5f5 grey lighten-4">
              <thead>
        <tr>
        <th>
            
            <b>titre:</b>
            
            </th>
            <th>
            
            <b>envoyé par:</b>
            </th>
            <th>
            
            <b>supprimer</b>
            </th>
         </tr>
        </thead>
        <?php
        while($rows=mysql_fetch_array($result)){
            ?>
            <tbody >
            <tr>
            
            <td> 
             <?php echo $rows['title'];?> <br>   <a href="pm_view_in_etu.php?in=<?php echo $rows['id'];?>" class="aa">(voir)</a></td> 
           <td>
            <?php echo $rows['username'];?>
            </td> 
            
          <td> 
            <a href="supprimer.php?id=<?php echo $rows['id']?>"onclick="if(window.confirm('voulez vous vraiment supprimer le message?')){return true;}else{return false;}" ><i class="material-icons c">delete</i></a> 
             </td> 
        
                </tr>
                </tbody>
                 
     <?php }  
     
     
     
     
     
     
     
     
     
    
       
               }
        else 
            echo'<b>' .'aucun message reçu'. '</b>';?>
            
         </table>   
    </div>
     
    
        
    </form>

    
       <?php  include ("footer.php"); ?>

</body>
</html>