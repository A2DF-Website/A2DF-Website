<html>
    <head>
        <style type="text/css">
            #blackout
            {
                filter:alpha(opacity=70); 
                -moz-opacity:0.7; 
                opacity:0.7; 
                position:absolute;
                background-color:#222233;
                z-index:50; 
                left:0px;
                top:0px;
                right:0px;
                bottom:0px;
                width:102%;
                height:102%;
            }
            #loading
            {
                filter:alpha(opacity=100); 
                -moz-opacity:1; 
                opacity:1; 
                position:fixed;
                text-align:center;
                background-color:#EEEEEE;
                top:50%;
                left:50%;
                margin-top:-55px;
                margin-left:-75px;
                width:150px;
                height:75px;
                z-index:100; 
            }
        </style>
    </head>
    <body onload="document.getElementById('loading').style.visibility = 'hidden';
            document.getElementById('loading').style.display = 'none';
            document.getElementById('blackout').style.visibility = 'hidden';
            document.getElementById('blackout').style.display = 'none';">
        <div id="blackout">
            <div id="loading"><img id="loadinggif" src="../../A2DF/img/cross.png" style="margin-top:12px; "/></div>
            <script type="text/javascript" language="javascript">
                document.getElementById('loadinggif').src = '../../A2DF/img/cross.png';
            </script>
        </div>
        <img src="http://www.geant.net/Resources/PartnerResources/Partner%20Resources%20Image%20Library/Image%2010_958642.jpg"/>
    </body>
</html>