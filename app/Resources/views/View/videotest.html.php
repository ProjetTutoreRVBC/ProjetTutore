<!-- app/Resources/views/View/videotest.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
    <script type="text/javascript" src="/web/bundles/framework/js/top-bar.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
     <script type="text/javascript">
        function changeIconUp(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumbs-up-hand-symbol.png";
            
        }
        function resetIconUp(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumbs-up.png";
        }
        
        function changeIconDown(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumbs-down-silhouette.png";
            
        }
        function resetIconDown(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumb-down.png";  
        }
        
      
    </script>  
</head>

<body onresize="handleWindow()" onload="handleWindow()">
      <div style="height:100%;">
        <div>
        <div class="top-bar" style="z-index:1;">
              <div style="display: inline-block;width:100%;">
                <div id="left-search" style="float:left;">
                  <ul id="menu" class="menu" style="">
                      <li><a href="/web/app_dev.php/" ><img id="logo" class="" src="/web/bundles/framework/images/logo.png" alt="logo"></a></li>
                      <li><input id ="search-bar" class="search-bar" type="search" placeholder="Search Here"></li>
                      <li><button id="button-search-bar" class="button" type="button">Search</button></li>
                  </ul>
                </div>
                       <?php
                          $href="login";
                          $log="Login";
                          if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"]))
                          {
                            $href = "logout";
                            $log = "Logout";
                            echo '<div id ="right-log" style="float:right;">
                            <ul id="menu" class="menu">';
                            
                             echo '<li id="signed"><a href="gestion"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/param.png"></a></li>';
                            echo '<li id="signed-1"><a href="profile/'.$user_page.'"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
                          }else
                          {
                            echo '<div id ="right-log" style="float:right;">
                            <ul id="menu" class="menu">';
                            echo '<li id="signIn" ><a href="register"><button class="button" type="button">Sign Up</button></a></li>';
                          }
                            
                          echo '<li id ="logIn">';
                          echo '<a href="'.$href.'">';
                          echo '<button  id="log" type ="button" class="button" >'.$log.'</button></a>';
                        ?>
                    </li>  
                </ul>
              </div>
            </div>
          </div>
        </div>

    <!-------------------------------------------------------TOP BAR------------------------------------------------------>
    <div class="video-titre" style="height:5%;width:70%;top:55px;">
      <h3 style="padding-left:20px;"><?php echo substr($title,0,45); ?></h3>
    </div>  
    <div class="video-principale" style="height: 95%;width: 100%;top:110px;">
        
        <div class="video-container " style="height:70%;width:65%!important;margin-left:20px;">
            <video id="my-video " class="video-js " controls preload="auto " style="width:100%;height:100%;" poster="<?php echo '/web/bundles/framework/miniature/'.$miniature;?>" data-setup="{} ">
                <source src="<?php echo '/web/bundles/framework/video/'.$v.'.mp4';?>" type='video/mp4'>
                <p class="vjs-no-js ">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/ " target="_blank ">supports HTML5 video</a>
                </p>
            </video>
        </div>
      
        <div style="text-align:center;overflow-y:hidden;overflow-x:visible;height:70%">
            <div class=" " style="display:inline-block;width:60%;height:100%;overflow-y:scroll;overflow-x:visible;margin-left:50px;margin-right:50px;padding:10px;box-shadow: 1px 1px 10px 1px #CDD3E1;">
                 <?php
              foreach($video as $v)
                {
                  $titre= $v['nameVideo'];
                  $id = $v['idVideo'];
                  $date = $v['dateVideo'];
                  $vues = $v['viewsVideo'];
                  $Page = $page[$titre];
                  $Channel = $channel[$titre];
                  if($v['nameVideo'] != $title)
                  echo '
                  <a href ="watch?v='.$id.'">
                    <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                      <div style="height:35px;overflow:hidden;">
                          <font size="2" class="titres"><strong>'.$titre.'</strong></font><br>
                      </div>
                      <img src="/web/bundles/framework/miniature/'.$v['miniature'].'" style="height:125px;width:225px;text-align:center;"><br>
                      <div>

                      </div>

                      <div style="width:225px;">
                          <a href="channel/'.$Channel.'" class="button tiny" style="margin-left:none;margin-right:none;width:48.5%;height:100%;">
                              <font size="1">'.$Channel.'</font>
                          </a>
                          <a href="profile/'.$Page.'" class="button tiny" style="margin-left:none;margin-right:none;width:48.5%;height:100%;">
                              <font size="1">'.$Page.'</font>
                          </a>
                      </div>
                      <div style="text-align:center;">
                          <font size="1 ">'.$vues.' vues -</font>
                          <font size="1 ">le '.$date.'</font>
                      </div>
                  </div>
                </a>';
                }
              ?>
            </div>
        </div>
      
      <!--<div style="float:right;height:20%;width:20%;">
        <img src="https://iletaitunepub.fr/wp-content/uploads/2016/02/maxresdefault-2.jpg" style="width:100%;height:100%;">
      </div> -->
            <!--<div style="margin-left:20px;height:20%;width:65%;margin-top:0px!important; ">
                <div class="primary progress" role="progressbar" tabindex="0" aria-valuenow="89" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                    <div class="progress-meter" style="width: 89%">
                        <p class="progress-meter-text">89%</p>
                    </div>
                </div>-->

                <div id="info_video" style="display:inline-block;margin-left:20px;margin-bottom:20px;margin-top:20px;width:65%;padding:10px;box-shadow: 1px 1px 10px 1px #CDD3E1;">
                      <div style="width:100%;height:100%;">
                        <div style="width:40%;height:90%;float:left;">
                        <div style="margin-left:15px;width:50%;">
                          <span> Mise en ligne le <?php echo $info_date;?> </span>
                        </div>
                          <div style="margin-left:15px;width:100%;height:85%;margin-top:10px;font:16px/26px Georgia, Garamond, Serif;overflow-y: scroll;overflow-x: hidden;">
                            <p>
                              <?php echo $description; ?>
                            </p>
                          </div>
                        </div>
                        
                        <div style="width:20%;height:90%;float:left;margin-top:0px;margin-left:20px;">
                        <a href="../channel/<?php echo $video_channel;?>">  
                          <div style="margin-top:15px;margin-left:10%;width:100%;display:inline-block;">
                            <img style="width:50px;height:50px;" src="/web/bundles/framework/images/metstudio.jpg" >
                            <span style="margin-left:10px;"><?php echo $video_channel;?></span>
                          </div>
                        </a>
                        <a href="../profile/<?php echo $video_page;?>">  
                          <div style="margin-top:15px;margin-left:10%;width:100%;display:inline-block;">
                            <img style="width:50px;height:50px;" src="/web/bundles/framework/images/met.jpg">
                            <span style="margin-left:10px;"><?php echo $video_page;?></span>
                          </div>
                        </a>
                    </div>
                
                        <div style="text-align:center;width:100%;margin-bottom:15px;"><span><?php echo $views." vues"; ?></span></div>

                        <form action="" method="post" style="text-align:center;">
                        <?php
                        $id = 0;
                        $type1="";
                        $type2="";  
                        if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
                          $type1='name="likes" type="submit" ';
                          $type2='name="dislikes" type="submit" ';
                        }
                        if(!isset($vote['likes']) || $vote['likes'] == false)
                          echo '<span><button '.$type1.' style="margin:1%;outline:none;">
                                  <img onmouseout="resetIconUp(&#34icon'.$id.'&#34);" onmouseover="changeIconUp(&#34icon'.$id.'&#34);" style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up.png" alt="">
                                  <span id="content">'.$likes.'</span>
                                </button></span>';
                        if(isset($vote['likes']) && $vote['likes'] == true)
                          echo '<span><button  style="margin:1%;outline:none;" disabled>
                                  <img  style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up-hand-symbol.png" alt="">
                                  <span id="content">'.$likes.'</span>
                                </button></span>'; 
                        $id++;
                        if(!isset($vote['dislikes']) || $vote['dislikes'] == false)
                          echo '<span><button '.$type2.' style="margin:1%;outline:none;">
                                  <img style="max-width:30px;max-height:30px;" onmouseout="resetIconDown(&#34icon'.$id.'&#34);" onmouseover="changeIconDown(&#34icon'.$id.'&#34);" id="icon'.$id.'" src="/web/bundles/framework/images/thumb-down.png" alt="">
                                  <span id="content">'.$dislikes.'</span>
                                </button></span>';
                        if(isset($vote['dislikes']) && $vote['dislikes'] == true)
                          echo '<span><button  style="margin:1%;outline:none;" disabled>
                                  <img style="max-width:30px;max-height:30px;"  id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-down-silhouette.png" alt="">
                                  <span id="content">'.$dislikes.'</span>
                                </button></span>';
                        ?>
                        </form>
                          </div>
                    </div>
                    
                  <div id="commentaires" style="border:none;margin-left:20px;margin-top:20px;width:65%;height:inherit;box-shadow: 1px 1px 10px 1px #CDD3E1;">
                    <?php
                    echo '<form action="" method="post" style="margin-bottom:20px;display:inline-block;width:100%;text-align:center;margin-left:20px;margin-top:20px;">
                          <div style="width:70%;float:left;">
                          <textarea name="comment" placeholder="Votre message..." rows="2" cols="50"></textarea>
                          </div>
                          <div style="float:left;margin-left:20px;margin-top:5px;">
                          <button name="send_comment" type ="submit" class="button" style="float: right;">Envoyez</button>
                          </div>
                          </form>';
                       foreach($comments as $comment) {
                           echo '<div style="border:none;padding:10px;margin-left:20px;margin-bottom:10px;width:80%;overflow:hidden;" class="callout" data-closable>
                                  <div style="border-bottom: solid 1px;">
                                    <img style="width:30px;height:30px;" src="met.jpg">
                                    <span style="margin-left:10px;">'.$comment['pseudoNostreamer'].'<small> le '.$comment['dateComment'].'</small></span>';
                                    if(isset($_COOKIE["pseudo"])  && $_COOKIE["pseudo"] == $comment['pseudoNostreamer'])
                                    echo '<form action="" method="post">
                                        <input name="idComment" value="'.$comment['idComment'].'" hidden>
                                        <button style="outline:none;" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close>
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                      </form>';  
                         
                               echo '</div>
                                  <p>'.$comment['messageComment'].'</p>
                                </div>';
                       }

                    ?>
                  </div>
                  </div>
                  <script>
                    $(document).ready(function() {
                        $(document).foundation();
                    })
                  </script>  
</body>