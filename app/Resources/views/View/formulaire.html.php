<!-- app/Resources/views/View/formulaire.html.php-->  
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/validation/form.js') ?>"></script>
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/display/upload.js') ?>"></script>
</head>
<body>
   <div style="width:100%;position: absolute; top:40%;">
     <div style="width:500px;text-align:center;margin: 0 auto;">
        <div>
          <h2>nostream</h2>
        </div>
        <div>
          <form class="form-horizontal" method="POST" action="login" id="contact_form">
              <div style="display: block;">
                <div class="row" style="width:60%;">
                  <br>
                  <input name="_email" type="text" id="right-label" placeholder="Email">
                </div>
                <div class="row" style="width:60%;">
                  <br>
                  <input name="_password" type="password" id="right-label" placeholder="Password">
                </div>
                <div class="row" style="width:60%;">
                  <br>
                  <button  name="login" id="submitForm" class="expanded button" type="submit">Log In</button>
                </div>
              </div>
          </form>
        </div>
     </div>
   </div>  
</body>