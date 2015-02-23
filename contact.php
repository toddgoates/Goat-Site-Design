<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Contact Me | Todd Goates</title>
        <meta name="description" content="Ready to get started on an awesome project?  Just send me a message.">

        <!-- CSS -->
        <link href="css/reset.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">

        <?php
        include('/includes/favicons.php');
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
                <section class="form">
                    <h1>Contact Me</h1>
                    <p>Send me a message with the form below and I'll get back to you ASAP.</p>
                    <form id="contact" action="send" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-item">
                                <label for="fullname">Name *</label>
                                <input type="text" name="fullname" id="fullname" required>
                            </div>
                            <div class="form-item">
                                <label for="email">Email *</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="form-item">
                                <label for="phone">Phone *</label>
                                <input type="tel" name="phone" id="phone" required>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-item">
                                <label for="reason">Reason for contact *</label>
                                <select name="reason" id="reason">
                                    <option value="To say hello">To say hello</option>
                                    <option value="I have a question">I have a question</option>
                                    <option value="I have a project for you">I have a project for you</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset id="project-form">
                            <div class="form-item">
                                <label for="help">How can I help you?</label>
                                <select name="help" id="help">
                                    <option value="Project Consultation">Project Consultation</option>
                                    <option value="I need a design">I need a design</option>
                                    <option value="Website coding">Website coding</option>
                                    <option value="Redesign website">Redesign website</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-item">
                                <label for="budget">Project Budget</label>
                                <select name="budget" id="budget">
                                    <option value="$500 or less">$500 or less</option>
                                    <option value="$500 - $1,000">$500 - $1,000</option>
                                    <option value="$,1000 - $1,500">$1,000 - $1,500</option>
                                    <option value="$1,500 - $2,000">$1,500 - $2,000</option>
                                    <option value="$2,000 or more">$2,000 or more</option>
                                </select>
                            </div>
                            <div class="form-item">
                                <label for="timeline">Project Timeline</label>
                                <select name="timeline" id="timeline">
                                    <option value="ASAP">ASAP</option>
                                    <option value="1 Month">1 Month</option>
                                    <option value="2 Months">2 Months</option>
                                    <option value="3 Months">3 Months</option>
                                    <option value="6 Months">6 Months</option>
                                    <option value="No Deadline">No Deadline</option>
                                </select>
                            </div>
                            <div class="form-item">
                                <label for="details">Tell me about your project</label>
                                <textarea name="details" id="details"></textarea>
                            </div>
                        </fieldset>
                        <fieldset id="message-form">
                            <div class="form-item">
                                <label for="message">Message</label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                            <button type="submit" name="submit" class="submit-button">Send Message</button>
                            <div id="contact-error"></div>
                        </fieldset>
                    </form>
                </section>
                <section class="other-contact">
                    <h2>Other Contact Methods</h2>
                    <p>Not much of a web form person?  No worries!  Get in touch with me with one of the methods below or contact me on your preferred social network.</p>
                    <ul class="no-bullet">
                        <li>
                            <i class="fa fa-fw fa-envelope"></i> toddgoates@gmail.com
                        </li>
                        <li>
                            <i class="fa fa-fw fa-phone"></i> (801) 319-9420   
                        </li>
                    </ul>
                    <div class="other-contact">
                        <ul class="social-list">
                            <li class="social">
                                <a href="https://www.facebook.com/todd.goates" target="_blank" id="facebook">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="social">
                                <a href="https://twitter.com/toddgoates" target="_blank" id="twitter">
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                            </li>
                            <li class="social">
                                <a href="http://instagram.com/toddgoates" target="_blank" id="instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="social">
                                <a href="https://plus.google.com/u/0/+ToddGoates/" target="_blank" id="google-plus">
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                            </li>
                            <li class="social">
                                <a href="https://www.linkedin.com/in/toddgoates/" target="_blank" id="linkedin">
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clear-fix"></div>
                </section>
                <div class="clear-fix"></div>
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
        <script src="lib/fastclick.min.js" type="text/javascript"></script>

        <!-- Custom Scripts -->
        <script src="js/scripts.js" type="text/javascript"></script>

    </body>
</html>