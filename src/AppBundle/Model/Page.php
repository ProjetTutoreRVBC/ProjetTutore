<?php
namespace AppBundle\Model;

class Page
{
	
		/*
    private $idPage;
    private $nostreamer;
    private $descriptionPage;
		private $idChannel;*/
    public function add($namePage,$idNostreamer,$descriptionPage,$banniere,$profile) //WATCH OUT WATCH OUT WATCH OUT
    {
			$db = Database::getInstance();
		  $sql = "INSERT INTO Page(namePage,idNostreamer,descriptionPage,banniere_img,profile_img) VALUES(:name,:idN,:desc,:ban,:prof)";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':name',$namePage);
			$stmt->bindParam(':idN',$idNostreamer);
			$stmt->bindParam(':desc',$descriptionPage);
			$stmt->bindParam(':ban',$banniere);
			$stmt->bindParam(':prof',$profile);
			$stmt->execute();
    }
  	/*
    public function getFromIdNostreamer($idNostreamer)
    {
			$db = Database::getInstance();
			$sql = "SELECT idPage FROM Page WHERE idNostreamer =:idNostreamer";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
		  $stmt->bindParam(':idNostreamer',$idNostreamer);
			$stmt->execute();
			return $stmt->fetch();
    }
	
		public function getFromIdChannel($idChannel)
		{
			$db = Database::getInstance();
			$sql = "SELECT idPage FROM Page WHERE idChannel =:idChannel";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
		  $stmt->bindParam(':idChannel',$idChannel);
			$stmt->execute();
			return $stmt->fetch();
		}
	
    public function getOwnerName()
    {
      return $this->nostreamer;
    }
  
    public function getPosts()
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM post WHERE idPage = :id";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Post");
		  $stmt->bindParam(':id',$idPage);
		  $stmt->execute(); 
		  return $stmt->fetchAll();
    }
  
    public function getDescription()
    {
      return $this->description;
    }
  
    public function setDescription($descriptionPage)
    {
      $db = Database::getInstance();
			$sql = "UPDATE page SET descriptionPage = :descr WHERE idPage = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':descr',$descr);
			$stmt->bindParam(':id',$idPage);
			$stmt->execute();
			$this->descriptionPage = $descr;
    }*/
	
		public function getPage($name){
			$db = Database::getInstance();
		  $sql = "SELECT * FROM Nostreamer,Page WHERE Page.idNostreamer = Nostreamer.idNostreamer and Page.namePage = :name";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':name',$name);
		  $stmt->execute(); 
		 	$page = $stmt->fetchAll();
			return $page[0];
		}
	
	public function getSubsPage($id){
			$db = Database::getInstance();
		  $sql = "SELECT COUNT(*) FROM SubscribedPage WHERE idPage = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
		  $stmt->execute(); 
		 	$page = $stmt->fetchAll();
			if(!$page)
				$page[0] = 0;
			return $page[0];
		}
	
	public function addSubPage($idNs,$idPage) {
		$db = Database::getInstance();
		$sql = "INSERT INTO SubscribedChannel VALUES(:idNs,:idPage)";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':idNs',$idNs);
		$stmt->bindParam(':idPage',$idPage);
		$stmt->execute();
	}
		
		public function getMainPage($id){
			$db = Database::getInstance();
		  $sql = "SELECT * FROM Page WHERE idNostreamer = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
		  $stmt->execute(); 
		 	$page = $stmt->fetchAll();
			return $page;
		}
	
}
