<?php
	define('KEY', true);

	require_once('includes/credentials.php');
	$pdo = new PDO('mysql:host='.HOST.'; dbname='.DB, USER, PASS);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$query = $pdo->prepare('SELECT * FROM project ORDER BY date_added DESC');
	$query->execute();
	$result = $query->fetchAll();

	$pdo = null;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>My Work | Todd Goates</title>

	<meta name="description" content="Browse some of the awesome web solutions that Todd Goates has built for clients.">

    <script src="https://use.fonticons.com/e9f434ee.js" async></script>

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
				<h1>My Work</h1>
				<p>Check out some of the awesome solutions I've built for clients!</p>
				<div class="projects">
                	<ul>
                        <?php
                            foreach ($result as $row) {
                                echo '<li>';
                                echo '<a href="'.$row['link'].'">';
                                echo '<img src="'.$row['img_path'].'/'.$row['file_name'].'"'
                                    .'alt="'.$row['title'].'" class="project-icon">';
                                echo '</a>';
                                echo '</li>';
        					}
        				?>
                    </ul>
                </div>
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
