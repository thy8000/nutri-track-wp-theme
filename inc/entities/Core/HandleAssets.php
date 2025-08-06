<?php

if (!defined('ABSPATH')) {
   exit;
}

class HandleAssets
{
   public function __construct()
   {
      add_action('wp_enqueue_scripts', [$this, 'global_scripts']);
   }

   public function global_scripts()
   {
      wp_enqueue_style('style', get_theme_file_uri('assets/css/style.min.css'));
      /*
      wp_enqueue_script('nutri-track-script', get_theme_file_uri('assets/js/all.min.js'), false, null, [
         'strategy'  => 'defer',
         'in_footer' => false,
      ]);
      */
   }
}

new HandleAssets();
