<!DOCTYPE html>
<html lang="en">
<head>
   <link href="css/icons.css" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <meta charset="UTF-8">
    <title>menu</title>
    <style>
    
     ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#37474f;
}


ul.topnav li {float: right;}


ul.topnav li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 9px 19px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}


ul.topnav li a:hover {background-color: #546e7a;}


ul.topnav li.icon {display: none;}

     
       .pp{
           width: 100%
       }
        @media screen and (max-width:680px) {
            
            
            
            ul.topnav li a {
    font-size: 15px;
  }
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }

  ul.topnav.responsive {
  position: relative;
  display: flex;
  flex-direction: column-reverse;
 }

  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;

  }



        }
    
    
    </style>
    
    
    
</head>
<body>
    
<div class="navbar-fixed">

  <nav>


  <ul class="topnav" id="myTopnav">
    <li class="icon">
      <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
    </li>
     
    

   


      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">    <i class="material-icons left">settings</i>Parametres <i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="privatemgd/index1.php">  <i class="material-icons left">home</i>Messagerie</a></li>
<li><a href="cv.php">  <i class="material-icons left">home</i>Mon CV</a></li>
    
    

 
  <ul id="dropdown1" class="dropdown-content respo #37474f blue-grey darken-3 ">
   <li class="icon">
    </li>
       
  <li class="#37474f blue-grey darken-3"><a ></a></li>
  <li class="#37474f blue-grey darken-3"> <a class="pp" href="modifie_compte_etudiant.php"><i class="material-icons left ">perm_identity</i>Mon compte</a>
</li>
  
   <li class="#37474f blue-grey darken-3 "><a href="login.php? sortir=1" class="pp">Deconnexion
   <i class="material-icons left  ">description</i></a></li>
 
</ul>
  






  </ul>
  </nav> </div>
  
  
  
 
  <script type="text/javascript" src="js/materialize.min.js"></script>
  
  
 <script>
		  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
        
		 
		 
		 
		 
		  </script>
		  <script>
	
	$( document ).ready(function);
	
$(".dropdown-button").dropdown();
        
	</script>
	 <script>
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
         
          $('.dropdown-button').dropdown('open');
           $('.dropdown-button').dropdown('close');
    
    </script>
      <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</body>
</html>