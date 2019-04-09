<?php
session_start();

if (!isset($_SESSION['username'])) {
	
	header ('Location: accueil.php');
	exit();
}?>










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
         .ins{ width: 60%; margin-top: 8vh; margin-left: 20vw;border-radius: 10px;}
        body{background-color: rgb(240,240,240)}
         .boutton{padding:2vh;}
         .btn{width: 20vw;font-size: 1.2em}}
         @media screen and (max-width:680px){.ins{margin: 5vh 3vw^;padding: 10px}}
        </style>
     </head>
    
     <body>
      <?php include('menu3.php') ?>
         <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
         <script type="text/javascript" src="js/materialize.min.js"></script>   
      
      <?php
	
	if(isset($_SESSION['username'])){
    
    
    
	
include('connexion.php');
        

     
    $base_=mysql_fetch_array(mysql_query('select login_etud,nom_etud,prenom_etud,fonction_etud,secteur,type_empl,lieu from etudiant where id_etud="'.$_SESSION['id'].'"'));
                     
$nom=$base_['nom_etud'];
$prenom=$base_['prenom_etud'];
$fonction=$base_['fonction_etud'];
$secteur=$base_['secteur'];
$choix=$base_['type_empl'];
$lieu=$base_['lieu'];

}
        

  ?>
    
      
     <form name="formulaire" action="modifie_cv_etudiant.php" method="post" onSubmit="return verify(this.pass, this.pass2)">
     <div class="ins z-depth-5 #fff white">
    <div class=" center-align">
         
         
          <img src="image/img20.png" width="10%">
             <br>
            <h5> <b class="con">Modification</b></h5> 
   

 </div>
        

      <div class="row">
<div class="input-field col s12 ">
<i class="material-icons prefix">account_circle</i>
<input id="icon_prefix" type="text" class="validate"  name="nom_etud"           pattern="[a-zA-Z]+[a-zA-Z]{1, }" title="Doit commencer par une lettre et ne contient pas de caractères spéciaux" autofocus required 
value="<?php echo $nom; ?>">
<label for="icon_prefix">Nom:  <span class="red-text text-darken-2">*</span> </label>
</div>
 </div>





<!--prenom-->
      <div class="row">
<div class="input-field col s12 ">
<i class="material-icons prefix">account_circle</i>
<input id="icon_prefix" type="text" class="validate"  name="prenom_etud"           pattern="[a-zA-Z]+[a-zA-Z]{1, }" title="Doit commencer par une lettre et ne contient pas de caractères spéciaux" autofocus required 
value="<?php echo $prenom ;?>">
<label for="icon_prefix">prenom:  <span class="red-text text-darken-2">*</span> </label>
</div>
 </div>


   
   <h5> <b> Poste Rechercher</b></h5> 
   <!--fonction-->
