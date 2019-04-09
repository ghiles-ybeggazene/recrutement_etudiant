
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contacter</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="css/icons.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
   
    <style>
        body{
            background-color: rgb(240,240,240)
        }
    	div{margin-left: auto;margin-right: auto;}
		
		div.contaa{
			margin: 8vh 15vw;
			
			border-radius: 10px;	
		}
        .btn{
            width: 20vw;
            font-size: 1.4em
        }
        
        @media screen and (max-width:680px){
            div.contaa{
                width: 100%;
                margin: 0 0;
                margin-top: 3vh;
            }  
            .btn{width: 70%}
        } 
        
        
    
    </style>
</head>
<body>
   
      <?php include('menu.php'); ?>

      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
         <script type="text/javascript" src="js/materialize.min.js"></script>   

     
    <div class="row">
        <div class=" col s12">
           
            <form action="contacte.php" method="post" name="formulaire">
            
              <div class="contaa z-depth-5 #ffffff white"> 
                
                
                 <div class=" center-align">
         
         
          <i class=" medium material-icons " center-align>email</i>
             <br>
            <h5> <b class="con">Contacter</b></h5> 
   

 </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="nom" type="text" class="validate" name="nom" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom :<span class="red-text text-darken-2">*</span></label>
        </div>
        
        
        
               
                 
                     
        
        <div class="input-field col s12">
          <i class="material-icons prefix ">supervisor_account</i>
          <input id="prenom" type="text" class="validate" name="prenom" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Prenom :<span class="red-text text-darken-2">*</span></label>
        </div>
        
        
        
      
     <div class="input-field col s12">
          <i class="material-icons prefix">email </i>
          <input id="email" name="email"  type="email" class="validate"              pattern="[a-zA-Z]+[a-zA-Z@_-.0-9]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone" for="email" data-error="wrong" data-success="right">Adresse e-mail:<span class="red-text text-darken-2">*</span></label>
        </div>
          
          
          
          
          
          
      
     <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="tel" name="tel"  type="text" class="validate"    pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par un Zero et ne doit pas contenir d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_telephone">Téléphone : <span class="red-text text-darken-2">*</span></label>
        </div>
            
                <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="message" name="message"class="materialize-textarea" pattern="[a-zA-Z0-9_- .,!?]" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required></textarea>
          <label for="icon_prefix2">Votre Message<span class="red-text text-darken-2">*</span> </label>
        </div>
                
             
                     <div class="center-align">   
   <button class="btn waves-effect #4db6ac teal lighten-2" type="submit"  name="action" >Envoyer 

        </button>
        
        </div>   
         <br>            
              </div>    
            </form>
              
    </div></div>
    
     <?php include('footer.php'); ?>


</body>
</html>
