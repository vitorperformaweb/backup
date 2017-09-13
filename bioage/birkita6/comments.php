<?php
/**
 * The template for displaying Comments.
 */
?>

<?php
    /*
     * If the current post is protected by a password and
     * the visitor has not yet entered the password we will
     * return early without loading the comments.
     */
    if (post_password_required()) return;
?>
<?php if ( comments_open() ) : ?>
    <div id="comments" class="comments-area clear-fix">
            <?php if (have_comments()):?>
            <div class="comments-area-title">
                <h3>
                    <?php printf( esc_html(_n('1 comment', '%1$s comments', get_comments_number(), 'birkita')),  number_format_i18n(get_comments_number()));?>
                </h3>
            </div><!-- End Comment Area Title -->
            <?php endif;?>
            <?php // You can start editing here -- including this comment! ?>
            <?php if ( have_comments() ) : ?>
            <ol class="commentlist">
                <?php
                    /* Loop through and list the comments. Tell wp_list_comments()
                     * to use wpgrade_comment() to format the comments.
                     * If you want to overload this in a child theme then you can
                     * define wpgrade_comment() and that will be used instead.
                     * See wpgrade_comment() in inc/template-tags.php for more.
                     */
                    wp_list_comments( array( 'callback' => 'birkita_comments','short_ping'  => true ) );
                ?>
            </ol><!-- .commentlist -->

            <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
            <nav role="navigation" id="comment-nav-bottom" class="comment-navigation">
                <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'birkita') ); ?></div>
                <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'birkita') ); ?></div>
            </nav>
            <?php endif; // check for comment navigation ?>
        <?php endif; // have comments ?>
        <?php
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) && !is_page() ) :
        ?>
            <p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'birkita'); ?></p>
            <?php endif; ?>
    </div><!-- #comments .comments-area -->
    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $comments_args = array(
            // change the title of send button
            'title_reply'=> esc_html__('Leave a reply', 'birkita'),
            // remove "Text or HTML to be displayed after the set of comment fields"
            'comment_notes_before' => '<p class="birkita_comment-form-sub-title">'.esc_html__('Your email address will not be published. Required fields are marked *', 'birkita').'</p>',
            'comment_notes_after' => '',
            'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" placeholder="'.esc_html__('Name*', 'birkita').'..." size="30" ' .  $aria_req . ' /></p>',
                'email' => '<p class="comment-form-email"><input id="email" name="email" size="30" type="text" placeholder="'.esc_html__('Email*', 'birkita').'..." '. $aria_req .' /></p>' ) ),
            'id_submit' => 'comment-submit',
            'label_submit' => esc_html__('Send', 'birkita'),
            // redefine your own textarea (the comment body)
            'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_html__( 'Write your comment here', 'birkita') . '"></textarea></p>');
    } else {
        $comments_args = array(
        // change the title of send button
        'title_reply'=> esc_html__('Leave a reply', 'birkita'),
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_before' => '<p class="birkita_comment-form-sub-title">'.esc_html__('Your email address will not be published. Required fields are marked *', 'birkita').'</p>',
        'comment_notes_after' => '',
        'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" placeholder="'.esc_html__('Name*', 'birkita').'..." size="30" ' .  $aria_req . ' /></p><!--',
                'email' => '--><p class="comment-form-email"><input id="email" name="email" size="30" type="text" placeholder="'.esc_html__('Email*', 'birkita').'..." '. $aria_req .' /></p><!--',
                'url' => '--><p class="comment-form-url"><input id="url" name="url" size="30" placeholder="'.esc_html__('Website', 'birkita').'..." type="text"></p>') ),
        'id_submit' => 'comment-submit',
        'label_submit' => esc_html__('Send', 'birkita'),
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_html__( 'Write your comment here', 'birkita') . '"></textarea></p>');
    }
	
	//if we have no comments than we don't a second title, one is enough
	if ( !have_comments() ){
		$comments_args['title_reply'] = esc_html__('Leave a reply', 'birkita');
	}
	
    comment_form($comments_args); ?>
<?php endif; ?>