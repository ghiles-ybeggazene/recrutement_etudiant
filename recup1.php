<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="fonts/material/material-icons.css" rel="stylesheet">
      <!--Import materialize.css-->
     
       <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     
    <style>
    
        @media screen and (min-width:680px){
        .search{display: flex;flex-direction:column;justify-content: space-around;}
   
        p{ margin-top: 2vh;}
        i{margin-right: 2vw}
        .ss{width: 50%;border-radius: 10px;margin-left: 15vw;}
    div.corp{border-radius: 20px;padding-left: 5vw;margin: 5vh 7vw;margin-left: 10vw;padding: 15px;padding-left: 60px;width:                         80%;background-color: white;font-size: 1.2em}
        .nom{ font-size: 1.3em;color: cadetblue; }
         a{color: rgba(96,177,174,0.92);}
        
        .bttn{margin-top: 4vh;}
        .contacter{margin-left: 25vw}
        
        .text{margin: 5vh 5vw;margin-left: 10vw;width: 80%;text-align: center;font-size: 1.4em}
         
        body{background-color: rgb(240,240,240)}
         .nav-wrapper{width: 50%;border-radius: 10px;margin-left: 25vw; }
        
        #submit1{margin-left: 23vw;width: 15vw}}
        @media screen and (max-width:680px){  
            div.corp{margin: 2vh 3vw}
            .btn{margin-left: 25avw}}
      
</style>
</head>
<body>
     

    <?php include('menu2.php'); ?>
   
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <div class=" corp z-depth-5 #ffa726 orange lighten-1">
     
           
        <form action="reche1.php" method="post">
<div class="search">
       <div class="input-field ss">
             <i class="material-icons prefix">search</i>
            <input type="text" name="secteur" classe="validate">
             <label for="icon_prefix" class="black-text">Par Secteur :</label>
        </div>
        
         <div class="input-field ss ">
            <i class="material-icons prefix">search</i>
            <input type="text" name="lieu" class="validate">
            <label for="icon_prefix" class="black-text">Par Lieu :</label>
        </div>
        
        <div class="input-field ss ">
            <i class="material-icons prefix">search</i>
            <input type="text" name="fonction_etud" class="validate">
            <label for="icon_prefix" class="black-text">Par Fonction :</label>
        </div>
        
        
        <div class="input-field ss black-text">
            <i class="material-icons prefix">search</i>
            <input type="text" name="type_empl" class="validate" >
            <label for="icon_prefix" class="black-text">Par Emploi souhaité:</label>
        </div>
         <button class="bttn waves-effect btn #37474f blue-grey darken-3 ss" type="submit" name="action">Recherche

  </button> 
        </div>
        
         
       </form> 
        
         <?php
         include('connexion.php');
        session_start();
        if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}
   ?>
    </div>
    <?php 
    

  
    $reponse ="SELECT * FROM etudiant ";
        $rs= mysql_query($reponse);
     
while ($donnees = mysql_fetch_array($rs)){
  $to_userid=$donnees['id_etud'];
    ?>
    
    <div class=" corp z-depth-5">
     <div>   <img src="image/img13.png" width="10%"> </div>
    <?php
   
    echo'<b class="nom">' . $donnees['prenom_etud'].' '.$donnees['nom_etud']. '</b>';?>
    
<p><strong> <i class=" material-icons ">phone</i>Fonction recherchée:</strong> <?php echo $donnees['fonction_etud'];?> </p>
<p><strong><i class=" material-icons ">location_on</i>Dans le secteur :</strong> <?php echo $donnees['secteur'];?> </p>
<p><strong><i class=" material-icons ">assignment_ind</i>Emploi souhaité:</strong> <?php echo $donnees['type_empl'];?> </p>

        <p><strong><i class=" material-icons ">my_location </i>Localisation:</strong> <?php echo $donnees['lieu'];?> </p>

        <p><strong><i class=" material-icons ">visibility</i></strong>  <a href="<?php echo "img-cv/".$donnees['nom_img']; ?>">voir CV </a> </p>
      
    <form method="post" action="./privatemgd/pm_send_to.php" >
                    <input type="hidden" name="to_userid" value= "<?php echo $to_userid; ?>" >
                     <button type="submit" name="submit1" id="submit1" class="btn envoi">contacter
             </button>
                </form>
        
<br> 
    </div>
          
   <script type="text/javascript" src="js/materialize.min.js"></script>
       
        <?php }




  
         ?>

  
  
   
   
  <?php include('footer.php'); ?>





</body>
</html>