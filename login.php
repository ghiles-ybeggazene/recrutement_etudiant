<?php
session_start();?>

<?php



	
include('connexion.php');


	
	
	

		if (isset($_POST['username']) AND isset($_POST['password']) ){
			
			
			
			
			$sql=' SELECT* FROM recruteur where login_rec= "' . $_POST['username'] . '"  and mdp_rec= "' . $_POST['password'] . '" and valide="1"';
	        $req = mysql_query($sql) ;
            $base = mysql_fetch_array($req);

			$sql_=' SELECT* FROM etudiant where login_etud= "' . $_POST['username'] . '"  and mdp_etud= "' . $_POST['password'] . '"';
	        $req_ = mysql_query($sql_) ;
            $base_ = mysql_fetch_array($req_);
			
		  
		
		 if($_POST['username'] == $base['login_rec'] && $_POST['password'] == $base['mdp_rec'] )
	
           {
             
             
              $_SESSION['id']=$base['id_rec'];
             $_SESSION['username']=$base['login_rec'];
          
               
            

                   
             
             
             
			 
		    
			   
			  header("location:recup1.php");
			   
			   
              
		    


 }
                        
					 
		else
				    {
						
						if($_POST['username'] == $base_['login_etud'] && $_POST['password'] == $base_['mdp_etud'] )
	
           {     
                            
                            
                            $_SESSION['id']=$base_['id_etud'];
			                $_SESSION['username'] = $base_['login_etud'];
					
          
        

                   
			   
			  header("location:etudiant.php");
			   
			   

		       


 }
						else
				    {
						
						
						
						
						?>
	
 <SCRIPT LANGUAGE="Javascript">alert("Votre Nom d utilisateur ou Mot de passe incorrect");window.location.replace("accueil.php");
            </SCRIPT> <?php
    
		
            
      } 
						
						
									 
?>


 <SCRIPT LANGUAGE="Javascript">alert(" 	 Votre Nom d utilisateur ou Mot de passe incorrect");window.location.replace("accueil.php");
            </SCRIPT>
                        
                      
                        
                        <?php        
      } 
					 			
           } 
 
	    


	

	
if (isset($_GET['sortir'])) {
    unset($_SESSION);
    session_destroy();
	session_unset();
    header("location:accueil.php");
    exit();
}








?>