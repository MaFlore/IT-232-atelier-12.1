<?php
header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: no-cache . private");
header("Pragma: no-cache");
sleep(2);
if(isset($_REQUEST['nom']))
{ 
    $nom = $_REQUEST['nom'];
}
else
{
    $nom = "inconnu";
}


$gain = rand(0,100);

$resultat = 'Bravo, M <span id="gagnant">'.$nom.'</span>&nbsp; vous avez gagné 
            <span id="resultat">'.$gain.'</span>&nbsp;Euros';

echo $resultat;

?>