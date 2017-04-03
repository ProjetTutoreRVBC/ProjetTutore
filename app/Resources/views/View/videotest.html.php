<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>nostream</title>
  <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
  <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
  <link href="/web/bundles/framework/js/tchat.js" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/deep-purple.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/cool-buttons.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/likes.js') ?>"></script>  
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/search-engine.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/comments.js') ?>"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/web/bundles/framework/css/deep-purple.css">
  <link rel="stylesheet" href="/web/bundles/framework/css/cool-buttons.css">
  <style>
    

    button::-moz-focus-inner {
      border: 0;
    }


    button, img:focus{
      outline:0;
    }  
    button:active{
      outline:0;
    }
  </style>
  <script type="text/javascript">
    function changeIconUp(id) {
      var icon = document.getElementById(id);
      icon.src = "/web/bundles/framework/images/thumbs-up-hand-symbol.png";

    }

    function resetIconUp(id) {
      var icon = document.getElementById(id);
      icon.src = "/web/bundles/framework/images/thumbs-up.png";
    }

    function changeIconDown(id) {
      var icon = document.getElementById(id);
      icon.src = "/web/bundles/framework/images/thumbs-down-silhouette.png";

    }

    function resetIconDown(id) {
      var icon = document.getElementById(id);
      icon.src = "/web/bundles/framework/images/thumb-down.png";
    }
  </script>
</head>

