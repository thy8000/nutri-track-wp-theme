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

<body <?php body_class("bg-neutral-900 font-urbanist"); ?>>
   <?php wp_body_open(); ?>

   <header>
      <div class="container bg-dark-green-15 flex justify-center items-center">
         <div class="bg-dark-green-20 border border-dark-green-25 flex justify-center items-center w-full rounded-md my-[14px] py-[10px]">
            <span class="flex justify-center items-center gap-[10px] text-white font-mediums">
               <?php esc_html_e('Monitore sua nutrição fácil e rápido! Cadastre-se gratuitamente agora', 'nutri-track'); ?>
               <i class="ph ph-[arrow-right] text-white text-[20px]"></i>
            </span>
         </div>
      </div>
   </header>
