<?php
session_start();
?>
<div data-role="page" id="pageoffresoffertes">
<?php
    include "vues/entetepageavecboutonretour.html";
?>
    <div data-role="content" >
        <div data-role="collapsible-set" id="divliste" data-theme="c">

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
}
else
{
    ?>
    Acces interdit aux utilisateurs non authentifies
    <?php
}

?>
      </div>  <!-- /fin dernier collapsible -->
 </div>  <!-- /fin collapsible-set -->
 </div> <!-- fin content-->
    <?php
include "vues/pied.html";
?>
</div><!-- fin page-->