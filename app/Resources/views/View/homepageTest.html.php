<!-- app/Resources/views/View/homepageTest.html.php--> 
<!doctype html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <script type="text/javascript" src="/web/bundles/framework/js/top-bar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/validation/form.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/display/upload.js') ?>"></script>
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
</head>

<body onresize="handleWindow()" onload="handleWindow()">
    <div class="top-bar">
            <div style="display: inline-block;width:100%;">
              <div id="left-search" style="float:left;">
                <ul id="menu" class="menu">
                    <li><a href="/web/app_dev.php/" ><img id="logo" class="" src="/web/bundles/framework/images/logo.png" alt="logo"></a></li>
                    <li><input id ="search-bar" class="search-bar" type="search" placeholder="Search Here"></li>
                    <li><button class="button" type="button">Search</button></li>
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
                          <a href="channel/'.$Channel.'" class="button tiny" style="margin-left:none;margin-right:none;width:49%;height:100%">
                              <font size="1">'.$Channel.'</font>
                          </a>
                          <a href="profile/'.$Page.'" class="button tiny" style="margin-left:none;margin-right:none;width:49%;height:100%">
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
        <!------------------------------------------------------------Section Vidéastes---------------------------->

        <div class="tabs-panel" id="tab2">

        </div>

        <div class="tabs-panel " id="tab3">
            
        </div>
        <div class="tabs-panel " id="tab4">
            
        </div>
        <div class="tabs-panel " id="tab5">
           
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>

</html>