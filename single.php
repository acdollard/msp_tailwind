<?php

get_header(); ?>

<div class="max-w-6xl mx-auto prose">
  <?php if (have_posts()) {
      while (have_posts()) {
          the_post(); ?>
      <div>
        <h1 class="text-3xl py-10"><?php the_title(); ?></h1>
        <?php
        $theParent = wp_get_post_parent_id(get_the_ID());
        if ($theParent) { ?>
        <div class="">
      <p><a class="" href="<?php echo get_permalink(
          $theParent
      ); ?>"> Back to <?php echo get_the_title(
    $theParent
); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
      <?php }
        ?>
        <?php the_content(); ?>
      </div>
    <?php
      }
  } ?>
</div>

<?php get_footer();