<body onresize="handleWindow()" onload="handleWindow()">
  <div class="wrapper">
    <div class="header">
      <a href="/web/app_dev.php/" style="width:100px;height:100px;border-radius: 8px;"><img id="logo" class="nostream" src="/web/bundles/framework/images/logo.png" alt="logo"></a>
      <input type="text" class="searchbar" name="search" placeholder="Search..">
      <?php
          $href = "login";
          $log  = "Login";
          if (isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])) {
              $href = "logout";
              $log  = "Logout";
              echo '<a href="gestion"><img style="margin-top:10px;width:40px;height:40px;float:right;margin-right:10px" alt="" src="/web/bundles/framework/images/param.png"></a></li>';
              echo '<a href="profile/' . $user_page . '"><img style="margin-top:10px;width:40px;height:40px;float:right;margin-right:10px" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
          } else {
              echo '<a href="../register"><button class="btn-11" type="button">Sign Up</button></a>';
          }
          echo '<a href="../' . $href . '">';
          echo '<button id="log" type ="button" class="btn-11" >' . $log . '</button></a>';
        ?>
        <!--<a href="register"><button class="btn-11" type="button">Sign Up</button></a>
        <a href="login"><button class="btn-11" type="button">Login</button></a>-->
    </div>
    <nav>
      <ul>
        <a><li class="gnav1" style="height:0px;display:none;overflow:hidden;"></li></a>
        <a href="profile/<?php echo $video_page;?>"><li class="gnav2"><?php echo $video_page;?></li></a>
        <a href="channel/<?php echo $video_channel;?>"><li class="gnav3"><?php echo $video_channel;?></li></a>
      </ul>
    </nav>
    <div class="contents" id="contents">
      <div class="container">
        <article id="page1" class="show top" style="overflow-y:scroll;">
          <div class="video-principale" style="height:100%;width:75%;float:left;margin-left:-5%">
            <div class="video-titre" style="height:5%;width:100%;text-align:center;margin-bottom:10px;">
              <font style="font-size:150%;color:white;">
                <?php echo substr($title,0,45); ?>
              </font>
            </div>
            <div class="video-container " style="height:70%;width:85%!important;margin-left:auto;margin-right:auto;">
              <video id="<?php echo $v; ?>" class="video-js " controls preload="auto " style="width:100%;height:100%;" poster="<?php echo '/web/bundles/framework/miniature/'.$miniature;?>" data-setup="{} ">
                <source src="<?php echo '/web/bundles/framework/video/'.$v.'.mp4';?>" type='video/mp4'>
                <p class="vjs-no-js ">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/ " target="_blank ">supports HTML5 video</a>
                </p>
            </video>
              <div id="info_video" style="background-color:#dddddd;display:inline-block;margin-bottom:20px;margin-top:20px;height:35%;width:100%;padding:10px;border-radius:8px;border: 2px ridge black;">
                <div style="width:100%;height:100%;">
                  <div style="width:40%;height:90%;float:left;">
                    <div style="margin-left:15px;width:50%;">
                      <span> Mise en ligne le <?php echo $info_date;?> </span>
                    </div>
                    <div class="descrvideo" style="margin-left:15px;width:100%;height:85%;margin-top:10px;font:16px/26px Georgia, Garamond, Serif;overflow-y: scroll;overflow-x: hidden;">
                      <p style="color:black;">
                        <?php echo $description; ?>
                      </p>
                    </div>
                  </div>

                  <div style="text-align:center;width:100%;margin-bottom:15px;"><span><?php echo $views." vues"; ?></span></div>
                  <div style="text-align:center;"> 
                    <?php
                        $id = 0;
                        $type1="";
                        $type2="";  
                        if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
                          $type1='autocomplete="off" name="likes"';
                          $type2='autocomplete="off" name="dislikes"';
                        }
                        else{
                          $type2 = 'disabled=""';
                          $type1=$type2;
                        }
                        if(!isset($vote['likes']) || $vote['likes'] == 0)
                          echo '<span><button '.$type1.' style="margin:1%;outline:none;background-color:transparent;border:none;outline:0;">
                                  <img onmouseout="resetIconUp(&#34icon'.$id.'&#34);" style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up.png" alt="">
                                  <span id="content">'.$likes.'</span>
                                </button></span>';
                        if(isset($vote['likes']) && $vote['likes'] == 1)
                          echo '<span><button '.$type1.' style="margin:1%;outline:none;background-color:transparent;border:none;outline:0;">
                                  <img  style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up-hand-symbol.png" alt="">
                                  <span id="content">'.$likes.'</span>
                                </button></span>'; 
                        $id++;
                        if(!isset($vote['dislikes']) || $vote['dislikes'] == 0)
                          echo '<span><button '.$type2.' style="margin:1%;outline:none;background-color:transparent;border:none;outline:0;"">
                                  <img style="max-width:30px;max-height:30px;" onmouseout="resetIconDown(&#34icon'.$id.'&#34);" id="icon'.$id.'" src="/web/bundles/framework/images/thumb-down.png" alt="">
                                  <span id="content">'.$dislikes.'</span>
                                </button></span>';
                        if(isset($vote['dislikes']) && $vote['dislikes'] == 1)
                          echo '<span><button '.$type2.' style="margin:1%;outline:none;background-color:transparent;border:none;outline:0;">
                                  <img style="max-width:30px;max-height:30px;"  id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-down-silhouette.png" alt="">
                                  <span id="content">'.$dislikes.'</span>
                                </button></span>';
                        ?>
                  </div>
                </div>
              </div>
            </div>
             <div style="position:absolute;margin-left:5%;top:100%;border-radius: 8px;width:60%;background-color:;">
              <?php
                    echo '<form id="comment" action="" method="post" style="margin-bottom:20px;display:inline-block;width:100%;text-align:center;margin-left:20px;margin-top:20px;">
                          <div style="width:70%;float:left;">
                          <textarea name="comment" style="resize:none;width:100%;height:200px;border-radius:8px;background-color:#dddddd"></textarea>
                          </div>
                          <div style="float:left;margin-left:20px;margin-top:5px;width:25%">
                          <button name="send_comment" type ="submit" class="myButt one" style="float: right;width:100%">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">Envoyer</p>
                          </button>
                          </div>
                          </form>';
                       foreach($comments as $comment) {
                           echo '<div id="'.$comment['idComment'].'" style=";padding:10px;margin-left:20px;margin-bottom:10px;width:95%;overflow:hidden;" class="callout" data-closable>
                                  <div style="border-bottom: solid 1px;">
                                    <img style="width:30px;height:30px;" src="met.jpg">
                                    <span style="margin-left:10px;color:white;">'.$comment['pseudoNostreamer'].'<small> le '.$comment['dateComment'].'</small></span>';
                                    if(isset($_COOKIE["pseudo"])  && $_COOKIE["pseudo"] == $comment['pseudoNostreamer'])
                                    echo '
                                        <input name="idComment" value="'.$comment['idComment'].'" hidden>
                                        <button style="outline:none;float:right" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close>
                                        <span aria-hidden="true">&times;</span>
                                        </button>';  
                         
                               echo '</div>
                                  <p>'.$comment['messageComment'].'</p>
                                </div>';
                       }
                    ?>
          </div>
          </div>
          <div class="recommandations" style="margin-left:-20px;border-radius:8px;border: 2px ridge black;text-align:center;width:25%;height:100%;float:left;display:inline-block;overflow-y:scroll;overflow-x:visible;">
            <?php
              foreach($video as $v)
                {
                  $titre= $v['nameVideo'];
                  $id = $v['idVideo'];
                  $date = $v['dateVideo'];
                  $vues = $v['viewsVideo'];
                  $idChannel = $v['idChannel'];
                  $Page = $page[$titre];
                  $Channel = $channel[$titre];
                  echo '
                  <a href ="watch?v='.$id.'" style="color:white;line-height:none;margin-bottom:20px;">
                    <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                      <div style="height:35px;overflow:hidden;">
                          <font class="titres" style="font-size:12px;line-height:none;color:white;"><strong>'.$titre.'</strong></font><br>
                      </div>
                      <img src="/web/bundles/framework/miniature/'.$v['miniature'].'" style="border-radius:8px;height:125px;width:225px;text-align:center;"><br>
                      <div>
                      </div>
                      </a>
                      <div style="width:225px;margin-top:-2px;">
                      <a name="channel" id="'.$idChannel.'" href="channel/'.$Channel.'">
                          <button class="myButt one">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">'.$Channel.'</p>
                          </button>
                      </a>
                      <a href="profile/'.$Page.'">
                          <button class="myButt one">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">'.$Page.'</p>
                          </button>
                      </a>
                      </div>
                      <div style="text-align:center;">
                          <font size="1 ">'.$vues.' vues -</font>
                          <font size="1 ">le '.$date.'</font>
                      </div>
                  </div>
                ';
                }
              ?>
          </div>
          <!--<div style="border-radius:8px;border: 2px ridge black;width:1%;height:100%;float:right">
          </div>-->
         
        


      <section>
      </section>
      </article>

      <article id="page2" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
       <article id="page3" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>

    </div>
  </div>
  </div>
</body>
</html> 