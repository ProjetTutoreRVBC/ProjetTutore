<?php
      $host="dwarves.iut-fbleau.fr";
      $servername="brassele";
      $username="brassele";
      $password="Il est mort";

     
			if(isset($_COOKIE['pseudo'])){ // si nostreamer
      
			$pseudoNostreamer = $_COOKIE['pseudo'];      
			$db = new PDO("mysql:host=$host;dbname=$servername",$username,$password);
      
      $idComment = $_POST["idComment"];
				
      $sql = "SELECT idNostreamer FROM Nostreamer WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute(); 
		  $result = $stmt->fetchAll();
			$idNostreamer = $result[0]['idNostreamer'];    
        
      $sql = "DELETE FROM Comment WHERE idComment = :id and idNostreamer =:idN";
			$stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$idComment);
			$stmt->bindParam(':idN',$idNostreamer);
		  $stmt->execute();
        
      }