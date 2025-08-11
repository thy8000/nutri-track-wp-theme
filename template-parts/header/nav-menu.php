<?php

if (!defined('ABSPATH')) {
   exit;
}

?>

<nav class="header__nav-menu navbar navbar-expand-lg">
   <div class="container">
      <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <?php echo Utils::render_svg('menu-mobile', 'header__nav-menu__hamburguer d-block'); ?>
         <?php echo Utils::render_svg('menu-mobile-close', 'header__nav-menu__close d-none'); ?>
      </button>

      <a class="navbar-brand" href="#">
         <img width="100" src="<?php echo esc_url(get_parent_theme_file_uri('assets/images/nutritrack-logo-transparent.png')); ?>">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <?php

         wp_nav_menu([
            'theme_location' => 'header-menu',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto align-items-center %2$s">%3$s</ul>',
            'depth' => 1,
            'walker' => new bootstrap_5_wp_nav_menu_walker()
         ]);

         ?>
      </div>
   </div>
</nav>
