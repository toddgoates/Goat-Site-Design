<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>500 - Internal Error | Todd Goates</title>
        
        <!-- Fonticons -->
        <script src="https://use.fonticons.com/e9f434ee.js"></script>

        <!-- CSS -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/main.min.css" rel="stylesheet">

        <?php
        include('includes/favicons.php');
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <?php
        include('includes/analytics.php');
        include('includes/header_nav.php');
        ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>500 - Internal Error</h1>
                <p>Oops!  Something has gone horribly wrong!  Don't worry, you are innocent.  I'll take the blame for this one.  Come back in just a little bit.  In the meantime, here's a wizard!  <a href="/">Take me home</a></p>
                <img src="img/wizard.jpg" alt="This page can't be displayed at the moment, so here's a wizard.">
            </div>
        </div>

        <?php
        include('includes/footer.php');
        ?>

        <!-- jQuery and fallback -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            if (typeof jQuery == 'undefined') {
                document.write(unescape("%3Cscript src='/lib/jquery/jquery-1.11.1.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>
        
        <!-- Fast Click for mobile -->
        <script src="lib/fastclick.min.js"></script>

        <!-- Custom Scripts -->
        <script src="js/scripts.js"></script>

    </body>
</html>