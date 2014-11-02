<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Todd Goates | Utah-based Web Designer and Developer</title>
	<meta name="description" content="Welcome to the portfolio website of Todd Goates.  I am a web designer and developer from Utah that likes to make cool solutions to your digital media needs.">

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
	
	<div class="landing-area">
		<div class="wrapper">
			<div class="todd-left">
				<img src="img/todd-left.jpg" alt="Todd Goates is a designer">
				<h1>Designer</h1>
			</div>
			<div class="todd-right">
				<img src="img/todd-right.jpg" alt="Todd Goates is a developer">
				<h1>Developer</h1>
			</div>
			<div class="clear-fix"></div>
		</div>
	</div>
	
	<div class="about-me">
		<div class="description">
			<h2>Wondering what I can do for you?</h2>
			<p>Check out my list of <a href="/about.php#skills">web skills</a></p>
		</div>
		<div class="wrapper">
			<div class="top-row">
				<div class="box">
                    <i class="fa fa-binoculars"></i>
					<h3>Brand Discovery</h3>
					<p>If you're starting up and haven't really thought of branding, let me help you shape your company's online representation to be unique and attractive.</p>
				</div>
				<div class="box">
                    <i class="fa fa-pencil-square-o"></i>
					<h3>Design Blueprints</h3>
					<p>Want a unique and modern design for your website, but don't know where to start? Let me help you to come up with a stunning theme that best represents your brand.</p>
				</div>
				<div class="box">
                    <i class="fa fa-file-code-o"></i>
					<h3>Code Crunching</h3>
					<p>I develop with clean and efficient code, refining the code to near-perfection, so that your site is always quick and up-to-date with the latest technologies.</p>
				</div>
			</div>
			<div class="bottom-row">
				<div class="box">
                    <i class="fa fa-sitemap"></i>
                    <h3>Website Facelift</h3>
					<p>Nobody stays the same forever, the same is true with websites. When it's time for a redesign, I will help you migrate all of your assets and create a shiny new design.</p>
				</div>
				<div class="box">
                    <i class="fa fa-wrench"></i>
					<h3>Repair Jobs</h3>
					<p>Every now and then, things break. Have something on your site that isn't working how you would like it? Let me take a look and I'll will get it in good shape again.</p>
				</div>
				<div class="box">
                    <i class="fa fa-thumbs-o-up"></i>
					<h3>Honest Opinions</h3>
					<p>If you need a little advice or a second opinion on a web-based project you're working on, I'm more than happy to help you.  I have years of experience in the visual and technical universe of the web.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="blog">
		<div class="description">
			<h2>Check out some projects I'm working on</h2>
		</div>
		<div class="wrapper">
			<!-- Something goes here -->
		</div>
	</div>
	
	<?php
    include('includes/footer.php');
	?>
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<!-- Custom Scripts -->
	<script src="js/scripts.js" type="text/javascript"></script>
	
</body>
</html>