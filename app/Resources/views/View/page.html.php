<!-- app/Resources/views/View/page.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
    <link rel="stylesheet" href="/web/bundles/framework/css/top-bar.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script type="text/javascript" src="/web/bundles/framework/js/top-bar.js"></script>
</head>

<body onresize="handleWindow();" onload="handleWindow();">
    <div>
        <div class="top-bar" style="z-index: 2;">
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
    <div style="padding:1px;display:inline-block;width:100%;">
        <img src="/web/bundles/framework/images/banner.jpeg" style="height:400px;width:100%;"><br>
        <img src="metstudio.jpg " style="top:40%;left:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
        <img src="met.jpg " style="top:40%;right:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
        <h2 style="margin-left:250px;position:absolute;"><?php echo $profile["namePage"];?></h2>
        <h2 style="right:250px;position:absolute;">MetallicaTV</h2>
    </div>

        <div style="margin-left:auto;margin-right:auto;margin-top:9%;width:50%;height:10%;background-color:white;">
        <?php
          $param_delete_post = "";
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '
        <div style="box-shadow: 1px 1px 10px 1px #656565;padding:10px;display: inline-block;width:100%;">
          <form action="" method="post">
          <div>
          <input name="slug" id="slug" value="'.$profile['namePage'].'" hidden>
          <textarea id="message_post" name="new_post" placeholder="Votre message..." rows="4" cols="50"></textarea>
          </div>
          <div style="float:right;">
          <button style="margin:0;" type="submit" class="button">Envoyer</button>
          </div>
          </form>  
        </div>'; 
        $param_delete_post = ' class ="callout" data-closable';
            
            }
        foreach($posts as $post){
        echo '
        <div style="margin-top:25px;margin-bottom: 25px;box-shadow: 1px 1px 10px 1px #656565;padding:10px;display: inline-block;width:100%;" '.$param_delete_post.'>
            <div style="border-bottom: solid 1px;padding:10px;padding-left:0px;">
                <h>Publié le '.$post['datePost'].' </h>';
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '<form id="foo" action="" method="post">
                  <input name="idPost" value="'.$post['idPost'].'" hidden>
                  <button id="submit_button" name="delete_post" class="close-button" aria-label="Dismiss alert" type="submit" data-close>
                  <span aria-hidden="true">&times;</span>
                </button>
                </form>';
            }
            echo'</div>
            <div style="margin-top:15px;width:100%;overflow:hidden;">
                <p>'.$post['messagePost'].'</p>
            </div>
            
            <div style="display:inline-block;width:100%;height:40px;">
                <button class="button" data-toggle="toggle2" style="width:50%;float:right;margin:1%;height:100%;">Voir commentaires</button>
                <button type="button" class="button" style="width:20%;float:left;margin:1%;padding:1%;height:100%">J&#8216aime</button>
                <button type=" button " class="alert button " style="width:20%;float:left;margin:1%;padding:1%height:100%">Je n&#8216aime pas</button>
            </div>
            <div class="callout" id="toggle2" data-toggler data-animate="fade-in fade-out" style="display:none;">
                <h4>Simon le thug</h4>
                <p>Respect or die</p>
            </div>
        </div>';
        }
        ?>  
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>