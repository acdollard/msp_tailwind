<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- <div class="bg-gradient-to-r from-cyan-500 to-blue-500"> -->
      <div class="bg-black-500">
      <div class=" mx-auto py-auto items-baseline">
        <ul class="pb-5 ">
        <?php wp_nav_menu(['theme_location' => 'max_mega_menu_1']); ?>
        </ul>
      </div>
      <div class="max-w-6xl mx-auto my-4  pb-6 items-baseline">
        <h1 class="text-3xl mx-auto flex justify-center"><a href="<?php echo get_home_url(); ?>" class="text-gray-700 hover:text-blue-500">MAIN STREET PERCUSSION</a></h1>
      </div>
  </div>

      <!-- <div class="max-w-6xl mx-auto mb-5 px-4">
      </div> -->
  
    
