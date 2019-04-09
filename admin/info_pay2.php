<?php

include('../connexion.php');
 session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
} 
$id=$_GET['id'];

$table=mysql_query("select * from recruteur where id_rec ='$id'")or die (mysql_error());


?>

   
     <!DOCTYPE html>
 <html>
    <head>
     <title>Candidat Admin</title>
     
      
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
		 margin-top: 15vh;margin-bottom: 50px}
			.pp{
		margin-left: 4.5vw
	}
         
         @media screen and (max-width:680px){
             .gh{margin: 4vh 2vw;
             padding: 0;}   
         }
		
	</style>
	

	
</head>
<body>
	
      <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>


	
	
    
    
       <?php include('menu.php'); ?>

    
       <div class=" gh z-depth-5 ">

     <table class="responsive-table">

        <thead>
        <tr>
       
            <th data-fieled="num_carte">Numero de la carte</th>
            <th data-fieled="date_exp">Date Expiration</th>
            <th data-fieled="mdp_carte">Mot De Passe</th>
           
            
            
        </tr>
        </thead>
        <?php while($b=mysql_fetch_array($table)){?>
       <tbody>
<tr>
             
            
            <td><?php echo $b['num_carte'] ?></td>
            <td><?php echo $b['date_exp'] ?></td>
            <td><?php echo $b['mdp_carte'] ?></td>
            <td><a href="recruteur.php" class="btn bttn">Retour</a></td>
        </tr>
     
        </tbody>
        <?php } ?>
    </table>
    </div>
     <?php include('footer.php');?>
</body>
