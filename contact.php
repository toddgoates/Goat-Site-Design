<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Todd Goates | Contact Me</title>
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
                <h1>Contact Me</h1>
                <p>Ready to get to work or have a question for me?  Fill out the form below to send me a message.  I'll get back to you as soon as I can.</p>
                <form id="contact" action="send.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Contact Information</legend>
                        <div class="form-item">
                            <label for="fullname">Name</label>
                            <input type="text" name="fullname" id="fullname" required>
                        </div>
                        <div class="form-item">
                            <label for="company">Company Name <span class="optional">(optional)</span></label>
                            <input type="text" name="company" id="company">
                        </div>
                        <div class="form-item">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="form-item">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" required>
                        </div>
                        <div class="form-item">
                            <label for="website">Your Website URL <span class="optional">(optional)</span></label>
                            <input type="url" name="website" id="website">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Project Details</legend>
                        <div class="form-item">
                            <label for="deadline">Project Deadline</label>
                            <select name="deadline" id="deadline" required>
                                <option>- SELECT -</option>
                                <option value="ASAP">ASAP</option>
                                <option value="1 Month">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                                <option value="6 Months">6 Months</option>
                                <option value="">No Deadline</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="budget">Project Budget</label>
                            <select name="budget" id="budget" required>
                                <option>- SELECT -</option>
                                <option value="$500 or less">$500 or less</option>
                                <option value="$500 - $1,000">$500 - $1,000</option>
                                <option value="$,1000 - $1,500">$1,000 - $1,500</option>
                                <option value="$1,500 - $2,000">$1,500 - $2,000</option>
                                <option value="$2,000 or more">$2,000 or more</option>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="nature">Tell me about the nature of your project</label>
                            <textarea name="nature" id="nature"></textarea>
                        </div>
                        <div class="form-item">
                            <label>Do you have content?</label>
                            <label for="yes" class="radio-label"><input type="radio" name="content" id="yes" value="Yes"> Yes </label>
                            <label for="no" class="radio-label"><input type="radio" name="content" id="no" value="No"> No </label>
                        </div>
                        <div class="form-item">
                            <label for="more-info">Anything else I should know about this project?</label>
                            <textarea name="more-info" id="more-info"></textarea>
                        </div>
                        <button type="submit" name="submit" class="submit-button">Send Message</button>
                    </fieldset>
                </form>
            </section>
            <section>
                <h2>Other Contact Methods</h2>
                <p>Not much of a web form person?  No worries!  Get in touch with me with one of the methods below, or contact me on your preferred social network.</p>
                <ul>
                    <li>Email:  toddgoates@gmail.com</li>
                    <li>Phone:  (801) 319-9420</li>
                    <li>Twitter Follow Button</li>
                    <li>Other things go here...</li>
                </ul>
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