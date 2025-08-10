<?php

if (!defined('ABSPATH')) {
   exit;
}

class Utils
{
   public static function render_svg(string $file_path, $classes = '')
   {
      $svg = file_get_contents(get_parent_theme_file_uri("assets/icons/{$file_path}.svg"));

      if (empty($svg)) {
         return;
      }

      if (!empty($classes)) {
         $svg = str_replace('<svg', "<svg class='{$classes}'", $svg);
      }

      return $svg;
   }
}
