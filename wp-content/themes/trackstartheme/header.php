<?php ?>

<html>
    <head>
        <title>Trackstar</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>Trackstar</h1>
            </div>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?> 
            </nav>
