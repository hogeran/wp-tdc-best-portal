<!DOCTYPE html>
<html lang="sv">
  <head>
    <title><?php wp_title(''); ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="SHORTCUT ICON" href="<?php bloginfo('template_url');?>/img/tdc_smal_white.ico"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
    <?php wp_head(); ?>

  </head>
  <body>
      
   <header class="navigation" role="banner">
    <div class="navigation-wrapper">
        <a href="<?php bloginfo('url');?>" class="logo">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png" alt="Logo Image">
        </a>
        <a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
        <nav role="navigation">
            <ul id="js-navigation-menu" class="navigation-menu show">
                <li class="nav-link"><a href="javascript:void(0)">Products</a></li>
                <li class="nav-link"><a href="javascript:void(0)">About Us</a></li>
                <li class="nav-link"><a href="javascript:void(0)">Contact</a></li>
                <li class="nav-link more"><a href="javascript:void(0)">More</a>
                    <ul class="submenu">
                        <li><a href="javascript:void(0)">Submenu Item</a></li>
                        <li><a href="javascript:void(0)">Another Item</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>




<div class="hero">
	<div class="hero-inner">
    <a href="" class="hero-logo"><img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1.png
" alt="Logo Image"></a>
		<div class="hero-copy">
			<h1><?php bloginfo('name');?></h1>
			<p><?php bloginfo('description');?></p>	
		</div>
	</div>
</div>
<div class="content-container">