 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription Recruteur</title>
     <link href="css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style> 
    #modal4{
         
           max-height: 90vh;border-radius: 15px;overflow-y: visible;background:white;}
    

    body{ background-color: rgb(240,240,240)}
    
    div{margin-left: auto;margin-right: auto;}
		
    div.ins{margin: 8vh 15vw;border-radius: 10px;background-color: white;}
    
    .btn{ width: 20vw;font-size: 1.4em }
        
     @media screen and (max-width:680px){
               div.ins{width: 100%;margin: 0 0 ;margin-top: 3vh}   
          
             body{background-color: rgb(240,240,240)}
         
    	  div{margin-left: auto;margin-right: auto;}
          .btn{width: 70%;font-size: 1em}
        
                              }
       </style>
</head>
<body>
   <?php include('menu.php'); ?>
    
    <form name="formulaire" action="ins_recruteur.php" method="post" onSubmit="return verify(this.pass,this.pass2)">
    
     <div class="ins  z-depth-5">
     <div class=" center-align">
          <i class=" medium material-icons  " center-align>description</i> <br>
            
            <h5> <b class="con">Inscription</b></h5> 
     </div>
        
    <h5><b>Société</b></h5>
    
   <div class="row ">
   <div class="input-field col s12">
         
          <i class="material-icons prefix">perm_identity</i>
          <input id="nom" type="text" class="validate" name="nom_sct" pattern="[a-zA-Z]+[a-zA-Z- ]{1,}" title="Doit commencer par une lettre et ne contient pas de chiffres ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom de l'entreprise :</label>
          
    </div>
    </div>
    
      
      <div class="input-field col s12">
         
          <i class="material-icons prefix">phone</i>
          <input id="tel" name="tel_sct"  type="text" class="validate"    pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Téléphone : <span class="red-text text-darken-2">*</span></label>
          
        </div>
    
   
  
      
      <div class="input-field col s12">
         
          <i class="material-icons prefix">location_on</i>
          <input id="adresse" name="adresse_sct"  type="text" class="validate"   pattern="[a-zA-Z0-9_ -.,:']+" title="Ce champ ne doit pas contenir de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Adresse : <span class="red-text text-darken-2">*</span></label>
          
    
        </div>


    <h5><b>Représentant de la société</b></h5>
    
     <div class="row ">
     <div class="input-field col s12">
         
          <i class="material-icons prefix">perm_identity</i>
          <input id="nom_representant" type="text" class="validate" name="nom_rec" pattern="[a-zA-Z]+[a-zA-Z- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom complet:</label>
          
    </div>
    </div>
     
     <div class="row">
     <div class="input-field col s12">
         
          <i class="material-icons prefix">assignment_ind</i>
          <input id="fonction" name="fonction_rec"  type="text" class="validate"    pattern="[a-zA-Z]+[a-zA-Z@_- ]{1,}" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone">fonction : <span class="red-text text-darken-2">*</span></label>
          
     </div>
     </div>
     
     
      <div class="row">
      <div class="input-field col s12">
         
          <i class="material-icons prefix">email</i>
          <input id="email" name="email_rec"  type="email" class="validate"  pattern="[a-zA-Z]+[a-zA-Z@_-.0  {1,}" autofocus required>
          <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Adresse e-mail:<span class="red-text text-darken-2">*</span></label>
          
        </div>
        </div>

   

     <div class="row">
     <div class="input-field col s12">
         
          <i class="material-icons prefix">supervisor_account</i>
          <input id="username" type="text" class="validate" name="login_rec" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas  de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom d'utilisateur :<span class="red-text text-darken-2">*</span></label>
          
        </div>
        </div>


      
    
      <div class="row">
     <div class="input-field col s12">
         
          <i class="material-icons prefix">lock_outline</i>
          <input required name="mdp_rec"  id="pass" type="password" class="validate"  pattern="[a-z0-9]{5,}">
          <label for="icon_telephone">Mot de passe : <span class="red-text text-darken-2">*</span></label>
          
        </div>
        </div>
  


      <div class="row">
      <div class="input-field col s12">
         
          <i class="material-icons prefix">lock_outline</i>
          <input required  name="pass2"  id="pass2"  type="password" class="validate" pattern="[a-z0-9]{5,}">
          <label for="icon_telephone">Confirmer Mot de passe : <span class="red-text text-darken-2">*</span></label>
          
        </div>
        </div>
   
       <br>
     <div class="center-align">   
     <a class="waves-light  btn #4db6ac teal lighten-2" href="#modal4">Suivant</a>
        </div>
        <br>
        </div>
        
        
        
        
        <div id="modal4" class="modal">
        <div class="modal-content">     
         
         
<div class="mdl">
    
       <div class="center-align">
         
          <i class=" medium material-icons  " center-align>payment</i>  
            <h5> <b class="con">PAYEMENT</b></h5> 
            
        </div>
        
     <h6 class="center-align">pour valider votre inscription vous devez payer les frais d'inscription</h6>
     
     <div class="row center-align">
      <a class="btn #eeeeee grey lighten-3 black-text" href="#">FRAIS: 1000 DA</a>
    </div>
   
   
         
        <div class="row r">
        <div class="input-field col s10">
         <i class="material-icons prefix">credit_card</i>
          <input  id="num_carte" name="num_carte" type="text" class="validate" pattern="[0-9]{16,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="first_name" class="black-text">   NUMERO DE LA CARTE</label>
             
              </div>
              </div>
              
              <h6>DATE EXPIRATION</h6>
            <div class="row r">
            <div class="input-field col s10">
              <i class="material-icons prefix">view_day</i>
               <input type="date" class="datepicker" id="date_exp" name="date_exp" autofocus required>
                
                  </div>
                  </div>
  
     <div class="row r">
     <div class="input-field col s10">
         <i class="material-icons prefix">lock_open</i>
          <input  id="pass3" name="mdp_carte" type="password" class="validate" pattern="[0-9]{4,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="first_name" class="black-text">CODE SECURITE</label>
             
              </div>
              </div>
              
   <div class="center-align">
     <button class="btn  waves-light #4db6ac teal lighten-2" type="submit" name="action">Valider
      <i class="material-icons right">https</i>
    </button>
</div>



  
      </div>
        
     <br>   
    </div>
    </div> 
     <br>
       
     </form>
        
        <script>
    
    
    
    </script>

           <?php include('footer.php'); ?>
        
          
          
           <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
     <script>
    
         $(document).ready(function(){
         $('.modal').modal();
  });
          
          $('#modal4').modal('open');
          $('#modal4').modal('close');
    
         $('.modal').modal({
         dismissible: true, 
         opacity: .5, 
         in_duration: 300,
         out_duration: 200,
         starting_top: '4%',
         ending_top: '10%',
         ready: function(modal, trigger) {
        alert("Ready");
        console.log(modal, trigger);
      },
       complete: function() { alert('Closed'); }
    }
  );
    
    </script>
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
         <script type="text/javascript" src="js/materialize.min.js"></script>
        
         
         
</body>
</html>