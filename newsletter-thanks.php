<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Thanks</title>

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
			<h1>Thank You</h1>
			<p>Thanks for signing up for my newsletter!  I promise I won't spam you or share your email address with anyone.  Keep an eye on your inbox for some exciting news from me and other things going on in the world of web development!</p>
			<p><a href="index.php">Back to home</a></p>
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
	
	<!-- Custom Scripts -->
	<script src="js/scripts.js" type="text/javascript"></script>
	
</body>
</html>