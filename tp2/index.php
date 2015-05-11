<?php
session_start();
require_once 'util/fonctions.php';
if(!isset($_REQUEST['action']))
    $action = 'accueil';
else
    $action = $_REQUEST['action'];
 include "vues/entete.html";
switch($action)
{
    case 'accueil':
        include "vues/pageconnexion.php";
        include "vues/pagemenuaccueil.php";
        break;
    case 'inscription':
       include "vues/pageinscription.php";
        break;
    case 'gereroffresdepartentreprise':
        $_SESSION['offres'] = getLesOffresDepartEntreprise();
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffre.php";
        break;
    case 'gereroffresarriveeentreprise':
        $_SESSION['offres'] = getLesOffresArriveeEntreprise();
        include "vues/pageoffresoffertes.php";
        include "vues/pageoffre.php";
        break;

}













?>
</body>
</html>
