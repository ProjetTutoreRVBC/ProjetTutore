<!-- app/Resources/views/View/video.html.php-->  
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
                          echo '<a href="'.$href.'">';
                          echo '<button  id="log" type ="button" class="button" >'.$log.'</button></a>';
                        ?>
                    </li>  
                </ul>
              </div>
            </div>
          </div>
    <!-------------------------------------------------------TOP BAR------------------------------------------------------>
      <div id="videos">
        <div class="video-titre" style="height:5%;width:100%;top:50px;">
            <h3 style="text-align:center;">Metallica - Atlas, Rise! Teaser</h3>
        </div>
        <div class="video-principale" style="height: 95%;width: 100%;top:100px;">
            <div class="video-info-channel" style="height:65%;">
                <div class="video-info-channel-nostreamer">
                    <table style="width:100%;">
                        <tr>
                            <td style="width:150px;">
                                <img style="width:100%;margin-right: 10px;" src="/web/bundles/framework/images/met.jpg">
                            </td>
                            <td>
                                <table style="width:100%;">
                                    <tr>
                                        <h4 style="text-align:center;">MetallicaTV</h4>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="text-align:center;">2 000 000 abonnés</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0;">
                                            <button style="margin:0;width:100%;" type="button" class="expanded button" href="#">Suivre</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="video-info-channel-channel">
                    <table style="width:100%;">
                        <tr>
                            <td style="background-color:white;border-color:white;width:150px;">
                                <img style="width:100%;margin-right: 10px;" src="/web/bundles/framework/images/metstudio.jpg ">
                            </td>
                            <td>
                                <table style="width:100;">
                                    <tr>
                                        <h4 style="text-align:center;">Metallica Studio</h4>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="text-align:center;">1 400 000 abonnés</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:0;">
                                           <button style="margin:0;width:100%;" type="button" class="expanded button" href="#">S'abonner</button>                 
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="video-container " style="height:65%;width:60%!important; ">
                <video id="my-video " class="video-js " controls preload="auto " style="width:100%; height:100%; " poster="atlas.jpg " data-setup="{} ">
                    <source src="<?php echo '/web/bundles/framework/mp4/'.$id.'.mp4';?>" type='video/mp4'>
                    <p class="vjs-no-js ">
                      To view this video please enable JavaScript, and consider upgrading to a web browser that
                      <a href="http://videojs.com/html5-video-support/ " target="_blank ">supports HTML5 video</a>
                    </p>
                </video>
            </div>

            <div class="video-info-video " style="width:20%;height:65%;">
                <table>
                    <tr>
                        <h6 style="text-align:center;">Mise en ligne le 22 octobre 2016</h6>
                    </tr>
                    <tr>
                        <h2 style="text-align:center;">298 000 vues</h2>
                    </tr>
                    <tr>
                        <div class="primary progress" role="progressbar" tabindex="0" aria-valuenow="89" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                            <div class="progress-meter" style="width: 89%">
                                <p class="progress-meter-text">89%</p>
                            </div>
                        </div>
                    </tr>
                </table>
                <button type="button " style="margin-left:10px;width:40%" class="button ">J'aime !</button>
                <button type="button " style="margin-right:10px;width:40%" class="alert button ">Je n'aime pas !</button>

                <div style="height:60%;width:100%;margin-top:10px;font:16px/26px Georgia, Garamond, Serif;overflow-y: scroll;overflow-x: hidden;">
                    "Principium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt,
                </div>

            </div>

            <div class="video-recommandations ">
             <div  class="tabs-panel is-active " id="tab1" >
              <div class ="defilement-video" style="text-align: center;">
                <?php
                $id = "Metallica - Atlas, Rise! Teaser";
                $vues = 1500;
                $titre="Metallica - Atlas, Rise! Teaser";
                $userChannel="channel";
                $userPage="profile";
                $date="00/00/0000";
                for($i = 0; $i < 6; $i++)
                  {
                    echo '
                    <a href ="'.$id.'">
                      <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                        <div style="height:35px;overflow:hidden;">
                            <font size="2" class="titres"><strong>'.$titre.'</strong></font><br>
                        </div>
                        <img src="/web/bundles/framework/images/atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                        <div>

                        </div>

                        <div style="width:225px;">
                            <a href="../channel" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                                <font size="1">'.$userChannel.'</font>
                            </a>
                            <a href="../profile" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                                <font size="1">'.$userPage.'</font>
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
            </div>
        </div>
      </div> 
    <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
</body>