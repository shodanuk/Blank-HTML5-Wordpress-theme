<aside class="chrome">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

    <?php get_search_form(); ?>

    <nav>
      <h1>Pages</h1>
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>

    <nav>
      <h1>Archives</h1>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </nav>

    <nav>
      <h1>Categories</h1>
      <ul>
        <?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
    </nav>

    <nav>
      <?php wp_list_bookmarks(); ?>
    </nav>

    <nav>
      <h1>Meta</h1>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="http://wordpress.org/" rel="external" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
        <?php wp_meta(); ?>
      </ul>
    </nav>

    <nav>
      <h1>Subscribe</h1>
      <ul>
        <li><a href="<?php bloginfo('rss2_url'); ?>" rel="alternate">Entries (RSS)</a></li>
        <li><a href="<?php bloginfo('comments_rss2_url'); ?>" rel="alternate">Comments (RSS)</a></li>
      </ul>
    </nav>
  <?php endif; ?>
</aside>