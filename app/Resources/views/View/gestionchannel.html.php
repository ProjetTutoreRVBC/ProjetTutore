<!-- app/Resources/views/View/gestionchannel.html.php-->  
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
                            
                             echo '<li id="signed"><a href="../gestion"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/param.png"></a></li>';
                            echo '<li id="signed-1"><a href="../profile/'.$user_page.'"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
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
        <div style="text-align:center;width:100%;">
            <h5> 2 938 292 personnes sont abonnés à <?php echo $name_channel;?> </h5>
        </div>
        <div style="float:left;padding:0.01em 16px;border:1px solid #ccc!important;border-radius:16px!important;margin-left:5%;margin-top:5%;width:85%;height:60%;">
            <div style="width:100%;height:10%;margin-top:5px;">
                <h4 style="text-align:center;">Vos Vidéos</h4>
            </div>

            <div style="height:80%;margin-top:20px;overflow-x:visible;overflow-y:scroll; ">
                <div style="float:left;border: 1px solid grey;height:125px;width:225px;text-align:center; ">
                </div>
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
                echo '<div style="width:100%;height:125px;display:inline-block;margin-top:3%;overflow:hidden; ">
                    <div style="width:50%;float:left;overflow:hidden;">
                        <a href="../watch?v='.$id.'"><img src="/web/bundles/framework/images/atlas.jpg " style="height:125px;width:225px;text-align:center;"></a>
                        <font style="font-size:110%;margin-left:10px;overflow:hidden; ">'.$titre.'</font>
                    </div>
                    <table style="float:left;height:100%;width:30%;">
                        <tr>
                            <th class="tg-yw4l" colspan="2">
                                '.$vues.' vues
                            </th>
                        </tr>
                        <tr>
                            <td style="text-align:center;background-color:#2199e8;">
                                '.$v['likes'].' likes
                            </td>
                            <td style="background-color:#da3116;text-align:center;">
                                '.$v['dislikes'].' dislikes
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;" colspan=" 2 ">
                                143 commentaires
                            </td>
                        </tr>
                    </table>
                    <div style="text-align:center;width:18%;margin-left:20px;float:left;height:100%;">
                        <a class="button" style="width:100%;margin-bottom:2px;">Désactiver commentaires</a>
                        <a class="button" style="width:100%;margin-bottom:2px;">Désactiver le chat</a>
                        <a class="alert button" style="width:100%;margin-bottom:2px;">Supprimer la vidéo</a>
                    </div>
                </div>';
                  }
                }
                ?>
            </div>
        </div>
    </div>
</body>