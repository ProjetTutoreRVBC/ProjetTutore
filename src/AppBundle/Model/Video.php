<?php
namespace AppBundle\Model;

class Video
{
    private $idVideo;
    private $nameVideo;
    private $channel;
    private $dateVideo;
    private $viewsVideo;
    private $descriptionVideo;
    private $positiveVote;
		private $negativeVote;
		/*
    public function __construct($nameVideo, $channel, $descriptionVideo)
    {
      $this->nameVideo = $nameVideo;
      $this->channel = $channel;
      $this->descriptionVideo = $descriptionVideo;
    }
  */
		public function addVideo($nameVideo,$fileVideo,$miniVideo,$descriptionVideo)
		{
<<<<<<< HEAD
			$db = Database::getInstance();
		  $sql = "INSERT INTO Video (nameVideo, descriptionVideo) VALUES (:name, :desc)";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':name', $nameVideo);
			$stmt->bindParam(':desc', $descriptionVideo);
		  $stmt->execute();
			$sql = "SELECT idVideo from Video where nameVideo = :name";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':name', $nameVideo);
			$stmt->execute();
			$id = $stmt->fetch();
			return $id['idVideo'];
			//move_uploaded_file($fileVideo, '/web/bundles/framework/mp4/'.$id['idVideo'].'.mp4');
			
		}
		
		public function exist($nameVideo)
		{
			$db = Database::getInstance();
			$sql = "SELECT idVideo from Video where nameVideo = :name";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':name', $nameVideo);
			$stmt->execute();
			$id = $stmt->fetch();
			if($id)
				return true;
			else
				return false;
		}
		
		/*
=======
			$tabextImg = array('jpg','jpeg','png','gif');
			$tabextVideo = array('mp4','wma','avi','mpg','mpeg','webm');
			$extVideo = pathinfo($fileVideo, PATHINFO_EXTENSION);
			$extMini = pathinfo($miniVideo, PATHINFO_EXTENSION);
			if(!in_array($extVideo,$tabextVideo) || !in_array($extMini,$tabextImg)){
				return false;
			}
			else{
				$db = Database::getInstance();
		  	$sql = "INSERT INTO Video (nameVideo, fileVideo, miniVideo, descriptionVideo) VALUES (:name, :file, :mini, :desc)";
		  	$stmt = $db->prepare($sql);
		  	$stmt->bindParam(':name', $nameVideo);
		  	$stmt->bindParam(':file', $fileVideo);
		  	$stmt->bindParam(':mini', $miniVideo);
				$stmt->bindParam(':desc', $descriptionVideo);
		  	$stmt->execute();
				$sql = "SELECT id from Video where nameVideo = :name";
				$stmt = $db->prepare($sql);
				$stmt->setFetchMode(PDO::FETCH_CLASS, "Video");
				$stmt->bindParam(':name', $nameVideo);
				$stmt->execute();
				$idVideo = $stmt->fetch();
				move_uploaded_file($fileVideo, 'http://nostream-heliais77127491608.codeanyapp.com/public_html/Nostream/web/bundles/framework/Users/$pseudoNostreamer/'.$id.'.mp4');
			}
		}
			
>>>>>>> 88a70fac3f9d81aa6325f2a735c9046af7e6cfdf
    public function getName()
    {
      return $this->nameVideo;
    }
    public function getChannel()
    {
      return $this->channel;
    }
  
    public function getDate()
    {
      return $this->dateVideo;
    }
  
    public function getViews()
    {
      return $this->viewsVideo;
    }
  
    public function getDescription()
    {
      return $this->descriptionVideo;
    }
  
    public function getPositiveVote()
    {
      return $this->positiveVote;
    }
	
		public function getNegativeVote()
		{
			return $this->negativeVote;
		}
  
    public function setName($name)
    {
      $db = Database::getInstance();
			$sql = "UPDATE Video SET nameVideo = :name WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->nameVideo = $nameVideo;
    }
  
    public function addView()
    {
			$viewsVideo++;
			$db = Database::getInstance();
			$sql = "UPDATE Video SET viewsVideo = :viewsVideo WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':viewsVideo',$viewsVideo);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->nameVideo = $viewsVideo; 
    }
  
		public function addPositive()
		{
			$positiveVote++;
			$db = Database::getInstance();
			$sql = "UPDATE Video SET positiveVote = :positiveVote WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':positiveVote',$positiveVote);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->nameVideo = $positiveVote; 
    }
	
		public function addNegative()
		{
			$negativeVote++;
			$db = Database::getInstance();
			$sql = "UPDATE Video SET negativeVote = :negativeVote WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':negativeVote',$negativeVote);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->nameVideo = $negativeVote; 
    }
	
    public function rating($positiveVote,$negativeVote)
    {
			if((positiveVote == 0) &&(negativeVote == 0)){
				return 0;
			}
			else{
				$rate= $positiveVote/($positiveVote+$negativeVote)*100;
				return $rate;
			}
    }
  
    public function setDescription($description)
    {
      $db = Database::getInstance();
			$sql = "UPDATE Video SET descriptionVideo = :descr WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':descr',$description);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->descriptionVideo = $descriptionVideo;
    }
		*/
}
