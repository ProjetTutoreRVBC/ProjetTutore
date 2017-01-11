<?php
class Channel
{
    private $idChannel;
    private $nameChannel;
    private $nostreamer;
    private $subscribersChannel;
    private $descriptionChannel;
    private $creationDateChannel;
    private $viewsChannel;
    public function __construct($nameChannel, $idNostreamer, $descriptionChannel)
    {
      $this->nameChannel = $nameChannel;
		  $this->idNostreamer = $idNostreamer;
		  $this->descriptionChannel = $descriptionChannel;
    }
  
    public function getFromid($idNostreamer)
    {
      $db = Database::getInstance();
		  $sql = "SELECT idChannel FROM channel WHERE idNostreamer = :id";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Channel");
		  $stmt->bindParam(':id',$idNostreamer);
		  $stmt->execute(); 
		  return $stmt->fetchAll();
    }
	
			public function addChannel($nameChannel,$avatarChannel,$banniereChannel,$descriptionChannel)
		{
			$tabext = array('jpg','jpeg','png','gif');
			$extAvatar = pathinfo($avatarChannel, PATHINFO_EXTENSION);
			$extBanniere = pathinfo($banniereChannel, PATHINFO_EXTENSION);
			if(!in_array($extAvatar,$tabext) || !in_array($extBanniere,$tabext)){
				return false;
			}
			else {
				$db = Database::getInstance();
		  	$sql = "INSERT INTO Channel (nameChannel, avatarChannel, banniereChannel, descriptionChannel) VALUES (:name, :avatar, :bann, :desc)";
		  	$stmt = $db->prepare($sql);
		  	$stmt->bindParam(':name', $nameChannel);
		  	$stmt->bindParam(':avatar', $avatarChannel);
		  	$stmt->bindParam(':bann', $banniereChannel);
				$stmt->bindParam(':desc', $descriptionChannel);
		  	$stmt->execute();
				mkdir('http://nostream-heliais77127491608.codeanyapp.com/public_html/Nostream/web/bundles/framework/Users/'.$pseudoNostreamer.'/'.$nameChannel,0755);
				move_uploaded_file($avatarChannel, 'http://nostream-heliais77127491608.codeanyapp.com/public_html/Nostream/web/bundles/framework/Users/$pseudoNostreamer/'.$nameChannel.'_avatar');
				move_uploaded_file($banniereChannel, 'http://nostream-heliais77127491608.codeanyapp.com/public_html/Nostream/web/bundles/framework/Users/$pseudoNostreamer/'.$nameChannel.'_banniere');
			}
		}
	
    public function getOwnerName()
    {
      return $this->nostreamer;
    }
  
    public function getSubscribersChannel()
    {
      return $this->subscribersChannel;
    }
  
    public function getDescriptionChannel()
    {
     return $this->descriptionChannel; 
    }
  
    public function getCreationDateChannel()
    {
      return $this->creationDateChannel;
    }
  
    public function getViewsChannel()
    {
      return $this->viewsChannel;
    }
    public function setDescriptionChannel($descriptionChannel)
    {
      $db = Database::getInstance();
			$sql = "UPDATE page SET descriptionChannel = :descr WHERE idChannel = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':descr',$descriptionChannel);
			$stmt->bindParam(':id',$idChannel);
			$stmt->execute();
			$this->descriptionPage = $descriptionChannel;
    }
}
