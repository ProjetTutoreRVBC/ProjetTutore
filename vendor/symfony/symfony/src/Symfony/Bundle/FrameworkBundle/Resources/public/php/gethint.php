<?php

$host="dwarves.iut-fbleau.fr";
$servername="brassele";
$username="brassele";
$password="Il est mort";


$q = $_REQUEST["q"];


$hint = "";

$db = new PDO("mysql:host=$host;dbname=$servername",$username,$password);
$sql = "SELECT nameVideo FROM Video WHERE nameVideo LIKE '%".$q."%' ORDER BY nameVideo DESC LIMIT 0,20";
$stmt = $db->prepare($sql);
//$stmt->bindParam(':q',$q);
$stmt->execute(); 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);

?>

