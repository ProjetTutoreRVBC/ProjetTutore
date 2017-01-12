<!-- app/Resources/views/View/channel.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script src="/web/bundles/framework/js/top-bar.js"></script>
</head>

<body onresize="handleWindow()" onload="handleWindow()">
    <div data-sticky-container>
        <div class="top-bar" style="z-index: 2;" data-sticky>
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
                          echo '<li id="signed"><a href="channel"><button class="button" type="button">Channel</button></li>';
                          echo '<li id="signed-1"><a href=""><button class="button" type="button">Profile</button></li>';
                        }else
                        {
                          echo '<div id ="right-log" style="float:right;">
                          <ul id="menu" class="menu">';
                          echo '<li id="signIn" ><a href="../register"><button class="button" type="button">Sign Up</button></a></li>';
                        }

                        echo '<li id ="logIn">';
                        echo '<a href="../'.$href.'">';
                        echo '<button  id="log" type ="button" class="button" >'.$log.'</button></a>';
                      ?>
                    </li>  
                </ul>
              </div>
            </div>
          </div>

    <div style="height:40%;padding:1px;border-bottom:1px solid #021a40;border-color:grey;">
        <img src="/web/bundles/framework/images/banner.jpeg " style="z-index:1;height:300px;width:100%;text-align:center;"><br>
        <img src="/web/bundles/framework/images/metstudio.jpg " style="z-index:1;top:225px;left:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
        <img src="/web/bundles/framework/images/met.jpg " style="top:225px;right:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
        <h2 style="margin-left:250px;position:absolute;">MetallicaStudio</h2>
        <h2 style="right:250px;position:absolute;">MetallicaTV</h2>
    </div>


        <div style="margin-top:5%;margin-left:auto;margin-right:auto;text-align:center;width:65%;height:1000%;background-color:white;padding:1px;">
            <div  class="tabs-panel is-active " id="tab1" >
              <div class ="defilement-video" style="text-align: center;">
                <?php
                $id = "Metallica - Atlas, Rise! Teaser";
                $vues = 234432;
                $titre="Metallica - Atlas, Rise! Teaser";
                $userChannel="MetallicaStudio";
                $userPage="MetallicaTV";
                $date="23/10/2016";
                for($i = 0; $i < 30; $i++)
                  {
                    echo '
                    <a href ="video/'.$id.'">
                      <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                        <div style="height:35px;overflow:hidden;">
                            <font size="2" class="titres"><strong>'.$titre.'</strong></font><br>
                        </div>
                        <img src="/web/bundles/framework/images/atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                        <div>

                        </div>

                        <div style="width:225px;">
                            <a href="channel" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                                <font size="1">'.$userChannel.'</font>
                            </a>
                            <a href="profile" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
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
</body>