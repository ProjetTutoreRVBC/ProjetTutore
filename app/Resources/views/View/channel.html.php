<!-- Fix href to channel (miniature) -->
<!-- Fix abonne toi -->

<!-- app/Resources/views/View/channel.html.php-->  
<!doctype html>
<?php

?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/deep-purple.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/cool-buttons.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/subs_channel.js') ?>"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/web/bundles/framework/css/deep-purple.css">
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
              echo '<a href="../profile/"><img style="margin-top:10px;width:40px;height:40px;float:right;margin-right:10px" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
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
        <li style="overflow-x:hidden;overflow-y:hidden;height:50px;" class="gnav1"><?php echo $name_channel;?></li>
        <?php
        if(isset($_COOKIE['pseudo'])){
          if($_COOKIE['pseudo'] == $owner_channel){
            echo '<li style="overflow-x:hidden;overflow-y:hidden;height:50px;" class="gnav2">
                  <img style="margin-top:15px;width:20px;height:20px;float:right" alt="" src="/web/bundles/framework/images/param.png">'
                  .$name_channel.
                  '</li>';
            $i = 2;
            foreach($user_channels as $c){
              if($c['nameChannel'] != $name_channel){
                $i++;
                echo '<a href="../channel/'.$c['nameChannel'].'"><li style="overflow-x:hidden;overflow-y:hidden;height:50px;" class="gnav'.$i.'">'.$c['nameChannel'].'</li></a>';
              }
            }
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
              <font style="color:white;font-size:200%;margin-left:5px;float:left;margin-top:-1%;"><?php echo $name_channel; ?></font>
            </div>
            <div style="display:table-cell;vertical-align:middle;">
              <font style="color:white;font-size:100%;margin-left:5px;float:right;"><?php echo '<span id="nb-abonnes" >'.$subs_channel.'</span> abonnés';?></font>
            </div>
            <div id="abonnement" style="display:table-cell;vertical-align:middle;width:20%;">
              <?php
                $end_form = "";
                if(isset($_COOKIE['pseudo'])){
                  //echo '<form action="" method="post">';
                  echo '<input name="abonnement" value="'.$idChannel.'" hidden>';
                  //$end_form = '</form>';
                  if(isset($isSubscribed)  && $isSubscribed == true && $isSubscribed != 0){
                    echo '<button id="button-des" style="background-color:red;margin-left:10px;" class="myButt one" style="margin-right:15px;float:right">';
                    echo '<div class="insider"></div>';
                    echo '<p style="margin-top:4px;font-size:10px;">se désabonner</p></button>';
                  }
                  if(isset($isSubscribed)  && $isSubscribed == false && $isSubscribed != 0){
                    echo '<button id="button-ab" style="margin-left:10px;" class="myButt one" style="margin-right:15px;float:right">';
                    echo '<div class="insider"></div>';
                    echo "<p style='margin-top:4px;font-size:10px;'>s'abonner</p></button>";
                  }                 
                  
                }
                
                  
                  if($isSubscribed == 0){
                    
                    echo '<a href="../login"><button style="margin-left:10px;" class="myButt one" style="margin-right:15px;float:right">';
                    echo '<div class="insider"></div>';
                    echo "<p style='margin-top:4px;font-size:10px;'>s'abonner</p></button></a>";
                  }
                ?>
              <?php //echo $end_form; ?>
            </div>            
          </div>
          <div style="display:table;text-align:center;border-radius:8px;border: 1px solid #000;margin-right:auto;margin-left:auto;width:80%;height:75%;">
        <?php
              foreach($video as $v)
                {
                  if($channel[$v['nameVideo']] == $name_channel){
                  $titre= $v['nameVideo'];
                  $id = $v['idVideo'];
                  $date = $v['dateVideo'];
                  $vues = $v['viewsVideo'];
                  $Page = $page[$titre];
                  $Channel = $channel[$titre];
                  echo '
                  <a href ="../watch?v='.$id.'" style="color:white;line-height:none;margin-bottom:20px;">
                    <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                      <div style="height:35px;overflow:hidden;">
                          <font class="titres" style="font-size:12px;line-height:none;color:white;"><strong>'.$titre.'</strong></font><br>
                      </div>
                      <img src="/web/bundles/framework/miniature/'.$v['miniature'].'" style="border-radius:8px;height:125px;width:225px;text-align:center;"><br>
                      <div>
                      </div>
                      </a>
                      <div style="width:225px;margin-top:-2px;">
                      <a href="../channel/'.$Channel.'">
                          <button class="myButt one">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">'.$Channel.'</p>
                          </button>
                      </a>
                      <a href="../profile/'.$Page.'">
                          <button class="myButt one">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">'.$Page.'</p>
                          </button>
                      </a>
                      </div>
                      <div style="text-align:center;">
                          <font size="1 ">'.$vues.' vues -</font>
                          <font size="1 ">le '.$date.'</font>
                      </div>
                  </div>
                  </a>
                ';
                }
                }
              ?>
          </div>
          
          
          <section>
            
            
            
          </section>
        </article>
        
        <article id="page2" style="overflow-y:scroll;">
          <section>
           <div style="width:100%;height:90%;display:inline-block;">
        <div style="text-align:center;width:100%;">
            <h5> <?php echo $subs_channel;?> personnes sont abonnés à <?php echo $name_channel;?> </h5>
        </div>
            <div style="width:100%;height:10%;margin-top:5px;">
                <h4 style="text-align:center;">Vos Vidéos</h4>
            </div>

            <div class="gestion" style="margin-left:15px;height:80%;margin-top:20px;overflow-x:visible;overflow-y:scroll; ">
                <a href="<?php echo "../upload/".$name_channel;?>">
                <div style="margin-left:15px;float:left;border: 1px solid grey;height:125px;width:225px;text-align:center; ">
                </div>
                </a>  
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
                echo '<div style="margin-left:15px;width:100%;height:125px;display:inline-block;margin-top:3%;overflow:hidden; ">
                    <div style="width:50%;float:left;overflow:hidden;">
                        <a href="../watch?v='.$id.'"><div style="overflow:hidden;background-image:url(\'/web/bundles/framework/miniature/'.$v['miniature'].'\');background-size: 100% 100%; height:125px;width:225px;text-align:center;"></a>
                        <div style="background:rgba(255,255,255,0.5);overflow:hidden;">
                        <font style="color:black;font-size:110%;margin-left:10px;overflow:hidden; ">'.$titre.'</font></div></div>
                    </div>
                    <table style="float:left;height:100%;width:30%;">
                        <tr>
                            <th class="tg-yw4l" colspan="2">
                                '.$vues.' vues
                            </th>
                        </tr>
                        <tr>
                            <td style="text-align:center;background-color:#2199e8;width:50%;">
                                '.$v['likes'].' likes
                            </td>
                            <td style="background-color:#da3116;text-align:center;width:50%;">
                                '.$v['dislikes'].' dislikes
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:center;" colspan=" 2 ">
                                0 commentaires
                            </td>
                        </tr>
                    </table>
                    <div style="text-align:center;width:18%;margin-left:20px;float:left;height:100%;">
                        <form method="post" action="" >
                        <input name="supprimer" value="'.$id.'" hidden/>
                        <button type="submit" class="alert button" style="width:100%;margin-bottom:2px;">Supprimer la vidéo</button>
                        </form>
                    </div>
                </div>';
                  }
                }
                ?>
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