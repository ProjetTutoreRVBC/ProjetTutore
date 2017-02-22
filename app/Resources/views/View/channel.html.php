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
                            
                             echo '<li id="signed"><a href="gestion"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/param.png"></a></li>';
                            echo '<li id="signed-1"><a href="../profile"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
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
    <div style="height:40%;position:absolute;width:100%;top:49px;">
    <div style="height:75%;padding:1px;width:100%;">
        <img src="<?php echo "/web/bundles/framework/images-banniere/".$banniere; ?>" style="height:100%;width:100%;text-align:center;"><br>
        <img src="<?php echo "/web/bundles/framework/images-banniere/".$profile; ?>" style="position:relative;padding:1px;height:45%;padding-left:45%;text-align:center;top:-50%;left:-45%;margin-left:30px;">
    </div>

    <div style="padding:10px;box-shadow: 1px 1px 10px 1px #CDD3E1;width:100%;height:30%;">
        <div style="float:left;margin-left:30px;">
            <h2 style=""><?php echo $name_channel; ?></</h2>
            <h6 style="margin-top:-5%;float:left;"><?php echo $subs_channel;?> abonnés</h6>
        </div>
        <a class="button" style="float:left;margin-left:25px;margin-top:10px;">S'abonner</a>
        <div style="float:right;margin-top:1%;margin-right:50px;height:50px; ">
            <img style="width:50px;height:50px; " src="/web/bundles/framework/images/met.jpg  ">
            <span style="margin-left:10px;font-size:115% ">MetallicaTV</span>
        </div>
    </div>
      </div>


        <div style="top:50%;position:absolute;left:0;right:0;margin:0 auto;text-align:center;width:65%;height:1000%;background-color:white;padding:1px;">
            <div  class="tabs-panel is-active " id="tab1" >
              <div class ="defilement-video" style="text-align: center;">
                <?php
              foreach($video as $v)
                {
                  if($channel[$v['nameVideo']] == $name_channel){
                    $titre = $v['nameVideo'];
                    $id = $v['idVideo'];
                    $date = $v['dateVideo'];
                    $vues = $v['viewsVideo'];
                    $Page = $page[$titre];
                    $Channel = $channel[$titre];
                    echo '
                    <a href ="../watch?v='.$id.'">
                      <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                        <div style="height:35px;overflow:hidden;">
                            <font size="2" class="titres"><strong>'.$titre.'</strong></font><br>
                        </div>
                        <img src="/web/bundles/framework/miniature/'.$v['miniature'].'" style="height:125px;width:225px;text-align:center;"><br>
                        <div>

                        </div>

                        <div style="width:225px;">
                            <a href="" class="button tiny" style="margin-left:none;margin-right:none;width:48.5%;height:100%;">
                                <font size="1">'.$Channel.'</font>
                            </a>
                            <a href="../profile/'.$Page.'" class="button tiny" style="margin-left:none;margin-right:none;width:48.5%;height:100%;">
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
                }
              ?>
              </div>  
            </div>
        </div>
</body>