<?php ob_start("ob_gzhandler"); ?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISTER TECHNOLOGIES OFFICIAL WEBSITE</title>

        <meta name="description" content="Contact the leading innovators in the video distribution for automotive industry.">
        <meta name="keywords" content="Sister, Sister Technologies, video, provider, video provider, automotive, automotive industry, website, official 
        website, ez360, video carlot, spin it, carlot, ez, products, company, contact, client login, client, cars, car, dealership, car dealership,
        spanish video, vehicle videos, turntable, car turn table, carousel, car carousel, photo booth, car photo booth, studio, car studio, dealership 
        photobooth, instant publication, ROI, inventory, vehicle inventory, photo management, pic zero">

        <link rel="apple-touch-icon" href="IMG/apple-touch-icon-precomposed.png"/>
        <link rel="shortcut icon" href="IMG/favicon.ico"/>
        <link rel="stylesheet" href="CSS/styles.css">

        <!-- TYPKIT FONTS HERE -->
        <script type="text/javascript" src="//use.typekit.net/zdg0jtk.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    </head>
    <body onresize=resizeHandler() itemscope itemtype="http://schema.org/Organization">
        <!--[if lte IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <script type="text/javascript" src="JS/min/html5shiv.min.js"></script>
            <link rel="stylesheet" href="CSS/IE.css">
        <![endif]-->

        <header class="clearfix" id="ieHeader">
            <a class="navicon" id="naviBtn" href="#">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 38.5" enable-background="new 0 0 50 38.5" xml:space="preserve">
                <g>
                    <rect x="0" y="0" fill="#3b52a3" width="50" height="7.9"/>
                    <rect x="0" y="15.3" fill="#3b52a3" width="50" height="7.9"/>
                    <rect x="0" y="30.6" fill="#3b52a3" width="50" height="7.9"/>
                </g></svg>
            </a>

            <h1 class="logo"><a href="index.php"><img itemprop="logo" src="IMG/sisLogo.svg" alt="Sister Technologies Logo" width="200" onerror="this.onerror=null; this.src='IMG/sisLogo.png'"></a></h1>

            <h4 class="phone">Phone: (972)855-3500</h4>

            <nav class="mainNav">
                <a href="products.php">PRODUCTS</a>
                <a href="company.php">COMPANY</a>
                <a href="#" class="active">CONTACT</a>
                <a id="client" href="http://portal.sister.tv">Client Login</a>
            </nav>

        </header>

        <nav class="phoneNav darkArrow clearfix" id="phoneMenu">
            <a href="#" id="close">X</a>
            <a href="products.php">PRODUCTS</a>
            <a href="company.php">COMPANY</a>
            <a href="#" class="active">CONTACT</a>
        </nav>

        <div class="c2a">
            <h4 class="whiteText contactH">INNOVATION STARTS HERE.</h4>
        </div>

        <div class="compFeat contactFeat gray clearfix" id="form" name="form"><a name="form" />
            <div class="mainContainer">
                <h3 class="darkText">NEED TO KNOW MORE?</h3>
                <p class="darkText" id="ieP">At Sister Tech, we realize that commitment can be hard. If you need more information about our services before becoming a part of our new family, please fill out the form below and we will get back with you as soon as possible.</p>

                <form action="thanks.php" method="post">
                    <label for="Name">Name</label>
                    <input type="text" placeholder="John Smith" name="Name" id="Name">

                    <label for="Email">Email</label>
                    <input type="email" placeholder="email@example.com" name="Email" id="Email">

                    <label for="Phone">Phone</label>
                    <input type="text" placeholder="(555)555-5555" name="Phone" id="Phone" maxlength="13">

                    <label for="Co">Company</label>
                    <input type="text" placeholder="Name of Company" name="Co" id="Co">

                    <label for="Url">Website</label>
                    <input type="text" placeholder="yourwebsite.com" name="Url" id="Url">

            <!--        <div id="select">
                        <label for="Product" id="selectArrow">Product Interest</label>
                        <select name="Product" id="Product">
                            <option value="Video-Carlot">Video Carlot</option>
                            <option value="EZ 360">EZ360</option>
                            <option value="SPIN-IT">SPIN IT</option>
                        </select> 
                    </div> -->

                    <label for="message">What can we help you with?</label>
                    <textarea name="Message" id="message" cols="30" rows="10"></textarea>
                    
                    <script type="text/javascript">
                        var RecaptchaOptions = {
                           theme : 'white'
                        };
                    </script>
                    <?php
                       require_once('recaptchalib.php');
                       $publickey = "6LdEJ_YSAAAAAFKkmnYpf6YQ7GpKxNxuYHX8HLzT"; // you got this from the signup page
                       echo recaptcha_get_html($publickey);
                    ?>
                    
                    <input type="submit" value="SEND" class="button blue" id="submitButt">
                </form>
            </div>

            <div class="col-1-4">
                <div class="vcard">
                    <div class="org" itemprop="name">Sister Technologies</div>
                    <div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <div class="street-address" itemprop="streetAddress">4144 N. Central Expressway</div>
                        <span>Suite 710</span><br>
                        <span class="locality" itemprop="addressLocality">Dallas,</span> 
                        <span class="region" itemprop="addressRegion">TX  </span> 
                        <span class="postal-code" itemprop="postalCode">75204</span><br>
                <!--        <span class="telephone" itemprop="telephone">972-855-3500</span> -->
                    </div>
                    <a class="email" href="mailto:sister@sister.tv" itemprop="email">sister@sister.tv</a>
                </div>

               <iframe id="map" itemprop="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3353.1817339920485!2d-96.78947039999998!3d32.813949399999956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e9f28fa08791b%3A0x8e9e2a06a01aaebc!2s4144+N+Central+Expy!5e0!3m2!1sen!2sus!4v1403118080450" width="300" height="300" frameborder="0" style="border:0"></iframe>
            </div>
        </div>

        <footer class="clearfix" id="ieFooter">
            <div class="links">
                <ul class="links clearfix">
                        <li><a href="products.php">PRODUCTS</a></li>
                        <li><a href="carlot.php">VIDEO CARLOT</a></li>
                        <li><a href="ez.php">EZ 360</a></li>
                        <li><a href="spin.php">SPIN IT</a></li>
                        <li><a href="company.php">COMPANY</a></li>
                        <li><a href="press.php">PRESS</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>    
            </div>

            <a id="fb" href="https://www.facebook.com/sister.tv"><img src="IMG/facebook.svg" alt="facebook" width="100" onerror="this.onerror=null; this.src='IMG/facebook.png'"></a>
            <a id="youtube" href="https://www.youtube.com/user/PoweredBySiSTeR"><img src="IMG/youtube.svg" alt="youtube" width="100" onerror="this.onerror=null; this.src='IMG/youtube.png'"></a>
            <a id="twitter" href="https://twitter.com/sistervideo"><img src="IMG/twitter.svg" alt="twitter" width="100" onerror="this.onerror=null; this.src='IMG/twitter.png'"></a>
            <a id="linkedin" href="http://www.linkedin.com/company/108244?trk=saber_s000001e_1000"><img src="IMG/linkedin.svg" alt="linkedIn" width="100" onerror="this.onerror=null; this.src='IMG/linkedin.png'"></a>

            <span class="grayText" itemprop="legalName">&#169; 2006 - 2011 Silver Screen Tele-Reality, Inc. All Rights Reserved.<br>
            Protected Under U.S. Patent No. 7,882,258 | U.S. Patent No.8,353,406</span>
        </footer>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="JS/min/main-ck.js"></script>

        <script>
            window.setTimeout(function() {
                document.querySelector("iframe[src*='about:blank']").style.display = "none";
            }, 2000);
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>