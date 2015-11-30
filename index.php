<?php
// Connect to the db
require_once('includes/db_vars.php');
$dbc = mysqli_connect($HOST, $USER, $PASS, $DB) or die('Could not connect to database');

// Build and run query
$query = "SELECT * FROM project ORDER BY date_added DESC";
$result = mysqli_query($dbc, $query) or die('Query failed');

// Close db connection
mysqli_close($dbc);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Todd Goates, Utah-based Web Designer and Developer</title>
	<meta name="description" content="Welcome to the portfolio website of Todd Goates.  I am a web designer and developer from Utah that likes to make cool solutions to your digital media needs.">

    <!-- Fonticons -->
    <script src="https://use.fonticons.com/e9f434ee.js"></script>
    
	<!-- CSS -->
	<link href="css/main.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	
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
	
	<div class="landing-area">
		<div class="wrapper">
			<div class="todd-left">
                <img data-alt-src="img/todd-left-hover.jpg" src="img/todd-left.jpg" alt="Todd Goates is a designer" id="todd-left-img">
				<h1 id="designer" class="wow fadeInLeft">Designer</h1>
			</div>
			<div class="todd-right">
				<img data-alt-src="img/todd-right-hover.jpg" src="img/todd-right.jpg" alt="Todd Goates is a developer" id="todd-right-img">
                <h1 id="developer" class="wow fadeInRight">Developer</h1>
			</div>
			<div class="clear-fix"></div>
		</div>
	</div>
	
	<div class="about-me">
		<div class="description">
			<h2>Wondering what I can do for you?</h2>
			<p>Check out my list of <a href="/about#skills">web skills</a></p>
		</div>
		<div class="wrapper">
            <div class="box wow bounceIn">
                <i class="fa fa-search"></i>
				<h3>Brand Discovery</h3>
				<p>Starting up your company's website?  I can help you develop a unique and attractive brand that best represents your product or service.</p>
            </div>
            <div class="box wow bounceIn">
                <i class="fa fa-pencil-square-o"></i>
				<h3>Design Blueprints</h3>
				<p>Not sure what you want your site to look like yet?  I can help you design a stunning theme that looks good on all browsers and devices.</p>
            </div>
            <div class="box wow bounceIn">
                <i class="fa fa-code"></i>
				<h3>Code Crunching</h3>
				<p>Need someone to develop a design?  I code with the latest technologies to ensure that your website always performs well and loads quickly.</p>
            </div>
            <div class="box wow bounceIn">
                <i class="fa fa-sitemap"></i>
                <h3>Website Facelift</h3>
				<p>Is your website ready for a new look?  When it's time to change to a new design, I will help you migrate your assets and plan accordingly.</p>
            </div>
            <div class="box wow bounceIn">
                <i class="fa fa-wrench"></i>
				<h3>Repair Jobs</h3>
				<p>Is something broken on your website?  When you need an extra set of eyes to debug something, I am happy to help and assist with any updates.</p>
            </div>
            <div class="box wow bounceIn">
                <i class="fa fa-thumbs-o-up"></i>
                <h3>Honest Opinions</h3>
				<p>Need some feedback about your web project?  I have years of experience with design and development and would love to consult with you.</p>
            </div>
            <div class="cta">
                <form action="contact.php" method="POST">
                    <button type="submit" class="cta-button">Start a Project</button>
                </form>
            </div>
        </div>
	</div>
	
	<div class="blog">
		<div class="description">
			<h2>My recent projects</h2>
		</div>
		<div class="wrapper">
            <div class="project">
            <?php
            while($row = mysqli_fetch_array($result)) {
                // Display rows
                echo '<a href="work.php">';
                echo '<img src="'.$row['img_path'].$row['file_name'].'" alt="'.$row['title'].'" class="project-icon wow rotateIn">';	
                echo '</a>';	
            }
            ?>
            </div>
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
    
    <!-- Fast Click for mobile -->
    <script src="lib/fastclick.min.js"></script>
    
	<!-- Custom Scripts -->
    <script src="js/scripts.js"></script>
    
    <!-- Wow animations -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
	
</body>
</html>