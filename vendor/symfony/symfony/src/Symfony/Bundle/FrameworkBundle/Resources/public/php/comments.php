<?php
      $host="dwarves.iut-fbleau.fr";
      $servername="brassele";
      $username="brassele";
      $password="Il est mort";

     
			if(isset($_COOKIE['pseudo'])){ // si nostreamer
      
			$pseudoNostreamer = $_COOKIE['pseudo'];      
			$db = new PDO("mysql:host=$host;dbname=$servername",$username,$password);
        
      $messageComment = $_POST["comment"];
      $idVideo = $_POST["idVideo"];
      $idChannel = $_POST['idChannel'];
				
      $sql = "SELECT idNostreamer FROM Nostreamer WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute(); 
		  $result = $stmt->fetchAll();
			$idNostreamer = $result[0]['idNostreamer'];  
        
			$date = date("Y/m/d H:i:s");
      /*$sql = "INSERT INTO Comment
						(dateComment,messageComment,idVideo,idNostreamer,idChannel)
						VALUES
						('".$date."',
						 '".$messageComment."',
						 ".$idVideo.", 
						 ".$idNostreamer.",
						 ".$idChannel.")";
			$db->query($sql);  
  */
      $sql = "INSERT INTO Comment(dateComment,messageComment,idVideo,idNostreamer,idChannel)VALUES(:dateC,:msg,:idV,:idN,:idC)";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':idC',$idChannel);
      $stmt->bindParam(':idV',$idVideo); 
			$stmt->bindParam(':msg',$messageComment);
			$stmt->bindParam(':dateC',$date);
      $stmt->execute();  
				
			$sql = "SELECT idComment FROM Comment WHERE idNostreamer = :idN and idVideo=:idV and idChannel=:idC and messageComment=:msg ";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':idC',$idChannel);
      $stmt->bindParam(':idV',$idVideo); 	
			$stmt->bindParam(':msg',$messageComment);	
		  $stmt->execute(); 
		  $result = $stmt->fetchAll();
			$idComment = $result[0]['idComment'];  
				
      echo'
      <div id="'.$idComment.'" style="background-color: #dddddd;border: 1px ridge black;padding:10px;margin-left:20px;margin-bottom:10px;width:80%;overflow:hidden;" class="callout" data-closable="">
        <div style="border-bottom: solid 1px;">
          <img style="width:30px;height:30px;" src="met.jpg">
            <span style="margin-left:10px;">'.$pseudoNostreamer.'<small> le '.$date.'</small></span>
              <input name="idComment" value="'.$idComment.'" hidden="">
              <button style="outline:none;" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close="">
                <span aria-hidden="true">×</span>
              </button>
        </div>
        <p>'.$messageComment.'</p>
      </div>';
        
        
      }