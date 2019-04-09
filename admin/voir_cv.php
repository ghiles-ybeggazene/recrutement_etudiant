<?php

   $pid=$_GET['id'];
 
include('../connexion.php');
 session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
} 
$table=mysql_query("select * from contact where id='$pid'")or die (mysql_error());
?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Voir Message</title>
        
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet"    href="../accueil.css"
  media="screen,projection"/>
      <link href="../css/icons.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
    .msg{margin-top: 18vh;margin-right: 20vw;margin-left: 20vw;padding: 15px;margin-bottom: 10vh} 
    .but{margin-top: 25vh;margin-left: 15vw}
    .bttn{margin-left: 5vw}
        </style>
    </head>
    <body>
       
       
       
  
        
   <?php include('menu.php'); ?>
    
 
     
       
        <div class=" row msg z-depth-5">
        
        <?php while($b=mysql_fetch_array($table)){?>
        
       
            <p><?php echo $b['message'] ?></p>
    
    
    
        
        <?php } ?>
             <div class="but fixed">
            <a href="supp.php?id=<?php echo $b['id']?>"><button type="submit" onclick="if(window.confirm('voulez vous vraiment le supprimer?')){return true;}else{return false;}"  name="action" class="btn bt" >Supprimer</button></a>
               <a href="contact.php" class="btn bttn">Retour</a>
                           </div>
                                         
                                           
          </div>                                         

    
        

     <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

    <?php include('footer.php'); ?>
</body> 
    </html>