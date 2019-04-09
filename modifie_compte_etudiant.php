<?php
session_start();

if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}
?>

 










<!DOCTYPE html>
 <html>
    <head>
     <title>Modifier profil</title>
      <link href="css/icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
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
      <?php include('menu3.php') ?>
         <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
         <script type="text/javascript" src="js/materialize.min.js"></script>   
      
      <?php
	
	if(isset($_SESSION['username'])){
    
    
    
	
	
include('connexion.php');
        
$base_=mysql_fetch_array(mysql_query('select login_etud, email_etud,tel_etud,mdp_etud from etudiant where login_etud="'.$_SESSION['username'].'"'));
        
        
$username=$base_['login_etud'];
$email=$base_['email_etud'];
$telephone=$base_['tel_etud'];
$password=$base_['mdp_etud'];


        
        
        
        
        
        
        
        
        
        
        
	}
         
         
         
         
         
         
         
         
         
         
         
         
         
         
  
 

  ?>
    
      
     <form name="formulaire" action="modifie_cmpt_etudiant.php" method="post" onSubmit="return verify(this.pass,this.pass2)">
     <div class="ins z-depth-5 #fff white">
    <div class=" center-align">
         
         
          <img src="image/img20.png" width="10%">
             <br>
            <h5> <b class="con">Modification</b></h5> 
   

 </div>
        

  
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="username" type="text"  name="login_etud" value="<?php echo $username ;?>">
          <label for="icon_prefix">Nom d'utilisateur :<span class="red-text text-darken-2">*</span></label>
        </div></div>


        
      
        
      <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email_etud"  type="email" class="validate"pattern="[a-zA-Z]+[a-zA-Z@_-.0-9]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $email ;?>"> 
          <label for="icon_telephone" for="adresse" data-error="wrong" data-success="right">Adresse e-mail:<span class="red-text text-darken-2">*</span></label>
        </div>
          </div>
   


 <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="telephone" name="tel_etud"  type="text" class="validate"    pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required value="<?php echo $telephone ;?>">
          <label for="icon_telephone">Téléphone : <span class="red-text text-darken-2">*</span></label>
        </div>

         </div>
      
      

      <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="mdp_etud"  id="pass" type="text" class="validate" value="<?php echo $password ;?>" >
          <label for="icon_telephone">Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
         </div>
  
   <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="passe"  id="pass2" type="text" class="validate" value="" >
          <label for="icon_telephone">Confirmer le Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
                </div>
  


       






   

   
   
  

       <br>
    <div class="center-align boutton">   
   <button class="btn large waves-effect #4db6ac teal lighten-2" type="submit"  name="action" onclick="if(window.confirm('Voulez vous vraiment modifier votre compte?')){return true;}else{return false;}"  >Valider

        </button>
        
     </div>
       
       </div>
        <br>
         </form>   
          
            
              
                
                  
                    
                      
                        
                          
                            
                 <script> $(document).ready(function() {
    $('select').material_select();
  });</script>              
                                
                                  
                                      
      <script>
             var fieldalias="mot de passe";
             function verify(pass,pass2){
                 var passed=false;
                 if(pass.value==''){alert("veuillez entrer votre "+fieldalias+" dans le premier champ"); pass.focus();}
                 else if(pass2.value==''){alert("veuillez entrer votre "+fieldalias+" dans le second champ"); pass2.focus();}
                 else if(pass.value!=pass2.value){alert("Les deux  "+fieldalias+" ne sont pas identique"); pass.select();}
                 else
                     passed=true;
                 return passed;
             }
    </script>
      
      
      
          <?php include('footer.php'); ?>
     </body></html>