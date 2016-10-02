<?php define('KEY', true); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Delete All The Things | Todd Goates</title>

    <meta name="description" content="Lessons learned when I was a young developer of the importance of using some type of version control.">

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
            <section>
                <h1>Delete All The Things!</h1>
                <img src="img/thoughts/the_scream.jpg" alt="The Scream by Edvard Munch represents how I feel when I delete all my files" title="The Scream by Edvard Munch represents how I feel when I delete all my files" class="float-left-pic">
                <p>I've been developing for several years now.  I feel like I'm pretty good at it, but not too long ago I made a huge mistake that caused much despair and sorrow.</p>
                <p>While taking a break from working on this very website, I decided to start messing around with Cordova.  I copied everything from this website's root directory and pasted it into another folder.  In the new folder, I combined my assets with some Cordova files.  After I was done with my Cordova experimentation I deleted the copied folder.  I'm not one that keeps the trash full on my Macbook, so I promptly emptied the trash too.  Hours later, I had a Sudden Clarity Clarence moment... I didn't copy my website's main directory, I moved it.  This means I deleted everything.  <strong>@#$%$@!</strong></p>
                <p>I quickly Googled and downloaded several file recovery programs.  All of them scanned and found deleted files!  Unfortunately I would need to pay $80+ to recover them.  Forget that!  I finally accepted my losses and realized that I would need to start over.</p>
                <p>And that's what I did.</p>
                <p>I learned in college that anything you have to do a second or third or fourth time, you'll do better than the previous attempts.  I feel like that was the case in recreating this website.  I made a lot of small improvements and overall I am more satisfied with the way it came out than how it was before.  The wise Guru Laghima once said, "New growth cannot exist without first the destruction of the old."</p>
                <p>Now that the site is back up again, I'm pretty much going to always use some form of version control to prevent these catastrophic deletions from ever happening again.  Sadly, I've been proficient in Git and Subversion for a while now, but chose to not use them before the great deletion.  D'oh!</p>
                <p>If there's one thing you take away from this post, it's that version control is a lifesaver.  Take the time to learn how to use one.  There are plenty of great programs that make it easy.  I prefer <a href="http://www.sourcetreeapp.com/" target="_blank">SourceTree</a> for Git and <a href="http://tortoisesvn.net/" target="_blank">TortoiseSVN</a> for SVN (Subversion).  Check them out!  They might just save you a lot of pain in the future.</p>
                <p><a href="thoughts.php">More thoughts</a></p>
            </section>
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
