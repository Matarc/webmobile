<?php
session_start();
?>
<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/entetepageavecboutonretour.html";
?>
    <div data-role="content" >

<?php
$i = 0;
$jour = "";
/*switch($_GET['type_offre'])
{
    case "nav_offres_depart":
    case "btn_offres_depart":
        $_SESSION['offres'] = getLesOffresDepartEntreprise();
        break;
    case "nav_offres_arrive":
    case "btn_offres_arrive":
        $_SESSION['offres'] = getLesOffresArriveeEntreprise();
        break;
}*/
if (isset($_SESSION['login']) && !empty($_SESSION['login']))
{
    if (isset($_SESSION['mesoffres']) && !empty($_SESSION['mesoffres']))
    {
        unset($_SESSION['mesoffres']);
        ?>
        <form>
        <fieldset data-role="controlgroup">
        <legend>Mes offres au départ de l'entreprise</legend>
        <?php
        $mes_offres_depart = getMesOffres(getLesOffresDepartEntreprise(), $_SESSION['login']);
        foreach ($mes_offres_depart as $offre)
        {
            ?>
            <input name="<?php echo 'checkbox_offre_'.$offre['id'] ?>" id="<?php echo 'checkbox_offre_'.$offre['id'] ?>" type="checkbox">
            <label for="<?php echo 'checkbox_offre_'.$offre['id'] ?>"><?php echo $offre['jour']." ".$offre['date']." ".$offre['heure'] ?></label>
            <?php
        }
        ?>
        </fieldset>
        <fieldset data-role="controlgroup">
        <legend>Mes offres à l'arrivée de l'entreprise</legend>
        <?php
        $mes_offres_depart = getMesOffres(getLesOffresArriveeEntreprise(), $_SESSION['login']);
        foreach ($mes_offres_depart as $offre)
        {
            ?>
            <input name="<?php echo 'checkbox_offre_'.$offre['id'] ?>" id="<?php echo 'checkbox_offre_'.$offre['id'] ?>" type="checkbox">
            <label for="<?php echo 'checkbox_offre_'.$offre['id'] ?>"><?php echo $offre['jour']." ".$offre['date']." ".$offre['heure'] ?></label>
            <?php
        }
        ?>
        </fieldset>
        <a href="#" data-role="button" data-icon="delete" class="ui-btn-inline ui-btn-icon-left" id="btn_supprimer">Supprimer</a>
        </form>
        <?php
    }
    else
    {
        ?>
                <div data-role="collapsible-set" id="divliste" data-theme="c">
        <?php
        $lesOffres = $_SESSION['offres'];
        foreach ($lesOffres as $uneOffre){
            if($jour!=$uneOffre['jour']){
                $jour=$uneOffre['jour'];
                if($i!=0){
                ?>
                  </ul>
                    </div><!-- /fin collapsible -->
                 <?php } ?>
                    <div data-role="collapsible" >
                        <h3><?php echo $jour ?></h3>
                     <ul data-role="listview" id="lstoffres">
                <?php
             }
                 ?>
                      <li id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre">
                            <?php echo $uneOffre['date']." à ".$uneOffre['heure']." pour ".$uneOffre['retour']?>
                            </a>
                      </li>
                  <?php
            $i++;
        }
        ?>
                      </div>  <!-- /fin dernier collapsible -->
 </div>  <!-- /fin collapsible-set -->
 <?php
    }
}
else
{
    ?>
    Acces interdit aux utilisateurs non authentifies
    <?php
}

?>

 </div> <!-- fin content-->
    <?php
include "vues/pied.html";
?>
</div><!-- fin page-->