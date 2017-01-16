<!-- app/Resources/views/View/upload.html.php-->  
<!DOCTYPE html>

<head>
 <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <style>
      
      body { padding: 30px }
      form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }

      .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px;}
      .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
      .percent { position:absolute; display:inline-block; top:3px; left:48%; }

    </style>

</head>
<body>

  <form action="upload" method="post" enctype="multipart/form-data">
    
  <label for="file"><span>Filename:</span></label>
  <input type="file" name="file" id="file"/><br>
  <input type="submit" name="submit" value="Upload"/>
  </form>
  <p><?php echo " status : ".$status."<br>size : ".$size." Kb";?></p>  
  <div class="progress" role="progressbar" tabindex="0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
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
</body>
</html>