<?php
$sliderdepart = $_REQUEST['sliderdepart'];
$slideroffre = $_REQUEST['slideroffre'];
$data = '';

if ($slideroffre == 'on')
{
    $data = $data.'Offre ponctuelle : '.$_REQUEST['date']."\n";
}
else
{
    $data = $data.'Offre permanente : '.$_REQUEST['jouroffre']."\n";
}

$data = $data.'Heure : '.$_REQUEST['heuredepart'].'h'.$_REQUEST['minutedepart']."\n";
$data = $data.'Lieu : '.$_REQUEST['lieu']."\n";

if ($sliderdepart == 'off')
{
    $data = $data."Point de ramassage : \n";
    for ($id = 0; isset($_REQUEST['ptramassage'.$id]); ++$id)
    {
        $data = $data.$_REQUEST['ptramassage'.$id]."\n";
    }
}

echo $data;

?>
