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
      $id = $_POST['idVideo'];
				
      $sql = "SELECT idNostreamer FROM Nostreamer WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute(); 
		  $result = $stmt->fetchAll();
			$idNostreamer = $result[0]['idNostreamer'];
        
      $sql = "SELECT * from voteVideo where idVideo = :id and idNostreamer = :idN";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':idN', $idNostreamer);
			$stmt->execute();
			$vote = $stmt->fetchAll();
      
      if($vote)
          $type = "update";

			if($type == "insert"){
		  $sql = "INSERT INTO voteVideo(idNostreamer,idVideo,likes,dislikes) VALUES (:idN,:idP,:like,:dislike)";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':idP',$id);
			$stmt->bindParam(':like',$like);
			$stmt->bindParam(':dislike',$dislike);
			$stmt->execute();	
			}
			if($type == "update"){
			$sql = "UPDATE voteVideo set dislikes = :dislike, likes = :like where idVideo = :id and idNostreamer=:idN";
			$stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
			$stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':like',$like);
			$stmt->bindParam(':dislike',$dislike);	
		  $stmt->execute();
			}
			
			$sql = "select sum(likes) from voteVideo where idVideo = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
		  $stmt->execute();
			$result = $stmt->fetchAll();
			$post_like = $result[0]['sum(likes)'] ? $result[0]['sum(likes)'] : 0;
			
			$sql = "select sum(dislikes) from voteVideo where idVideo = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
		  $stmt->execute();
			$result = $stmt->fetchAll();
			$post_dislike = $result[0]['sum(dislikes)'] ? $result[0]['sum(dislikes)'] : 0;
			
		  $sql = "UPDATE `Video` set likes = :like,dislikes=:dislike where idVideo = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
			$stmt->bindParam(':like',$post_like);
			$stmt->bindParam(':dislike',$post_dislike);
		  $stmt->execute();
			}