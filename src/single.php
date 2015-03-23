<?php get_header(); ?>
<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php include (TEMPLATEPATH . '/_post.php' ); ?>
    <?php endwhile; ?>
    <?php include (TEMPLATEPATH . '/_nav.php' ); ?>
  
  <?php else : ?>
    <h2>Not Found</h2>
  <?php endif; ?>
</div>

<?php include('sidebar.php'); ?>

<?php get_footer(); ?>


