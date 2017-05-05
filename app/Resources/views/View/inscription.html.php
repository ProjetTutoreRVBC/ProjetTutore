<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <script src="https://use.fontawesome.com/1a55bab663.js"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/likes.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/search-engine.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/comments.js') ?>"></script>
  <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.css">
  <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>

    nostream &middot; Inscription

  </title>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/black-sabbath.js') ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/scrollspy.js') ?>"></script>

  <link href="web/css/toolkit-inverse.css" rel="stylesheet">
  <link rel="stylesheet" href="/web/bundles/framework/css/cool-buttons.css">


  <link rel="stylesheet" href="/web/bundles/framework/css/black-sabbath.css">

  <link href="assets/css/application.css" rel="stylesheet">

  <style>
    /* note: this is a hack for ios iframe for bootstrap themes shopify page */
    /* this chunk of css is not part of the toolkit :) */
    
    body {
      width: 1px;
      min-width: 100%;
      *width: 100%;
    }
  </style>
</head>


<body data-spy="scroll" data-target=".bro">
  <div class="bw">
    <div class="di">
      <div class="em brh">
        <nav class="bro">
          <div class="bri">
            <button class="bqe bqg brj" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="aep">Toggle nav</span>
            </button>
            <a class="brk bsi" href="/web/">
              <h2 class="brx">NOSTREAM</h2>
            </a>
          </div>

          <div class="collapse bql" id="nav-toggleable-md">
            <form class="brm">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="po">
                <span class=""><i class="fa fa-search" style="cursor:pointer;" aria-hidden="true"></i></span>
              </button>
            </form>
            <ul class="nav qq nav-stacked xx">
              <li class="ayx">Accès Rapide</li>
              <li class="qp active">
                <a class="qn" href="/web#tendances">Tendances</a>
              </li>
              <li class="qp">
                <a class="qn " href="/web#abonnements">Abonnements</a>
              </li>
              <li class="qp">
                <a class="qn " href="/web#videastes">Vidéastes</a>
              </li>
              <li class="qp">
                <a class="qn " href="/web#chaines">Chaînes</a>
              </li>

              <li class="ayx">Espace Nostreamer</li>
              <li class="qp">
                <a class="qn" href="/web">
                  Accueil
                </a>
              </li>
              <li class="qp">
                <a class="qn " href="docs/index.html">
                  Mon compte
                </a>
              </li>
              <li class="qp">
                <a class="qn" href="http://getbootstrap.com" target="blank">
                  Mes abonnements
                </a>
              </li>
              <li class="qp">
                <a class="qn " href="index-light/index.html">Se déconnecter</a>
              </li>
              <li class="qp">
                <a class="qn" href="#docsModal" data-toggle="modal">
                  Example modal
                </a>
              </li>
            </ul>
            <hr class="bsj afx">
          </div>
        </nav>
      </div>
      <div class="es bsk">
        <div class="brv">
          <div class="brw" id="tendances">
            <h6 class="bry">Nostream</h6>
            <h2 class="brx">Inscription</h2>
            <div>
              
            </div>
          </div>

          <div class="qb brz">
            <i class="fa fa-user-plus fa-2x" style="cursor:pointer;" aria-hidden="true"></i>
            <i class="fa fa-sign-in fa-2x" style="cursor:pointer;" aria-hidden="true"></i>
          </div>
        </div>

        <hr class="afx">

        <div class="di awt agl">

          <div style="width:100%;">
            <div class="grid align__item">

              <div class="register">
                <form class="form" action="register" method="POST" enctype="multipart/form-data">

                  <div class="form__field">
                    <label for="email">Email</label>
                    <input class="form-control" style="width:50%;margin-right:auto;margin-left:auto" type="email" id="user_email" name="email" onchange="checkEmail();" required="required">
                  </div>
                  
                  <div class="form__field">
                    <label>Pseudo</label>
                    <input class="form-control" style="width:50%;margin-right:auto;margin-left:auto"  type="text" id="user_name" name="name"  onchange="checkName();" required="required">
                  </div>
                  
                  <div class="form__field">
                    <label for="password">Mot de passe</label>
                    <input class="form-control" style="width:50%;margin-right:auto;margin-left:auto" type="password" id="user_plainPassword_first" name="passwd" onkeyup="checkPassImg(); return false;" required="required" placeholder="••••••••••••">
                  </div>
                  
                  <div class="form__field">
                    <label for="password">Confirmer mot de passe</label>
                    <input class="form-control" style="width:50%;margin-right:auto;margin-left:auto" type="password" id="user_plainPassword_second" name="user[plainPassword][second]" onkeyup="checkPassImg(); return false;" required="required" placeholder="••••••••••••">
                  </div>
                  
                  <div class="form__field">
                    <label for="date">Date de naissance</label>
                    <input class="form-control" style="width:50%;margin-right:auto;margin-left:auto" id="user_birth" name="birth" required="required" type="date">
                  </div>  
                  
                  <div class="row">
                    <label>Avatar</label>
                    <label for="exampleFileUpload" class="button">Upload File</label>
                    <input class="form-control" style="width:50%;margin-right:auto;margin-left:auto" type='file' name="avatar" id="exampleFileUpload" onchange="readURL(this);" />
                    <span id="display-parent" ></span> 
                  </div>

                  <div class="form__field">
                    <input name="register" id="submit-button" class="myButt one" type="submit" value="S'inscrire" style="font-size:13px;margin-top:15px;margin-left:auto;margin-right:auto;float:none;">
                  </div>

                </form>

                <p style="margin-top:20px;">Déjà inscrit ? <a href="/web/login">Connectez-vous !</a></p>

              </div>

            </div>
          </div>


          <div class="di bsl">

          </div>

          <hr class="agl">
        </div>




        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script>
        <script src="assets/js/chart.js"></script>
        <script src="assets/js/tablesorter.min.js"></script>
        <script src="assets/js/toolkit.js"></script>
        <script src="assets/js/application.js"></script>
        <script>
          // execute/clear BS loaders for docs
          $(function() {
            while (window.BS && window.BS.loader && window.BS.loader.length) {
              (window.BS.loader.pop())()
            }
          })
        </script>
</body>

</html>