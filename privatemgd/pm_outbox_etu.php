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


// check for all msg in the outbox


$query = mysql_query("SELECT COUNT(id) AS numbers FROM message WHERE userid='$pid'");
$result = mysql_fetch_assoc($query);
$outboxMessages = $result['numbers'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       
    <title>Message Envoyé</title>
    <link href="style.css" rel="stylesheet">
    <style>.msgg{margin-left: 22.5vw} @media screen and (max-width:680px){.msgg{width: 100%;margin-left: 0vw}
        .responsive{width: 100%;padding: 0;margin: 0 0}}</style>
</head>
<body>
  
   
             <?php include( "pm_check_etu.php"); ?>
       
    <br>
    <?php
        include('../connexion.php');
        $result = mysql_query("SELECT * FROM message WHERE userid= '$pid'  ORDER BY id DESC");
        $count=mysql_num_rows($result);
    ?>

    <form action="pm_outbox_etu.php" name="form1" method="post">
        <?php if ($outboxMessages > 0){ ?>
        <div class="msgg">
            <table class="bordered responsive #f5f5f5 grey lighten-4">
              <thead>
        <tr>
        <th>
            
            <i class="material-icons prefix">subject</i><b>titre:</b>
            
            </th>
            <th>
            
            <i class="material-icons prefix">perm_identity</i><b>envoyé à:</b>
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
        <?php echo $rows['title'];?> <br>   <a href="pm_view_out_etu.php?out=<?php echo $rows['id'];?>" class="aa">(voir)</a></td> 
        
           <td>
            <?php echo $rows['to_username'];?>
            </td> 
            
          <td> 
            <a href="supprimer.php?id=<?php echo $rows['id']?>"onclick="if(window.confirm('voulez vous vraiment supprimer le message?')){return true;}else{return false;}" ><i class="material-icons c">delete</i></a> 
             </td> 
        
                </tr>
                </tbody>
                 
     <?php }  
     
     
     
     
     
     
     
     
     
    
       
               }
        else
                print "Aucun message envoyé";?>
            </table>
            
    </div>
        
    </form>

    
    

</body>
<?php include('footer.php'); ?>
</html>