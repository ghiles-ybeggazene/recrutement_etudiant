<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
      <link href="fonts/material/material-icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inscription Etudiant</title>
    
    <style>
        
		div.ins{margin:8vh 15vw;padding: 15px;border-radius: 10px;background-color: white;}
        body{background-color: rgb(240,240,240)}
        .butn{width: 20vw;font-size: 1.4em;}
         @media screen and (max-width:680px){
          div.ins{width: 100%;margin: 0 0;margin-top: 3vh}   
          body{background-color: rgb(240,240,240)}
    	  div{margin-left: auto;margin-right: auto;}
          .bttn{width: 50%;font-size: 1.4em}
          .butn{width: 90%; margin-top: 2vh}}
        
    
    </style>
    
    <script>
    
    
    function VerificationDestinataire(nbCheck) {
		  
	
		  
		
		  
       if (document.getElementById('fonction').options[0].selected) {
       	alert('Veuillez choisir une fonction .');
        return false;
       }
     if (document.getElementById('secteur').options[0].selected) {
       	alert('Veuillez sélectionner un secteur .');
        return false;
       }
         if (document.getElementById('choix').options[0].selected) {
       	alert('Veuillez sélectionner le choix d"emplois .');
        return false;
       }
        
        
     if (document.getElementById('lieu').options[0].selected) {
       	alert('Veuillez sélectionner une wilaya .');
        return false;
       }
    
    
    
    
    }
    
    </script>
</head>
<body>
    
</body>
 <!--Import jQuery before materialize.js-->
   <?php include('menu.php') ?>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
       
       
       
       
       <form name="formulaire" action="ins_etudiant.php" method="post" onSubmit="return (VerificationDestinataire(this));" enctype="multipart/form-data">
           
       
     
      <div class="row ins  z-depth-5">
     
      <div class=" center-align">
          <i class=" medium material-icons  " center-align>description</i>
             <br>
            <h5> <b class="con">Inscription</b></h5> 
            </div>
     
   <h5> <b> Information personnelles</b></h5> 
     
     





      <div class="row">
<div class="input-field col s12 ">
<i class="material-icons prefix">account_circle</i>
<input id="icon_prefix" type="text" class="validate"  name="nom_etud"           pattern="[a-zA-Z]+[a-zA-Z]{1, }" title="Doit commencer par une lettre et ne contient pas de caractères spéciaux" autofocus required>
<label for="icon_prefix">Nom:  <span class="red-text text-darken-2">*</span> </label>
</div>
 </div>





<!--prenom-->
      <div class="row">
<div class="input-field col s12 ">
<i class="material-icons prefix">account_circle</i>
<input id="icon_prefix" type="text" class="validate"  name="prenom_etud"pattern="[a-zA-Z]+[a-zA-Z]{1, }" title="Doit commencer par une lettre et ne contient pas de caractères spéciaux" autofocus required>
<label for="icon_prefix">prenom:  <span class="red-text text-darken-2">*</span> </label>
</div>
 </div>

<!-- adresse-->
<div class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
<input id="icon_prefix" type="email" class="validate"  name="email_etud"           pattern="[a-zA-Z0-9]+[a-zA-Z0-9]{1, }" title="Doit commencer par une lettre et ne contient pas de caractères spéciaux" autofocus required>
<label for="icon_prefix">adresse email:  <span class="red-text text-darken-2">*</span> </label>
                

    </div>
    
</div> 

<!--telephone-->
      <div class="row">
       <div class="input-field col s12 ">
                <i class="material-icons prefix">phone</i>
                <input id="telephone" type="tel" class="validate" name="tel_etud"  pattern="0[5-7]+[0-9]{8,}" title="Doit commencer par un zero et ne contient pas d'espaces ou de lettres ou de caractères spéciaux" autofocus required>
                <label for="icon_telephone">Telephone <span class="red-text text-darken-2">*</span></label>
              </div>  
               </div>
       
<div class="row">
    <div class="input-field col s12">
          <i class="material-icons prefix">supervisor_account</i>
          <input id="username" type="text" class="validate" name="login_etud" pattern="[a-zA-Z]+[a-zA-Z_- ]{1,}" title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux" autofocus required>
          <label for="icon_prefix">Nom d'utilisateur :<span class="red-text text-darken-2">*</span></label>
        </div></div>


      
    
      <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required name="mdp_etud"  id="pass" type="password" class="validate"  >
          <label for="icon_telephone">Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
         </div>
  


      <div class="row">
     <div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
          <input required  name="pass2"  id="pass2"  type="password" class="validate" >
          <label for="icon_telephone">Confirmer Mot de passe : <span class="red-text text-darken-2">*</span></label>
        </div>
        </div>
   

   
   <h5> <b> Poste Rechercher</b></h5> 
   <!--fonction-->
