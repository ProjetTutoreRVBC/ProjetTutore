<?php
namespace AppBundle\Model;

class Upload
{ 
	  public function add($_FILE,$name,$temp){
      $video = new Video();
			$max_file_size = 1024*5000;
      $PATH = "/home/cabox/workspace/web/bundles/framework/video/";
      $perm = 777;
      $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
      $extension = pathinfo($_FILE['file']['name'], PATHINFO_EXTENSION);
      if (
      (($_FILE["file"]["type"] == "video/mp4")
      || ($_FILE["miniature"]["type"] == "image/pjpeg")
      || ($_FILE["miniature"]["type"] == "image/jpeg")
			|| ($_FILE["miniature"]["type"] == "image/jpg")
			|| ($_FILE["miniature"]["type"] == "image/png"))
      //&& ($_FILE["file"]["size"] < $max_file_size) PAS DE LIMITE*/
      && in_array($extension, $allowedExts) && $temp == "video") {
        if ($_FILE["file"]["error"] > 0)
          {
          return "Return Code: " . $_FILE["file"]["error"] . "<br />";
          }
        else
          {

          if ($video->exist($name))
            {
            	return $_FILE["file"]["name"] . " already exists. ";
            }
          else
            {
            $video = new Video();
						$extension_miniature = pathinfo($_FILE['miniature']['name'], PATHINFO_EXTENSION);
						$id = $name.".".$extension_miniature;	
            $id_video = $video->addVideo($name,$_FILE["description"],$id,$_FILE["idChannel"]).".mp4"; 
						//UPLOAD VIDEO	
            move_uploaded_file($_FILE["file"]["tmp_name"],
            $PATH . $id_video);
            chmod($PATH . $id_video, $perm);
						//UPLOAD MINIATURE
						$PATH = "/home/cabox/workspace/web/bundles/framework/miniature/";	
						move_uploaded_file($_FILE["miniature"]["tmp_name"],
            $PATH . $id);
            chmod($PATH . $id, $perm);
							
            }
          }
        }
				if ( ($_FILE["file"]["type"] == "image/jpeg" || $_FILE["file"]["type"] == "image/png") 
						&& in_array($extension, $allowedExts) && $temp == "banniere") {
        if ($_FILE["file"]["error"] > 0)
          {
          return "Return Code: " . $_FILE["file"]["error"] . "<br />";
          }
        else
          {
						$PATH = "/home/cabox/workspace/web/bundles/framework/images-banniere/";	
            $c = new Channel();
						$type = "";	
						if($_FILE["file"]["type"] == "image/jpeg")
							$type = ".jpeg";
						if($_FILE["file"]["type"] == "image/png")
							$type = ".png";	
            $id = $name.$type;	
            move_uploaded_file($_FILE["file"]["tmp_name"],$PATH . $id);
            chmod($PATH . $id, $perm);  
          }
        }
			
			if (($_FILE["file"]["type"] == "image/jpeg" || $_FILE["file"]["type"] == "image/png") 
					&& in_array($extension, $allowedExts) && $temp == "profile") {
        if ($_FILE["file"]["error"] > 0)
          {
          return "Return Code: " . $_FILE["file"]["error"] . "<br />";
          }
        else
          {
						$PATH = "/home/cabox/workspace/web/bundles/framework/images-profile/";	
            $c = new Channel();
						$type = "";	
						if($_FILE["file"]["type"] == "image/jpeg")
							$type = ".jpeg";
						if($_FILE["file"]["type"] == "image/png")
							$type = ".png";	
            $id = $name.$type;  
            move_uploaded_file($_FILE["file"]["tmp_name"],$PATH . $id);
            chmod($PATH . $id, $perm);  
          }
        }
		}
}
