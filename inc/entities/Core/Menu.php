<?php

if (!defined('ABSPATH')) {
   exit;
}

class Menu
{
   public function __construct()
   {
      add_action('init', [$this, 'register_header_menu']);
   }

   public function register_header_menu()
   {
      register_nav_menu('header-menu', __('Header Menu', 'nutritrack'));
   }
}

new Menu();
