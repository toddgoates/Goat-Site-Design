<?php
    if(!defined('KEY')) {
        header('Location: https://toddgoates.com/404');
    }
?>
<header>
    <div class="wrapper">
        <a href="/">
            <img src="img/logo.svg" alt="Logo for Todd Goates, web designer and developer">
        </a>
		<div class="menu-icon">
            <i class="fa fa-bars"></i>
		</div>
	</div>
</header>
<nav>
	<ul>
        <li><a href="/about.php">About Me</a></li>
		<li><a href="/work.php">My Work</a></li>
		<li><a href="/thoughts.php">Some Thoughts</a></li>
		<li><a href="/contact.php">Contact Me</a></li>
	</ul>
</nav>
<div class="clear-fix"></div>
<div class="back-to-top">
    <i class="fa fa-arrow-circle-o-up" id="up-arrow"></i>
</div>
