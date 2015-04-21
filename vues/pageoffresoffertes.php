<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/backbutton.html";
    include "vues/entetepage.html";
?>
<div data-role="collapsible-set" id="divliste"> 
    <!-- <ul data-role="listview" id="lstoffres" > -->
<?php
    $jour = "";
    $openedDiv = false;
    foreach ($lesOffres as $uneOffre){
        if($jour!=$uneOffre['jour']){
            $jour=$uneOffre['jour'];
            if ($openedDiv == true)
            {
?>
        </div>
<?php
            }
            $openedDiv = true;
?>
        <div data-role="collapsible">
            <h3 data-theme="b"><?php echo $jour ?></h3>
<?php 
        } //fin si
?>
            <a href ="#pageoffre" ><?php echo $uneOffre['date']." à ".$uneOffre['heure']." pour ".$uneOffre['retour']?> </a></br>
<?php 
    } //fin foreach
?>   
   <!--  </ul> -->
    </div>
    </div><!-- /content -->
<?php    
    include "vues/pied.html";
?>
</div> <!-- /page -->