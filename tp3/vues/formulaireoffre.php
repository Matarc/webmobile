<div data-role="page" id="pageformulaireoffre">
 <?php
include "vues/entetepageavecboutonretour.html";
?>
 <div data-role="content" id="divformulaireoffre">
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
            </div>
            <input type="submit" name="submit" id="btnenvoyer" value="Envoyer" />


        </div>
        </form>


    </div>
  <?php
    include "vues/pied.html";
?>
</div>