<?php
namespace AppBundle\Model;

class Upload
{ 
	  public function add($_FILE){
      $video = new Video();
			$max_file_size = 900000;
      $PATH = "/home/cabox/workspace/web/bundles/framework/mp4/";
      $perm = 777;
      $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
      $extension = pathinfo($_FILE['file']['name'], PATHINFO_EXTENSION);
      if ((
         ($_FILE["file"]["type"] == "video/mp4")
      || ($_FILE["file"]["type"] == "audio/mp3")
      || ($_FILE["file"]["type"] == "audio/wma")
      || ($_FILE["file"]["type"] == "image/pjpeg")
      || ($_FILE["file"]["type"] == "image/gif")
      || ($_FILE["file"]["type"] == "image/jpeg"))
      && ($_FILE["file"]["size"] < $max_file_size)
      && in_array($extension, $allowedExts)) {
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
            $id_video = $video->addVideo($_FILE["file"]["name"],"","","").".mp4";  
            move_uploaded_file($_FILE["file"]["tmp_name"],
            $PATH . $id_video);
            chmod($PATH . $id_video, $perm);  
            return "Stored in: " . $PATH . $id_video;
            }
          }
        }
      else
        {
        	return "Invalid file";
          
        }
		}
}
