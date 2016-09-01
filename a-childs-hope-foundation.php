<?php define('KEY', true); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>A Child's Hope Foundation | Todd Goates</title>

    <meta name="description" content="Project Summary for A Child's Hope Foundation">

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
			<section class="proj-image">
				<img src="img/projects/achf-home.png">
			</section>
			<section class="proj-description">
                <h1>A Child's Hope Foundation</h1>
				<p>A Child's Hope Foundation is a non-profit organization that has been around since 2002. They help orphaned and abandoned children in developing countries around the world by reuniting them with their families when possible, supporting programs for adoption or foster care, and volunteering at orphanages.</p>
				<p>Volunteers are like family members to the children in the orphanages. Throughout the years the organization has built several new facilities in Haiti and Mexico to house children in family-style group homes, donated supplies to over 100 orphanages, provided dental services to countless children, and touched many lives.</p>
				<p><a href="https://achildshopefoundation.org" target="_blank">achildshopefoundation.org</a></p>
				<h2>Project Details</h2>
				<p>The old website for A Child's Hope Foundation was a static site that looked outdated, was not responsive on mobile devices, and was difficult to update. I helped migrate existing content into Drupal, a content management system that allows staff members to easily create and update content. My team designed a beautiful, modern, and responsive new theme. We also created an online registration system for volunteers to be able to sign up for work trips.</p>
				<p>I was later approached by the staff at A Child's Hope Foundation to build a new online donation system. Using the Stripe API, I built a system that processes both one-time donations and recurring monthly donations. The donation page has processed more than $175K in under two years.</p>
				<h3>Technologies Used</h3>
				<ul>
					<li class="badge">Drupal</li>
					<li class="badge">PHP</li>
					<li class="badge">JavaScript</li>
					<li class="badge">Stripe</li>
					<li class="badge">LESS</li>
				</ul>
			</section>
			<div class="clear-fix"></div>
		</div>
	</div>

	<?php include('includes/footer.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        if (typeof jQuery == 'undefined') {
            document.write(unescape("%3Cscript src='/lib/jquery/jquery-1.11.1.min.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    <script src="lib/fastclick.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>
