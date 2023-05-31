<?php echo get_header( ) ?>
<?php echo wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
<h1> <?php echo get_the_title( ) ?></h1>
<p> <?php echo get_the_content()?></p>

<div id="box">
</div>