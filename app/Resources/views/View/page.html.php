<!-- Fix abonne toi -->

<!-- app/Resources/views/View/page.html.php-->  
<!doctype html>
<?php

?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/deep-purple.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/cool-buttons.js') ?>"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/web/bundles/framework/css/deep-purple.css">
  <link rel="stylesheet" href="/web/bundles/framework/css/callout.css">
  <link rel="stylesheet" href="/web/bundles/framework/css/cool-buttons.css">
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


    <script>
    $(document).ready(function() {
      var item_num = $('nav li').length + 1;
      var btn_state = true;

      $('nav li').hover(function() {
        $(this).addClass('hover');
      }, function() {
        $(this).removeClass('hover');
      });

      $('nav li').on('click', function() {
        if (btn_state) {
          btn_state = !btn_state;
          $('nav li').removeClass('currentPage');

          $(this).addClass('currentPage');

          var i = $('nav li').index(this);
          $('article').removeClass('show');
          $('article').addClass('hide');
          $('article').eq(i).addClass('show');

          setTimeout(function() {
            btn_state = !btn_state;
          }, 500);
        }
      });


    });
  </script>
  <!--<script> 
      function suggest(str) {
      if (str.length == 0) { 
        document.getElementById("sugg_list").style.display = "none";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              var reponse = JSON.parse(this.responseText);
              document.getElementById("sugg_list").style.display = "";
              while( document.getElementById("sugg_list").firstChild ){
                document.getElementById("sugg_list").removeChild( document.getElementById("sugg_list").firstChild );
              }
              reponse.forEach(function(el){
                var newLI = document.createElement('li');
                newLI.appendChild(document.createTextNode(el.nameVideo));
                document.getElementById("sugg_list").appendChild(newLI);
                
              })
             // 
            }
        };
        xmlhttp.open("GET", "/web/bundles/framework/php/gethint.php?q=" + str, true);
        xmlhttp.send();
      
        }
      }
    </script>  -->
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <a href="/web/app_dev.php/" style="width:100px;height:100px;border-radius: 8px;"><img id="logo" class="nostream" src="/web/bundles/framework/images/logo.png" alt="logo"></a>
      <input type="text" class="searchbar" name="search" placeholder="Search..">
      <?php
          $href = "login";
          $log  = "Login";
          if (isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])) {
              $href = "logout";
              $log  = "Logout";
              echo '<a href="gestion"><img style="margin-top:10px;width:40px;height:40px;float:right;margin-right:10px" alt="" src="/web/bundles/framework/images/param.png"></a></li>';
              echo '<a href="profile/' . $user_page . '"><img style="margin-top:10px;width:40px;height:40px;float:right;margin-right:10px" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
          } else {
              echo '<a href="../register"><button class="btn-11" type="button">Sign Up</button></a>';
          }
          echo '<a href="../' . $href . '">';
          echo '<button id="log" type ="button" class="btn-11" >' . $log . '</button></a>';
        ?>
        <!--<a href="register"><button class="btn-11" type="button">Sign Up</button></a>
        <a href="login"><button class="btn-11" type="button">Login</button></a>-->
    </div>
    <nav>
      <ul>
        <li class="gnav1"><?php echo $profile['namePage']; ?></li>
        <?php if($listChannel != 0) {
                foreach($listChannel as $c){
                  echo '<a href="../channel/'.$c["nameChannel"].'">
                    <li class="">
                      '.$c["nameChannel"].'
                    </li>
                  </a>';
                }
              }
        ?>
      </ul>
    </nav>
    <div class="contents" id="contents">
      <div class="container">
        <article id="page1" class="show top" style="overflow-y:scroll;">
          <div style="border-radius:8px;border: 1px solid #000;background-size: 100% 100%;text-align:center;margin-right:auto;margin-left:auto;width:80%;height:20%;background-image:url(//yt3.ggpht.com/v1TmYBYX-Vu9QposRqHSp-rqcns5OhG3iriSPzDLWiT1-0kEkBx-iyBMGa8iaHgV0cA0j1A7Ng=w1060-fcrop64=1,00005a57ffffa5a8-nd-c0xffffffff-rj-k-no);">
          <?php //echo '/web/bundles/framework/images-profile/'.$profile['profile_img'] ?>
            
          </div>
          <div style="display:table;border-radius:8px;border: 1px solid #000;background-color:grey;margin-right:auto;margin-left:auto;width:80%;height:10%;line-height:10%">
            <div style="display:table-cell;vertical-align:middle;">
              <font style="color:white;font-size:200%;margin-left:5px;float:left;margin-top:-1%;"><?php echo $profile['namePage']; ?></font>
            </div>
            <div style="display:table-cell;vertical-align:middle;">
              <font style="color:white;font-size:100%;margin-left:5px;float:right;"><?php echo $subs[0]; ?> abonnés</font>
            </div>
            <div style="display:table-cell;vertical-align:middle;width:20%;">
              <?php
                $end_form = "";
                if(isset($_COOKIE['pseudo'])){
                  echo '<form action="" method="post">';
                  echo '<input name="abonnement" value="'.$profile['idPage'].'" hidden>';
                  $end_form = '</form>';
                }
                ?>
                <button class="myButt one" type="submit" style="margin-right:15px;float:right">
                <div class="insider"></div>
                <p style="margin-top:4px;font-size:10px;">Abonne toi !</p>
              </button>
             <?php echo $end_form; ?>  
            </div>            
          </div>
          <div style="margin-left:auto;margin-right:auto;margin-top:10px;width:50%;height:10%;">
        <?php
          $param_delete_post = "";
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '
        <div style="border: 1px ridge black;padding:10px;display: inline-block;width:100%;background-color:#808080">
          <form action="" method="post">
          <div>
          <input name="slug" id="slug" value="'.$profile['namePage'].'" hidden>
         <textarea name="new_post" id="message_post" style="resize:none;width:85%;height:100px;border-radius:8px;background-color:#dddddd"></textarea>
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
        <div id="bloc" style="margin-top:25px;margin-bottom: 25px;border: 1px ridge black;padding:10px;display: inline-block;width:100%;box-shadow: 0 0 70px #000;" '.$param_delete_post.'>
            <div style="border-bottom: solid 1px;padding:10px;padding-left:0px;">
                <h>Publié le '.$post['datePost'].' </h>';
            if(isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])){
            if($_COOKIE["pseudo"] == $profile['pseudoNostreamer'])
            echo '<form id="foo" action="" method="post" style="float:right;margin-top:-20px;">
                  <input name="idPost" value="'.$post['idPost'].'" hidden>
                  <div class="circCont">
                    <button class="circle" data-animation="showShadow" data-remove="3000" style="float:right;margin-top:5px;"></button>
                  </div>
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
                <label for="toggle-1"> Voir Commentaires </label>
                <input type="checkbox" id="toggle-1">
                <form  action="" method="post">
                <div>
                <input id="data" name="id-post-like" value="'.$post['idPost'].'" hidden>';
                if(!isset($vote[$post['idPost']]['like']) || $vote[$post['idPost']]['like'] == false)
                  echo '<button '.$type1.' style="float:left;margin:1%;outline:none;background-color:transparent;border:none">
                    <img onmouseout="resetIconUp(&#34icon'.$id.'&#34);" onmouseover="changeIconUp(&#34icon'.$id.'&#34);" style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up.png" alt="">
                    <span id="content">'.$post['likes'].'</span>
                  </button>
                  </div>';
                if(isset($vote[$post['idPost']]['like']) && $vote[$post['idPost']]['like'] == true)
                  echo '<button  style="float:left;margin:1%;outline:none;background-color:transparent;border:none" disabled>
                    <img  style="max-width:30px;max-height:30px;" id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-up-hand-symbol.png" alt="">
                    <span id="content">'.$post['likes'].'</span>
                  </button>
                  </div>';  
                $id++;
                echo '<div>
                <input id="data" name="id-post-dislike" value="'.$post['idPost'].'" hidden>';
                if(!isset($vote[$post['idPost']]['dislike']) || $vote[$post['idPost']]['dislike'] == false)
                  echo '<button '.$type2.' style="float:left;margin:1%;outline:none;background-color:transparent;border:none">
                    <img style="max-width:30px;max-height:30px;" onmouseout="resetIconDown(&#34icon'.$id.'&#34);" onmouseover="changeIconDown(&#34icon'.$id.'&#34);" id="icon'.$id.'" src="/web/bundles/framework/images/thumb-down.png" alt="">
                    <span id="content">'.$post['dislikes'].'</span>
                  </button>';
                if(isset($vote[$post['idPost']]['dislike']) && $vote[$post['idPost']]['dislike'] == true)
                  echo '<button  style="float:left;margin:1%;outline:none;background-color:transparent;border:none" disabled>
                    <img style="max-width:30px;max-height:30px;"  id="icon'.$id.'" src="/web/bundles/framework/images/thumbs-down-silhouette.png" alt="">
                    <span id="content">'.$post['dislikes'].'</span>
                  </button>';
                  
                  
            echo '</div>
                </form>
            </div>
            <div class="coms" id="'.$post['idPost'].'">
                <form action="" method="post" style="width:100%;margin-bottom:20px;display: inline-block;">
                <div>
                <input name="post_id" value="'.$post['idPost'].'" hidden>
                <textarea name="comment" style="resize:none;width:85%;height:100px;border-radius:8px;background-color:#dddddd"></textarea>
                </div>
                <div>
                <button name="send_comment" type ="submit" class="button" style="float: right;margin-top:-25px;">Envoyez</button>
                </div>
                </form>';
             foreach($comments as $key => $value) {
                if($key== $post['idPost']){
                 foreach($value as $comment){
                   echo '<div style="border: 1px ridge black;padding:10px;margin-top:15px;" '.$param_delete_post.'>
                          <div style="border-bottom: solid 1px;">
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
          
          
          <section>
            
            
            
          </section>
        </article>
        
         <article id="page2" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
       <article id="page3" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
         <article id="page4" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
         <article id="page5" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
         <article id="page6" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
         <article id="page7" style="overflow-y:scroll;">
        <section>
          <div style="display:table;width:100%;height:100%;text-align:center;">
            <div style="display:table-cell;vertical-align:middle;text-align:center">
              <h1>
                Redirection...
              </h1>
            </div>
          </div>
        </section>
      </article>
      </div>
    </div>
  </div>

</body>
