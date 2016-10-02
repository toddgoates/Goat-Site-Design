<?php define('KEY', true); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>404 - Page Not Found | Todd Goates</title>

    <script src="https://use.fonticons.com/e9f434ee.js"></script>

    <link href="css/main.min.css" rel="stylesheet">

    <?php include('includes/favicons.php'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php
        include('includes/gtm.php');
        include('includes/header_nav.php');
    ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>404 - Page Not Found</h1>
            <p>It seems you were looking for a page that doesn't exist yet.  To make you feel better, here's a silly picture of me milking the world's largest holstein cow.  <a href="/">Take me home</a></p>
            <img src="img/salem-sue.jpg" alt="The page you looked for doesn't exist, so here's a silly cow.">
        </div>
    </div>

    <?php include('includes/footer.php'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='/lib/jquery/jquery-1.11.1.min.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    <script src="js/scripts.js"></script>
</body>
</html>
