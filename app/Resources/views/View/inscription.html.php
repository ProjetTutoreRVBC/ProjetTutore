<!-- app/Resources/views/View/inscription.html.php-->  
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
   <div style="width:100%;position: absolute; ">
     <div style="width:500px;text-align:center;margin: 0 auto;">
        <div>
          <h2>nostream</h2>
        </div>
        <div>
          <form action="register" method="POST" enctype="multipart/form-data">
              <fieldset>
                  <div class="row">
                    <div style="float: left;width:95%;">
                      <label>Adresse mail</label>
                      <input type="email" id="user_email" name="email" onchange="checkEmail();" required="required">
                    </div>
                    <div  style="padding-top:6%;width:5%;float: right;">
                      <i  id="confirmMessageImg-email"></i>
                    </div>
                  </div>
                  <div class="row">
                    <div style="width:95%;">
                      <label>Date de naissance</label>
                      <input id="user_birth" name="birth" required="required" type="date">
                    </div>  
                  </div>
                  <div class="row">
                      <div style="float: left;width:95%;">
                        <label>Pseudo</label>
                        <input type="text" id="user_name" name="name"  onchange="checkName();" required="required">
                      </div>  
                      <div  style="padding-top:6%;width:5%;float: right;">
                        <i id="confirmMessageImg-name"></i>
                      </div>  
                     </div>
                  <div class="row">
                      <div style="width:95%;">
                        <label>Mot de passe</label>
                        <input type="password" id="user_plainPassword_first" name="passwd" onkeyup="checkPassImg(); return false;" required="required">
                      </div>
                  </div>
                  <div class="row">
                      <div style="float: left;width:95%;">
                        <label>Confirmez mot de passe</label>
                        <input type="password" id="user_plainPassword_second" name="user[plainPassword][second]" onkeyup="checkPassImg(); return false;" required="required">
                      </div>
                      <div  style="padding-top:6%;width:5%;float: right;">
                        <i id="confirmMessageImg-password"></i>
                      </div>  
                  </div>
                  <div class="row">
                    <label>Avatar</label>
                    <label for="exampleFileUpload" class="button">Upload File</label>
                    <input type='file' name="avatar" id="exampleFileUpload" class="show-for-sr" onchange="readURL(this);" />
                    <span id="display-parent" ></span> 
                  </div>
                  <br>
                  <div class="row">
                    <button name="register" id="submit-button" class="expanded button" type="submit">Sign Up</button>
                  </div>  
              </fieldset>
          </form>
        </div>
      </div>
     </div>
</body>