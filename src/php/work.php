<?php 
    require_once('config.php');
    set_include_path( ROOT . '/inc');

    include 'head.php';
    include 'header.php';
?>
<main class="content">
    <section class="section">
        <article class="project">
            <header>
                <h2>IFB</h2>
                    <a class="btn" href="">Website</a>
                    <a class="btn" href="">Repo</a>
                    <a class="btn" href="">Case Study</a>
            </header>
            <dl>
                <dt>Brief</dt>
                <dd>This project was created in order to boost the visibility of the great organization while also making it easier for those looking to donate to reach out.
                </dd>

                <dt>Description</dt>
                <dd>The Interfaith Food Bank is an awesome non-profit in Stockton, California which provides other non-profits (such as churches, group homes, etc.) with foodstuffs and other supplies which they can dispense to the public.
                </dd>
            </dl>
        </article>
    </section>
    <section class="section">
        <article class="project">
            <header>
                <h2>Theta</h2>
                    <a class="btn" href="">Website</a>
                    <a class="btn" href="">Repo</a>
            </header>
            <dl>
                <dt>Brief</dt>
                <dd>Theta is an experiment in minimalism and productivity. Using simple yet elegant styling to create an effective, useful theme in a very short period of time.</dd>

                <dt>Description</dt>
                <dd>Theta is a minimal WordPress theme built to give sites a sleek, sophisticated appeal while not distracting from the site's main content. It will eventually be released as a free theme on WordPress.org.</dd>
            </dl>
        </article>
    </section>
</main>

<?php
    include 'footer.php';
    include 'scripts.php';
 ?>