<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>About Me | Todd Goates</title>
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
				<h1>Hello World!</h1>
				<img src="img/me.jpg" alt="Image of Todd Goates, a Utah-based Web Designer and Developer" class="me-pic">
				<p>My name is Todd Goates. I was born in Connecticut and raised in Utah. I like to travel, spend time with my beautiful wife, listen to music/attempt to create it, draw, and code all sorts of cool projects. I am fresh out of college with a bachelor's degree in Digital Media with an emphasis in Internet Technologies from Utah Valley University. You might be thinking 'What the heck is a degree in Digital Media?' I define it as the love child of Computer Science and Graphic Design.</p>
				<p>I have been drawing and designing for as long as I can remember. During my high school years, I discovered the how fun it was to code. I have loved programming for the web ever since I typed my first &lt;html&gt; tag years ago. Wondering what I can do for you?</p>
				<ul>
					<li>Help build your brand</li>
					<li>Design a slick website or web application</li>
					<li>Develop said website or web application</li>
					<li>Redesign your web project</li>
					<li>Site maintenance and repairs</li>
					<li>Project Consultation</li>
				</ul>
				<p>Have something for me to work on?  Let's get started!</p>
				<form action="contact.php" method="POST">
					<button type="submit" class="cta-button">Start a Project</button>
				</form>
			</section>
			<section id="skills">
				<h2>Web Skills</h2>
				<p><i class="fa fa-warning fa-fw"></i> Warning: web lingo below!</p>
				<ul>
					<li>HTML5</li>
					<li>CSS3</li>
					<li>CSS Frameworks
						<ul>
							<li>LESS</li>
							<li>Bootstrap</li>
							<li>Ionic</li>
						</ul>
					</li>
					<li>JavaScript</li>
					<li>JavaScript Frameworks
						<ul>
							<li>jQuery and jQuery UI</li>
							<li>AngularJS</li>
						</ul>
					</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>Content Management System
						<ul>
							<li>Drupal</li>
							<li>WordPress</li>
							<li>Joomla</li>
							<li>Adobe Business Catalyst</li>
						</ul>
					</li>
					<li>E-commerce</li>
					<li>Mobile First Responsive Design</li>
					<li>XML RSS Feeds</li>
					<li>AJAX</li>
					<li>C#</li>
					<li>Virtual Reality Tours</li>
					<li>Audiobooks</li>
					<li>Digital Publications
						<ul>
							<li>Mag+</li>
							<li>iBooks</li>
						</ul>
					</li>
					<li>On-page SEO</li>
					<li>Adobe Products
						<ul>
							<li>Photoshop</li>
							<li>Illustrator</li>
							<li>InDesign</li>
						</ul>
					</li>
				</ul>
				<p>Don't see a certain technology for your web project?  Let me know what you need; I'm a quick learner!</p>
				<form action="contact.php" method="POST">
					<button type="submit" class="cta-button">Contact Todd</button>
				</form>
			</section>
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