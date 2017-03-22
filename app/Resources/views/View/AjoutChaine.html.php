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
  <link rel="stylesheet" href="/web/bundles/framework/css/deep-purple.css">
  <link rel="stylesheet" href="/web/bundles/framework/css/nice-forms.css">
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
              //echo '<a href="profile/' . $user_page . '"><img style="margin-top:10px;width:40px;height:40px;float:right;margin-right:10px" alt="" src="/web/bundles/framework/images/met.jpg"></a></li>';
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
        <article id="page1" class="show top" style="overflow-y:scroll;">
          <section>
            <div class="grid align__item">

              <div class="register">
                <h2>Créer sa chaîne</h2>
                
                <form method="post" action="" enctype="multipart/form-data" class="form" id="contact_form">
                  <div class="form__field">
                    <input style="background-color: rgb(250, 255, 189);" type="text " name="nom" id="nom " /><br />
                  </div>
                  <button type="submit" class="button">Créer ma chaine !</button>
            </form>

              </div>

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
            