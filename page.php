<?php get_header(); ?>
<section>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post" id="post-<?php the_ID(); ?>">
      <header>
        <h1><?php the_title(); ?></h1>
        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
      </header>

      <div class="entry">
        <?php the_content(); ?>
        <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
      </div>

      <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

    </article>

    <?php comments_template(); ?>

  <?php endwhile; endif; ?>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
