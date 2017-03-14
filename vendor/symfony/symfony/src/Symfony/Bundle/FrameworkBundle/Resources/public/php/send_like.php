<?php

$host="dwarves.iut-fbleau.fr";
$servername="brassele";
$username="brassele";
$password="Il est mort";


$id = $_REQUEST["id"]; //ID DE LA VIDEO 
$nostreamer = //RECUPERE LE COOKIE DE SESSION ICI

$hint = "";

$db = new PDO("mysql:host=$host;dbname=$servername",$username,$password);
$sql = "INSERT INTO ...";
$stmt = $db->prepare($sql);
//$stmt->bindParam(':id',$id);
$stmt->execute();

//SI TU VEUX RENVOYER LE NOUVEAU NOMBRE D'INSCRIT, fait une requete select ici et renvoit le dans $result


echo json_encode($result);

?>

