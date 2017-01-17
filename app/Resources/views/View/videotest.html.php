<!-- app/Resources/views/View/videotest.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
    <script type="text/javascript" src="/web/bundles/framework/js/top-bar.js"></script>
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
</head>

<body onresize="handleWindow()" onload="handleWindow()">
      <div data-sticky-container>
        <div class="top-bar" style="z-index:1;" data-sticky>
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
                            
                            echo '<li id="signed"><a href="channel"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/metstudio.jpg"></a></li>';
                            echo '<li id="signed-1"><a href="profile"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
                          }else
                          {
                            echo '<div id ="right-log" style="float:right;">
                            <ul id="menu" class="menu">';
                            echo '<li id="signIn" ><a href="register"><button class="button" type="button">Sign Up</button></a></li>';
                          }
                            
                          echo '<li id ="logIn">';
                          echo '<a href=../'.$href.'>';
                          echo '<button  id="log" type ="button" class="button" >'.$log.'</button></a>';
                        ?>
                    </li>  
                </ul>
              </div>
            </div>
          </div>


    <!-------------------------------------------------------TOP BAR------------------------------------------------------>
    <div class="video-titre" style="height:5%;width:70%;">
        <h3 style="text-align:center;"><?php echo $title; ?></h3>
    </div>

    <div class="video-principale" style="height: 95%;width: 100%;">
        <div class="video-container " style="height:70%;width:65%!important;margin-left:20px; ">
            <video id="my-video " class="video-js " controls preload="auto " style="width:100%; height:100%; " poster="atlas.jpg " data-setup="{} ">
                <source src="<?php echo '/web/bundles/framework/mp4/'.$v.'.mp4';?>" type='video/mp4'>
                <p class="vjs-no-js ">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/ " target="_blank ">supports HTML5 video</a>
                </p>
            </video>
        </div>

        <div style="text-align:center;overflow-y:hidden;overflow-x:visible;height:70%;">
            <div class=" " style="display:inline-block;width:60%;height:100%;overflow-y:scroll;overflow-x:visible; ">
                <h6 style="text-align:center; ">Autres vidéos de la chaîne</h6>
                 <?php
              foreach($video as $v)
                {
                  $titre= $v['nameVideo'];
                  $id = $v['idVideo'];
                  $date = $v['dateVideo'];
                  $vues = $v['viewsVideo'];
                  $Page = $page[$titre];
                  $Channel = $channel[$titre];
                  echo '
                  <a href ="watch?v='.$id.'">
                    <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                      <div style="height:35px;overflow:hidden;">
                          <font size="2" class="titres"><strong>'.$titre.'</strong></font><br>
                      </div>
                      <img src="/web/bundles/framework/images/atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                      <div>

                      </div>

                      <div style="width:225px;">
                          <a href="channel" class="button tiny" style="margin-left:none;margin-right:none;width:49%;height:100%;">
                              <font size="1">'.$Channel.'</font>
                          </a>
                          <a href="profile" class="button tiny" style="margin-left:none;margin-right:none;width:49%;height:100%;">
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
        <div width="100%">
            <div style="margin-left:20px;height:20%;width:65%;margin-top:0px!important; ">
                <div class="primary progress" role="progressbar" tabindex="0" aria-valuenow="89" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                    <div class="progress-meter" style="width: 89%">
                        <p class="progress-meter-text">89%</p>
                    </div>
                </div>

                <div style="position:absolute;height:20%;width:65%;">
                    <div style="float:left;;height:100%;width:45%;">
                        <h4> Mise en ligne le <?php echo $info_date;?> </h4>
                        <div style="height:60%;width:100%;margin-top:10px;font:16px/26px Georgia, Garamond, Serif;overflow-y: scroll;overflow-x: hidden;">
                            <?php echo $description; ?>
                        </div>
                    </div>
                    <div style="height:100%;width:25%;float:left;">
                        <div style="margin-top:15px;margin-left:10%;">
                            <img style="width:50px;height:50px;" src="met.jpg">
                            <span style="margin-left:10px;"><?php echo $video_channel;?></span>
                        </div>
                        <div style="margin-top:15px;margin-left:10%;">
                            <img style="width:50px;height:50px;" src="metstudio.jpg">
                            <span style="margin-left:10px;"><?php echo $video_page;?></span>
                        </div>
                    </div>
                    <div style="height:100%;width:30%;float:left;">
                        <div style="text-align:center;">
                            <h3><?php echo $views." vues"; ?></h3><br>
                            <button type="button" class="button" style="width:40%;">J'aime <br>(10293)</button>
                            <button type=" button " class="alert button " style="width:40%;">Je n'aime pas<br> (134)</button>
                        </div>
                    </div>

                    <!--<div width=" 100% ">
                    <table style="margin-top:10px;display:inline-block; ">
                        <tr>
                            <td style="width:100px;height:100px;background-color:white;border-color:white; ">
                                <img style="width:100%;height:100%;margin-top: 10px; margin-bottom: 10px; margin-right: 10px; margin-left: 10px; " src="met.jpg ">
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <h4 style="text-align:center; ">MetallicaStudio</h4>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="button ">S'abonner [2 000 000]</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <table style="margin-top:10px;display:inline-block; ">
                        <tr>
                            <td style="width:100px;height:100px;background-color:white;border-color:white; ">
                                <img style="width:100%;height:100%;margin-top: 10px; margin-bottom: 10px; margin-right: 10px; margin-left: 10px; " src="met.jpg ">
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <h4 style="text-align:center; ">MetallicaTV</h4>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="button ">S'abonner [2 000 000]</a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>-->


                    <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
</body>