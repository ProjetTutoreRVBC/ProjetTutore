<?php
namespace AppBundle\Model;

class Comment
{
	/*
    private $idComment;
    private $post;
    private $nostreamer;
    private $channel;
    private $video;
    private $titleComment;
    private $dateComment;
    private $messageComment;
    private $rateComment;
    public function __construct($idPost, $idNostreamer, $idChannel, $idVideo, $titleComment, $messageComment)
    {
      $this->idPost = $idPost;
		  $this->idNostreamer = $idNostreamer;
		  $this->idChannel = $idChannel;
      $this->idVideo = $idVideo;
      $this->titleComment = $titleComment;
      $this->messageComment = $messageComment;
    }
  
    public function getFromId($idPost, $idChannel, $idVideo)
    {
		$db = Database::getInstance();
   	  if($idPost > 0){
		  	$sql = "SELECT idComment FROM Comment WHERE idPost =:idPost";
		  	$stmt = $db->prepare($sql);
		  	$stmt->setFetchMode(PDO::FETCH_CLASS, "Comment");
		  	$stmt->bindParam(':idPost',$idPost);
			}
			if($idChannel > 0){
				$sql = "SELECT idComment FROM Comment WHERE idChannel =:idChannel";
		  	$stmt = $db->prepare($sql);
		  	$stmt->setFetchMode(PDO::FETCH_CLASS, "Comment");
		  	$stmt->bindParam(':idChannel',$idChannel);
			}
			if($idVideo > 0){
				$sql = "SELECT idComment FROM Comment WHERE idVideo =:idVideo";
		  	$stmt = $db->prepare($sql);
		  	$stmt->setFetchMode(PDO::FETCH_CLASS, "Comment");
		  	$stmt->bindParam(':idVideo',$idVideo);
			}
		
		$stmt->execute();
		return $stmt->fetch();
			}
  
    public function getTitleComment()
    {
      return $this->titleComment;
    }
  
    public function getMessageComment()
    {
      return $this->messageComment;
    }
  
    public function setTitleComment()
    {
      $db = Database::getInstance();
			$sql = "UPDATE Comment SET titleComment = :title WHERE idComment = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':title',$titleComment);
			$stmt->bindParam(':id',$idComment);
			$stmt->execute();
      $this->titleComment = $titleComment;
			  
    }
  */
    public function setCommentPost($messageComment,$idPost,$idNostreamer,$idPage,$idChannel)
    {
      $db = Database::getInstance();
			$date = date("Y/m/d H:i:s");
			$sql = "INSERT INTO Comment
						(dateComment,messageComment,idPost,idNostreamer,idPage,idChannel)
						VALUES
						('".$date."',
						 '".$messageComment."',
						 ".$idPost.", 
						 ".$idNostreamer.",
						 ".$idPage." ,
						 ".$idChannel.")";
			$db->query($sql);
    }
		
		public function setCommentVideo($messageComment,$idVideo,$idNostreamer,$idChannel)
    {
      $db = Database::getInstance();
			$date = date("Y/m/d H:i:s");
			$sql = "INSERT INTO Comment
						(dateComment,messageComment,idVideo,idNostreamer,idChannel)
						VALUES
						('".$date."',
						 '".$messageComment."',
						 ".$idVideo.", 
						 ".$idNostreamer.",
						 ".$idChannel.")";
			$db->query($sql);
    }
	
	
}
