<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link href="css/video-js/video-js.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
</head>

<body>
    <?php 

        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        switch ($lang){
            case "fr":
                include("LangFRA.php");
                break;
            case "en":
                include("LangENG.php");
                break;        
            default:
                include("LangENG.php");
                break;
        }
    ?>

    <p> <?php echo $connexion_pseudo; ?> </p>
    
</body>
