<footer>
	<div class="newsletter">
        <h4>Sign up for my newsletter</h4>
		<form id="newsletter" action="newsletter.php" method="POST" enctype="multipart/form-data">
			<div class="left">
				<input type="email" id="newsletter-email" name="email" placeholder="Your Email Address" required>
			</div>
			<div class="right">
                <input type="submit" name="submit" class="submit-button" value="Subscribe"> 
			</div>
			<div class="clear-fix"></div>
            <div id="newsletter-error"></div>
		</form>
	</div>
	<div class="wrapper">
        <div class="middle">
            <div class="footer-left">
                <h4>Links</h4>
                <ul>
                    <li><a href="/about.php">About Me</a></li>
                    <li><a href="/work.php">My Work</a></li>
                    <li><a href="/thoughts.php">Some Thoughts</a></li>
                    <li><a href="/contact.php">Contact Me</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h4>Contact Me</h4>
                <ul>
                    <li>
                        <a href="mailto:toddgoates@gmail.com">
                            <i class="fa fa-fw fa-envelope"></i> toddgoates@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="tel:+18013199420">
                            <i class="fa fa-fw fa-phone"></i> (801) 319-9420
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/todd.goates" target="_blank" id="facebook">
                            <i class="fa fa-facebook-square fa-fw"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/toddgoates" target="_blank" id="twitter">
                            <i class="fa fa-twitter-square fa-fw"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/toddgoates" target="_blank" id="instagram">
                            <i class="fa fa-instagram fa-fw"></i> Instagram
                        </a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/u/0/+ToddGoates/" target="_blank" id="google-plus">
                            <i class="fa fa-google-plus-square fa-fw"></i> Google +
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/toddgoates/" target="_blank" id="linkedin">
                            <i class="fa fa-linkedin-square fa-fw"></i> LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear-fix"></div>
	</div>
	<div class="footer-bottom">
		<ul>
			<li>&copy; <?php echo date('Y'); ?> Todd Goates</li>
		</ul>
	</div>
</footer>