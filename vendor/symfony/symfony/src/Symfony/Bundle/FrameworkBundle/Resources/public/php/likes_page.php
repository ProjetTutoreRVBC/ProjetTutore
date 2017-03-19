<?php
      $host="dwarves.iut-fbleau.fr";
      $servername="brassele";
      $username="brassele";
      $password="Il est mort";
			
			if(isset($_COOKIE['pseudo'])){ // si nostreamer
				
			$pseudoNostreamer = $_COOKIE['pseudo'];      
			$db = new PDO("mysql:host=$host;dbname=$servername",$username,$password);

      $like = $_POST["likes"];
      $dislike = $_POST["dislikes"];
      $type = "insert";
      $idPost = $_POST['idPost'];
      
				
				
      $sql = "SELECT idNostreamer FROM Nostreamer WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute(); 
		  $result = $stmt->fetchAll();
			$idNostreamer = $result[0]['idNostreamer'];
        
			$sql = "SELECT * from votePost WHERE idNostreamer = :idN and idPost = :idP";
			$stmt = $db->prepare($sql);
		  $stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':idP',$idPost);
		  $stmt->execute();
		  $vote = $stmt->fetchAll();
        
     if($vote) 
           $type = "update";
        
			if($type == "insert"){
		  $sql = "INSERT INTO votePost(idNostreamer,idPost,likes,dislikes) VALUES (:idN,:idP,:like,:dislike)";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':idP',$idPost);
			$stmt->bindParam(':like',$like);
			$stmt->bindParam(':dislike',$dislike);
			$stmt->execute();	
			}
			if($type == "update"){
			$sql = "UPDATE votePost set dislikes = :dislike, likes = :like where idPost = :id and idNostreamer=:idN";
			$stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$idPost);
			$stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':like',$like);
			$stmt->bindParam(':dislike',$dislike);	
		  $stmt->execute();
			}
			
			$sql = "select sum(likes) from votePost where idPost = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$idPost);
		  $stmt->execute();
			$result = $stmt->fetchAll();
			$post_like = $result[0]['sum(likes)'] ? $result[0]['sum(likes)'] : 0;
			
			$sql = "select sum(dislikes) from votePost where idPost = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$idPost);
		  $stmt->execute();
			$result = $stmt->fetchAll();
			$post_dislike = $result[0]['sum(dislikes)'] ? $result[0]['sum(dislikes)'] : 0;
			
		  $sql = "UPDATE Post set likes = :like,dislikes=:dislike where idPost = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$idPost);
			$stmt->bindParam(':like',$post_like);
			$stmt->bindParam(':dislike',$post_dislike);
		  $stmt->execute(); 
        
      }