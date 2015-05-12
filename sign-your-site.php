<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Sign Your Site | Todd Goates</title>
        <meta name="description" content="Learn how to make an awesome animated SVG signature with JavaScript.">

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
                    <h1>Sign Your Site</h1>
                    <div class="sig-container">
                        <div class="signature">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 756 207">
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M10,40c22,5,43,9,66,9c21,0,43-4,62-14c13-7,25-20,38-25c-1,21-13,43-20,63c-7,22-17,44-29,63c-13,22-49,71-81,56"/>
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M160,117c-13,11-50,54-21,65c33,12,63-51,32-65c-8-3-25,2-17,14c5,9,27,1,34-1c18-6,36-10,54-14c-22-2-39,7-41,29c-1,18,15,45,37,30c15-9,16-63,17-79c2-21,2-42,2-62"/>
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M245,33c13,0,68-7,76,3c5,7-1,38-2,48c-1,16-5,32-7,48c-2,13-1,26-11,36c-11,12-29,15-35-1c-13-29,21-45,42-52"/>
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M368,165c27-13,72-151,55-154c-19-3-12,52-4,59c25,26,56,0,71-22c15,30,10,77-10,103c-17,21-61,34-87,24c-31-12-11-51,21-31c12,8,18,19,33,24c17,5,39,9,57,7c29-3,41-34,35-62c-4-16-21-18-32-5c-13,15-11,58,14,58"/>
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M577,105c-12,8-42,61-14,62c22,0,16-47,16-61c0,15-4,40,3,54c13,26,27-8,32-22c14-43,8-84,16-126"/>
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M618,163c22,3,56-15,52-40c-24-9-30,42-5,47c12,2,42-6,47-18c6-14-18-9-24-19c20-13,36-29,56-42"/>
                                <path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M579,83c52,0,103-5,155-5"/>
                            </svg>  
                        </div>
                    </div>
                    <p><em>Yeah, I know this signature is way ugly... but I didn't want people to forge my real signature!  Edward Snowden would probably agree with me...</em></p>
                    <button type="button" class="cta-button"><i class="fa fa-fw fa-play"></i> Replay</button>
                </section>
                <section class="tutorial">
                    <h2>How to make an animated SVG signature</h2>
                    <p>Ready to leave your autograph on a webpage?  This was actually pretty simple to accomplish.  Most of the code I got from <a href="http://codepen.io/ghepting/pen/xnezB" target="_blank">codepen.io</a> with a few modifications here and there.  I generated my SVG code from Adobe Illustrator, but there are many other ways to do this.  If you plan on using Illustrator, here's a breakdown of the entire process:</p>
                    <p><strong>Adobe Illustrator Steps</strong></p>
                    <p>First you'll want to draw your signature.  This is easiest with the brush tool.  By default, the tool will apply some smoothing to make it look nice.</p>
                    <img src="img/thoughts/sig-1.png" alt="Use the brush tool in Illustrator to make your signature">
                    <p>Next you will want to go to the brushes menu and click on the icon to Remove Brush Stroke.  If you don't do this, each path will look really weird when animated later on.  Trust me on this one.</p>
                    <img src="img/thoughts/sig-2.png" alt="Click the Remove Brush Stroke button">
                    <p>Your signature will now look like this.  Feel free to make any adjustments to the paths so that it looks how you want it to.</p>
                    <img src="img/thoughts/sig-3.png" alt="Your signature will now look like this">
                    <p>Once you're satisfied, go to File > Save As.</p>
                    <img src="img/thoughts/sig-4.png" alt="Time to save your signature">
                    <p>Save your file as an SVG</p>
                    <img src="img/thoughts/sig-5.png" alt="Save your file as an SVG">
                    <p>Click on the 'SVG Code' button at the bottom of the window.  For what we're doing, we only really need the text of the code, not an actual file.</p>
                    <img src="img/thoughts/sig-6.png" alt="Click on the 'SVG Code' button">
                    <p>Another window will open up with a text editor.  Copy everything in this window and paste it somewhere for safe keeping.</p>
                    <img src="img/thoughts/sig-7.png" alt="Copy and paste the code text somewhere">
                    <p>We're now done with Illustrator.  Time to get into the code!</p>
                    
                    <p><strong>The HTML</strong></p>
                    <p>Illustrator will give you a lot of unnecessary SVG code for what we're doing.  I did some editing and this is what I ended up with:</p>
                    <pre class="prettyprint linenums">
