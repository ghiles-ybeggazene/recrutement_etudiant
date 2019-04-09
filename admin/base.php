<?php
include('../connexion.php');
 session_start(); 
if (!isset($_SESSION['admin'])) {
	header ('Location: admin.php');
	exit();
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
   
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link href="../css/icons.css" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<style>
    .text{
    border-radius: 20px;
    padding: 8vh 2vw;
    margin: 15vh 0vw;
}
       h2{
          margin: 18vh 0vw;
      }
    </style>
  <title>ADMIN</title>
</head>
<body>
  
  <?php
include('menu.php');?>
  
<div class="text hoverable center-align">
    <h2 class="center-align">BIENVENUE CHER ADMIN</h2>
    <h5>Vous etes sur votre espace personnel</h5>
  </div>
 
 <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
 <?php include('footer.php');?>
</body>
</html>
