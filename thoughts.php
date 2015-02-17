<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Some Thoughts | Todd Goates</title>
        <meta name="description" content="Blog entries from Todd Goates, a web designer and developer, on various topics of technology.">

        <!-- CSS -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

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
        include('includes/header_nav.php');
        ?>

        <div class="main-content">
            <div class="wrapper">
                <section class="thoughts">
                    <h1>Some Thoughts</h1>
                    <p>Below are some different blog entries on the topic of technology and my quest to become the greatest web developer ever:</p>
                    <?php
                    include('includes/blogs.php');
                    ?>
                </section>
                <section class="twitter">
                    <h2>Some Tweets</h2>
                    <div class="tweet-container" id="tweetlist"></div>
                </section>
                <div class="clear-fix"></div>
            </div>
        </div>

        <?php
        include('includes/footer.php');
        ?>

        <!-- jQuery and fallback-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            if (typeof jQuery == 'undefined') {
                document.write(unescape("%3Cscript src='/lib/jquery/jquery-1.11.1.min.js' type='text/javascript'%3E%3C/script%3E"));
            }
        </script>

        <!-- Custom Scripts -->
        <script src="js/scripts.js" type="text/javascript"></script>
        
        <!-- Twitter -->
        <script src="js/twitterFetcher.min.js" type="text/javascript"></script>
        <script src="js/todds_tweets.js" type="text/javascript"></script>

    </body>
</html>