&lt;div class="sig-container"&gt;
    &lt;div class="signature"&gt;
        &lt;svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 756 207">
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M10,40c22,5,43,9,66,9c21,0,43-4,62-14c13-7,25-20,38-25c-1,21-13,43-20,63c-7,22-17,44-29,63c-13,22-49,71-81,56"/&gt;
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M160,117c-13,11-50,54-21,65c33,12,63-51,32-65c-8-3-25,2-17,14c5,9,27,1,34-1c18-6,36-10,54-14c-22-2-39,7-41,29c-1,18,15,45,37,30c15-9,16-63,17-79c2-21,2-42,2-62"/&gt;
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M245,33c13,0,68-7,76,3c5,7-1,38-2,48c-1,16-5,32-7,48c-2,13-1,26-11,36c-11,12-29,15-35-1c-13-29,21-45,42-52"/&gt;
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M368,165c27-13,72-151,55-154c-19-3-12,52-4,59c25,26,56,0,71-22c15,30,10,77-10,103c-17,21-61,34-87,24c-31-12-11-51,21-31c12,8,18,19,33,24c17,5,39,9,57,7c29-3,41-34,35-62c-4-16-21-18-32-5c-13,15-11,58,14,58"/&gt;
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M577,105c-12,8-42,61-14,62c22,0,16-47,16-61c0,15-4,40,3,54c13,26,27-8,32-22c14-43,8-84,16-126"/&gt;
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M618,163c22,3,56-15,52-40c-24-9-30,42-5,47c12,2,42-6,47-18c6-14-18-9-24-19c20-13,36-29,56-42"/&gt;
            &lt;path fill="none" stroke-width="4" stroke="#000000" stroke-miterlimit="10" d="M579,83c52,0,103-5,155-5"/&gt;
        &lt;/svg&gt; 
    &lt;/div&gt;
&lt;/div&gt;
                    </pre>
                    <p><strong>The CSS</strong></p>
                    <p>Below is the CSS that I used to style my signature elements.  Notice that it is responsive on different window widths.  This is one of the beauties of working with SVGs.  They scale very nicely.</p>
                    <pre class="prettyprint linenums shortcode">
.sig-container {
    max-width: 750px;
    margin: 0 auto;
}
.signature {
    position: relative;
    overflow: auto;
    width: 100%;
    height: 0;
    padding-bottom: 55%;
}
.signature svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
                    </pre>
                    <p><strong>The JavaScript</strong></p>
                    <p>Paste this script into your code, then check it out in your browser.  You should see your own animated SVG signature.  Neato!</p>
                    <pre class="prettyprint linenums">
(function () {
    window.signature = {
        initialize: function () {
            return $('.signature svg').each(function () {
                var delay, length, path, paths, previousStrokeLength, speed, _i, _len, _results;
                paths = $('path, circle, rect', this);
                delay = 0;
                _results = [];
                for (_i = 0, _len = paths.length; _i &lt; _len; _i++) {
                    path = paths[_i];
                    length = path.getTotalLength();
                    previousStrokeLength = speed || 0;
                    speed = length &lt; 100 ? 20 : Math.floor(length);
                    delay += previousStrokeLength + 100;
                    _results.push($(path).css('transition', 'none').attr('data-length', length).attr('data-speed', speed).attr('data-delay', delay).attr('stroke-dashoffset', length).attr('stroke-dasharray', length + ',' + length));
                }
                return _results;
            });
        },
        animate: function () {
            return $('.signature svg').each(function () {
                var delay, length, path, paths, speed, _i, _len, _results;
                paths = $('path, circle, rect', this);
                _results = [];
                for (_i = 0, _len = paths.length; _i &lt; _len; _i++) {
                    path = paths[_i];
                    length = $(path).attr('data-length');
                    speed = $(path).attr('data-speed');
                    delay = $(path).attr('data-delay');
                    _results.push($(path).css('transition', 'stroke-dashoffset ' + speed + 'ms ' + delay + 'ms linear').attr('stroke-dashoffset', '0'));
                }
                return _results;
            });
        }
    };

    $(document).ready(function () {
        window.signature.initialize();
        return $('button').on('click', function () {
            window.signature.initialize();
            return setTimeout(function () {
                return window.signature.animate();
            }, 500);
        });
    });

    $(window).load(function () {
        return window.signature.animate();
    });

}).call(this);
                    </pre>
                    <p><strong>Conclusion</strong></p>
                    <p>I still have a lot to learn about what you can do with SVGs on the web, but from the looks of things, there are a lot of cool things you can do!</p>
                    <p><a href="thoughts.php">More thoughts</a></p>
                </section>
            </div>
        </div>

        <?php
        include('includes/footer.php');
        ?>

        <!-- jQuery and fallback -->
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
        
        <!-- Signature SVG Script -->
        <script src="js/signature.js" type="text/javascript"></script>
        
        <!-- Prettify Code -->
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=html&amp;lang=css&amp;lang=javascript&amp;skin=default"></script>
        
    </body>
</html>