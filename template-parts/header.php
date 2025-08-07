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
      <div class="container relative bg-dark-green-15 flex justify-center items-center">
         <a href="#" class="relative bg-dark-green-20 border border-dark-green-25 flex justify-center items-center w-full rounded-md lg:my-[14px] my-[unset] mt-[40px] mb-[14px] py-[10px]">
            <?php echo Utils::render_svg('top-banner-background.svg', 'lg:block hidden absolute left-[2%] h-full rotate-[180deg]'); ?>

            <span class="flex justify-center items-center gap-[10px] text-white font-medium lg:text-base text-sm lg:text-start text-center">
               <?php esc_html_e('Monitore sua nutrição fácil e rápido! Cadastre-se gratuitamente agora', 'nutri-track'); ?>
               <i class="ph ph-[arrow-right] lg:block hidden text-white text-[20px]"></i>
            </span>

            <?php echo Utils::render_svg('top-banner-background.svg', 'lg:block hidden absolute right-[2%] h-full rotate-y-[180deg]'); ?>
         </a>
      </div>
   </header>
