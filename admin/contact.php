
       <?php 
session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
}
  
   
       include('../connexion.php'); 


$table=mysql_query("select * from contact")or die (mysql_error());

?>

   
   
   
     <!DOCTYPE html>
 <html>
    <head>
     <title>Contact Admin</title>
     
      
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet"    href="../accueil.css"
  media="screen,projection"/>
      <link href="../css/icons.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


     <meta charset="utf-8">
     
     <style>
		
		
		body{background-color:#eceff1 ;}
		
		.gh{background-color:white;}
		
			
		
        .bordered{
            margin: 9vh 0vw;
            padding: 30px;
        }
		
		 .gh{padding: 25px;
		 margin-left: 45px;margin-right: 45px;
		 margin-top: 50px;margin-bottom: 50px}
			.pp{
		margin-left: 4.5vw
	}
		
	</style>
	

	
</head>
<body>
	
     

	
	
    
    
       <?php include('menu.php'); ?>

    
    
    
    
   <div class=" gh z-depth-5 ">
    <table class="responsive-table">
        <thead>
        <tr>
            <th data-fieled="nom">Nom :</th>
            <th data-fieled="prenom">Prenom :</th>
            <th data-fieled="email">Email :</th>
             <th data-fieled="tel">éléphone :</th>
            <th data-fieled="message">Message :</th>
           
            
        </tr>
        </thead>
        <?php while($b=mysql_fetch_array($table)){?>
        <tbody>
           <tr>
            <td><?php echo $b['nom'] ?></td>
            <td><?php echo $b['prenom'] ?></td>
            <td><?php echo $b['email'] ?></td>
             <td><?php echo $b['tel'] ?></td>
            <td> <a href="voir_cv.php?id=<?php echo $b['id']?>">voir</a></td>
            <td><a href="supp.php?id=<?php echo $b['id']?>"><button type="submit" onclick="if(window.confirm('voulez vous vraiment le supprimer?')){return true;}else{return false;}"  name="action" class="btn" >Supprimer</button></a></td>
           
              </tr>
        </tbody>
 
      
        
        <?php } ?>
                                                 
                                                 
                                                 
                                                 
    </table></div>
    
    
    
 <?php include('footer.php');?>
     <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
 
</body> 
