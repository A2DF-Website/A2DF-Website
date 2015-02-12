<?php
include ('head.php');
?>

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="452px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d347436.48721723276!2d-1.4783360082402797!3d47.13145653766308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2f9612880c158cad!2sA2DF+Informatique!5e0!3m2!1sfr!2s!4v1423503596659"></iframe>
            </div>

            <!-- Contact Details Column -->
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-map-marker text-warning"></i> Coordonnées</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            2 Rue des Claircontres<br>44330 Le Pallet<br>
                        </p>
                        <p><i class="fa fa-phone"></i> 
                            <abbr title="Phone"></abbr>: 02 40 97 29 61</p>
                        <p><i class="fa fa-envelope-o"></i> 
                            <abbr title="Email"></abbr>: <a href="mailto:name@example.com">contact@a2dfinformatique.com</a>
                        </p>
                        <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/pages/A2DFinformatique/570125046357439"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/A2DFInformatiqu"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/u/0/101285302052580331310/about?hl=fr&gl=fr"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-clock-o text-warning"></i> Horaires d'ouvertures</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                        <li>Lundi: 14h - 19h</li>
                        <li>Du Mardi au Vendredi: 9h30 - 19h</li>
                        <li>Samedi: 10h - 12h</li>
                        <li>Dimanche: fermé</li>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <hr>

        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Envoyez-nous un message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nom complet :</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Numéro de téléphone :</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Addresse e-mail :</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message :</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-warning">Envoyer</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
