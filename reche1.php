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
        .ss{width: 30vw;
        margin-left: 21.5vw;
        border-radius: 10px;}
    div.corp{
        
        border-radius: 20px;
        padding-left: 5vw;
        margin: 5vh 7vw;
        margin-left: 10vw;
        width: 80%;
        background-color: white;
        font-family: arial;
        }
        .nom{
         
            font-size: 1.3em;
            color: cadetblue;
        }
         a{color: rgba(96,177,174,0.92)}
        .boutton{
            margin-left: 30vw;
        
            
        }
        .text{
             margin: 5vh 5vw;
        margin-left: 10vw;
        width: 80%;
            text-align: center;
            font-size: 1.4em
        }
         
         .btn{
            margin-left: 30vw;
    margin-top: 1.5vh;
             margin-bottom: 1.5vh;
           
        }
        body{background-color: rgb(240,240,240)}
         .nav-wrapper{width: 50%;border-radius: 10px;margin-left: 25vw}
</style>

</head>
<body>
    
    <?php include('menu2.php'); ?>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>

     <div class=" corp z-depth-5 #ffa726 orange lighten-1">
       <span class="flow-text center-align">
           <p >Résultats de votre recherche :</p> </span>
       
    </div>
       
       
       
         <?php 

include('connexion.php');
       session_start();
    if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}
    
$resultat = mysql_query("SELECT * FROM etudiant WHERE secteur LIKE '%".$_POST["secteur"]."%'AND lieu LIKE '%".$_POST["lieu"]."%'AND fonction_etud LIKE '%".$_POST["fonction_etud"]."%'AND type_empl LIKE '%".$_POST["type_empl"]."%'");
    
if ($resultat){
    
    $nb= mysql_num_rows($resultat);
    if($nb >0){
        while($donnees = mysql_fetch_array($resultat)){
     $to_userid=$donnees['id_etud'];?> 
         <div class=" corp z-depth-5">
     <div>   <img src="image/img13.png" width="10%"> </div>
    <?php
   
    echo'<b class="nom">' . $donnees['prenom_etud'].' '.$donnees['nom_etud']. '</b>';?>
    
<p><strong> <i class=" material-icons ">phone</i>Fonction recherchée:</strong> <?php echo $donnees['fonction_etud'];?> </p>
<p><strong><i class=" material-icons ">location_on</i>Dans le secteur :</strong> <?php echo $donnees['secteur'];?> </p>
<p><strong><i class=" material-icons ">assignment_ind</i>Emploi souhaité:</strong> <?php echo $donnees['type_empl'];?> </p>

        <p><strong><i class=" material-icons ">assignment_ind</i>Localisation:</strong> <?php echo $donnees['lieu'];?> </p>

        <p><strong><i class=" material-icons ">my_location</i>Le CV :</strong>  <a href="<?php echo "img-cv/".$donnees['nom_img']; ?>"> voir</a> </p>
             
    <form method="post" action="./privatemgd/pm_send_to.php" >
                    <input type="hidden" name="to_userid" value= "<?php echo $to_userid; ?>" >
                     <button type="submit" name="submit1" id="submit1" class="btn envoi">contacter
             </button>
                </form>
        </div>
        
     <?php  
        }
    }
    else{ 
        
        
        ?>
<script type="text/javascript" language="Javascript">
       alert("votre recherche n\'existe pas");window.location.replace("recup1.php");
</script><?php

    }
    }else{
    echo "erreur dans lexecution de la requete";
    echo "le message d'erreur est :".mysql_error();
}

?>
 <script type="text/javascript" src="js/materialize.min.js"></script>
       
<?php include('footer.php'); ?>

</body>
</html>
    

    
    
    
    
    
    
  