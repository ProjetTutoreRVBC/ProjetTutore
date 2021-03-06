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
    <?php echo $profile['namePage']; ?>

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
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/subs.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/likes_page.js') ?>"></script>


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
              <li class="ayx">Chaînes de <?php echo $profile['namePage']; ?></li>
              <?php 
              if($listChannel != 0) {
                foreach($listChannel as $c){
                  echo '
                    <li class="qp">
                    <a class="qn" href="../channel/'.$c["nameChannel"].'">
                      '.$c["nameChannel"].'
                      </a>
                    </li>
                  ';
                }
              }
             ?>

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
          <div class="brw" style="width:80%" id="tendances">
            <img src="https://yt3.ggpht.com/-iyVgJA85AAk/AAAAAAAAAAI/AAAAAAAAAAA/xPqZULToWm0/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" style="width: 40px;height: 40px;float:left;margin-right: 10px;border-radius:15px;">
            <h2 class="brx"><?php echo $profile['namePage']; ?></h2>
            <div id="abonnement">
              <?php echo '<span id="nb-abonnes" style="float:left;" >'.$subs[0].'&nbsp;</span><span style="float:left;"> abonnés</span>';?>
              <?php
                $end_form = "";
                if(isset($_COOKIE['pseudo'])){
                  //echo '<form action="" method="post">';
                  echo '<input name="abonnement" value="'.$profile['idPage'].'" hidden>';
                  //$end_form = '</form>';
              
                  if(isset($isSubscribed)  && $isSubscribed == true){
                    echo '<button id="button-des" style="margin-top:4px;width:50px;float:left;cursor:pointer;margin-left:-10px;color:white;background:transparent;outline:none;border:none" class="fa fa-heart" style="margin-right:15px;float:right">';
                    echo '<div class="insider"></div>';
                    echo '</button>';
                  }
                  if(isset($isSubscribed)  && $isSubscribed == false){
                    echo '<button id="button-ab" style="margin-top:4px;width:50px;float:left;cursor:pointer;margin-left:-10px;color:white;background:transparent;outline:none;border:none" class="fa fa-heart-o" style="margin-right:15px;float:right">';
                    echo '<div class="insider"></div>';
                    echo "</button>";
                  }  
                }
                 else{
                    
                    echo '<a href="../login"><button style="width:50px;float:left;cursor:pointer;margin-left:10px;color:white;background:transparent;outline:none;border:none" class="fa fa-heart-o" style="margin-right:15px;float:right">';
                    echo '<div class="insider"></div>';
                    echo "</button></a>";
                  }
                ?>
            </div>
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

          <div style="width:100%;">
            <?php
          $param_delete_post = "";
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '
        <div style="padding:10px;display: inline-block;width:100%;">
          <form action="" method="post">
          <div>
          <input name="slug" id="slug" value="'.$profile['namePage'].'" hidden>
         <textarea name="new_post" id="message_post" style="resize:none;width:100%;height:100px;border-radius:8px;background-color:#dddddd;float:left;"></textarea>
          </div>
          <div style="float:right;width:100%;">
          <button class="myButt one" type="submit" style="width:100%;">
            <p style="margin-top:4px;font-size:10px;;">Envoyer</p>
          </button>
          </div>
          </form>  
        </div>'; 
        $param_delete_post = ' class ="callout" data-closable';
            }
        $id = 0;
        $type1="";
        $type2="";  
        foreach($posts as $post){
          
        echo '
        <div id="bloc" style="margin-bottom: 25px;padding:10px;display: inline-block;width:100%;" '.$param_delete_post.'>
            <div style="border-bottom: solid 1px;padding:10px;padding-left:0px;float:left;width:100%">
                <img src="https://yt3.ggpht.com/-iyVgJA85AAk/AAAAAAAAAAI/AAAAAAAAAAA/xPqZULToWm0/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" style="width: 20px;height: 20px;float:left;margin-right: 10px;border-radius:15px;"><span style="float:left;">'.$profile['namePage'].' <small> '.$post['datePost'].'</small> </span>';
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '<form id="foo" action="" method="post" style="float:right;">
                  <input name="idPost" value="'.$post['idPost'].'" hidden>
                    <button style="outline:none;float:right;" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close>
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </form>';
            $disabled=''; 
            }
            else {
              
            $disabled='disabled';
            }
            echo'</div>
            <div style="margin-top:15px;width:100%;overflow:hidden;">
                <p style="float:left;">'.$post['messagePost'].'</p>
            </div>
            
            <div style="display:inline-block;width:100%;height:40px;">
                <div>
                <input id="'.$id.'-post-like" value="'.$post['idPost'].'" hidden>';
                if(!isset($vote[$post['idPost']]['like']) || $vote[$post['idPost']]['like'] == false)
                  echo '<button onclick="likes('.$id.')" id="'.$id.'" autocomplete="off" style="float:left;margin:1%;outline:none;background-color:transparent;border:none" '.$disabled.'>
                    <img onmouseout="resetIconUp(&#34icon'.$id.'&#34);" style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up.png" alt="">
                    <span id="content" style="color:white;">'.$post['likes'].'</span>
                  </button>
                  </div>';
                if(isset($vote[$post['idPost']]['like']) && $vote[$post['idPost']]['like'] == true)
                  echo '<button onclick="likes('.$id.')" id="'.$id.'" autocomplete="off" style="float:left;margin:1%;outline:none;background-color:transparent;border:none" '.$disabled.'>
                    <img  style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up-hand-symbol.png" alt="">
                    <span id="content" style="color:white;">'.$post['likes'].'</span>
                  </button>
                  </div>';  
                $id++;
                echo '<div>
                <input id="'.$id.'-post-dislike" value="'.$post['idPost'].'" hidden>';
                if(!isset($vote[$post['idPost']]['dislike']) || $vote[$post['idPost']]['dislike'] == false)
                  echo '<button onclick="dislikes('.$id.')"  id="'.$id.'" autocomplete="off" style="float:left;margin:1%;outline:none;background-color:transparent;border:none" '.$disabled.'>
                    <img style="max-width:30px;max-height:30px;" onmouseout="resetIconDown(&#34icon'.$id.'&#34);"  id="icon'.$id.'" src="/web/bundles/framework/images/thumb-down.png" alt="">
                    <span id="content" style="color:white;">'.$post['dislikes'].'</span>
                  </button>';
                if(isset($vote[$post['idPost']]['dislike']) && $vote[$post['idPost']]['dislike'] == true)
                  echo '<button onclick="dislikes('.$id.')"  id="'.$id.'" autocomplete="off"style="float:left;margin:1%;outline:none;background-color:transparent;border:none" '.$disabled.'>
                    <img style="max-width:30px;max-height:30px;"  id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-down-silhouette.png" alt="">
                    <span id="content" style="color:white;">'.$post['dislikes'].'</span>
                  </button>';
                  echo '<button onclick="$(\'#'.$post['idPost'].'\').toggle(\'show()\');" autocomplete="off" style="cursor:pointer;float:right;margin:1%;outline:none;background-color:transparent;border:none">
                    <i class="fa fa-comment fa-2x" aria-hidden="true" style="color:white;"></i>
                  </button>';
            echo '</div>
            </div>
            <div class="coms" style="display:none" id="'.$post['idPost'].'">
                <form action="" method="post" style="width:100%;margin-top:20px;margin-bottom:20px;display: inline-block;">
                <div style="position:relative">
                <input name="post_id" value="'.$post['idPost'].'" hidden>
                <textarea name="comment" style="resize:none;width:100%;height:50px;border-radius:8px;background-color:#dddddd"></textarea>
                <button name="send_comment" type="submit" style="cursor:pointer;position:absolute;bottom:15px;right:10px;outline:none;background-color:transparent;border:none">
                  <i class="fa fa-paper-plane fa-2x" aria-hidden="true" style="color:#434857;"></i>
                </button>
                </div>
                
                
                
                </form>';
             foreach($comments as $key => $value) {
                if($key== $post['idPost']){
                 foreach($value as $comment){
                   echo '<div style="padding:10px;margin-top:5px;" '.$param_delete_post.'>
                          <div style="border-bottom: solid 1px;width:100%;float:left;">
                            <img src="https://yt3.ggpht.com/-iyVgJA85AAk/AAAAAAAAAAI/AAAAAAAAAAA/xPqZULToWm0/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" style="width: 20px;height: 20px;float:left;margin-right: 10px;border-radius:15px;"><span style="color:white;float:left;">'.$comment['pseudoNostreamer'].'<small> le '.$comment['dateComment'].'</small></span>';
                            if(isset($_COOKIE["pseudo"])  && $_COOKIE["pseudo"] == $comment['pseudoNostreamer'])
                          echo '<form action="" method="post">
                              <input name="idComment" value="'.key($value).'" hidden>
                              <button style="outline:none;float:right;" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close>
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </form>';
                     echo    '</div>
                          <p style="margin-top:5px;float:left;">'.$comment['text'].'</p>
                        </div>';
                  }
                }
             }
            echo '</div>
          </div>';
          $id++;
        }
        ?>
          </div>
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