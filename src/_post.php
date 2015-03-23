<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
  <?php
    if ( has_post_thumbnail() ) {
      echo '<div class="featured-image">';
      the_post_thumbnail();
      echo '</div>';
    } 
  ?>
  <h2 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php echo the_title('','',FALSE); ?></a></h2>
  <?php
    the_content();

    if(get_post_format() == 'video' OR get_post_format() == 'link'){
    ?>
      <p class="post-permalink"><a href="<?php echo get_permalink(); ?>">#</a></h2>
    <?php
    }
  ?>
</div>
