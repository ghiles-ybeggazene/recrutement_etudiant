<?php


include('../connexion.php');
 session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
}

$table=mysql_query("select * from recruteur where valide='1'")or die (mysql_error());


?>

   
     <!DOCTYPE html>
 <html>
    <head>
     <title>Recruteur Validé Admin</title>
     
      
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
            <th data-fieled="nom_sct">Nom Société</th>
            <th data-fieled="adresse_sct">Adresse</th>
            <th data-fieled="nom_rec">Nom du Représentant</th>
            <th data-fieled="fonction_rec">Fonction</th>
            <th data-fieled="email_rec">Email</th>
            <th data-fieled="paiement">Paiement</th>

            
            
        </tr>
        </thead>
        <?php while($b=mysql_fetch_array($table)){?>
       <tbody>
            <tr>
             
            <td><?php echo $b['nom_sct'] ?></td>
            <td><?php echo $b['adresse_sct'] ?></td>
            <td><?php echo $b['nom_rec'] ?></td>
            <td><?php echo $b['fonction_rec'] ?></td>
            <td><?php echo $b['email_rec'] ?></td>
            <td> <a href="info_pay.php?id=<?php echo $b['id_rec'] ?>">voir</a> </td>
        
            <td><a href="sup_rec.php?id=<?php echo $b['id_rec']?>"><button type="submit" class="btn"  onclick="if(window.confirm('voulez vous vraiment le supprimer?')){return true;}else{return false;}"  name="action">Supprimer</button></a></td>
             
        </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
     <?php include('footer.php');?>
</body>
