<?php get_header(); ?>
<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
    <div <?php post_class(); ?> id='post-<?php the_ID(); ?>'>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
