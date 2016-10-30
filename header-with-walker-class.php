<?php
/**
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<html>
<head>
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="PO3bWDpUEh4O6XXwnmfyfxrKRDf8JsRrNIcGdzv3POs" />
<link rel="shortcut icon" href="http://www.veganfoodpyramid.com/favicon.ico?v=2" />
<script type="text/javascript" src="//use.typekit.net/tty6xpj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('gtm-include'); ?>
<header>
  <div class="brand">Trevyr Barn</div>
  <div class="address-bar">Luxury holiday cottage in South Wales</div>
  
  <nav class="tnavbar navbar-default navbar-fixed-top" role="navigation">
   <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        
        </nav>
  
  <?php //wp_nav_menu( array( 
//            'theme_location' => 'primary',
//            'container' => false,
//            'menu_class' => 'menu'
//      ) ); ?>
</header>
