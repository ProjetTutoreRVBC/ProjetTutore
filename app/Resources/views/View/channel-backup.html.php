<!-- app/Resources/views/View/channel.html.php-->  
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
    <div data-sticky-container>
        <div class="top-bar" data-sticky>
            <div class="top-bar-left">
                <ul class="menu">
                    <li><img href="homepage.html" src="logo.png " style="width:135px;height:75px; "></li>
                    <li><input type="search" placeholder="Search Here" style="margin-left:15px;width:250px;" ;></li>
                    <li><button type="button" class="button">Search</button></li>
                </ul>
            </div>
            <div class="top-bar-right">
                <img class="thumbnail " data-open="exampleModal1" src="profile.jpg ">
                <div class="reveal xlarge" id="exampleModal1" data-reveal>
                    <div style="float: right;">
                        <h2>Connexion</h2>
                        <form>
                            <div class="row">
                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label>Pseudo</label>
                                            <input type="text" id="right-label" placeholder="pseudo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-8 columns">
                                    <div class="row">
                                        <div class="small-3 columns">
                                            <label>Pass</label>
                                            <input type="text" id="right-label" placeholder="mot de passe">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="expanded button" type="submit">Submit</button>
                        </form>
                    </div>
                    <div style="float: left;">
                        <h2>Inscription</h2>
                        <form>
                            <fieldset>
                                <div class="row">
                                    <div class="large-4 columns">
                                        <label>Adresse mail</label>
                                        <input type="email" placeholder="Entrez votre adresse mail">
                                    </div>
                                    <div class="medium-4 columns">
                                        <label>Date de naissance</label>
                                        <input type="date">
                                    </div>
                                    <div class="large-4 columns">
                                        <label>Avatar</label>
                                        <label for="exampleFileUpload" class="button">Upload File</label>
                                        <input type="file" id="exampleFileUpload" class="show-for-sr">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="large-4 columns">
                                        <label>Pseudo</label>
                                        <input type="text" placeholder="Choisissez votre pseudo">
                                    </div>
                                    <div class="large-4 columns">
                                        <label>Mot de passe</label>
                                        <input type="password" placeholder="Entrez votre mot de passe">
                                    </div>
                                    <div class="large-4 columns">
                                        <label>Confirmer mot de passe</label>
                                        <input type="password" placeholder="Confirmez votre mot de passe">
                                    </div>
                                </div>
                            </fieldset>
                            <button class="expanded button" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:100%;width:100%">
        <div style="position:relative;height:40%;padding:1px;border-bottom:1px solid #021a40;border-color:grey;">
            <img src="banner.jpeg " style="height:300px;width:100%;text-align:center;"><br>
            <img src="metstudio.jpg " style="top:225px;left:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
            <img src="met.jpg " style="top:225px;right:75px;position:absolute;padding:1px;border:1px solid;background-color:grey;height:150px;width:150px;text-align:center;">
            <h2 style="margin-left:250px;position:absolute;">MetallicaStudio</h2>
            <h2 style="right:250px;position:absolute;">MetallicaTV</h2>
        </div>
        <div style="float:left;height:60%;width:70%;padding:1px;border:1px solid;border-color:grey;">
            <div style="margin-left:auto;margin-right:auto;background-color:red;">
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>

                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
                <div style="height:125px;width:225px;display:inline-block;">
                    <div style="height:35px;overflow:hidden;">
                        <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser from Hardwired...To self Destruct</strong></font><br>
                    </div>
                    <img src="atlas.jpg " style="height:125px;width:225px;text-align:center;"><br>
                    <div>

                    </div>

                    <div style="width:225px;">
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">MetallicaTV</font>
                        </a>
                        <a href="#" class="button tiny" style="margin-left:none;margin-right:none;width:49%">
                            <font size="1">Metallica Studio</font>
                        </a>
                    </div>
                    <div style="text-align:center;">
                        <font size="1 ">1 234 992 vues -</font>
                        <font size="1 ">le 29/10/16</font>
                    </div>
                </div>
            </div>

        </div>
        <div style="padding:1px;border-bottom:1px solid;border-color:grey;float:left;height:60%;width:30%">

        </div>

    </div>

</body>