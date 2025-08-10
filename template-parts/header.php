<?php

if (!defined('ABSPATH')) {
   exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <?php

   wp_head();

   ?>
</head>

<body>
   <?php wp_body_open(); ?>

   <header class="header">
      <div class="header__top-banner">
         <div class="container">
            <div class="row d-flex justify-content-center">
               <a href="#" class="header__top-banner__wrapper col-12 position-relative d-flex justify-content-center my-3 py-2 text-decoration-none">
                  <img class="position-absolute start-0 top-0" src="<?php echo esc_url(get_parent_theme_file_uri('assets/images/top-banner-background.svg')); ?>">

                  <span class="header__top-banner__sub-container z-1 d-flex align-items-center text-white">
                     <?php esc_html_e('Acesse o nosso dashboard gratuitamente', 'nutritrack'); ?>

                     <?php echo Utils::render_svg('arrow-left', 'header__top-banner__arrow-right mt-1'); ?>
                  </span>

                  <img class="position-absolute end-0 top-0" src="<?php echo esc_url(get_parent_theme_file_uri('assets/images/top-banner-background.svg')); ?>">
               </a>
            </div>
         </div>
      </div>

      <nav>
         Navbar
      </nav>
   </header>