<div class="row">
 <div class="input-field col s12">
    <select  name="fonction_etud" id="fonction">
      <option value="<?php echo $fonction ?>">    <?php echo $fonction ?>   </option>
      <option value="(Indifférent) ">(Indifférent) </option>
      <option value="Achats / Logistique / Transport / Services généraux ">Achats / Logistique / Transport / Services généraux </option>
      <option value="Accueil, Hôtes(ses), Standardiste ">Accueil, Hôtes(ses), Standardiste </option>
       <option value="Adjoint(e) de direction / Assistant(e) de direction ">Adjoint(e) de direction / Assistant(e) de direction </option>
      <option value="Administrateur">Administrateur</option>
      <option value="Animation / Vente en magasin">Animation / Vente en magasin</option>
     <option value="Architecte, Expert">Architecte, Expert</option>
      <option value=" Assistanat / Secrétariat / Accueil "> Assistanat / Secrétariat / Accueil </option>
      <option value="Audit, Analyse ">Audit, Analyse </option>
     <option value="Avocat, Juridique, Contentieux, Fiscal ">Avocat, Juridique, Contentieux, Fiscal </option>
      <option value="Chantiers / Travaux ">Chantiers / Travaux </option>
      <option value="Chef de projet">Chef de projet</option>
      <option value="Commercial">Commercial</option>
      <option value="Communication ">Communication </option>
      <option value="Comptabilité">Comptabilité</option>
        <option value="Directeur">Directeur</option>
        <option value="Documentation / Traduction / Gestion de contenu / Journalisme ">Documentation / Traduction / Gestion de contenu / Journalisme </option>
      <option value="Développeur, Analyste programmeur ">Développeur, Analyste programmeur </option>
      <option value="Encadrement de chantier">Encadrement de chantier</option>
     <option value="Finance">Finance</option>
      <option value="Fonctions médicales, paramédicales et social">Fonctions médicales, paramédicales et social</option>
       <option value="Formation / Enseignement ">Formation / Enseignement </option>
      <option value="Gestion / Finance / Comptabilité / Juridique / Fiscal ">Gestion / Finance / Comptabilité / Juridique / Fiscal </option>
      <option value="Hôtellerie / Restauration / Loisirs ">Hôtellerie / Restauration / Loisirs </option>
      <option value="Import - Export ">Import - Export </option>
      <option value="Infirmier(e), Aide soignant(e) ">Infirmier(e), Aide soignant(e) </option>
      <option value="Informatique ">Informatique </option>
      <option value="Internet, Intranet, E-commerce, E-marketing ">Internet, Intranet, E-commerce, E-marketing </option>
      <option value="Manager, Chef des ventes ">Manager, Chef des ventes </option>
      <option value="Marketing / Communication / Création ">Marketing / Communication / Création </option>
      <option value="Métiers de l'hôtellerie ">Métiers de l'hôtellerie </option>
      <option value="Médecin, Soins ">Médecin, Soins </option>
      <option value="Métiers de la pharmacie ">Métiers de la pharmacie </option>
      <option value="Métiers de la publicité ">Métiers de la publicité </option>
      <option value=" Métiers de la télévente "> Métiers de la télévente </option>
       <option value="Métiers du Transport">Métiers du Transport</option>
      <option value= Ouvrier / compagnon> Ouvrier / compagnon</option>
      <option value="Ouvrier de production et de fabrication ">Ouvrier de production et de fabrication </option>
      <option value="PDG, Directeur Général">PDG, Directeur Général</option>
      <option value="Postes de direction ">Postes de direction </option>
      <option value="Relation clientèle ">Relation clientèle </option>
     <option value="Ressources humaines ">Ressources humaines </option>
      <option value="Secrétariat de direction ">Secrétariat de direction </option>
      <option value="XTechnicien de maintenance, sécurité, contrôle, assistance technique ">Technicien de maintenance, sécurité, contrôle, assistance technique </option>
     <option value="Technicien, Technicien d'exploitation">Technicien, Technicien d'exploitation</option>
      <option value=" Technico-commercial "> Technico-commercial </option>
      <option value="Tourisme, Loisirs">Tourisme, Loisirs</option>
      
    </select>
    <label>Fonction</label>
  </div>
</div>

<!-- seccteur-->

<div class="row">
 <div class="input-field col s12">
    <select  name="secteur" id="secteur">
      <option value="<?php echo $secteur ?>"><?php echo $secteur ?></option>
      <option value="Tous les secteurs ">Tous les secteurs </option>
      <option value="Agriculture / Agroalimentaire / Environnement ">Agriculture / Agroalimentaire / Environnement </option>
      <option value="Associatif / Art / Culture">Associatif / Art / Culture</option>
      <option value="Banques / Assurances / Finance ">Banques / Assurances / Finance </option>
      <option value="Commerce / Distribution ">Commerce / Distribution </option>
      <option value="Communication / Publicité / Média">Communication / Publicité / Média</option>
      <option value="Conseil / Consulting ">Conseil / Consulting </option>
      <option value="Construction / BTP / Immobilier ">Construction / BTP / Immobilier </option>
      <option value="Enseignement / Formation ">Enseignement / Formation </option>
      <option value="Industries">Industries</option>
      <option value="Informatique /Télécom ">Informatique /Télécom </option>
      <option value="Santé / Social ">Santé / Social </option>
      <option value="Secteur Public ">Secteur Public </option>
      <option value="Services aux entreprises">Services aux entreprises</option>
      <option value="Tourisme / Hôtellerie / Restauration / Loisirs ">Tourisme / Hôtellerie / Restauration / Loisirs </option>
       <option value="Transport / Logistique ">Transport / Logistique </option>
        
    </select>
    <label>Secteur</label>
  </div>
