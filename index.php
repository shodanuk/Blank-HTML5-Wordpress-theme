<?php get_header(); ?>
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <header>
          <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
          <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
        </header>

        <div class="entry">
          <?php the_content(); ?>
        </div>

        <footer class="postmetadata">
          <?php the_tags('Tags: ', ', ', '<br />'); ?>
          Posted in <?php the_category(', ') ?> |
          <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
        </footer>
      </article>

    <?php endwhile; ?>

    <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

    <?php else : ?>

      <h1>Not Found</h1>

    <?php endif; ?>
  </section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>