<?php 
    require_once('config.php');
    set_include_path( ROOT . '/inc');

    include 'head.php';
    include 'header.php';
?>
<main class="content">
    <dt>Drop us a line...</dt>
    <dd>You can also reach us via <a href="">Twitter</a> and <a href="">Facebook</a></dd>
    <form id="contact" class="section">
        <p>
            <input required type="text" placeholder="Name">
        </p>
        <p>
            <input required type="email" placeholder="Email Address">
        </p>
        <p>
            <input type="url" placeholder="Website (Optional)">
        </p>
        <p>
            <textarea rows="10" placeholder="Type your message here..."></textarea>
        </p>

        <p>
            <button type="reset" class="btn danger">Reset</button>
            <button type="submit" class="btn success" >Submit</button>
        </p>
    </form>
</main>
<?php
    include 'footer.php';
    include 'scripts.php';
 ?>