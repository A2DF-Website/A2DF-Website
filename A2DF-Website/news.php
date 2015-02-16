<?php
include ('head.php');
?>
<body>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Actualités
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a>
                    </li>
                    <li class="active">Actualités</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8 well">

                <!-- First Blog Post -->

                <div class="fb-like-box" data-href="https://www.facebook.com/pages/A2DFinformatique/570125046357439" data-height="600" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4><i class="fa fa-google-plus"></i>  Google Plus</h4>
                    <div>
                        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                        <g:plus href="https://plus.google.com/101285302052580331310"></g:plus>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4><i class="fa fa-twitter"></i> Twitter</h4>
                    <div class="row center-block">
                        <a href="https://twitter.com/A2DFInformatiqu" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="large" data-dnt="true">Suivre @A2DFInformatiqu</a>
                        <script>!function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'twitter-wjs');</script>
                    </div>

                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            

        </div>
        
    </div>
    <!-- /.row -->

    <hr>
</div>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Hugo JEROME & Alexandre TALBOT 2015 - 
                    <a href="https://www.facebook.com/pages/A2DFinformatique/570125046357439"><i class="fa fa-facebook-square fa-2x pull-right"></i></a>
                    <a href="https://twitter.com/A2DFInformatiqu"><i class="fa fa-twitter-square fa-2x pull-right"></i></a>
                    <a href="conditions.php">Conditions générales de vente</a></p>
            </div>
        </div>
    </div>
</footer>


<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
