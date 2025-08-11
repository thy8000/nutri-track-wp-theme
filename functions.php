<?php

if (!defined('ABSPATH')) {
   exit;
}

// Entities - Core
require get_parent_theme_file_path('/inc/entities/Core/HandleAssets.php');
require get_parent_theme_file_path('/inc/entities/Core/GlobalOptions.php');
require get_parent_theme_file_path('/inc/entities/Core/Menu.php');

// Entities - Utils
require get_parent_theme_file_path('/inc/entities/Utils/Utils.php');

// Entities - Bootstrap
require get_parent_theme_file_path('/inc/entities/Bootstrap/Navwalker.php');
