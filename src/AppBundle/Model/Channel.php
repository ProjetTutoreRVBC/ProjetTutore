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