</div>


<!-- choix-->
<div class="row">
 <div class="input-field col s12">
    <select  name="type_empl" id="choix">
      <option value="<?php echo $choix ?>"><?php echo $choix?></option>
      <option value="stage">stage</option>
      <option value="temps partiel">temps partiel</option>
      <option value="emploi">emploi</option>
    </select>
    <label>EN</label>
  </div>
</div>




<!-- localisation-->
<div class="row">
 <div class="input-field col s12">
    <select  name="lieu" id="lieu">
      <option value="<?php echo $lieu ?>"><?php echo $lieu ?></option>
      <option value="Adrar">Adrar</option>
      <option value="Chlef">Chlef</option>
      <option value="Laghouat">Laghouat</option>
      <option value="Oum El Bouaghi">Oum El Bouaghi</option>
      <option value="Batna">Batna</option>
      <option value="Béjaia">Béjaia</option>
      <option value="Biskra">Biskra</option>
      <option value="Béchar">Béchar</option>
      <option value="Blida">Blida</option>
      <option value="Bouira">Bouira</option>
      <option value="Tamanrasset">Tamanrasset</option>
      <option value="Tébessa">Tébessa</option>
      <option value="Tlemcen">Tlemcen</option>
      <option value="Tiaret">Tiaret</option>
      <option value="Tizi Ouzou">Tizi Ouzou</option>
      <option value="Alger">Alger</option>
      <option value="Djelfa">Djelfa</option>
      <option value="Jijel">Jijel</option>
      <option value="Sétif">Sétif</option>
      <option value="Saida"> Saida</option>
      <option value="Skikda">Skikda</option>
      <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
      <option value="Annaba">Annaba</option>
      <option value="Guelma">Guelma</option>
      <option value="Constantine">Constantine</option>
      <option value="Médéa">Médéa</option>
      <option value="Mostganem">Mostganem</option>
      <option value="M'sila">M'sila</option>
      <option value="Mascara">Mascara</option>
      <option value="Ouargla">Ouargla</option>
      <option value="Oran">Oran</option>
      <option value="El Bayadh">El Bayadh</option>
      <option value="Illizi">Illizi</option>
      <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
      <option value="Boumerdès">Boumerdès</option>
      <option value="El Tarf">El Tarf</option>
      <option value="Tindouf">Tindouf</option>
      <option value="Tissemsilt">Tissemsilt</option>
      <option value="El Oued">El Oued</option>
      <option value="Khenchela">Khenchela</option>
      <option value="Souk Ahras">Souk Ahras</option>
      <option value="Tipaza">Tipaza</option>
      <option value="Mila">Mila</option>
      <option value="Ain Defla">Ain Defla</option>
      <option value="Naama">Naama</option>
      <option value="Ain Témouchent">Ain Témouchent</option>
      <option value="Ghardaia">Ghardaia</option>
      <option value="Relizane">Relizane</option>
     
    </select>
    <label>localisation</label>
  </div>
</div>

       <br>
    <div class="center-align boutton">   
   <button class="btn large waves-effect" type="submit"  name="action" onclick="if(window.confirm('voulez vous vraiment modifier votre CV?')){return true;}else{return false;}" >Valider

        </button>
        
     </div>
       
       </div>
        <br>
         </form>   
                       
                            
<script> $(document).ready(function() {
    $('select').material_select();
  });</script>              
                                
                                  
                                      
      
      
      
      
          <?php include('footer.php'); ?>
     </body></html>