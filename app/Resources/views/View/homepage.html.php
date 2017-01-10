<!doctype html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>nostream</title>
    <link rel="stylesheet" href="css/foundation.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/vendor/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.0.1/js/foundation.min.js"></script>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li><img class="top-bar-profile-pic" href="/homepage.html" src="logo.png "></li>
                <li><input type="search" placeholder="Search Here" style="margin-left:15px;width:500px;" ;></li>
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

    <ul class="tabs " data-tabs id="tabs_example ">
        <li class="tabs-title "><a href="#tab2">Vidéastes</a></li>
        <li class="tabs-title "><a href="#tab3 ">Chaînes</a></li>
        <li class="tabs-title "><a href="#tab4 ">Actualité</a></li>
        <li class="tabs-title "><a href="#tab5 ">Abonnements</a></li>
        <li class="tabs-title is-active "><a href="#tab1">Tendances</a></li>
    </ul>

    <div class="tabs-content " data-tabs-content="tabs_example ">

        <!------------------------------------------------------------Section Tendances---------------------------->
        <div class="tabs-panel is-active " id="tab1" style="height:100%">
            <div style="text-align:center;">
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

        <!------------------------------------------------------------Section Vidéastes---------------------------->

        <div class="tabs-panel" id="tab2">
            <div style="text-align">
                <div style="width:80%;position:relative;">
                    <div style="height:50px;width:100%">
                        <h3 style="margin-left:5px;">MetallicaTV</h3>
                    </div>
                    <div style="float:left;width:150px;height;150px">
                        <img src=" met.jpg " style="height:100%;width:100%;float:left; "><br>
                    </div>
                    <div style="float:left;width:60%;height:225px;overflow:hidden;">
                        <div style="float:left;margin-left:30px;height:125px;width:225px;display:inline-block;position:relative">
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
                        <div style="float:left;margin-left:30px;height:125px;width:225px;display:inline-block;">
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
                        <div style="float:left;margin-left:30px;height:125px;width:225px;display:inline-block;position:relative">
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
            </div>
        </div>

        <div class="tabs-panel " id="tab3 ">
            
        </div>
        <div class="tabs-panel " id="tab4 ">
            
        </div>
        <div class="tabs-panel " id="tab5 ">
            
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(document).foundation();
        })
    </script>

</body>

</html>