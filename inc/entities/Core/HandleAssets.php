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
      wp_enqueue_style('all', get_theme_file_uri('assets/output/all.min.css'));

      wp_enqueue_script('all', get_theme_file_uri('assets/output/all.min.js'), false, null, [
         'strategy'  => 'defer',
         'in_footer' => false,
      ]);
   }
}

new HandleAssets();
