<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,, initial-scale=1" />
    <meta name="description" content="Stunning websites and apps! Web design, web programming, graphics and other services offered. Contact us now!">
    <title>Web Design and Development | Zero Daedalus</title>
    <link href='http://fonts.googleapis.com/css?family=Exo+2|Open+Sans|Rock+Salt|Coda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <link rel="icon" href="assets/logo.png?v=<?php echo filemtime('logo.png'); ?>">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-48886757-1', 'auto');
        ga('send', 'pageview', {
            'page': location.pathname + location.search  + location.hash
        });
    </script>
</head>
<body>
    <!-- Offcanvas Nav -->
    <nav>
        <ul class="nav">
            <li><a data-scroll href="#">Home</a></li>
            <li><a data-scroll href="#about">About</a></li>
            <li><a data-scroll href="#portfolio">Portfolio</a></li>
            <li><a data-scroll href="#services">Services</a></li>
            <li><a data-scroll href="#contact">Contact</a></li>
        </ul>
        <!-- Footer -->
        <footer>
            Crafted by <a href="//zerodaedalus.com">Zero Daedalus</a>
        </footer>
    </nav>
    <!-- Main Wrapper -->
    <div class="wrapper">
        <div class="inner">

            <!-- Menu Icon -->
            <header>
                <a class="menu"><img src="assets/menu.svg?v=<?php echo filemtime('assets/menu.svg'); ?>" alt="Navigation Menu"></a>
                <div class="menu-lg">
                    <ul>
                        <li><a data-scroll href="#"><img src="assets/home3.svg?v=<?php echo filemtime('assets/home3.svg'); ?>" alt="Home"></a></li>
                        <li><a data-scroll href="#about"><img src="assets/info.svg?v=<?php echo filemtime('assets/info.svg'); ?>" alt="Information"></a></li>
                        <li><a data-scroll href="#portfolio"><img src="assets/briefcase.svg?v=<?php echo filemtime('assets/briefcase.svg'); ?>" alt="Portfolio"></a></li>
                        <li><a data-scroll href="#services"><img src="assets/cogs.svg?v=<?php echo filemtime('assets/cogs.svg'); ?>" alt="Services"></a></li>
                        <li><a data-scroll href="#contact"><img src="assets/bubble.svg?v=<?php echo filemtime('assets/bubble.svg'); ?>" alt="Contact"></a></li>
                    </ul>
                </div>
            </header>

            <!-- Home -->
            <section id="intro" class="intro">
                <div class="container">
                    <img class="logo" src="assets/logo.svg?v=<?php echo filemtime('assets/logo.svg'); ?>" alt="Logo">
                    <h1 class="title"><span class="zero">Zero</span><span class="daedalus">Daedalus</span></h1>
                    <p class="tagline">Connect. Develop. Evolve.</p>

                    <div class="social">
                        <a href="tel:+12097409063" class="phone"><img src="assets/phone.svg?v=<?php echo filemtime('assets/phone.svg'); ?>" alt="Telephone"></a>
                        <a href="//plus.google.com/+Zerodaedalus"><img src="assets/google-plus.svg?v=<?php echo filemtime('assets/google-plus.svg'); ?>" alt="Google Plus"></a>
                        <a href="//twitter.com/ZeroDaedalus"><img src="assets/twitter.svg?v=<?php echo filemtime('assets/twitter.svg'); ?>" alt="Twitter"></a>
                        <a href="//www.facebook.com/zerodae"><img src="assets/facebook.svg?v=<?php echo filemtime('assets/facebook.svg'); ?>" alt="Facebook"></a>
                        <a href="//github.com/DaJoker29"><img src="assets/github.svg?v=<?php echo filemtime('assets/github.svg'); ?>" alt="Github"></a>
                        <a href="mailto:captain@zerodaedalus.net"><img src="assets/envelop.svg?v=<?php echo filemtime('assets/envelop.svg'); ?>" alt="Email"></a>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section id="about" class="about">
                <div class="container">
                    <h2>Very Good Websites</h2>
                    <p>We design and build the type of websites Ron Swanson would make, if he were a web designer. We're based out of the Bay Area and Central Valley and we're pretty awesome. Our work is simple and effective, bringing old-fashioned craftsmanship into the digital era.</p>
                    <img class="hero"src="assets/hipster.svg?v=<?php echo filemtime('assets/hipster.svg'); ?>" alt="Mustachioed Man">
                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="portfolio">
                <div class="container">
                    
                    <h2>Portfolio</h2>
                    <div class="flex">
                        <article class="project jkrealty">
                            <a href="//jk-realtors.com">
                                <img src="assets/jk.svg?v=<?php echo filemtime('assets/s-hex.svg'); ?>" alt="Jk Realty Website">
                                <h3>JK Realty</h3>
                                <p>Website - Design</p>
                            </a>
                        </article>
                        <article class="project ifb">
                            <a href="//staging.zerodaedalus.com/ifb">
                                <img src="assets/ifb-hex.svg?v=<?php echo filemtime('assets/ifb-hex.svg'); ?>" alt="Interfaith Food Bank Website">
                                <h3>Interfaith Food Bank</h3>
                                <p>Website - Design</p>
                            </a>
                        </article>

                        <article class="project scramble">
                            <a href="//staging.zerodaedalus.com/scramble">
                                <img src="assets/s-hex.svg?v=<?php echo filemtime('assets/s-hex.svg'); ?>" alt="Scramble web app">
                                <h3>Scramble</h3>
                                <p>Web App - Programming</p>
                            </a>
                        </article>
                    </div>
                </div>
            </section>

            <section id="services" class="services">
                <div class="container">
                    <h2>Services</h2>
                    <div class="flex">
                        <article class="service">
                            <img src="assets/droplet.svg?v=<?php echo filemtime('assets/droplet.svg'); ?>" alt="">
                            <h3>Design</h3>
                            <p>
                                Elegant design to bring your ideas to life.
                            </p>
                            <ul>
                                <li>HTML5 & CSS3</li>
                                <li>Custom Graphics</li>
                                <li>Vector Logos</li>
                            </ul>
                        </article>
                        <article class="service">
                            <img src="assets/keyboard.svg?v=<?php echo filemtime('assets/keyboard.svg'); ?>" alt="">
                            <h3>Development</h3>
                            <p>
                                Quality solutions from design to launch and beyond.
                            </p>
                            <ul>
                                <li>WordPress Themes & Plugins</li>
                                <li>SEO & Analytics</li>
                                <li>Social Media</li>
                                <li>eCommerce</li>
                            </ul>
                        </article>
                        <article class="service">
                            <img src="assets/embed2.svg?v=<?php echo filemtime('assets/embed2.svg'); ?>" alt="">
                            <h3>Programming</h3>
                            <p>
                                Clean coding across multiple web stacks.
                            </p>
                            <ul>
                                <li>Web Apps & Services</li>
                                <li>JavaScript & PHP</li>
                                <li>Node.js & Express</li>
                                <li>MySQL & MongoDB</li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>

            <section id="contact" class="contact">
                <div class="container">
                    <h2>Get in touch...</h2>
                    <p>Call us at <strong>209.740.9063</strong> or fill out the form below</p>
                    <form class="contact-form flex" action="" autocomplete>
                        <input class="name" type="text" placeholder="Name" required autocomplete="name"> 
                        <input class="email" type="email" placeholder="Email" required autocomplete="email">
                        <input class="subject" type="text" placeholder="Subject">
                        <textarea class="message" type="text" placeholder="Message" rows="3" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                    <p id="sent" class="message-sent">Your message has been sent. We will respond to you shortly.</p>
                </div>
            </section>
        </div>
    </div>
    <!-- Scripts -->
    <script src="vendor/scroll.js?v=<?php echo filemtime('vendor/scroll.js'); ?>"></script>
    <script src="script.js?v=<?php echo filemtime('script.js'); ?>"></script>
    <script>
        smoothScroll.init();
    </script>
</body>
</html>
