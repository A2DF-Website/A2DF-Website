<?php
include ('head.php');
?>


<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Services
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/atelier.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <a href="#service-one" data-toggle="tab">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-warning"></i>
                            <i class="fa fa-stethoscope fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </div>
                    <div class="panel-body">
                        <h4>Diagnostic</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <a href="#service-two" data-toggle="tab">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-warning"></i>
                            <i class="fa fa-gear fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </div>
                    <div class="panel-body">
                        <h4>Montage</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <a href="#service-three" data-toggle="tab">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-warning"></i>
                            <i class="fa fa-wrench fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </div>
                    <div class="panel-body">
                        <h4>Dépannage</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <a href="#service-four" data-toggle="tab">
                        <span class="fa-stack fa-5x">
                            <i class="fa fa-circle fa-stack-2x text-warning"></i>
                            <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </div>
                    <div class="panel-body">
                        <h4>Formation</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Descriptions</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-stethoscope"></i> Diagnostic</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-gear"></i> Montage</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-wrench"></i> Dépannage</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Formation</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Diagnostic</h4>
                        <p>
                            A2DF Informatique est constituée d'un technicien hautement qualifié afin de répondre au mieux à vos interrogations et vos problèmes techniques tels qu'ils soient. Il vous suffit d'apporter votre tour, ordinateur portable, tablette, ... et nous diagnostiquerons vos outils informatiques gratuitement !
                        </p>
                        <p>
                            Lors d'un dépôt chez A2DF Informatique, nous tendons toujours à raccourcir votre délais d'attente, c'est pourquoi nous nous efforcons, dès <u>72h Maximum</u> d'attente, à vous tenir informer de la suite des réparations.
                        </p>
                        <img class="img-responsive center-block" src="img/devisgratuit.png" alt="" width="150px" height="150px">
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Montage PC</h4>
                        <p>
                            A2DF vous proposes la création et le montage d'une ordinateur fixe en maximum 72 heures (selon disponibilités des stocks)
                            En effet, l'entreprise vous conseilleras sur les futures composants de la machines en fonctions de vos besoins. Ceci débouchant sur un devis gratuit. 
                        </p>
                        <p>
                            De plus, afin de vous offrir nos meilleurs services, nous vous installons automatiquement les logiciels suivants :
                        </p> 
                        </br>
                        <div class="row-centered">
                            <div class="col-lg-12">
                                <h2 class="page-header">Logiciels préinstallés</h2>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.kaspersky.fr/" title="Kaspersky"><img class="img-responsive customer-img" src="img/kaspersky.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="https://www.mozilla.org/fr/" title="Firefox"><img class="img-responsive customer-img" src="img/firefox.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="https://www.google.com/chrome/" title="Chrome"><img class="img-responsive customer-img" src="img/chrome.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.java.com/fr/" title="Java"><img class="img-responsive customer-img" src="img/java.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.win-rar.com/" title="winRAR"><img class="img-responsive customer-img" src="img/winrar.png" alt="" width="64px" height="64px"></a>
                            </div>

                        </div>
                        </br>
                        <div class="row-centered">
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.teamviewer.com/fr/" title="Team Viewer"><img class="img-responsive customer-img" src="img/teamviewer.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.google.com/intl/fr/picasa/" title="Picasa"><img class="img-responsive customer-img" src="img/picasa.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.videolan.org/vlc/" title="VLC"><img class="img-responsive customer-img" src="img/vlc.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                 <a href="http://www.skype.com/fr/" title="Skype"><img class="img-responsive customer-img" src="img/skype.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://www.apple.com/fr/itunes/download/" title="iTunes"><img class="img-responsive customer-img" src="img/itunes.png" alt="" width="64px" height="64px"></a>
                            </div>
                        </div>
                        </br>
                        <div class="row-centered">
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="https://www.openoffice.org/fr/" title="Open Office"><img class="img-responsive customer-img" src="img/openoffice.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="https://www.apple.com/fr/quicktime/download/" title="Quick Time"><img class="img-responsive customer-img" src="img/quicktime.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="https://www.piriform.com/ccleaner" title="Ccleaner"><img class="img-responsive customer-img" src="img/ccleaner.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://fr.malwarebytes.org/" title="MalwareBytes"><img class="img-responsive customer-img" src="img/malwarebytes.png" alt="" width="64px" height="64px"></a>
                            </div>
                            <div class="col-lg-1 col-md-2 col-sm-4 col-xs-6 col-centered">
                                <a href="http://get.adobe.com/fr/reader/" title="MalwareBytes"><img class="img-responsive customer-img" src="img/adobe.png" alt="" width="64px" height="64px"></a>
                            </div>
                        </div>

                    </div>


                    <div class="tab-pane fade" id="service-three">
                        <div class="col-md-6">
                            </br>
                            <iframe src="https://www.google.com/maps/d/embed?mid=zblN0uMVe2co.kZdg8mLH90hw" width="100%" height="450px"></iframe>  
                        </div>
                        <div class="col-md-6">
                            <h4>Nos Prestations</h4>
                            <p>
                                A2DF Informatique vous propose une :
                            </p>
                            <ul>
                                <li><b>Assistance logiciel</b> (installation / paramétrages / télétransmission)</li>
                                <li><b>Dépannage de tous les ordinateurs PC quel que soit la marque</b></li>
                                <li><b>Mise à niveau des capacités de votre matériel</b> (mémoire,carte mère, processeur, carte graphique,disque dur, écran TFT,fonctionnalités ..)</li>
                                <li><b>Maintenance préventive :</b> Lenteur d'exécution,blocage INTERNET, bruit mécanique,surchauffe,méssages parasites, sécurisation ..</li>
                                <li><b>Récupération de données</b></li>
                            </ul>
                            </br>
                            <p>
                            <div><b><u>A2DF Informatique peut vous dépanner à votre domicile.</u></b></div> Ce service est mis en place afin de servir, entre aute,  les personnes à mobilité réduite et toutes personnes ne disposant pas de véhicule de transport. Ce service engendre un coût supplémentaire calculé en fonction du temps qui sépare la boutique à votre domicile.
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <div class="col-md-6">
                            </br>
                            <iframe src="https://www.google.com/maps/d/embed?mid=zblN0uMVe2co.kZdg8mLH90hw" width="100%" height="450px"></iframe> 
                        </div>
                        <div class="col-md-6">
                            <h4>Nos formations</h4>
                            <p>
                                A2DF Informatique vous propose des séances de Formation pour vous apprendre les bases de l'informatique ou pour vous perfectionner.
                                Les formations se font à votre domicile avec vos outils informatique !
                                Pour vous y inscrire c'est très simple, il vous suffit de prendre rendez vous avec le formateur en <a href="contact.php">contactant</a> A2DF informatique.
                            </p>
                            <ul>
                                <li><b>Initialisation</b></li>
                                <ul>
                                    <li>Traitement de texte</li>
                                    <li>Tableur</li>
                                    <li>Diaporama</li>
                                    <li>Organisation des documents</li>
                                    <li>Système d'exploitation XP, Vista, Seven, 8, Mac</li>
                                </ul>
                                <li><b>Gestion et retouches photos</b></li>
                                <li><b>Protection d'un ordinateur</b> (antivirus)</li>
                                <li><b>Conversation par internet</b> (Web-Cam, Skype)</li>
                                <li><b>Formation à la demande</b></li>
                            </ul>
                            <hr>
                            <img src="img/zone.png" class="img-responsive center-block" width="60%">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; A2DF Informatique 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>