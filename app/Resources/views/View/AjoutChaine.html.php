<!-- app/Resources/views/View/AjoutChaine.html.php--> 
<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="/web/bundles/framework/css/foundation.css">
    <link href="/web/bundles/framework/css/video-js/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
</head>

<body>
    <div style="float:left;padding:0.01em 16px;border:1px solid #ccc!important;border-radius:16px!important;margin-left:5%;margin-top:5%;width:85%;height:60%;">
        <div style="width:100%;height:10%;margin-top:5px;">
            <h4 style="text-align:center;">Créer une nouvelle chaîne</h4>
        </div>
        <div style="width:100%;height:100%;">
            <form method="post" action="" enctype="multipart/form-data" style="text-align:center;width:100%;">
                <label for="nom">Nom de la Chaîne :</label>
                <input type="text " name="nom" id="nom " /><br />
                <!--
                <label>Image de profil :</label>
                <label for="exampleFileUpload" class="button">Choisir image (150x150)</label>
                <input type='file' name="profile" id="exampleFileUpload" class="show-for-sr" onchange="readURL(this);" />
                <span id="display-parent"></span>
                 -->
                <label>Bannière :</label>
                <label for="exampleFileUpload2" class="button">Choisir image (1440x430)</label>
                <input type='file' name="file" id="exampleFileUpload2" class="show-for-sr" onchange="readURL(this);" />
                <span id="display-parent"></span>
                  
                <label for="description ">Description :</label>
                <textarea name="description" id="description " style="display:inline-block;width:50%;text-align:center;"></textarea><br />

                <button type="submit" class="button">Créer ma chaine !</button>
            </form>
        </div>
    </div>
</body>

</html>