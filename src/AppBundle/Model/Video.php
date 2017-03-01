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
		public function delete($id)
		{
			$dir = "/home/cabox/workspace/web/bundles/framework/";
			$file = $id.".mp4";
			$db = Database::getInstance();
			$sql = "SELECT miniature from Video where idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$miniature = $stmt->fetch();
			$file2 = $miniature['miniature'];
			
			if(file_exists($dir."miniature/".$file2))
				unlink($dir."miniature/".$file2);
			if(file_exists($dir."video/".$file))
				unlink($dir."video/".$file);
			
		  $sql = "DELETE FROM Video where idVideo = :id";
		  $stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
		  $stmt->execute();
			$sql = "DELETE FROM Comment where idVideo = :id";
		  $stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
		  $stmt->execute();
			$sql = "DELETE FROM voteVideo where idVideo = :id";
		  $stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
		  $stmt->execute();
		}
	
	
		public function addView($idNostreamer, $idVideo){
			$db = Database::getInstance();
			$sql = "SELECT * from Views where idVideo = :idV and idNostreamer = :idN";
			$stmt = $db->prepare($sql);
		  $stmt->bindParam(':idN', $idNostreamer);
			$stmt->bindParam(':idV', $idVideo);
			$stmt->execute();
			$view = $stmt->fetch();
			
			if(!$view && $idNostreamer != 0){
				$sql = "INSERT INTO Views (idNostreamer,idVideo,user_views) VALUES (:idN, :idV,1)";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':idN', $idNostreamer);
				$stmt->bindParam(':idV', $idVideo);
				$stmt->execute();			
			}
			else {
				$sql = "UPDATE Views SET user_views = user_views + 1 WHERE idVideo = :idV and idNostreamer = :idN";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':idN', $idNostreamer);
				$stmt->bindParam(':idV', $idVideo);
				$stmt->execute();
				
			}
			if(!$view && $idNostreamer == 0){
				$sql = "INSERT INTO Views (idNostreamer,idVideo,user_views) VALUES (0, :idV,0)";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':idV', $idVideo);
				$stmt->execute();			
			}
			else {
				$sql = "UPDATE Views SET user_views = user_views + 1 WHERE idVideo = :idV and idNostreamer = 0";
				$stmt = $db->prepare($sql);
				$stmt->bindParam(':idV', $idVideo);
				$stmt->execute();
				
			}
			
			$sql = "SELECT SUM(user_views) from Views where idVideo = :idV";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':idV', $idVideo);
			$stmt->execute();
			$result = $stmt->fetch();
			$count = $result['SUM(user_views)'];
			
			$sql = "UPDATE Video SET viewsVideo = :count WHERE idVideo = :idV";
		  $stmt = $db->prepare($sql);
			$stmt->bindParam(':count', $count);
			$stmt->bindParam(':idV', $idVideo);
		  $stmt->execute();
			
		}
	
	
		public function addVideo($nameVideo,$descriptionVideo,$miniature,$idChannel)
		{
			$db = Database::getInstance();
		  $sql = "INSERT INTO Video (idChannel,nameVideo, descriptionVideo,miniature,dateVideo) VALUES (:id,:name, :desc,:miniature, :dateV)";
		  $stmt = $db->prepare($sql);
			$date = date("Y/m/d H:i:s");
		  $stmt->bindParam(':name', $nameVideo);
			$stmt->bindParam(':desc', $descriptionVideo);
			$stmt->bindParam(':miniature', $miniature);
			$stmt->bindParam(':dateV', $date);
			$stmt->bindParam(':id', $idChannel);
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
		public function getListVideo(){
			
			$db = Database::getInstance();
			$sql = "SELECT * from Video";
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;	
		}
	
		public function getListChannelByIdVideo(){
			
			$db = Database::getInstance();
			$sql = "SELECT nameVideo,nameChannel from Video,Channel where Video.idChannel = Channel.idChannel";
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			$channel = array();
			foreach($result as $row){
				$channel[$row['nameVideo']]=$row['nameChannel'];
			}
			return $channel;
		}
	
		public function getListPageByIdVideo(){
			
			$db = Database::getInstance();
			$sql = "SELECT nameVideo,namePage from Page,Channel,Video where Page.idNostreamer = Channel.idNostreamer and Video.idChannel = Channel.idChannel";
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			$page = array();
			foreach($result as $row){
				$page[$row['nameVideo']]=$row['namePage'];
			}
			return $page;
		}
		
		public function getUserByIdVideo($id){
			
			$db = Database::getInstance();
			$sql = "SELECT * from Video,Channel,Page where Page.idNostreamer = Channel.idNostreamer and Video.idChannel = Channel.idChannel and idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$result = $stmt->fetchAll();
			$user = $result[0];
			return $user;
		}
	
		public function getVideo($id){
			$db = Database::getInstance();
			$sql = "SELECT * from Video where idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$result = $stmt->fetchAll();
			$video = $result[0];
			return $video;	
		}
	
		public function getVote($id,$idNostreamer){
			$db = Database::getInstance();
			$sql = "SELECT * from voteVideo where idVideo = :id and idNostreamer = :idN";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':idN', $idNostreamer);
			$stmt->execute();
			$result = $stmt->fetchAll();
			return $result;
		}
	
		public function setVote($id,$idNostreamer,$like,$dislike,$type){
			$db = Database::getInstance();
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
		
		public function getComments($id){
			$db = Database::getInstance();
		  $sql = "SELECT * FROM Comment,Nostreamer WHERE idVideo = :id and Nostreamer.idNostreamer = Comment.idNostreamer order by dateComment desc";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
		  $stmt->execute();
		  $posts = $stmt->fetchAll();
			return $posts;
		}
	
		/*
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
