<!-- VERIFIED -->

<!-- app/Resources/views/View/homepageTest.html.php-->
<!doctype html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>nostream</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/deep-purple.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/cool-buttons.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/search-engine.js') ?>"></script>
  <link rel="stylesheet" href="/web/bundles/framework/css/deep-purple.css">
  <link rel="stylesheet" href="/web/bundles/framework/css/cool-buttons.css">
  
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

</head>

<body>
  <div class="wrapper">
    <div class="header">
      <a href="/web/app_dev.php/" style="width:100px;height:100px;border-radius: 8px;"><img id="logo" class="nostream" src="/web/bundles/framework/images/logo.png" alt="logo"></a>
      <input type="text" class="searchbar" name="search" placeholder="Search.." onkeyup="suggest(this.value)">
      <?php
          $href = "login";
          $log  = "Login";
          if (isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])) {
              $href = "logout";
              $log  = "Logout";
              echo '<a href="profile/' . $user_page . '">';
              echo '<button id="" type ="button" class="btn-11" >' . $user_page . '</button></a>';
          } else {
              echo '<a href="register"><button class="btn-11" type="button">Sign Up</button></a>';
          }
          echo '<a href="' . $href . '">';
          echo '<button id="log" type ="button" class="btn-11" >' . $log . '</button></a>';
        ?>
        <!--<a href="register"><button class="btn-11" type="button">Sign Up</button></a>
        <a href="login"><button class="btn-11" type="button">Login</button></a>-->
    </div>
    <nav>
      <ul>
        <li class="gnav1">Tendances</li>
        <li class="gnav2">Abonnements</li>
        <li class="gnav3">Vidéastes</li>
        <li class="gnav4">Chaînes</li>
      </ul>
    </nav>
    <div class="contents" id="contents">
      <div class="container">
        <div class="divsuggestlist">
          <ul id="sugg_list" style="list-style:none;background-color:white;display:none;margin-bottom:0px;margin-top:0px;overflow:hidden">
               
         </ul>
          
        </div>
        
      <?php  foreach($abonnement as $abo){
                            echo '<a href="watch?v='.$abo['idVideo'].'">
                              <div class="listnotif">
                                <font style="font-size:100%">'.$abo['nameChannel'].'a sorti une nouvelle vidéo</font>
                              </div>
                            </a>';
                      }
      ?>
      
      
        <div class="slidingdiv">
                <?php
                  if (isset($_COOKIE["pseudo"]) && !empty($_COOKIE["pseudo"])) {
                      echo '<a href="profile/'.$user_page.'">
                        <div class="slidename">
                          <font style="display:table-cell;vertical-align:middle;font-size:200%">'.$user_page.'</font>
                        </div>
                      </a>';
                      echo '<div class="slidechannel">';
                      if($listChannel != 0) {
                    foreach($listChannel as $c){
                        echo '<a href="channel/'.$c["nameChannel"].'">
                        <div class="listchannel">
                          <font style="font-size:150%">'.$c["nameChannel"].'</font>
                        </div>
                      </a>';
                      }
                      }
                    echo '</div>';
                    echo '<div class="slidenotif">';
                    foreach($abonnement as $abo){
                            echo '<a href="watch?v='.$abo['idVideo'].'">
                              <div class="listnotif">
                                <font style="font-size:100%">'.$abo['nameChannel'].' a sorti une nouvelle vidéo</font></br>
                                <font style="font-size:100%">'.$abo['nameVideo'].'</font>
                              </div>
                            </a>';
                    }
                    echo '</div>';
                    
                  } else {
                      echo '<a href="login/">
                        <div class="slidename">
                          <font style="display:table-cell;vertical-align:middle;font-size:200%">Login</font>
                        </div>
                      </a>';
                  }
                  ?>
                  
                </div>
              </div>
        <article id="page1" class="show top" style="overflow-y:scroll;">
          <section>
            <a href="#" class="show_hide" style="text-decoration:none;border:none;background-color:transparent;width:1rem;height:100%;"></a>
              
            <div class="defilement-video" style="text-align: center;">
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
                  <a href ="watch?v='.$id.'" style="color:white;line-height:none;margin-bottom:20px;">
                    <div style="height:125px;width:225px;display:inline-block;margin:4px;">
                      <div style="height:35px;overflow:hidden;">
                          <font class="titres" style="font-size:12px;line-height:none;color:white;"><strong>'.$titre.'</strong></font><br>
                      </div>
                      <img src="/web/bundles/framework/miniature/'.$v['miniature'].'" style="border-radius:8px;height:125px;width:225px;text-align:center;"><br>
                      <div>
                      </div>
                      </a>
                      <div style="width:225px;margin-top:-2px;">
                      <a href="channel/'.$Channel.'">
                          <button class="myButt one">
                          <div class="insider"></div>
                          <p style="margin-top:4px;font-size:10px;">'.$Channel.'</p>
                          </button>
                      </a>
                      <a href="profile/'.$Page.'">
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
                ';
                }
              ?>
            </div>
          </section>
        </article>
        
        <article id="page2" style="overflow-y:scroll;">
          <section>
            <h1>Tab2 Title</h1>
            <p>This is tab two.</p>
          </section>
        </article>
        <article id="page3" style="overflow-y:scroll;">
          <section>
            <h1>Tab3 Title</h1>
            <p>This is tab three.</p>
          </section>
        </article>
        <article id="page4" style="overflow-y:scroll;">
          <section>
            <h1>Tab4 Title</h1>
            <p>This is tab four.</p>
          </section>
        </article>
        <article id="page5" style="overflow-y:scroll;">
          <section>
            <h1>Tab5 Title</h1>
            <p>This is tab five</p>
          </section>
        </article>
      </div>
    </div>
  </div>
</body>

</html>