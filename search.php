<?php get_header(); ?>
<section>
  <?php if (have_posts()) : ?>

    <h1>Search Results</h1>

    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
          <h1><?php the_title(); ?></h1>
          <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
        </header>

        <div class="entry">
          <?php the_excerpt(); ?>
        </div>
      </article>

    <?php endwhile; ?>

    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

  <?php else : ?>

    <h1>No posts found.</h1>

  <?php endif; ?>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
