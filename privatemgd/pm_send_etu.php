<?php 
session_start();
include('../connexion.php');
$result= mysql_query("SELECT id_rec, login_rec FROM recruteur");

$option="";

while ($row =mysql_fetch_array($result)){
     $USERid= $row['id_rec'];
     $USERname=$row['login_rec'];
    $option.="<OPTION VALUE=\"$USERid\">".$USERname."</OPTION>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Envoi Message</title>
    <style>
       .b{margin-top: 4vh; margin-left: 3vw}
       .msg{margin-left: 25.5vw; margin-right: 28vw; padding: 10px;margin-top: 10vh;margin-bottom: 24.6vh;font-size: 1.2em }
       i{margin-right: 1vw}
           @media screen and (max-width:680px){
           .msg{margin-left: 1vw;margin-right: 1vw;margin-top: 3vh}
           .r{width: 80%;float: none;margin-right: 20vw}
           .b{width: 60%;margin-left: 20vw}
       }
    </style>
</head>
<body>
    
    
        
            <?php require_once "pm_check_etu.php"; ?>
        
        
    
    <br>
    <div class="msg z-depth-2">
       
        <form action="pm_send_to_etu.php" name="form" method="post"onSubmit="return (VerificationDestinataire(this));">
        
             <i class="material-icons prefix">perm_identity</i><b>Selectionner un destinataire:</b>
            <div class="row">
               <div class="input-field col s7 browser-default r">
               <select name="to_userid" id="to_userid">
                <option value=0>
                    <?php echo $option;?>
                </option>
            </select>
            </div>
            <button type="submit" name="submit" id="submit" class="btn b">valider</button>
            </div>
        
            
        </form>
        </div>

    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script>
      $(document).ready(function() {
    $('select').material_select();
  });
             $('select').material_select('destroy');
            
    
    
    </script>
      <script>  function VerificationDestinataire(nbCheck) {
		  
	
		  
		
		  
       if (document.getElementById('to_userid').options[0].selected) {
       	alert('Veuillez choisir un destinataire.');
        return false;
       }}</script>
       <?php  include ("footer.php"); ?>
</body>
</html>