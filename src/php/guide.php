<?php 
    require_once('config.php');
    set_include_path( ROOT . '/inc');

    include 'head.php';
?>
<!-- Content -->
<nav id="nav"><ul></ul></nav>
<main class="content guide">
    <!-- Atoms -->
    <section>
        <h1>Atoms</h1>

        <h2>Colors</h2>
        <section>
            <ul>
                <li id="bg" class="color"><div><span>Background</span></div></li>
                <li id="text" class="color"><div><span>Text</span></div></li>
                <li id="primary" class="color"><div><span>Primary</span></div></li>
                <li id="secondary" class="color"><div><span>Secondary</span></div></li>
                <li id="secondary-dark" class="color"><div><span>Secondary (Dark)</span></div></li>
                <li id="accent" class="color"><div><span>Accent</span></div></li>
            </ul>
        </section>

        <h2>Fonts</h2>
        <section>
            <h3>Display Font</h3>
                <p class="display">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, cupiditate quas quisquam neque accusantium rerum magni illo accusamus, placeat deserunt similique tempore optio sunt a rem error porro mollitia eveniet?</p>

                <h3>Serif Font</h3>
                <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis architecto vero illo provident eveniet, aut qui vel explicabo eaque, nostrum repellendus itaque dolorem laboriosam reiciendis quisquam recusandae blanditiis molestiae dicta?</p>

                <h3>Sans Font</h3>
                <p class="sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet asperiores alias quo ipsum perferendis optio, laudantium nesciunt, itaque, unde soluta accusamus. Libero aspernatur, saepe molestiae, quia ratione exercitationem consectetur rem.</p>
        </section>

        <h2>Headings</h2>
        <section>
            <h1>Level 1 <a href="#">Link</a></h1>
            <h2>Level 2 <a href="#">Link</a></h2>
            <h3>Level 3 <a href="#">Link</a></h3>
            <h4>Level 4 <a href="#">Link</a></h4>
        </section>

        <h2>Title</h2>
        <section>
            <h3>Full Width</h3>
            <h1 class="title"><a>Zero Daedalus</a></h1>

            <h3>Truncated</h3>
            <h1 class="title"><a>zDae</a></h1>
        </section>

        <h2>Tagline</h2>
        <section>
            <span class="tagline">Connect. Develop. Evolve.</span>
        </section>

        <h2>Text</h2>
        <section>
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

            <h3></h3>
        </section>

        <h2>Form and Input Elements</h3>
        <section>
            <h3>Inputs</h3>
            <p>
                <label>Name <abbr title="Required">*</abbr></label>
                <input type="text" placeholder="Enter your name here">
            </p>
            <p>
                <label>Email <abbr title="Required">*</abbr></label>
                <input type="email" placeholder="Enter your email address here">
            </p>
            <p>
                <label for="">Website</label>
                <input type="url" placeholder="Enter your website address here">
            </p>

            <p>
                <label for="">Valid</label>
                <input type="text" class="valid" placeholder="Success">
            </p>
            <p>
                <label for="">Invalid</label>
                <input type="text" class="invalid" placeholder="Failure">
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

        <h2>Navigation Bar</h2>
        <section>
            <h3>Top Bar</h3>
            <p>
                <div class="navbar__top"></div>
            </p>

            <h3>Bottom Bar</h3>
            <p>
                <div class="navbar__bottom"></div>
            </p>
        </section>


    </section>

    <!-- Molecules -->
    <section id="molecules">
        <h1>Molecules</h1>

        <h2>Navigation</h2>
        <section style="height: 24px;">
                <nav class="nav" role="navigation">
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">Work</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                </nav>
        </section>

        <h2>Copyright</h2>
        <section>
            <small>
                Copyright &copy; 2015 &bull; Crafted by <a href="">Zero Daedalus</a>
            </small>
        </section>
  

    </section>

    <!-- Organisms -->
    <section id="organisms">
        <h1>Organisms</h1>
        <h2>Header</h2>
        <header class="navbar__top">
            <h1 class="title"><a href="">Zero Daedalus</a></h1>
            <!-- <span class="tagline">Connect. Develop. Evolve.</span> -->
            <nav class="nav" role="navigation">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
        </header>

        <h2>Footer</h2>
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


</main>
<!-- End of Content -->
<?php
    include 'scripts.php';
 ?>
