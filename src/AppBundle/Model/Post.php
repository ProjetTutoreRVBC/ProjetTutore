<?php
namespace AppBundle\Model;

class Post
{
	/*
    private $idPost;
    private $page;
    private $channel;
    private $titlePost;
    private $datePost;
    private $messagePost;
    private $imagePost;
    public function __construct($idPost, $titlePost, $datePost, $messagePost, $imagePost)
    {
      $this->idPost = $idPost;
		  $this->titlePost = $titlePost;
      $this->datePost = $datePost;
		  $this->messagePost = $messagePost;
		  $this->imagePost = $imagePost;
    }
  
    public function getFromId($idPage)
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM post WHERE idPost =:idPost";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Post");
		  $stmt->bindParam(':idPost',$idPost)
		  $stmt->execute();
		  return $stmt->fetch();
    }
  
    public function getPagePost()
    {
      return $this->pagePost;
    }
  
    public function getIdPost()
    {
      return $this->idPost;
    }
  
    public function getTitlePost()
    {
      return $this->titlePost;
    }
  
    public function getMessagePost()
    {
      return $this->messagePost;
    }
  
    public function getDatePost()
    {
      return $this->datePost;
    }
  
    public function getImagePost()
    {
      return $this->imagePost;
    }
  
    public function getComments() {		//TROUVER COMMENT PEUPLER LE TABLEAU
		  $db = Database::getInstance();
		  $sql = "SELECT * FROM post WHERE comments = :comments";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "post");
		  $stmt->bindParam(':comments',$comments);
		  $stmt->execute(); 
		  return $stmt->fetchAll();
  	}
  
    public function getPage()
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM page natural join post WHERE idPost = :idPost";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
		  $stmt->bindParam(':idPost',$idPost);
		  $stmt->execute();
		  return $stmt->fetchAll();
    }
  
    public function setTitlePost($titlePost)
    {
      $db = Database::getInstance();
		  $sql = "UPDATE user SET titlePost = :title WHERE idPost = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->bindParam(':title',$titlePost);
		  $stmt->bindParam(':id',$idPost);
		  $stmt->execute();
		  $this->titlePost = $titlePost;
    }
  	*/
    public function add($idPage,$idChannel,$messagePost)
    {
      $db = Database::getInstance();
		  $sql = "INSERT INTO `Post`(`idPage`, `idChannel`, `datePost`, `messagePost`) VALUES (:idPage,:idChannel,:datePost,:messagePost)";
			$datePost = date("Y/m/d H:i:s");
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':idPage',$idPage);
		  $stmt->bindParam(':idChannel',$idChannel);
			$stmt->bindParam(':datePost',$datePost);
			$stmt->bindParam(':messagePost',$messagePost);
		  $stmt->execute();
    }
	
		public function delete($idPost)
    {
      $db = Database::getInstance();
		  $sql = "DELETE FROM Post where idPost= :id";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$idPost);
		  $stmt->execute();
    }
    /*                   
    public function setImagePost($imagePost)
    {
      $db = Database::getInstance();
		  $sql = "UPDATE user SET imagePost = :img WHERE idPost = :id";
		  $stmt = $db->prepare($sql);
		  $stmt->setFetchMode(PDO::FETCH_ASSOC);
		  $stmt->bindParam(':img',$imagePost);
		  $stmt->bindParam(':id',$idPost);
		  $stmt->execute();
		  $this->imagePost = $imagePost;
    }*/
	
		public function getListPost($id){
			$db = Database::getInstance();
		  $sql = "SELECT * FROM Post WHERE Post.idPage = :id order by datePost desc";
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':id',$id);
		  $stmt->execute();
		  $posts = $stmt->fetchAll();
			return $posts;
		}
	
}
