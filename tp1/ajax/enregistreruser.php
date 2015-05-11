<?php
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$mail = $_REQUEST['mail'];
$type = $_REQUEST['type'];
$tel = $_REQUEST['tel'];
// enregistrerEnBase(...); pas dans cette itération
// générer le nom de user : à faire
// générer le mdp travail à faire

$charset = array();
$i = 0;

/*
** Remplissage d'un tableau avec toutes les lettres de l'alphabet minuscule
*/
for ($ch = 'a'; ord($ch) + $i <= ord('z'); ++$i)
{
	$charset[$i] = chr(ord($ch) + $i);
}

/*
** Remplissage d'un tableau avec toutes les lettres de l'alphabet majuscule
*/
for ($ch = 'A', $cnt = 0; ord($ch) + $cnt <= ord('Z'); ++$i, ++$cnt)
{
	$charset[$i] = chr(ord($ch) + $i);
}

/*
** Remplissage d'un tableau avec toutes les chiffres
*/
for ($cnt = $i; $i - $cnt < 10; ++$i)
{
	$charset[$i] = $i - $cnt;
}
--$i;

/*
** Creation du login compose de la premiere lettre du prenom et du nom
*/
$login = $prenom[0].$nom;
/*
** Creation d'un mot de passe aleatoire de 4 lettres/chiffres
*/
$mdp = "".$charset[rand(0, $i)].$charset[rand(0, $i)].$charset[rand(0, $i)].$charset[rand(0, $i)];



echo " login : ".$login."<br>Mot de passe : ".$mdp."<br>Merci de votre visite et à bientôt";
?>
