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
    <?php echo $name_channel; ?>

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
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/subs_channel.js') ?>"></script>

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
            <h2 class="brx"><?php echo $name_channel; ?></h2>
            <div id="abonnement">
              <?php echo '<span id="nb-abonnes" style="float:left;" >'.$subs_channel.'&nbsp;</span><span style="float:left;"> abonnés</span>';?>
              <?php
                $end_form = "";
                if(isset($_COOKIE['pseudo'])){
                  //echo '<form action="" method="post">';
                  echo '<input name="abonnement" value="'.$idChannel.'" hidden>';
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
            <div style="display:table;width:100%;">
              <?php
              foreach($video as $v)
                {
                  if($channel[$v['nameVideo']] == $name_channel){
                  $titre= $v['nameVideo'];
                  $id = $v['idVideo'];
                  $date = $v['dateVideo'];
                  $vues = $v['viewsVideo'];
                  $Page = $page[$titre];
                  $Channel = $channel[$titre];
                  echo '
                  <a href ="../watch?v='.$id.'" style="color:white;line-height:none;margin-bottom:20px;">
                    <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                      <div style="height:35px;overflow:hidden;">
                          <font class="titres" style="font-size:12px;line-height:none;color:white;"><strong>'.$titre.'</strong></font><br>
                      </div>
                      <img src="/web/bundles/framework/miniature/'.$v['miniature'].'" style="border-radius:8px;height:125px;width:225px;text-align:center;"><br>
                      <div>
                      </div>
                      </a>
                      <div style="width:225px;margin-top:-2px;">
                      <a href="../channel/'.$Channel.'">
                          <button class="myButt one">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">'.$Channel.'</p>
                          </button>
                      </a>
                      <a href="../profile/'.$Page.'">
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
                  </a>
                ';
                }
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