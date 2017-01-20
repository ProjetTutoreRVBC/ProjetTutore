<!-- app/Resources/views/View/page.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/css/foundation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
    <script type="text/javascript" src="/web/bundles/framework/js/top-bar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
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
                            
                            echo '<li id="signed"><a href="../channel"><img style="width:40px;height:40px;" alt="" src="/web/bundles/framework/images/metstudio.jpg"></a></li>';
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
    <div style="position:relative;height:40%;padding:1px;">
        <img src="banner.jpeg " style="height:75%;width:100%;text-align:center;"><br>
        <img src="metstudio.jpg " style="top:55%;left:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
        <img src="met.jpg " style="top:55%;right:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
        <h2 style="margin-left:250px;position:absolute;">MetallicaStudio</h2>
        <h2 style="right:250px;position:absolute;">MetallicaTV</h2>
    </div>

    <div style="margin-left:auto;margin-right:auto;width:50%;height:1000%;background-color:white;">
      <textarea placeholder="Votre message..." rows="4" cols="50"></textarea>
        <button class="button" style="float:right;">Envoyer</button>
        <div style="margin-top:25px;">
            <div style="margin-top:15px;border-bottom: solid 1px;">
                <img style="width:50px;height:50px;" src="met.jpg">
                <span style="margin-left:10px;">MetallicaTV <small>via MetallicaStudio</small></span>
            </div>
            <div style="margin-top:15px;width:100%;overflow:hidden;">
                <p>Hardwired... To Self Destruct available everywhere ! Maras diaconus fucandae purpurae diaconus ut non et sermone celerari textrini pectoralem purpurae et Tyrii ad regale est inductus ad autem diaconus speciem idem fucandae denique vexatus
                    vitae Christiani pectoralem inductus quaerebatur celerari celerari Maras vitae ministris ministris prolatae diaconus haec est regale indumentum vexatus non nihil textam pectoralem ad indumentum textrini fateri sermone Maras appellant
                    purpurae diaconus ut etiam Tyrii vexatus ad idem confessisque usque perurgebant ministris litterae sermone Maras prolatae ad purpurae fucandae confessisque Christiani vitae quam idem praepositum speciem indicabant regale ad cuius ministris
                    ut manicis usque ut fucandae Maras perurgebant confessisque ut litterae etiam quaerebatur sermone.
                </p>
            </div>
            <img style="max-height:100%" src="post.jpg">
        </div>
        <div style="margin-top:25px;">
            <div style="margin-top:15px;border-bottom: solid 1px;">
                <img style="width:50px;height:50px;" src="met.jpg">
                <span style="margin-left:10px;">MetallicaTV <small>via MetallicaStudio</small></span>
            </div>
            <div style="margin-top:15px;width:100%;overflow:hidden;">
                <p>Hardwired... To Self Destruct available everywhere ! Maras diaconus fucandae purpurae diaconus ut non et sermone celerari textrini pectoralem purpurae et Tyrii ad regale est inductus ad autem diaconus speciem idem fucandae denique vexatus
                    vitae Christiani pectoralem inductus quaerebatur celerari celerari Maras vitae ministris ministris prolatae diaconus haec est regale indumentum vexatus non nihil textam pectoralem ad indumentum textrini fateri sermone Maras appellant
                    purpurae diaconus ut etiam Tyrii vexatus ad idem confessisque usque perurgebant ministris litterae sermone Maras prolatae ad purpurae fucandae confessisque Christiani vitae quam idem praepositum speciem indicabant regale ad cuius ministris
                    ut manicis usque ut fucandae Maras perurgebant confessisque ut litterae etiam quaerebatur sermone.
                </p>
            </div>
            <img style="max-height:100%" src="post.jpg">
            <div style="display:inline-block;width:100%;height:40px;">
                <button class="button" data-toggle="toggle2" style="width:50%;float:right;margin-right:0px;height:100%;">Voir commentaires</button>
                <button type="button" class="button" style="width:20%;float:left;margin-right:1%;height:100%">J'aime(10293)</button>
                <button type=" button " class="alert button " style="width:20%;float:left;margin-right:1%;height:100%">Je n'aime pas(134)</button>
            </div>
            <div class="callout" id="toggle2" data-toggler data-animate="fade-in fade-out" style="display:none;">
                <h4>Simon le thug</h4>
                <p>Respect or die</p>
            </div>
            <script>
                $(document).ready(function() {
                    $(document).foundation();
                })
            </script>
        </div>
    </div>
</body>