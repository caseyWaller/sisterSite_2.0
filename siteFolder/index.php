<?php ob_start("ob_gzhandler"); ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISTER TECHNOLOGIES OFFICIAL WEBSITE</title>

        <meta name="description" content="The official website for leading video provider in the automotive industry, Sister Technologies.">
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

            <h1 class="logo"><img itemprop="logo" src="IMG/sisLogo.svg" alt="Sister Technologies Logo" width="200" onerror="this.onerror=null; this.src='IMG/sisLogo.png'"></h1>
            
            <h4 class="phone">Phone: (972)855-3500</h4>

            <nav class="mainNav">
                <a href="products.php">PRODUCTS</a>
                <a href="company.php">COMPANY</a>
                <a href="contact.php">CONTACT</a>
                <a id="client" href="http://portal.sister.tv">Client Login</a>
            </nav>

        </header>

        <nav class="phoneNav darkArrow clearfix" id="phoneMenu">
            <a href="#" id="close">X</a>
            <a href="products.php">PRODUCTS</a>
            <a href="company.php">COMPANY</a>
            <a href="contact.php">CONTACT</a>
        </nav>

        <div id="feature">
            <span>IF A PICTURE IS WORTH<br>1,000 WORDS...</span>
        </div>

        <div class="col-1-3 white" itemscope itemtype="http://schema.org/Product">
            <a href="carlot.php">
                <img class="itemLogo ezLogo" src="IMG/vcLogo.svg" alt="Video Carlot logo" width="100">
                <img itemscope="image" src="IMG/vidCarlot1.jpg" alt="video carlot promo" width="397">
                <p class="darkText" itemprop="offer"><strong>Our VIN specific video is proven:</strong>
                    <ul class="infoList">
                        <li>87% more leads</li>
                        <li>69% more calls</li>
                        <li>15 times the ROI</li>
                        <li>Top search results</li>
                        <li>Over 4 million uploads to YouTube</li>
                        <li>We created the Pic2Vid industry</li>
                    </ul></p>
            </a>
        </div>

        <div class="col-1-3 white" itemscope itemtype="http://schema.org/Product">
            <a href="ez.php">
                <img src="IMG/ezLogo.svg" alt="ez360 Logo" class="itemLogo ezLogo" width="100">
                <img src="IMG/ez1.png" alt="ez360 promo" width="397">
                <p class="darkText" itemprop="offer">Get an interior virtual tour and publish photos and videos in real time across all sites. Zero time, zero effort, zero mistakes!</p>
            </a>
        </div>

        <div class="col-1-3 white" itemscope itemtype="http://schema.org/Product">
            <a href="spin.php">
                <img src="IMG/spITlogo.svg" alt="spinIt Logo" class="itemLogo ezLogo" width="100">
                <img src="IMG/spin1.jpg" alt="spinIT promo" width="397">
                <p class="darkText" itemprop="offer">Combining the power of a studio and turn-table, create stunning video, pictures, and interior shots within seconds.</p>
            </a>
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

        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="JS/min/main-ck.js"></script>

        <!-- TWEEN -->
        <script>
            $(function() {

                var $div = $('.col-1-3 > a');
            
                TweenMax.staggerTo($($div), 1, {opacity: 1}, 0.05);
            
            });
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