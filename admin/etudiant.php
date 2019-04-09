<?php



  include('../connexion.php'); 
session_start();
 if (!isset($_SESSION['admin'])) {
	
	header ('Location: admin.php');
	exit();
}
$table=mysql_query("select * from etudiant")or die (mysql_error());


?>

   
     <!DOCTYPE html>
 <html>
    <head>
     <title>Etudiant Admin</title>
     
      
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
		
		 .gh{padding: 10px;
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
    
    <table class="bordered responsive-table">
        <thead>
        <tr>
        
            
            <th data-fieled="nom">Nom</th>
            <th data-fieled="prenom">Prénom</th>
             <th data-fieled="email">E-mail</th>
              <th data-fieled="telephone">Téléphone</th>
              <th data-fieled="name">CV</th>
             
            
        </tr>
        </thead>
        <?php while($b=mysql_fetch_array($table)){?>
       <tbody>
            <tr>
            <td><?php echo $b['nom_etud'] ?></td>
            <td><?php echo $b['prenom_etud'] ?></td>
            <td><?php echo $b['email_etud'] ?></td>
            <td><?php echo $b['tel_etud'] ?></td>
             <td> <a href=" <?php echo "../img-cv/".$b['nom_img'];  ?>">Voir</a></td>
            
            <td><a href="sup_etud.php?id=<?php echo $b['id_etud']?>"><button type="submit"  onclick="if(window.confirm('voulez vous vraiment le supprimer?')){return true;}else{return false;}"  name="action" class="btn">Supprimer</button></a></td>
            
        </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
     <?php include('footer.php');?>
</body>
