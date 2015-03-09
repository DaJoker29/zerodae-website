<?php 
    require_once('config.php');
    set_include_path( ROOT . '/inc');

    include 'head.php';
    include 'header.php';
?>

<section class="hero">
    <span class="panel"><strong>Zero Daedalus (zDae for short) is a web agency based in the California Central Valley. </strong></span>
</section>
<main class="content">

    <section class="section">
        <h2>About Us</h2>
        <p>We build high-quality websites and apps for businesses and entrepreneurs. We also provide a wide-range of support services to help our clients get the most out of their digital solutions.</p>
    </section>

    <section class="section">
        <h2>The Team</h2>
        <div class="portrait_container">
            <section class="portrait" data-name="Dewitt Buckingham" data-role="Developer">
                <img src="//placehold.it/200x200" alt="The Team" />
            </section>
            <section class="portrait" data-name="John-Alan Hewitt" data-role="Designer">
                <img src="//placehold.it/200x200" alt="The Team" />
            </section>
            <section class="portrait" data-name="Christine Courtney" data-role="Designer">
                <img src="//placehold.it/200x200" alt="The Team" />
            </section>
        </div>
    </section>

    <section class="section">
        <h2>Why us</h2>
        <p>Our team at zDae is committed to bringing the skill and quality of old-fashioned craftsmanship to the digital age (hence the name.) Everyone on our team bring high levels of experience and passion to their roles in order to turn our client's dreams into reality.</p>
    </section>
</main>

<?php
    include 'footer.php';
    include 'scripts.php';
 ?>