<div class="row">
 <div class="input-field col s12">
    <select  name="fonction_etud" id="fonction">
      <option value="" disabled selected>choisiser la fonction recherer</option>
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
      <option value="" disabled selected>choisiser la secteur recherer</option>
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
    <label>Séléctionner le secteur souhaité</label>
  </div>
</div>


<!-- choix-->
<div class="row">
 <div class="input-field col s12">
    <select  name="type_empl" id="choix">
      <option value="" disabled selected>choisiser se que vous chercher</option>
      <option value="stage">stage</option>
      <option value="temps partiel">temps partiel</option>
      <option value="emploi">emploi</option>
    </select>
    <label>Séléctionner le type d'emploi souhaité</label>
  </div>
</div>




<!-- localisation-->
<div class="row">
 <div class="input-field col s12">
    <select  name="lieu" id="lieu">
      <option value="" disabled selected>choisiser le lieux que vous souhaiter travailler</option>
      <option value="Adrar">1-Adrar</option>
      <option value="Chlef">2-Chlef</option>
      <option value="Laghouat">3-Laghouat</option>
      <option value="Oum El Bouaghi">4-Oum El Bouaghi</option>
      <option value="Batna">5-Batna</option>
      <option value="Béjaia">6-Béjaia</option>
      <option value="Biskra">7-Biskra</option>
      <option value="Béchar">8-Béchar</option>
      <option value="Blida">9-Blida</option>
      <option value="Bouira">10-Bouira</option>
      <option value="Tamanrasset">11-Tamanrasset</option>
      <option value="Tébessa">12-Tébessa</option>
      <option value="Tlemcen">13-Tlemcen</option>
      <option value="Tiaret">14-Tiaret</option>
      <option value="Tizi Ouzou">15-Tizi Ouzou</option>
      <option value="Alger">16-Alger</option>
      <option value="Djelfa">17-Djelfa</option>
      <option value="Jijel">18-Jijel</option>
      <option value="Sétif">19-Sétif</option>
      <option value="Saida"> 20-Saida</option>
      <option value="Skikda">21Skikda</option>
      <option value="Sidi Bel Abbès">22-Sidi Bel Abbès</option>
      <option value="Annaba">23-Annaba</option>
      <option value="Guelma">24-Guelma</option>
      <option value="Constantine">25-Constantine</option>
      <option value="Médéa">26-Médéa</option>
      <option value="Mostganem">27-Mostganem</option>
      <option value="M'sila">28-M'sila</option>
      <option value="Mascara">29-Mascara</option>
      <option value="Ouargla">30-Ouargla</option>
      <option value="Oran">31-Oran</option>
      <option value="El Bayadh">32-El Bayadh</option>
      <option value="Illizi">33-Illizi</option>
      <option value="Bordj Bou Arreridj">34-Bordj Bou Arreridj</option>
      <option value="Boumerdès">35-Boumerdès</option>
      <option value="El Tarf">36-El Tarf</option>
      <option value="Tindouf">37-Tindouf</option>
      <option value="Tissemsilt">38-Tissemsilt</option>
      <option value="El Oued">39-El Oued</option>
      <option value="Khenchela">40-Khenchela</option>
      <option value="Souk Ahras">41-Souk Ahras</option>
      <option value="Tipaza">42-Tipaza</option>
      <option value="Mila">43-Mila</option>
      <option value="Ain Defla">44-Ain Defla</option>
      <option value="Naama">45-Naama</option>
      <option value="Ain Témouchent">46-Ain Témouchent</option>
      <option value="Ghardaia">47-Ghardaia</option>
      <option value="Relizane">48-Relizane</option>
     
    </select>
    <label>Sélectionner une wilaya</label>
  </div>
</div>





<!-- CV-->
  <div class="row">
   <b><h5>MON CV</h5></b>
    <div class="file-field input-field col s12">
      <div class=" btn bttn #4db6ac teal lighten-2">
        <span>Parcourir</span>
        <input type="file" autofocus required name="avatar">
      </div>
      <div class="file-path-wrapper ">
        <input class="file-path validate" type="text" autofocus required>
      </div>
      </div></div>
 
    <b>Les docs accéptés sont: png ,gif ,jpeg ,jpg</b>
  
   

          

<div class="center-align">
  <button class="btn waves-light #4db6ac teal lighten-2 center-align butn" type="submit" name="submit" >Enregistrer
  </button>

</div>



</div>

   </form>


 <?php include('footer.php'); ?>











 


 <script> $(document).ready(function() {
    $('select').material_select();
  });</script>
       
       
       
       
       
       
       
       
       
       
       
       
</html>