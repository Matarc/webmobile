
<?php
    session_start();
require_once '../util/fonctions.php';
    $id = $_GET['id'];
    $offres = $_SESSION['offres'];
    /*echo $_GET['type_offre'];
    switch($_GET['type_offre'])
    {
        case "nav_offres_depart":
        case "btn_offres_depart":
            $offres = getLesOffresDepartEntreprise();
            break;
        case "nav_offres_arrive":
        case "btn_offres_arrive":
            $offres = getLesOffresArriveeEntreprise();
            break;
    }*/
    for ($cnt = 0; $cnt < count($offres); ++$cnt)
    {
        if ($offres[$cnt]['id'] == $id)
        {
            echo json_encode($offres[$cnt]);
            break;
        }
    }
?>
