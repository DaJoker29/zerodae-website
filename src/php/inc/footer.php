<footer class="navbar__bottom">
    <!-- Change link before deployment -->
    <nav class="nav" role="navigation">
        <ul>
            <li><a href="<?php echo BASE; ?>">About</a></li>
            <li><a href="<?php echo BASE . '/work'; ?>">Work</a></li>
            <li><a href="<?php echo BASE . '/contact'; ?>">Contact</a></li>
        </ul>
    </nav>
    <small class="copyright">Copyright &copy; 2015 <a href="<?php 
    if('localhost' == $_SERVER['HTTP_HOST']) {
        echo BASE . '/guide';
    } else {
        echo '//zerodaedalus.com';
    }?>">Zero Daedalus</a></small>
</footer>