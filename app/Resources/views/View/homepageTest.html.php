<!-- app/Resources/views/View/homepageTest.html.php--> 
<!doctype html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
    <script type="text/javascript" src="/web/bundles/framework/js/top-bar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/validation/form.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/display/upload.js') ?>"></script>
</head>

<body onresize="handleWindow()" onload="handleWindow()"> 
    <div class="top-bar">
            <div style="display: inline-block;width:100%;">
              <div id="left-search" style="float:left;">
                <ul id="menu" class="menu">
                    <li><a href="/web/app_dev.php/" ><img id="logo" class="" src="/web/bundles/framework/images/logo.png" alt="logo"></a></li>
                    <li><input id ="search-bar" class="search-bar" type="search" placeholder="Search Here"></li>
                    <li><button id="button-search" class="button" type="button">Search</button></li>
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
                            echo '<li id="signed-1"><a href="profile"><button class="button" type="button">Profile</button></li>';
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
            <div id="liste" class="liste">
              <ul class="tabs " data-tabs id="tabs_example">
                <li class="tabs-title "><a href="#tab2">Vidéastes</a></li>
                <li class="tabs-title "><a href="#tab3 ">Chaînes</a></li>
                <li class="tabs-title "><a href="#tab4 ">Actualité</a></li>
                <li class="tabs-title "><a href="#tab5 ">Abonnements</a></li>
                <li class="tabs-title is-active "><a href="#tab1">Tendances</a></li>
              </ul>
            </div>
      </div>
        <div  id="videos" class="tabs-content " data-tabs-content="tabs_example"  style="margin-top:130px;">
        <!------------------------------------------------------------Section Tendances---------------------------->
          <div  class="tabs-panel is-active " id="tab1" >
            <div class ="defilement-video" style="text-align: center;">
              <?php
              $id = "Metallica - Atlas, Rise! Teaser";
              $vues = 1500;
              $titre="Metallica - Atlas, Rise! Teaser";
              $userChannel="channel";
              $userPage="profile";
              $date="00/00/0000";
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
        <!------------------------------------------------------------Section Vidéastes---------------------------->

        <div class="tabs-panel" id="tab2">
            <h1>bonjour</h1>

        </div>

        <div class="tabs-panel " id="tab3">
            <p>Third Player</p>
            <p>Shane Warne</p>
        </div>
        <div class="tabs-panel " id="tab4">
            <p>Fourth Player</p>
            <p>Shaun Pollock</p>
        </div>
        <div class="tabs-panel " id="tab5">
            <p>Five Player</p>
            <p>Adam Gilchrist</p>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>

</html>