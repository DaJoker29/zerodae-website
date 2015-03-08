<html>
<head>
    <meta charset="UTF-8">
    <title>Zero Daedalus</title>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans|Stint+Ultra+Expanded|Alice' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo BASE;?>/style.css">
    <?php
        if (basename($_SERVER['PHP_SELF']) == 'guide.php') { ?>
            <link rel="stylesheet" href="<?php echo BASE;?>/guide.css" />
    <?php } ?>
    <script>
    if (document.querySelector && window.addEventListener) {
        document.documentElement.className += 'js';
    }
    </script>
</head>
<body>