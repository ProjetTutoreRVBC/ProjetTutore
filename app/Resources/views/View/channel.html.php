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

<body>
   <div class="top-bar">
          <div style="display: inline-block;width:100%;">
            <div id="left-search" style="float:left;">
              <ul id="menu" class="menu" style="">
                  <li><img id="logo" class="" href="" src="" alt="logo"></li>
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
    <div style="height:100%;width:100%">
        <div style="position:relative;height:40%;padding:1px;border-bottom:1px solid #021a40;border-color:grey;">
            <img src="banner.jpeg " style="height:300px;width:100%;text-align:center;"><br>
            <img src="metstudio.jpg " style="top:225px;left:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
            <img src="met.jpg " style="top:225px;right:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
            <h2 style="margin-left:250px;position:absolute;">MetallicaStudio</h2>
            <h2 style="right:250px;position:absolute;">MetallicaTV</h2>
        </div>
        <div style="float:left;height:60%;width:70%;padding:1px;border:1px solid;border-color:grey;">
            <div style="text-align:center;margin-left:auto;margin-right:auto;">
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>

                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
            </div>

        </div>
        <div style="padding:1px;border-bottom:1px solid;border-color:grey;float:left;height:60%;width:30%;overflow-x:hidden;">
            <a class="button" style="width:100%"> Accéder à la page</a>
            <div style="margin-left:20px;margin-top:10px;height:200px;width:100%;overflow:hidden;">
                <div>
                    <img style="vertical-align:middle;width:75px;height:75px;" src="met.jpg">
                    <span style="margin-left:10px;">MetallicaTV <small>via MetallicaStudio</small></span>
                </div>
                <div style="width:100%;">
                    <p>Hardwired... To Self Destruct available everywhere ! Maras diaconus fucandae purpurae diaconus ut non et sermone celerari textrini pectoralem purpurae et Tyrii ad regale est inductus ad autem diaconus speciem idem fucandae denique
                        vexatus vitae Christiani pectoralem inductus quaerebatur celerari celerari Maras vitae ministris ministris prolatae diaconus haec est regale indumentum vexatus non nihil textam pectoralem ad indumentum textrini fateri sermone Maras
                        appellant purpurae diaconus ut etiam Tyrii vexatus ad idem confessisque usque perurgebant ministris litterae sermone Maras prolatae ad purpurae fucandae confessisque Christiani vitae quam idem praepositum speciem indicabant regale
                        ad cuius ministris ut manicis usque ut fucandae Maras perurgebant confessisque ut litterae etiam quaerebatur sermone.
                    </p>
                </div>
            </div>
            <div style="margin-left:20px;margin-top:10px;height:200px;width:100%;overflow:hidden;">
                <div>
                    <img style="vertical-align:middle;width:75px;height:75px;" src="met.jpg">
                    <span style="margin-left:10px;">MetallicaTV <small>via MetallicaStudio</small></span>
                </div>
                <div style="width:100%;">
                    <p>Hardwired... To Self Destruct available everywhere ! Maras diaconus fucandae purpurae diaconus ut non et sermone celerari textrini pectoralem purpurae et Tyrii ad regale est inductus ad autem diaconus speciem idem fucandae denique
                        vexatus vitae Christiani pectoralem inductus quaerebatur celerari celerari Maras vitae ministris ministris prolatae diaconus haec est regale indumentum vexatus non nihil textam pectoralem ad indumentum textrini fateri sermone Maras
                        appellant purpurae diaconus ut etiam Tyrii vexatus ad idem confessisque usque perurgebant ministris litterae sermone Maras prolatae ad purpurae fucandae confessisque Christiani vitae quam idem praepositum speciem indicabant regale
                        ad cuius ministris ut manicis usque ut fucandae Maras perurgebant confessisque ut litterae etiam quaerebatur sermone.
                    </p>
                </div>
            </div>
        </div>
</body>