<?php
// Connect to the db
require_once('includes/db_vars.php');
$dbc = mysqli_connect(HOST, USER, PASS, DB) or die('Could not connect to database');

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
	<title>My Work | Todd Goates</title>
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
				<h1>My Work</h1>
				<p>Check out some of the awesome solutions I've built for clients!</p>
				<div class="projects">
					<?php
					while($row = mysqli_fetch_array($result)) {
						// Display rows
						echo '<li>';
						echo '<a href="'.$row['link'].'" target="_blank">';
						echo '<img src="'.$row['img_path'].'/'.$row['file_name'].'" alt="'.$row['title'].'" class="project-icon">';	
						echo '</a>';	
						echo '</li>';
					}
					?>
				</div>
			</section>
			<section>
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