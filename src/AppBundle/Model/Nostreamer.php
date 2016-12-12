<?php
class Nostreamer
{
    private $idNostreamer;
    private $mailNostreamer;
    private $pseudoNostreamer;
    private $passNostreamer;
    private $avatarNoStreamer;
    private $page;
    public function __construct($mailNostreamer, $pseudoNostreamer, $passNostreamer, $avatarNostreamer)
    {
      $this->mailNostreamer = $mailNostreamer;
		  $this->pseudoNostreamer = $pseudoNostreamer;
		  $this->passNostreamer = $passNostreamer;
		  $this->avatarNostreamer = $avatarNostreamer;
    }
  
    public function getFromPseudo($pseudo)
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM Nostreamer WHERE pseudoNostreamer =:pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Nostreamer");
		  $stmt->bindParam(':pseudo',$pseudo)
		  $stmt->execute();
		  return $stmt->fetch();
    }
  
    public function register($mailNostreamer, $pseudoNostreamer, $passNostreamer, $avatarNostreamer)
    {
      $db = Database::getInstance();
		  $sql = "INSERT INTO Nostreamer VALUES (:mail, :pseudo, :pass)";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':mail', $mailNostreamer);
		  $stmt->bindParam(':pseudo', $pseudoNostreamer);
		  $stmt->bindParam(':pass', $passNostreamer);
		  $stmt->execute();
    }
  
    public function signIn($mailNostreamer, $passNostreamer)
    {
      $db = Database::getInstance();
	  	$sql = "SELECT * FROM Nostreamer WHERE mailNostreamer = :mail";
	  	$stmt = $db->prepare($sql);
	  	$stmt->bindParam(':mail',$mailNostreamer);
	  	$stmt->execute();
	  	$res = $stmt->fetch();
	  	if ($res['passNostreamer'] == $passNostreamer ) {
	  		return true;
			}
	  	if ($res['passNostreamer'] != $passNostreamer ) {
	  	  return false;
	  	}
    }
    public function getMail()
    {
      return $this->mailNostreamer;
    }
  
    public function getPseudo()
    {
      return $this->pseudoNostreamer
    }

    public function getPass()
    {
      return $this->passNostreamer
    }
  
    public function getAvatar()
    {
      return $this->avatarNostreamer
    }
  
    public function getChannels()
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM channel WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Channel");
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute(); 
		  return $stmt->fetchAll();
    }
  
    public function getPage()
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM page WHERE owner = :pseudo";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute();
		  return $stmt->fetchAll();
    }

    public function setMail($mailNostreamer)
    {
      $db = Database::getInstance();
		  $sql = "UPDATE user SET mailNostreamer = :mail WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->bindParam(':mail',$mailNostreamer);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute();
    }
  
    public function setPseudo($pseudoNostreamer)
    {
      $db = Database::getInstance();
		  $sql = "UPDATE Nostreamer SET pseudoNostreamer = :pseudo1 WHERE pseudoNostreamer = :pseudo2";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->bindParam(':pseudo1',$pseudoNostreamer);
		  $stmt->bindParam(':pseudo2',$pseudoNostreamer); //WATCH OUT WATCH OUT WATCH OUT
		  $stmt->execute();
		  $this->pseudoNostreamer = $pseudo;
    }
  
    public function setPass($old, $new)
    {
      $db = Database::getInstance();
		  $sql = "SELECT pass FROM Nostreamer WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute();
		  $res = $stmt->fetch();
		  if ($res['pass'] == $old ) {
		  	if ($old != $new) {
		  		$sql = "UPDATE Nostreamer SET passNostreamer = :passNostreamer WHERE pseudoNostreamer = :pseudo";
		  		$stmt = $db->prepare($sql);
	  			$stmt->setFetchMode(PDO::FETCH_ASSOC);
		  		$stmt->bindParam(':passNostreamer',$new);
		  		$stmt->bindParam(':pseudo',$pseudoNostreamer);
		  		$stmt->execute($new,$this->pseudoNostreamer);
		  	}
 	  	}
	  if ($res['mdpN'] != $mdp ) {
	    	echo "<h2>Votre mot de passe est incorrecte veuillez réessayer</h2>";
	  }
		  $this->passNostreamer = $new; 
    }
  
    public function setAvatar($avatarNostreamer)
    {
      $db = Database::getInstance();
		  $sql = "UPDATE nostreamer SET avatarNostreamer = :avatar WHERE pseudoNostreamer = :pseudo";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->bindParam(':avatar',$avatarNostreamer);
		  $stmt->bindParam(':pseudo',$pseudoNostreamer);
		  $stmt->execute();
		  $this->avatarNostreamer = $avatar;
    }
}
