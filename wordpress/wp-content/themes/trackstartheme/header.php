<?php

?>

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
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <ul>
                <li><a href="http://localhost:4567/wordpress/?page_id=12">TEST IT</a></li>
                <li><a href="#">BUY IT</a></li>
                <li><a href=" http://localhost:4567/wordpress/?page_id=7">TRUST US</a></li>
            </ul>  
        </nav>
    
