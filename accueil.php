<!DOCTYPE html>
 <html>
    <head>
     <title>Accueil</title>
     
      <link href="css/icons.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
   <style>
    
       .f3 {display: flex;flex-direction: row;justify-content: space-around;margin: 20vh 0vw;}
       .f31 , .f32, .f33{border-radius: 12px;padding: 1vh 1vw;flex-basis: 20%;}
       b{font-size: 1.4em}
       header img{width: 100%; margin-top: 3vh;height: 37vh;} 
       .a11 {width: 40%;padding-left: 3vw}
       .a12{width: 30%;margin: 0vh 13vw;border-radius: 15px;}
       .frme{width: 10vw;height: 20vh;}
       forme{width: 70vw;height: 20vh; }
       .a1{justify-content:space-between;display: flex;flex-basis: 20%;flex-direction:row; }

    @media screen and (max-width:680px) {
    p{font-size: 1.4em}
    .a1{display: flex;flex-direction: column;}
    .a11{width: 100%}
    .a12{width: 100%;margin: 0 0;border-radius: 20px;}
    header img{width: 100%;margin-top: 50px;margin-left: 0px;margin-right: 0px;}
    .corps{width: auto; }
    body{font-size: 12px;}
  .f3{margin: 0vh 0vw;display: flex;flex-direction: column;justify content: space-between;}
  .f33,.f31, .f32,  .f331,.f332{flex-basis: 30%;margin: 0vw 7vh;}}	 	
	</style>
</head>
<body>
<?php include('menu.php');?>                       
 <header> <img src="image/1.jpg"></header>
  <div class="a">
  <div class="a1">            
  <div class="a11 ">    
          
    <span class="flow-text">
    <h5>-Bienvenue sur Student Job -</h5>
    <p>La plateforme de recrutement en ligne, dédiée aux étudiants et jeunes diplômés. Grâce à des solutions technflow-textologiques innovantes, Student Job offre de nombreuses possibilités pour contacter rapidement et facilement les candidats qui répondent à vos éxigences. </p>
    </span>
 </div>  
        
  <div class="a12">
  <form  name="formulaire" action="login.php" method="post">
  <div class="  center-align"> <br>
       <i class=" Medium material-icons  "center-align>lock</i> <br>
       <b class="con">Connexion</b>
  </div>
         
              
    <div class="row">
    <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="username" type="text" class="validate" name="username" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom d'utilisateur :<span class="red-text text-darken-2">*</span></label>
    </div>
    </div>
        
            
  <div class="row">
  <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="password"   id="password" type="password" class="validate"  >
          <label for="icon_telephone">Mot de passe : <span class="red-text text-darken-2">*</span></label>
  </div>
  </div>
  

      
   
     <div class="center-align">   
   <button class="btn waves-effect #4db6ac teal lighten-2" type="submit"  name="action" >Connexion</button>   
     </div><br>
     
    </form>               
    </div>   
   </div>
   

      <div class="f3">
      <div class="f31">
      <div class="card">
         <div class="card-image">
        <img src="image/2.jpg">         
        </div>
        <div class="card-content center-align">
        <p> Une base qualifiée d'étudiants recherchant un job,un stage ,une alternance ou un emploi. </p>
        </div>

        </div>
        </div>
        
      <div class="f32">
        <div class="card">
                    <div class="card-image ">
                      <img src="image/3.jpg">
                      
                    </div>
                    <div class="card-content center-align">
                      <p>Poster votre CV,et faites vous chasser par les recruteurs.</p><br><br>
                    </div>

        </div>
     </div>

      <div class="f33">

        <div class="card">
                    <div class="card-image">
                      <img src="image/4.jpg">
                      
                    </div>
                    <div class="card-content center-align">
                      <p>StudentJob prend à cœur votre recherche et vous aide à trouver le service le plus adapté à vos besoins. </p><br>
                    </div>

        </div> </div>

    </div>  
        
        
        
        
        
        
        
    </div>
    <!--footer-->
    
     

	
	
	
	
	<?php include('footer.php'); ?>
	
	
	
	
	
	






















	
    

 <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>


 <script type="text/javascript" src="js/materialize.min.js"></script>

	
	
	
	
	
	
	
    
	
	
	

</body>
</html>