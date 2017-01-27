<!-- app/Resources/views/View/gestion.html.php-->  
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
    <style>
      .selection:hover { 
        background-color: #2199e8;
        }
      
      a {
        color: black;
      }
      a:hover {
        color: white;
      }
    </style>
</head>

<body onresize="handleWindow()" onload="handleWindow()">
        <div class="top-bar">
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
    <div style="width:100%;height:90%;display:inline-block;">
        <div style="text-align:center;width:100%;margin-top:5%;">
            <h2 style="font-family='proxima_novalight'">Bienvenue, <?php echo $channels[0]['pseudoNostreamer'];?>!</h2>
            <h5> <?php echo $channels[0]['subscribersChannel'];?> personnes suivent votre page principale </h5>
            <h5> <?php echo $channels[0]['subscribersChannel'];?> sont abonnés à votre chaîne la plus importante </h5>
        </div>
        <div style="float:left;padding:0.01em 16px;border:1px solid #ccc!important;border-radius:16px!important;margin-left:5%;margin-top:0%;width:40%;height:60%;">
            <div style="width:100%;height:10%;margin-top:5px;">
                <h4 style="text-align:center;">Vos Chaînes</h4>
            </div>
            <div style="height:80%;margin-top:20px;overflow-x:visible;overflow-y:scroll; ">
                <?php
                $space= "&nbsp;&nbsp;&nbsp;&nbsp;";
                foreach($channels as $channel){
                echo '<a href="../gestion_channel/'.$channel['nameChannel'].'">
                      <div class="selection" style="width:100%;display:inline-block;margin-top:3%; ">
                        <img src="/web/bundles/framework/images/metstudio.jpg " style=" border-radius:20%;height:125px;width:125px;text-align:center; ">
                        <font style="font-size:150%;margin-left:10px; ">'.$channel['nameChannel'].''.$space.'<small>'.$channel['subscribersChannel'].' abonnés</small></font>
                      </div></a>';
                }
                ?>
                <a href="#">
                  <div class="selection" style="width:100%;display:inline-block;margin-top:3%;">
                      <div style="float:left;border: 1px solid grey; border-radius:20%;height:125px;width:125px;text-align:center;background-color:white;">
                      </div>
                  </div>
                </a>   
            </div>
        </div>

        <div style="float:right;padding:0.01em 16px;border:1px solid #ccc!important;border-radius:16px!important;margin-left:5%;margin-right:5%;width:40%;height:60%; ">
            <div style="text-align:center;width:100%;height:10%;margin-top:5px; ">
                <h4>Vos Pages</h4>
            </div>
            <div style="height:80%;margin-top:20px;overflow-x:visible;overflow-y:scroll; ">
                <?php
                /*
                <div style="width:100%;display:inline-block;border:1px solid #ccc!important;border-radius:16px!important;margin-top:3%; ">
                    <h6 style="background:white;margin-left:40%;margin-top:-10px;width:120px;text-align:center; ">Page principale</h6>
                    <img src="/web/bundles/framework/images/met.jpg " style=" border-radius:20%;height:125px;width:125px;text-align:center; ">
                    <font style="font-size:150%;margin-left:10px; ">MetallicaStudio</font>
                </div>
                */
                foreach($pages as $page){
                echo '<a href="../profile/'.$page['namePage'].'">
                      <div class="selection" style="width:100%;display:inline-block;margin-top:3%; ">
                        <img src="/web/bundles/framework/images/met.jpg" style=" border-radius:20%;height:125px;width:125px;text-align:center; ">
                        <font style="font-size:150%;margin-left:10px; ">'.$page['namePage'].'<small></small></font>
                      </div></a>';
                }
                ?>
                <a href="">
                  <div class="selection" style="width:100%;display:inline-block;margin-top:3%;">
                      <div style="float:left;border: 1px solid grey; border-radius:20%;height:125px;width:125px;text-align:center;background-color:white;">
                      </div>
                  </div>
                </a>  
            </div>
        </div>
    </div>
</body>