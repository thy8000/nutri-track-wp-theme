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
      <?php get_template_part('template-parts/header/top-banner'); ?>

      <nav>
         Navbar
      </nav>
   </header>
