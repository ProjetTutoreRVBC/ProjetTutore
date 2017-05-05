<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  
  <title>

    nostream &middot;
    <?php echo substr($title,0,45); ?>

  </title>

  <script src="https://use.fontawesome.com/1a55bab663.js"></script>
  <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/black-sabbath.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/scrollspy.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/likes.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/search-engine.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/comments.js') ?>"></script>

  <link rel="icon" type="image/png" href="/web/bundles/framework/favicon.png" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
  <link href="web/css/toolkit-inverse.css" rel="stylesheet">
  <link rel="stylesheet" href="/web/bundles/framework/css/cool-buttons.css">
  <link rel="stylesheet" href="/web/bundles/framework/css/black-sabbath.css">
  <link href="assets/css/application.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
  <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">

  <style>
    /* note: this is a hack for ios iframe for bootstrap themes shopify page */
    /* this chunk of css is not part of the toolkit :) */
    
    body {
      width: 1px;
      min-width: 100%;
      *width: 100%;
    }
  </style>
</head>


<body data-spy="scroll" data-target=".bro">
  <div class="bw">
    <div class="di">
      <div class="em brh">
        <nav class="bro">
          <div class="bri">
            <button class="bqe bqg brj" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="aep">Toggle nav</span>
            </button>
            <a class="brk bsi" style="display:table;" href="/web/">
              <img id="logo" class="nostream" src="/web/bundles/framework/lelogo.png" alt="logo">
              <h3 class="brx" style="display:table-cell;margin-top:auto;margin-bottom:auto;vertical-align:middle">NOSTREAM</h3>
            </a>
          </div>

          <div class="collapse bql" id="nav-toggleable-md">
            <form class="brm">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="po">
                <span class=""><i class="fa fa-search" style="cursor:pointer;" aria-hidden="true"></i></span>
              </button>
            </form>
            <ul class="nav qq nav-stacked xx">
              <li class="ayx">Accès Rapide</li>
              <li class="qp active">
                <a class="qn" href="/web#tendances">Tendances</a>
              </li>
              <li class="qp">
                <a class="qn " href="/web#abonnements">Abonnements</a>
              </li>
              <li class="qp">
                <a class="qn " href="/web#videastes">Vidéastes</a>
              </li>
              <li class="qp">
                <a class="qn " href="/web#chaines">Chaînes</a>
              </li>

              <li class="ayx">Espace Nostreamer</li>
              <li class="qp">
                <a class="qn" href="/web">
                  Accueil
                </a>
              </li>
              <li class="qp">
                <a class="qn " href="docs/index.html">
                  Mon compte
                </a>
              </li>
              <li class="qp">
                <a class="qn" href="http://getbootstrap.com" target="blank">
                  Mes abonnements
                </a>
              </li>
              <li class="qp">
                <a class="qn " href="index-light/index.html">Se déconnecter</a>
              </li>
              <li class="qp">
                <a class="qn" href="#docsModal" data-toggle="modal">
                  Example modal
                </a>
              </li>
            </ul>
            <hr class="bsj afx">
          </div>
        </nav>
      </div>
      <div class="es bsk">
        <div class="brv">
          <div class="brw" id="tendances">
            <a href="/web/channel/<?php echo $video_channel;?>"><h3 class="bry"><?php echo $video_channel;?></h3></a><br><br>
            <h2 class="brx" style="margin-top:-19px;"><?php echo substr($title,0,45); ?></h2>
            <span> Mise en ligne le <?php echo $info_date;?> </span>
          </div>

          <div class="qb brz">
            <a href="/web/register" style="color:white">
              <i class="fa fa-user-plus fa-2x" style="cursor:pointer;" aria-hidden="true"></i>
            </a>
            <a href="/web/login" style="color:white">
              <i class="fa fa-sign-in fa-2x" style="cursor:pointer;" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <hr class="afx">

        <div class="di awt agl">
          <div class="video-principale" style="width:100%;float:left;margin-left:;">
            <div class="video-container " style="height:100%;width:100%!important;margin-left:auto;margin-right:auto;">
              <video id="<?php echo $v; ?>" class="video-js " controls preload="auto " style="width:100%;height:100%;" poster="<?php echo '/web/bundles/framework/miniature/'.$miniature;?>" data-setup="{} ">
                <source src="<?php echo '/web/bundles/framework/video/'.$v.'.mp4';?>" type='video/mp4'>
                <p class="vjs-no-js ">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/ " target="_blank ">supports HTML5 video</a>
                </p>
            </video>
            </div>
          </div>
          <div id="info_video" style="background-color:transparent;display:inline-block;margin-bottom:20px;margin-top:20px;height:25%;width:100%;padding:10px;">
            <div style="width:100%;height:100%;">
              <div style="width:65%;height:90%;float:left;">
                <div class="descrvideo" style="width:100%;height:100px;font:16px/26px Georgia, Garamond, Serif;overflow-y: scroll;overflow-x: hidden;">
                  <p style="float:left;">
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

          <div style="width:100%;">
            <?php
                    echo '<form id="comment" action="" method="post" style="margin-bottom:20px;display:inline-block;width:100%;text-align:center;margin-top:20px;">
                          <div style="width:100%;float:left;">
                          <textarea name="comment" style="resize:none;width:100%;height:200px;border-radius:8px;background-color:#dddddd"></textarea>
                          </div>
                          <div style="float:left;width:100%">
                          <button name="send_comment" type ="submit" class="myButt one" style="float: right;width:100%">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">Envoyer</p>
                          </button>
                          </div>
                          </form>';
                       foreach($comments as $comment) {
                           echo '<div id="'.$comment['idComment'].'" style=";padding:10px;margin-bottom:10px;width:100%;overflow:hidden;" class="callout" data-closable>
                                  <div style="border-bottom: solid 1px;width:100%;float:left;">
                                    <img style="width:30px;height:30px;float:left;" src="met.jpg">
                                    <span style="margin-left:10px;color:white;float:left;">'.$comment['pseudoNostreamer'].'<small> le '.$comment['dateComment'].'</small></span>';
                                    if(isset($_COOKIE["pseudo"])  && $_COOKIE["pseudo"] == $comment['pseudoNostreamer'])
                                    echo '
                                        <input name="idComment" value="'.$comment['idComment'].'" hidden>
                                        <button style="outline:none;float:right;background-color:transparent;border:none" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close>
                                          <i class="fa fa-times " style="color:#cfd2da;cursor:pointer;" aria-hidden="true"></i>
                                        </button>';  
                         
                               echo '</div>
                                  <p style="float:left;">'.$comment['messageComment'].'</p>
                                </div>';
                       }
                    ?>
          </div>


          <div class="di bsl">

          </div>

          <hr class="agl">
        </div>




        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script>
        <script src="assets/js/chart.js"></script>
        <script src="assets/js/tablesorter.min.js"></script>
        <script src="assets/js/toolkit.js"></script>
        <script src="assets/js/application.js"></script>
        <script>
          // execute/clear BS loaders for docs
          $(function() {
            while (window.BS && window.BS.loader && window.BS.loader.length) {
              (window.BS.loader.pop())()
            }
          })
        </script>
</body>

</html>