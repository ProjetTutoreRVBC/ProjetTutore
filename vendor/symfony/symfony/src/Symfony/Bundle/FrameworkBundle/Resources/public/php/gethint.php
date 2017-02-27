<?php

$host="dwarves.iut-fbleau.fr";
$servername="brassele";
$username="brassele";
$password="Il est mort";


$q = $_REQUEST["q"];
echo $q;

$hint = "";

$db = new PDO("mysql:host=$host;dbname=$servername",$username,$password);
$sql = "SELECT * FROM Video WHERE nameVideo LIKE '%".$q."%' ORDER BY nameVideo DESC LIMIT 0,20";
$stmt = $db->prepare($sql);
//$stmt->bindParam(':q',$q);
$stmt->execute(); 
$result = $stmt->fetchAll();
var_dump($result);
return $result;

?>

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
