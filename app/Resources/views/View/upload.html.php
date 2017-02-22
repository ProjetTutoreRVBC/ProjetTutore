<!-- app/Resources/views/View/upload.html.php-->
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
     <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/framework/js/display/upload.js') ?>"></script>
    <!--<style>
      
      body { padding: 30px }
      form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }

      .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px;}
      .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
      .percent { position:absolute; display:inline-block; top:3px; left:48%; }

    </style>-->

</head>

<body>
    <div style="float:left;padding:0.01em 16px;border:1px solid #ccc!important;border-radius:16px!important;margin-left:5%;margin-top:5%;width:85%;height:75%;">
        <div style="width:100%;height:10%;margin-top:5px;">
            <h4 style="text-align:center;">Ajouter une vidéo</h4>
        </div>
        <div style="width:100%;height:100%;">
            <form action="" method="post" enctype="multipart/form-data" style="text-align:center">
                <label for="nom">Nom de la vidéo :</label>
                <input type="text" name="video_name" id="nom"/><br><br>
                
                <label>Vidéo :</label>
                <label for="file" class="button">Importer</label>
                <input style="text-align:center;" class="show-for-sr" type="file" name="video" id="file"/><br><br>
                              
                 <label>Image de miniature :</label>
                <label for="exampleFileUpload" class="button">Importer</label>
                <input type='file' name="miniature" id="exampleFileUpload" class="show-for-sr" onchange="readURL(this,1);" />
                <span id="display-parent-1"></span><br><br>

                
                <label for="description ">Description :</label>
                <textarea name="description"  style="display:inline-block;width:50%;text-align:center;"></textarea><br />

                <fieldset class="">
                    <label>Commentaires :</label>
                    <input type="radio" name="commentaires" value="oui" id="com_oui" required checked><label for="com_oui">Activés</label>
                    <input type="radio" name="commentaires" value="non" id="com_non"><label for="com_non">Désactivés</label>
                </fieldset>

                <fieldset class="">
                    <label>Chat :</label>
                    <input type="radio" name="chat" value="oui" id="chat_oui" required checked><label for="chat_oui">Activé</label>
                    <input type="radio" name="chat" value="non" id="chat_non"><label for="chat_non">Désactivé</label>
                </fieldset>

                <input type="submit" name="submit" class="button" style="margin-top:10px;" value="Upload" />
            </form>
        </div>
        
            <!--<div class="progress" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
    <div class="bar"></div>
    <div class="percent">0%</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
 <script type="text/javascript">
      (function() {
      var bar = $('.bar');
      var percent = $('.percent');
      var status = $('#status');
      $('form').ajaxForm({
          beforeSend: function() {
              status.empty();
              var percentVal = "0%";
              bar.width(percentVal)
              percent.html(percentVal);
          },
          uploadProgress: function(event, position, total, percentComplete) {
              var percentVal = percentComplete + '%';
              bar.width(percentVal);
              if(percentComplete === 100){
                bar.width("99%")
                percent.html("99%");
              }
              else
                percent.html(percentVal);
          },
          success: function() {
              var percentVal = '99%';
              bar.width(percentVal);
              percent.html(percentVal);
          },
          complete: function(xhr) {
              var percentVal = '100%';
              bar.width(percentVal);
              percent.html(percentVal);
          }
      }); 

      })();    
    </script> 
    </script>  -->
        </div>

</body>

</html>