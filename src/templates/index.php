<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,, initial-scale=1" />
    <title>zDae | Connect. Develop. Evolve.</title>
    <link href='http://fonts.googleapis.com/css?family=Exo+2|Open+Sans|Rock+Salt|Coda' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css?v=<?php echo filemtime('style.css'); ?>">
    <link rel="icon" href="assets/logo.png?v=<?php echo filemtime('logo.png'); ?>">
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
            Crafted and Maintained by <a href="//zerodaedalus.com">ZeroDae</a>
        </footer>
    </nav>

    <!-- Main Wrapper -->
    <div class="wrapper">
        <div class="inner">

            <!-- Menu Icon -->
            <header>
                <a class="menu"><img src="assets/menu.svg?v=<?php echo filemtime('assets/menu.svg'); ?>" alt=""></a>
                <div class="menu-lg">
                    <ul>
                        <li><a data-scroll href="#"><img src="assets/home3.svg?v=<?php echo filemtime('assets/home3.svg'); ?>" alt=""></a></li>
                        <li><a data-scroll href="#about"><img src="assets/info.svg?v=<?php echo filemtime('assets/info.svg'); ?>" alt=""></a></li>
                        <li><a data-scroll href="#portfolio"><img src="assets/briefcase.svg?v=<?php echo filemtime('assets/briefcase.svg'); ?>" alt=""></a></li>
                        <li><a data-scroll href="#services"><img src="assets/cogs.svg?v=<?php echo filemtime('assets/cogs.svg'); ?>" alt=""></a></li>
                        <li><a data-scroll href="#contact"><img src="assets/bubble.svg?v=<?php echo filemtime('assets/bubble.svg'); ?>" alt=""></a></li>
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
                        <a class="phone" href="tel:+12097409063"><img src="assets/phone.svg?v=<?php echo filemtime('assets/phone.svg'); ?>" alt=""></a>
                        <a href="//www.facebook.com/zerodae"><img src="assets/facebook.svg?v=<?php echo filemtime('assets/facebook.svg'); ?>" alt=""></a>
                        <a href="//twitter.com/ZeroDaedalus"><img src="assets/twitter.svg?v=<?php echo filemtime('assets/twitter.svg'); ?>" alt=""></a>
                        <a href="//github.com/DaJoker29"><img src="assets/github.svg?v=<?php echo filemtime('assets/github.svg'); ?>" alt=""></a>
                        <a href="mailto:captain@zerodaedalus.net"><img src="assets/envelop.svg?v=<?php echo filemtime('assets/envelop.svg'); ?>" alt="Email"></a>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section id="about" class="about">
                <div class="container">
                    <h2>Very Good Websites</h2>
                    <p>We build the type of websites Ron Swanson would build, if he built websites. We're based out of the San Francisco Bay Area and we're pretty awesome. Simple and effective best describe our work. Bringing old-fashioned craftsmanship into the digital era is our goal.</p>
                    <img class="hero"src="assets/hipster.svg?v=<?php echo filemtime('assets/hipster.svg'); ?>" alt="">
                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="portfolio">
                <div class="container">
                    
                    <h2>Portfolio</h2>
                    <div class="flex">
                        <article class="project ifb">
                            <a href="//staging.zerodaedalus.com/ifb">
                                <img src="assets/ifb-hex.svg?v=<?php echo filemtime('assets/ifb-hex.svg'); ?>" alt="Interfaith Food Bank Website">
                                <h3>Interfaith Food Bank</h3>
                                <p>Website - Design</p>
                            </a>
                        </article>

                        <article class="project scramble">
                            <a href="//staging.zerodaedalus.com/scramble">
                                <img src="assets/s-hex.svg?v=<?php echo filemtime('assets/s-hex.svg'); ?>" alt="Scramble web">
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
                    </div>
                </div>
            </section>

            <section id="contact" class="contact">
                <div class="container">
                    <h2>Get in touch...</h2>
                    <form class="contact-form flex" action="" autocomplete>
                        <input class="name" type="text" placeholder="Name" required autocomplete="name"> 
                        <input class="email" type="email" placeholder="Email" required autocomplete="email">
                        <input class="subject" type="text" placeholder="Subject">
                        <textarea class="message" type="text" placeholder="Message" rows="3" required></textarea>
                        <button type="submit">Send</button>
                    </form>
                    <p class="message-sent">Your message has been sent. We will respond to you shortly.</p>
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