<?php 
    require_once('config.php');
    set_include_path( ROOT . '/inc');

    include 'head.php';
?>
<!-- Content -->
<nav id="nav"></nav>
<main class="content">
    <!-- Atoms -->
    <section>
        <h1>Atoms</h1>

        <h2>Colors</h2>
        <section class="section">
            <ul>
                <li id="swatch-bg" class="color" data-name="Background"><div></div></li>
                <li id="swatch-text" class="color" data-name="Text"><div></div></li>
                <li id="swatch-primary" class="color" data-name="Primary"><div></div></li>
                <li id="swatch-primary-dark" class="color" data-name="Dark Pri."><div></div></li>
                <li id="swatch-secondary" class="color" data-name="Secondary"><div></div></li>
                <li id="swatch-secondary-dark" class="color" data-name="Dark Sec."><div></div></li>
                <li id="swatch-accent" class="color" data-name="Accent"><div></div></li>
            </ul>
        </section>

        <h2>Descriptions</h2>
        <section class="section">
            <dl>
                <dt>Title</dt>
                <dd>Definition</dd>

            </dl>
        </section>

        <h2>Fonts</h2>
        <section class="section">
            <h3>Display Font</h3>
                <p class="display">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, cupiditate quas quisquam neque accusantium rerum magni illo accusamus, placeat deserunt similique tempore optio sunt a rem error porro mollitia eveniet?</p>

                <h3>Sans Font</h3>
                <p class="sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet asperiores alias quo ipsum perferendis optio, laudantium nesciunt, itaque, unde soluta accusamus. Libero aspernatur, saepe molestiae, quia ratione exercitationem consectetur rem.</p>
        </section>

        <h2>Form and Input Elements</h3>
        <section class="section">
            <h3>Inputs</h3>
            <p>
                <label for="">Label</label>
            </p>

            <p>
                <input type="text" placeholder="Text Input">
            </p>

            <p>
                <input type="text" class="valid" placeholder="Successful Input">
            </p>
            <p>
                <input type="text" class="invalid" placeholder="Failure Input">
            </p>

            <h3>Select</h3>
            <p>
                <label for="">Select Menu</label>
                <select name="" id="">
                    <option value="">Something 1</option>
                    <option value="">Something 2</option>
                    <option value="">Something 3</option>
                </select>
            </p>

            <h3>Text Area</h3>
            <p>
                <label for="">Message</label>
                <textarea rows="10"></textarea>
            </p>
            
            <h3>Buttons</h3>
            <p><a href="" class="btn">Button</a></p>
            <p><a href="" class="btn danger">Danger</a></p>
            <p><a href="" class="btn success">Success</a></p>

            <h3>Icons</h3>
            <p><a href="" class="btn">&#9776;</a></p>
        </section>

        <h2>Headings</h2>
        <section class="section">
            <h1>Level 1 <a href="#">Link</a></h1>
            <h2>Level 2 <a href="#">Link</a></h2>
            <h3>Level 3 <a href="#">Link</a></h3>
            <h4>Level 4 <a href="#">Link</a></h4>
        </section>

        <h2>Hero Image</h2>
        <section class="section">
            <section class="hero"></section>
        </section>

        <h2>Navigation Bar</h2>
        <section class="section">
            <h3>Top Bar</h3>
            <p>
                <div class="navbar__top"></div>
            </p>

            <h3>Bottom Bar</h3>
            <p>
                <div class="navbar__bottom"></div>
            </p>
        </section>

        <h2>Portraits</h2>
        <section class="section">
            <section class="portrait" data-name="John Smith" data-role="Developer">
                <img src="//placehold.it/200x200" alt="Portait of John Smith">
            </section>
            <section class="portrait" data-name="Jane Smith" data-role="Designer">
                <img src="//placehold.it/200x200" alt="Portait of John Smith">
            </section>
            <section class="portrait" data-name="Joe Smith" data-role="Writer">
                <img src="//placehold.it/200x200" alt="Portait of John Smith">
            </section>
        </section>

        <h2>Sections</h2>
        <section>
            <h3>Section</h3>
            <section class="section">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem odit ullam voluptatibus sit voluptatem dolor, illo harum sequi quos facilis, dolores laboriosam pariatur unde molestias vero a nobis! Dolor, facilis.</p>
            </section>

            <h3>Panel</h3>
            <section class="section">
                <span class="panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa optio, quidem, eveniet quaerat, vel sed, recusandae consequatur aut laboriosam quia nam tempore. Recusandae perferendis, dicta. A velit quia libero asperiores.</span>
            </section>
        </section>

        <h2>Title</h2>
        <section class="section">
            <h3>Full Width</h3>
            <h1 class="title"><a>Zero Daedalus</a></h1>

            <h3>Truncated</h3>
            <h1 class="title"><a>zDae</a></h1>
        </section>

        <h2>Tagline</h2>
        <section class="section">
            <span class="tagline">Connect. Develop. Evolve.</span>
        </section>

        <h2>Text</h2>
        <section class="section">
            <h3>Paragraphs</h3>
            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati velit vel quae quas asperiores praesentium eius laboriosam libero tenetur est molestias odio maxime, doloremque eaque sint, expedita dolorum tempora earum.</span>
                <span>Totam reiciendis <a>eligendi</a> rerum, aspernatur, quis dignissimos quod neque quam saepe nam tempora aliquid. Quaerat dolor asperiores odio quasi dolores debitis tempore cum quos excepturi deserunt, consectetur, recusandae, suscipit aliquam.</span>
                <span>Illum itaque explicabo accusantium similique ea non, sint perferendis in, illo libero exercitationem modi, commodi, est numquam laborum velit facilis voluptas fugiat. Impedit quia aliquam earum labore quo iure modi.</span>
            </p>
            <p>
                <a><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, delectus repellat architecto deserunt vel minima magni, laboriosam perferendis, vero a corporis sunt cum sit, repudiandae! Deleniti animi deserunt rem voluptate.</span></a>
                <span>Error officiis praesentium vel repellat eveniet, quam quisquam, aspernatur iusto laboriosam minus nulla omnis. Vitae ab vero eligendi repellat architecto consequuntur excepturi nostrum voluptatem, asperiores odio fuga amet aliquid autem.</span>
                <span>Illum, accusamus, eum? Ad tempore in perferendis esse qui, labore suscipit atque, illo fugit officiis! Reprehenderit alias maiores laudantium consequuntur consequatur beatae provident in cupiditate dolorem, molestias excepturi eaque aut!</span>
            </p>
            <p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsam, libero necessitatibus dolores, earum ipsa vero minima cupiditate error odit, enim corrupti eaque autem quod at. Aperiam praesentium, excepturi. Earum.</span>
                <span>Magni <a>perferendis</a> eum ex laudantium alias? Doloribus, neque fuga, consequuntur harum debitis necessitatibus nostrum consectetur quasi molestiae dignissimos, quos laborum dolor? Sint doloribus repellat laborum repudiandae quia ipsam. Asperiores, unde.</span>
                <span>Voluptate praesentium nihil illo quod, placeat quaerat numquam vitae deleniti est provident non id laborum, nobis, distinctio eos cumque reprehenderit. Facere ipsum praesentium tempore rerum illo. Provident architecto eos impedit.</span>
            </p>

            <h3>Strong</h3>
            <p>
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores veniam, nisi sit at et itaque vero sequi esse quia, vel, aspernatur rem expedita non est, eveniet odit culpa ratione placeat?</strong>
            </p>

            <h3>Emphasis</h3>
            <p>
                <em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro tempore assumenda suscipit sunt expedita totam nam distinctio, illum culpa maiores numquam iusto explicabo perspiciatis, at nemo sed odio ullam. Impedit.</em>
            </p>

            <h3>Small</h3>
            <p>
                <small>Lorem ipsum dolor sit amet, <a>consectetur adipisicing elit</a>. Asperiores atque assumenda numquam quisquam similique consequatur rem voluptatibus. Explicabo veritatis enim distinctio repellendus tempora quas, vitae placeat recusandae quia animi. Perspiciatis.</small>
            </p>

            <h3>Abbreviation</h3>
            <p>
                <abbr title="Schaffer The Darklord">STD</abbr> 
            </p>

            <h3></h3>
        </section>
    </section>

    <!-- Molecules -->
    <section id="molecules">
        <h1>Molecules</h1>

        <h2>Copyright</h2>
        <section class="section">
            <small>
                Copyright &copy; 2015 &bull; Crafted by <a href="">Zero Daedalus</a>
            </small>
        </section>

        <h2>Callout</h2>
        <section class="section">
            <span class="panel"><strong>Zero Daedalus</strong> (<em>zDae</em> for short) is a web agency based in the California Central Valley</span>
        </section>

        <h2>Form Fields</h2>
        <section class="section">
            <p>
                <label for="input">Input</label>
                <input type="text" placeholder="Form Field">
            </p>
            <p>
                <a href="" class="btn">Submit</a>
            </p>
        </section>

        <h2>Project Body</h2>
        <section class="section project">
            <dl>
                <dt>Brief</dt>
                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta sint recusandae sit quae ullam harum rem dolore, neque, natus possimus delectus qui consequatur. Harum quos fugit illo quasi magnam.</dd>

                <dt>Description</dt>
                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab hic praesentium nihil iusto provident expedita debitis maiores ipsum! Ducimus ratione amet sunt adipisci labore tenetur facilis quam officia, deleniti ad.</dd>
            </dl>
        </section>

        <h2>Project Header</h2>
        <section class="section project" style="height: 100px;">
            <h2>Really Long Project Title</h2>
            <ul>
                <li><a class="btn" href="">Website</a></li>
                <li><a class="btn" href="">Repo</a></li>
                <li><a class="btn" href="">Case Study</a></li>
            </ul>
        </section>

        <h2>Navigation</h2>
        <section style="height: 24px;" class="section">
                <nav class="nav" role="navigation">
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">Work</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </nav>
        </section>
    </section>

    <!-- Organisms -->
    <section id="organisms">
        <h1>Organisms</h1>

        <h2>Contact Form</h2>
        <form action="" class="section">
            <p>
                <input type="text" placeholder="Name">
            </p>
            <p>
                <input type="email" placeholder="Email Address">
            </p>
            <p>
                <input type="url" placeholder="Website (Optional)">
            </p>

            <p>
                <a href="" class="btn danger">Reset</a>
                <a href="" class="btn success">Submit</a>
            </p>
        </form>

        <h2>Header</h2>
        <section class="section">
            <header class="navbar__top">
            <h1 class="title full"><a href="">Zero Daedalus</a></h1>
            <h1 class="title truncated"><a href="">z-Dae</a></h1>
            <span class="tagline">Connect. Develop. Evolve.</span>
            <nav class="nav" role="navigation">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
            </header>
        </section>

        <h2>Footer</h2>
        <section class="section">
            <footer class="navbar__bottom">
            <small class="copyright">
                Copyright &copy; 2015 &bull; Crafted by <a href="">Zero Daedalus</a>
            </small>
            <nav class="nav" role="navigation">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
            </footer>
        </section>

        <h2>Hero</h2>
        <section class="section">
            <section class="hero">
                    <span class="panel"><strong>Zero Daedalus</strong> (<em>zDae</em> for short) is a web agency based in the California Central Valley</span>
            </section>
        </section>

        <h2>Project</h2>
        <section class="section">
            <article class="project">
                <header>
                    <h2>Project Title</h2>
                        <a class="btn" href="">Website</a>
                        <a class="btn" href="">Repo</a>
                        <a class="btn" href="">Case Study</a>
                </header>
                <dl>
                    <dt>Brief</dt>
                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non soluta sint recusandae sit quae ullam harum rem dolore, neque, natus possimus delectus qui consequatur. Harum quos fugit illo quasi magnam.</dd>

                    <dt>Description</dt>
                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab hic praesentium nihil iusto provident expedita debitis maiores ipsum! Ducimus ratione amet sunt adipisci labore tenetur facilis quam officia, deleniti ad.</dd>
                </dl>
            </article>
        </section>

    </section>


</main>
<!-- End of Content -->
<?php
    include 'scripts.php';
 ?>
