<!-- app/Resources/views/View/video.html.php-->  
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
                    <li><img href="homepage.html" src="/web/bundles/framework/images/logo.png " style="width:135px;height:75px; "></li>
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
    <!-------------------------------------------------------TOP BAR------------------------------------------------------>
    <div class="video-titre" style="height:5%;width:100%;">
        <h3 style="text-align:center;">Metallica - Atlas, Rise! Teaser</h3>
    </div>
    <div class="video-principale" style="height: 95%;width: 100%;">
        <div class="video-info-channel" style="height:65%;">
            <div class="video-info-channel-nostreamer" style="height:50%;">
                <table style="margin-top:10px;">
                    <tr>
                        <td style="width:150px;height:150px;background-color:white;border-color:white;">
                            <img style="width:100%;height:100%;margin-top: 10px; margin-bottom: 10px; margin-right: 10px; margin-left: 10px;" src="met.jpg ">
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <h4 style="text-align:center;">MetallicaTV</h4>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align:center;">2 000 000 abonnés</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> 198 vidéos </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> 3 chaînes </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <button class="expanded button" href="#">Suivre MetallicaTV</button>
            </div>
            <div class="video-info-channel-channel" style="height:50%;">
                <table>
                    <tr>
                        <td style="width:150px;height:150px;background-color:white;border-color:white;">
                            <img style="width:100%;height:100%;margin-top: 10px; margin-bottom: 10px; margin-right: 10px; margin-left: 10px;" src="metstudio.jpg ">
                        </td>
                        <td>
                            <table>
                                <tr>
                                    <h4 style="text-align:center;">Metallica Studio</h4>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align:center;">1 400 000 abonnés</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> 42 vidéos </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <button class="expanded button" href="#">S'abonner à Metallica Studio</button>
            </div>
        </div>

        <div class="video-container " style="height:65%;width:60%!important; ">
            <video id="my-video " class="video-js " controls preload="auto " style="width:100%; height:100%; " poster="atlas.jpg " data-setup="{} ">
                <source src="/web/bundles/framework/mp4/atlas.mp4 " type='video/mp4'>
                <p class="vjs-no-js ">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/ " target="_blank ">supports HTML5 video</a>
                </p>
            </video>
        </div>

        <div class="video-info-video " style="width:20%;height:65%;">
            <table>
                <tr>
                    <h6 style="text-align:center;">Mise en ligne le 22 octobre 2016</h6>
                </tr>
                <tr>
                    <h2 style="text-align:center;">298 000 vues</h2>
                </tr>
                <tr>
                    <div class="primary progress" role="progressbar" tabindex="0" aria-valuenow="89" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
                        <div class="progress-meter" style="width: 89%">
                            <p class="progress-meter-text">89%</p>
                        </div>
                    </div>
                </tr>
            </table>
            <button type="button " style="margin-left:10px;width:40%" class="button ">J'aime !</button>
            <button type="button " style="margin-right:10px;width:40%" class="alert button ">Je n'aime pas !</button>

            <div style="height:60%;width:100%;margin-top:10px;font:16px/26px Georgia, Garamond, Serif;overflow-y: scroll;overflow-x: hidden;">
                "Principium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes inpetrarunt ut hi, quos suspectati sunt,
            </div>

        </div>

        <div class="video-recommandations ">
            <table style="width:100%;height:100%">
                <tr>
                    <td class="element">
                        <div class="media-object ">
                            <div style="height:125px;width:225px;">
                                <div style="height:35px;overflow:hidden;">
                                    <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser</strong></font><br>
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
                    </td>
                    <td class="element">
                        <div class="media-object ">
                            <div style="height:125px;width:225px;">
                                <div style="height:35px;overflow:hidden;">
                                    <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser</strong></font><br>
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
                    </td>
                    <td class="element">
                        <div class="media-object ">
                            <div style="height:125px;width:225px;">
                                <div style="height:35px;overflow:hidden;">
                                    <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser</strong></font><br>
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
                    </td>
                    <td class="element">
                        <div class="media-object ">
                            <div style="height:125px;width:225px;">
                                <div style="height:35px;overflow:hidden;">
                                    <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser</strong></font><br>
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
                    </td>
                    <td class="element">
                        <div class="media-object ">
                            <div style="height:125px;width:225px;">
                                <div style="height:35px;overflow:hidden;">
                                    <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser</strong></font><br>
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
                    </td>
                    <td class="element">
                        <div class="media-object ">
                            <div style="height:125px;width:225px;">
                                <div style="height:35px;overflow:hidden;">
                                    <font size="2" class="titres"><strong>Metallica - Atlas, Rise! Teaser</strong></font><br>
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
                    </td>
                </tr>
            </table>
        </div>

    </div>


    <script src="http://vjs.zencdn.net/5.8.8/video.js "></script>
</body>