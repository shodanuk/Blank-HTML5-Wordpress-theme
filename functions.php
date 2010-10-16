<?php
  // Add RSS links to <head> section
  automatic_feed_links();

  // UNCOMMENT THE FOLLOWING IF YOU NEED JQUERY LOADED:
  /*
  if ( !is_admin() ) {
     wp_deregister_script('jquery');
     wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"), false);
     wp_enqueue_script('jquery');
  }
  */

  // Clean up the <head>
  function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
  }

  add_action('init', 'removeHeadLinks');
  remove_action('wp_head', 'wp_generator');

  if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Sidebar Widgets',
      'id'   => 'sidebar-widgets',
      'description'   => 'These are widgets for the sidebar.',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1>',
      'after_title'   => '</h1>'
    ));
  }

  function blankhtml5_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
      <article id="comment-<?php comment_ID(); ?>">
        <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>

          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <?php if ($comment->comment_approved == '0') : ?>
            <em><?php _e('Your comment is awaiting moderation.') ?></em><br />
          <?php endif; ?>

          <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
        </header>

        <?php comment_text() ?>

        <div class="reply">
          <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
      </article>
  <?php
  }
?>