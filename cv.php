<!DOCTYPE html>
 <html>
    <head>
     <title>CV Etudiant</title>
     
      <link href="css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


     <meta charset="utf-8">
     
     <style>
         @media screen and (min-width:680px){

         .modifi{display: flex; flex-direction:row;justify-content:flex-end;margin-left: 23vw; margin-top: 5vh; }
         b{ font-size: 1.2em}
        
  .corp{margin-left: 15vw;margin-right: 15vw;padding: 20px;margin-top: 7vh;margin-bottom: 4.5vh;border-radius: 10px;display: flex;
    flex-direction: row;}

        
         
         

        
         b{font-size: 1.5em;}     
         .m{margin-right: 3vw}}
@media screen and (max-width:680px) {
    .corp{margin-top: 8vh;padding: 20px}
    .m{width: 40%}
body{font-size: 12px;}
    
  .modifi{display: flex;flex-direction:row;justify-content:space-around;margin-top: 5vh;}
		 a{margin-top: 2vh}	 
		
	</style>
	

























	
</head>
<body>
	<?php include('menu3.php'); ?>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

	
	







<?php session_start(); 
    if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}?>
<?php

 include('connexion.php');
    $id  = $_SESSION['id'];

    
    
     $reponse ="SELECT * FROM etudiant WHERE id_etud='$id' ";
        $rs= mysql_query($reponse);
     
while ($donnees = mysql_fetch_array($rs)){
    ?>
    
    <div class=" corp z-depth-5">
      <div class="image">   <img src="image/img13.png" width="30%"> </div>
    <div class="info">
    
     
    <?php
   
    echo'<b clas="nm">' . $donnees['prenom_etud'].' '.$donnees['nom_etud']. '</b>';?>
      
    
    
<p><strong> <i class=" material-icons ">phone</i>Fonction recherchée:</strong> <?php echo $donnees['fonction_etud'];?> </p>
<p><strong><i class=" material-icons ">location_on</i>Dans le secteur :</strong> <?php echo $donnees['secteur'];?> </p>
<p><strong><i class=" material-icons ">assignment_ind</i>Emploi souhaité:</strong> <?php echo $donnees['type_empl'];?> </p>

        <p><strong><i class=" material-icons ">assignment_ind</i>Localisation:</strong> <?php echo $donnees['lieu'];?> </p>

        <p><strong><i class=" material-icons ">my_location</i></strong>  <a href="<?php echo "img/".$donnees['nom_img']; ?>">voir CV</a> </p>
         <div class="modifi">
          <a class="waves-effect waves-light btn #4db6ac teal m lighten-2" href="modifier_cv_etudiant.php">Modifier</a> 

      <a href="supprimer_cv.php"><button class="btn" type="submit"  onclick="if(window.confirm('La suppression de votre CV supprimera automatiquement votre compte ,voulez vous vraiment le supprimer?')){return true;}else{return false;}"  name="action">Supprimer</button></a> 
</div>
       <br>
        </div>
          
   
       </div>
        <?php }




  
         ?>

  
  

	
	
	
	
	
	
	
	
	
</body>

	
	

	<?php include('footer.php'); ?>
	
</html>