<?php

get_header(); ?>

<div class="max-w-6xl mx-auto prose">
  <h1 class=""><?php the_title(); ?></h1>
  <ul class="min-list">
          <?php
          $findChildrenOf = get_the_ID();

          wp_list_pages([
              'title_li' => null,
              'child_of' => $findChildrenOf,
              'sort_column' => 'menu_order',
          ]);
          ?>
        </ul>
  <?php
  $theParent = wp_get_post_parent_id(get_the_ID());
  if ($theParent) { ?>
      <p>
        <a href='<?php echo get_permalink($theParent); ?>'>
          Back to <?php echo get_the_title($theParent); ?>
        </a>
      </p>
    <?php }
  ?>
</div>

<?php get_footer();
