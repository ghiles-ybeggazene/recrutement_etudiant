<?php
session_start();

if (!isset($_SESSION['admin'])) {
	
	header ('Location: admin.php');
	exit();
}?>

 










<!DOCTYPE html>
 <html>
    <head>
     <title>Modifier profil</title>
      <link href="../css/icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="utf-8">
     <style>
         @media screen and (min-width:680px){
         .ins{width: 60%;margin-top: 8vh;margin-left: 20vw;border-radius: 10px;}
        body{background-color: rgb(240,240,240)}
         .boutton{padding:2vh;}
         .btn{width: 20vw;font-size: 1.2em}}
         @media screen and (max-width:680px){.ins{margin-top: 4vh;padding: 20px}}
        </style>
        
     </head>
    
     <body>
      <?php include('menu.php') ?>
         <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
         <script type="text/javascript" src="../js/materialize.min.js"></script>   
      
      <?php
	
	if(isset($_SESSION['admin'])){
    
    
    
	
	
include('../connexion.php');
        
$base_=mysql_fetch_array(mysql_query('select login_adm,mdp_adm from login where login_adm="'.$_SESSION['admin'].'"'));
        
        
$username=$base_['login_adm'];
$password=$base_['mdp_adm'];


        
        
        
        
        
        
        
        
        
        
        
	}
         
         
         
         
         
         
         
         
         
         
         
         
         
         
  
 

  ?>
    
      
     <form name="formulaire" action="mod.php" method="post" onSubmit="return verify(this.pass, this.pass2)">
     <div class="ins z-depth-5 #fff white">
    <div class=" center-align">
         
         
          <img src="../image/img20.png" width="10%">
             <br>
            <h5> <b class="con">Modification</b></h5> 
   

 </div>
        

  
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="username" type="text"  name="login_adm" value="<?php echo $username ;?>">
          <label for="icon_prefix">Nom d'utilisateur :<span class="red-text text-darken-2">*</span></label>
        </div></div>


      <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="mdp_adm"  id="pass" type="text" class="validate" value="<?php echo $password ;?>" >
          <label for="icon_telephone">Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
         </div>
  
   <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="pass2"  id="pass2" type="text" class="validate" value="" >
          <label for="icon_telephone">Confirmer le Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
                </div>

       <br>
    <div class="center-align boutton">   
   <button class="btn large waves-effect #4db6ac teal lighten-2" type="submit"  name="action" onclick="if(window.confirm('voulez vous vraiment modifier votre compte?')){return true;}else{return false;}" >Valider

        </button>
        
     </div>
       
       </div>
        <br>
         </form>   
         <?php include('footer.php');?>
     </body></html>