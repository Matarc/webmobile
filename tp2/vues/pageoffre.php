<div data-role="page" id="pageoffre">
<?php
include "vues/entetepageavecboutonretour.html";
?>
 <div data-role="content" >
     <div id="offre">
         <div id="offre_nom"></div></br>
         <div id="offre_prenom"></div>
         <div id="offre_etapes"></div>
         <ul id="liste_etapes">
         </ul>
     </div>
     <div class="ui-grid-d">
        <div class="ui-block-a"></div>
        <div class="ui-block-b"><a id="btn_appeler" href="" data-role="button" data-icon="grid" class="ui-mini ui-btn-inline ui-btn-icon-left">Appeler</a></div>
        <div class="ui-block-c"></div>
        <div class="ui-block-d"><a id="btn_contacter" href="" data-role="button" class="ui-mini ui-btn-inline">Contacter</a></div>
     </div>
 </div>
<?php
    include "vues/pied.html";
?>
</div>