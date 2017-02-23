<!-- app/Resources/views/View/page.html.php-->  
<!doctype html>
<?php

?>
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
    <script type="text/javascript">
        function changeIconUp(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumbs-up-hand-symbol.png";
            
        }
        function resetIconUp(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumbs-up.png";
        }
        
        function changeIconDown(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumbs-down-silhouette.png";
            
        }
        function resetIconDown(id){
          var icon = document.getElementById(id);
            icon.src = "/web/bundles/framework/images/thumb-down.png";  
        }
      
    </script>
</head>

<body onresize="handleWindow()" onload="handleWindow()">
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

    <div style="height:40%;position:absolute;width:100%;top:49px;">
    <div style="height:75%;padding:1px;width:100%;">
        <img src="<?php echo '/web/bundles/framework/images-banniere/'.$profile['banniere_img'] ?>" style="height:100%;width:100%;text-align:center;"><br>
        <img src="<?php echo '/web/bundles/framework/images-profile/'.$profile['profile_img'] ?>" style="position:relative;padding:1px;height:45%;padding-left:45%;text-align:center;top:-50%;left:-45%;margin-left:30px;">
    </div>

    <div style="padding:10px;box-shadow: 1px 1px 10px 1px #CDD3E1;width:100%;height:30%;">
        <div style="float:left;margin-left:30px;">
            <h2 style=""><?php echo $profile['namePage']; ?></h2>
            <h6 style="margin-top:-5%;float:left;"><?php echo $subs[0]; ?> abonnés</h6>
        </div>
        <a class="button" style="float:left;margin-left:25px;margin-top:10px;">S'abonner</a>
    </div>
      </div>


        <div style="margin-left:auto;margin-right:auto;margin-top:25%;width:50%;height:10%;background-color:white;">
        <?php
          $param_delete_post = "";
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '
        <div style="box-shadow: 1px 1px 10px 1px #CDD3E1;padding:10px;display: inline-block;width:100%;">
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
        $id = 0;
        $type1="";
        $type2="";  
        foreach($posts as $post){
          
        echo '
        <div id="bloc" style="margin-top:25px;margin-bottom: 25px;box-shadow: 1px 1px 10px 1px #CDD3E1;padding:10px;display: inline-block;width:100%;" '.$param_delete_post.'>
            <div style="border-bottom: solid 1px;padding:10px;padding-left:0px;">
                <h>Publié le '.$post['datePost'].' </h>';
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '<form id="foo" action="" method="post">
                  <input name="idPost" value="'.$post['idPost'].'" hidden>
                  <button style="outline:none;" id="submit_button" name="delete_post" class="close-button" aria-label="Dismiss alert" type="submit" data-close>
                  <span aria-hidden="true">&times;</span>
                  </button>
                  </form>';

            $type1='name="like" type="submit" ';
            $type2='name="dislike" type="submit" ';  
            }
            echo'</div>
            <div style="margin-top:15px;width:100%;overflow:hidden;">
                <p>'.$post['messagePost'].'</p>
            </div>
            
            <div style="display:inline-block;width:100%;height:40px;">
                <button class="button" data-toggle="'.$post['idPost'].'" style="width:50%;float:right;margin:1%;height:100%;">Voir commentaires</button>
                <form  action="" method="post">
                <div>
                <input id="data" name="id-post-like" value="'.$post['idPost'].'" hidden>';
                if(!isset($vote[$post['idPost']]['like']) || $vote[$post['idPost']]['like'] == false)
                  echo '<button '.$type1.' style="float:left;margin:1%;outline:none;">
                    <img onmouseout="resetIconUp(&#34icon'.$id.'&#34);" onmouseover="changeIconUp(&#34icon'.$id.'&#34);" style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up.png" alt="">
                    <span id="content">'.$post['likes'].'</span>
                  </button>
                  </div>';
                if(isset($vote[$post['idPost']]['like']) && $vote[$post['idPost']]['like'] == true)
                  echo '<button  style="float:left;margin:1%;outline:none;" disabled>
                    <img  style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up-hand-symbol.png" alt="">
                    <span id="content">'.$post['likes'].'</span>
                  </button>
                  </div>';  
                $id++;
                echo '<div>
                <input id="data" name="id-post-dislike" value="'.$post['idPost'].'" hidden>';
                if(!isset($vote[$post['idPost']]['dislike']) || $vote[$post['idPost']]['dislike'] == false)
                  echo '<button '.$type2.' style="float:left;margin:1%;outline:none;">
                    <img style="max-width:30px;max-height:30px;" onmouseout="resetIconDown(&#34icon'.$id.'&#34);" onmouseover="changeIconDown(&#34icon'.$id.'&#34);" id="icon'.$id.'" src="/web/bundles/framework/images/thumb-down.png" alt="">
                    <span id="content">'.$post['dislikes'].'</span>
                  </button>';
                if(isset($vote[$post['idPost']]['dislike']) && $vote[$post['idPost']]['dislike'] == true)
                  echo '<button  style="float:left;margin:1%;outline:none;" disabled>
                    <img style="max-width:30px;max-height:30px;"  id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-down-silhouette.png" alt="">
                    <span id="content">'.$post['dislikes'].'</span>
                  </button>';
                  
                  
            echo '</div>
                </form>
            </div>
            <div class="callout" id="'.$post['idPost'].'" data-toggler data-animate="fade-in fade-out" style="display:none;margin:2%;">
                <form action="" method="post" style="width:100%;margin-bottom:20px;display: inline-block;">
                <div>
                <input name="post_id" value="'.$post['idPost'].'" hidden>
                <textarea name="comment" placeholder="Votre message..." rows="2" cols="50"></textarea>
                </div>
                <div>
                <button name="send_comment" type ="submit" class="button" style="float: right;">Envoyez</button>
                </div>
                </form>';
             foreach($comments as $key => $value) {
                if($key== $post['idPost']){
                 foreach($value as $comment){
                   echo '<div style="box-shadow: 1px 1px 10px 1px #CDD3E1;padding:10px;margin-top:15px;" '.$param_delete_post.'>
                          <div style="border-bottom: solid 1px;">
                            <img style="width:30px;height:30px;" src="met.jpg">
                            <span style="margin-left:10px;">'.$comment['pseudoNostreamer'].'<small> le '.$comment['dateComment'].'</small></span>';
                            if(isset($_COOKIE["pseudo"])  && $_COOKIE["pseudo"] == $comment['pseudoNostreamer'])
                          echo '<form action="" method="post">
                              <input name="idComment" value="'.key($value).'" hidden>
                              <button style="outline:none;" type="submit" name="delete_comment" class="close-button" aria-label="Dismiss alert" data-close>
                              <span aria-hidden="true">&times;</span>
                              </button>
                            </form>';
                     echo    '</div>
                          <p>'.$comment['text'].'</p>
                        </div>';
                  }
                }
             }
            echo '</div>
          </div>';
          $id++;
        }
        ?>  
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>