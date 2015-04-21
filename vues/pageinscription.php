<div data-role="page" id="pageinscription">
<?php
include "vues/backbutton.html";
include "vues/entetepage.html";
include "vues/logo.html";
?>
<div data-role="content">       
   <a href="index.php?action=inscription" rel="external">Vous inscrire</a> 
    <div data-role="fieldcontain">
        <label for="nom">Nom </label>
        <input type="text" name="nom" id="nom" value="" />
        <label for="prenom">Prenom </label>
        <input type="text" name="prenom" id="prenom" value="" />
        <label for="mail">Mail </label>
        <input type="text" name="mail" id="mail" value="" />
        <label for="tel">Telephone</label>
        <input type="text" name="tel" id="tel" value="" />
        <fieldset data-role="controlgroup" data-type="horizontal">
        	<input type="radio" name="type" id="radio-recherche" value="recherche" data-role="button"/>
        	<label for="radio-recherche">Recherche</label>
        	<input type="radio" name="type" id="radio-production" value="production" data-role="button"/>
        	<label for="radio-production">Production</label>
        	<input type="radio" name="type" id="radio-commercial" value="commercial" data-role="button"/>
        	<label for="radio-commercial">Commercial</label>
        	<input type="radio" name="type" id="radio-securite" value="securite" data-role="button"/>
        	<label for="radio-securite">Securite</label>
        </fieldset>
        <button data-role="button" id="btninscription" >Envoyer</button>



    </div>
    <div id ="divinscription"></div>
        <p>
         </p>
    </div><!-- /content -->
 <?php
   include "vues/pied.html";
?>
    </div><!-- /content -->
</div><!-- /page -->