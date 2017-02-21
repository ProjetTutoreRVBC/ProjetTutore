<?php
namespace AppBundle\Model;

class Upload
{ 
	  public function add($_FILE,$name,$temp){
      $video = new Video();
			$max_file_size = 1024*5000;
      $PATH = "/home/cabox/workspace/web/bundles/framework/mp4/";
      $perm = 777;
      $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
      $extension = pathinfo($_FILE['file']['name'], PATHINFO_EXTENSION);
      if (
       ($_FILE["file"]["type"] == "video/mp4")
      /*|| ($_FILE["file"]["type"] == "audio/mp3")
      || ($_FILE["file"]["type"] == "audio/wma")
      || ($_FILE["file"]["type"] == "image/pjpeg")
      || ($_FILE["file"]["type"] == "image/gif")
      || ($_FILE["file"]["type"] == "image/jpeg"))
      && ($_FILE["file"]["size"] < $max_file_size) PAS DE LIMITE*/
      && in_array($extension, $allowedExts) && $temp == "video") {
        if ($_FILE["file"]["error"] > 0)
          {
          return "Return Code: " . $_FILE["file"]["error"] . "<br />";
          }
        else
          {

          if ($video->exist($_FILE["file"]["name"]))
            {
            	return $_FILE["file"]["name"] . " already exists. ";
            }
          else
            {
            $video = new Video();
            $id_video = $video->addVideo($name,"","","").".mp4";  
            move_uploaded_file($_FILE["file"]["tmp_name"],
            $PATH . $id_video);
            chmod($PATH . $id_video, $perm);  
            return "Stored in: " . $PATH . $id_video;
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

          if ($video->exist($_FILE["file"]["name"]))
            {
            	return $_FILE["file"]["name"] . " already exists. ";
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
            return "Stored in: " . $PATH . $id;
            }
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

          if ($video->exist($_FILE["file"]["name"]))
            {
            	return $_FILE["file"]["name"] . " already exists. ";
            }
          else
            {
						$PATH = "/home/cabox/workspace/web/bundles/framework/images-profile/";	
            $c = new Nostreamer();
						$type = "";	
						if($_FILE["file"]["type"] == "image/jpeg")
							$type = ".jpeg";
						if($_FILE["file"]["type"] == "image/png")
							$type = ".png";	
            $id = $name.$type;  
            move_uploaded_file($_FILE["file"]["tmp_name"],$PATH . $id);
            chmod($PATH . $id, $perm);  
            return "Stored in: " . $PATH . $id;
            }
          }
        }
		}
}
