<?php
	// Connect to the db
	require_once('includes/db_vars.php');
	$pdo = new PDO('mysql:host='.HOST.'; dbname='.DB, USER, PASS);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Build and execute query
	$query = $pdo->prepare('SELECT * FROM skills WHERE deleted = 0 ORDER BY sort ASC');
	$query->execute();
	$result = $query->fetchAll();

	// Nullify PDO
	$pdo = null;
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta name="description" content="Todd Goates is a Utah-based web designer and developer with a growing skill set and a love for awesome projects">

	<!-- Title -->
	<title>About Me | Todd Goates</title>

  <!-- Fonticons -->
  <script src="https://use.fonticons.com/e9f434ee.js"></script>

	<!-- CSS -->
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
    include('includes/gtm.php');
    include('includes/header_nav.php');
	?>

	<div class="main-content">
		<div class="wrapper">
			<section>
				<h1>Hello World!</h1>
				<img src="img/me.jpg" alt="Image of Todd Goates, a Utah-based Web Designer and Developer" class="float-left-pic">
        <h2>Who am I?</h2>
				<p>My name is Todd Goates. I was born in Connecticut and raised in Utah. I like to travel, spend time with my beautiful wife, listen to music/attempt to create it, draw, and code all sorts of cool projects. I graduated with a bachelor's degree in Digital Media with an emphasis in Internet Technologies from Utah Valley University. You might be thinking "What the heck is a degree in Digital Media?" I define it as the combination of Computer Science and Graphic Design.</p>
				<p>I have been drawing and designing for as long as I can remember. During my high school years, I discovered the how fun it was to code. I have loved programming for the web ever since I typed my first &lt;html&gt; tag years ago.  I've been actively developing for the past <?php echo date('Y') - 2012; ?> years.</p>
        <h2>What can I do for you?</h2>
        <p>My goal is to smoothly solve your web dilemmas and to educate you on all the different technologies that can help your online presence.  Here are some of my services:</p>
				<ul>
					<li>Help build your brand</li>
					<li>Design a slick website or web application</li>
					<li>Develop said website or web application</li>
					<li>Redesign your web project</li>
					<li>Site maintenance and repairs</li>
					<li>Project Consultation</li>
				</ul>
        <h2>Why work with me?</h2>
        <p>I am a passionate designer and developer who loves what he does.  I put my blood, sweat, and tears into every project I work on (not literally though).  You'll be proud of the final product, trust me.</p>
				<p>Have something for me to work on?  Let's get started!</p>
				<form action="contact.php" method="POST" class="cta">
					<button type="submit" class="cta-button">Start a Project</button>
				</form>
			</section>

			<section id="skills">
				<h2>Web Skills</h2>
        <p><i class="fa fa-info-circle fa-fw"></i> Don't know what in the world I'm talking about?  Just flip the card over for the answer.</p>
        <div class="skills-list">
          <?php foreach ($result as $row) { ?>
            <div class="flip-container">
                <div class="flipper">
                    <div class="front">
                      <?php echo $row['name']; ?>
                    </div>
                    <div class="back">
                      <?php echo $row['description']; ?>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <div class="clear-fix"></div>
				<p>Don't see a certain technology for your web project?  Let me know what you need; I'm a quick learner!</p>
				<form action="contact.php" method="POST" class="cta">
					<button type="submit" class="cta-button">Contact Todd</button>
				</form>
			</section>
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
</body>

</html>
