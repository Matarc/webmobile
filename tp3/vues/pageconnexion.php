<div data-role="page" id="pageconnexion">
<?php
include "vues/entetepage.html";
include "vues/logo.html";
?>
<div data-role="content" id="divconnexion">
   <!-- si on n'indique pas rel=external, charge tout le document -->
   <a href="index.php?action=inscription" data-role="button" data-inline="true" rel="external">Vous inscrire</a>
    <div data-role="fieldcontain">

        <label for="login">Login </label>
        <input type="text" name="login" id="login" value="" />
        <label for="login">Mot de passe </label>
        <input type="password" name="mdp" id="mdp" value="" />

     </div>
   <div id="message" data-theme="e"></div>
     <p>
       <a href="#" rel="external" data-role="button" id="btnconnexion" >Connexion</a>
     </p>
        </div><!-- /content -->
    <div data-role="content" id="linkformoffre" style="display:none">
        <a href="index.php?action=creeroffre" data-role="button" id="btnlinkformoffre">Créer offre</a>
    </div>
    <!--<div data-role="content" id="divformulaireoffre" style="display:none">
        <form action="#" id="formoffre" rel="external">
        <div data-role="fieldcontain" id ="champsoffre">
            <label for="sliderdepart">Départ</label>
            <select name="sliderdepart" id="sliderdepart" data-role="slider">
            <option value="off">Domicile</option>
            <option value="on">Entreprise</option>
            </select></br>
            <label for="slideroffre">Offre</label>
            <select name="slideroffre" id="slideroffre" data-role="slider">
            <option value="off">Permanent</option>
            <option value="on">Date</option>
            </select></br>
            <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain" id="jouroffre">
            <legend>Jour proposé</legend>
            <input type="radio" name="lundi" id="lundi" value="lundi" />
            <label for="lundi">Lu</label>

            <input type="radio" name="mardi" id="mardi" value="mardi"  />
            <label for="mardi">Ma</label>

            <input type="radio" name="mercredi" id="mercredi" value="mercredi"  />
            <label for="mercredi">Me</label>

            <input type="radio" name="jeudi" id="jeudi" value="jeudi"  />
            <label for="jeudi">Je</label>
            <input type="radio" name="vendredi" id="vendredi" value="vendredi"  />
            <label for="vendredi">Ve</label>
            </fieldset>
            <label for="heuredepart">Indiquer l'heure de départ :</label>
            <input type="range" name="heuredepart" id="heuredepart" value="6" min="6" max="23" /></br>
            <label for="minutedepart">Indiquer l'heure de départ :</label>
            <input type="range" name="minutedepart" id="minutedepart" value="0" min="0" max="55" step="5"/></br>
            <label for="date" style="display:none" id="labeldate">Date</label>
            <input type="date" name="date" id="date" class="required date" value="" placeholder="05/12/2014" style="display:none"/>
            <label for="lieu">Lieu proposé</label>
            <input type="text" name="lieu" id="lieu" value=""/></br>
            <label id="labelptramassage">Points éventuels de ramassage sur le parcours</label>
            <a href="#" data-role="button" data-icon="plus" data-inline="true" rel="external" id="btnptramassage">Ajouter un point de ramassage</a>
            <div id="listinputptramassage">
            <input data-role="none" type="text" name="ptramassage" id="ptramassage" value="" />
            </div>
            <a href="#" data-role="button" id="btnenvoyer">Envoyer</a>-->

        <!--<label for="nom" id="testnom">Nom </label>
        <input type="text" name="nom" id="nom" class="required" value=""/>
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="required" value="" />
        <label for="mail">Mail</label>
        <input type="text" name="mail" id="mail" class="required email" value="" />
        <label for="tel">téléphone</label>
        <input type="text" name="tel" id="tel" class="required digits" minlength="10" maxlength="10" value=""  />
        <label id="message"></label>
        <fieldset data-role="controlgroup" data-mini="true" data-type="horizontal">
            <legend>Indiquer votre service</legend>
            <input name="type" id="rdre" type="radio" checked="checked" value="recherche">
            <label for="rdre">Recherche</label>
            <input name="type" id="rdpr" type="radio" value="production">
            <label for="rdpr">Production</label>
            <input name="type" id="rdco" type="radio" value="commercial">
            <label for="rdco">Commercial</label>
            <input name="type" id="rdse" type="radio" value="securite">
            <label for="rdse">Securite</label>
        </fieldset>
          <input type="submit" name="submit" id="btninscription" value="Envoyer" />
        </div>
        </form>-->

<?php
include "vues/pied.html";
?>
    </div>
