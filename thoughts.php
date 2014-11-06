<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Some Thoughts | Todd Goates</title>
        <meta name="description" content="">

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
                <section>
                    <h1>Some Thoughts</h1>
                    <p>Below are some different blog entries on the topic of technology and my quest to become the greatest web developer ever:</p>
                    <figure>
                        <a href="delete-all-the-things.php" class="thumb">
                            <div class="background">
                                <span class="caption">Read More</span>
                                <img src="img/thoughts/the_scream_thumb.jpg" alt="Delete All The Things">
                            </div>
                        </a>
                        <figcaption>
                            <strong>Delete All The Things!</strong>
                            <span class="posted">Nov 4th, 2014</span>
                        </figcaption>
                    </figure>
                </section>
                <section>
                    <h2>Some Tweets</h2>
                    <div class="tweet-timeline">
                        <script id="tweets-template" type="text/x-handlebars-template">
                            {{#each this}}
                            <div class="tweet">
                                <img src="{{thumb}}" alt="{{author}}" class="tweet-icon">
                                <p class="text">{{linkify tweet}}</p>
                                <p class="date">{{prettyDate created}}</p>
                            </div>
                            {{/each}}
                        </script>
                    </div>
                </section>
            </div>
        </div>

        <?php
        include('includes/footer.php');
        ?>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- Tweetbar -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.min.js"></script>
        <script type="text/javascript" src="js/tweets.min.js"></script>
        <script type="text/javascript" src="js/helpers.js"></script>
        <script>
            Tweetbars.init({
                template: $('#tweets-template').html(),
                container: $('.tweet-timeline'),
                username: 'toddgoates',
                count: 10
            });
        </script>

        <!-- Custom Scripts -->
        <script src="js/scripts.js" type="text/javascript"></script>

    </body>
</html>