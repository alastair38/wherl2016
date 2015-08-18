<?php
ob_start();
/*
This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/*********************
INCLUDE NEEDED FILES
*********************/

/*
library/joints.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/joints.php'); // if you remove this, Joints will break
include_once('acf/acf.php' );
/*
library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
require_once('library/findings-custom-fields.php'); // you can disable this if you like
require_once('wp-advanced-search/wpas.php'); // adds WPAS files for building out advanced search
/*
library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
require_once('library/admin.php'); // this comes turned off by default
/*
library/translation/translation.php
	- adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

/*********************
THUMNAIL SIZE OPTIONS
*********************/

// Thumbnail sizes
add_image_size( 'joints-thumb-600', 600, 150, true );
add_image_size( 'joints-thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'joints-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'joints-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like.
*/


/*********************
MENUS & NAVIGATION
*********************/
// registering wp3+ menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ) // secondary nav in footer
	)
);

// the main menu
function joints_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} /* end joints main nav */

// the footer menu (should you choose to use one)
function joints_footer_links() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} /* end joints footer link */

// this is the fallback for header menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => 'top-bar top-bar-section',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// this is the fallback for footer menu
function joints_footer_links_fallback() {
	/* you can put a default here if you like */
}


/*********************
SIDEBARS
*********************/

// Sidebars & Widgetizes Areas
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointstheme'),
		'description' => __('The first (primary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/*********************
COMMENT LAYOUT
*********************/

// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix large-12 columns">
			<header class="comment-author">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<?php printf(__('<cite class="fn">%s</cite>', 'jointstheme'), get_comment_author_link()) ?> on
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointstheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'jointstheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'jointstheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!
?>
<?php


/*-----------------------------------------------------------------------------------*/
/* Add excerpt support to pages
/*-----------------------------------------------------------------------------------*/


add_action('init', 'page_excerpt_init');
function page_excerpt_init() {
	add_post_type_support( 'page', 'excerpt' );
}

function add_video_wmode_transparent($html, $url, $attr) {

if ( strpos( $html, "<embed src=" ) !== false )
   { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
elseif ( strpos ( $html, 'feature=oembed' ) !== false )
   { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
else
   { return $html; }
}
add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);

add_filter( 'wp_nav_menu_items', 'add_logout_link', 10, 2);


/* Gets edit link to current author's 'people' post_type content; which in this case is their profile. Call the function in the login link function to output this edit link to the navigation */

function user_profile_link() {
    $user_id = get_current_user_id();
    $myitems = get_posts(array(
        'post_type' => 'people',
        'author' => $user_id
        ));

        if( $myitems ):
        foreach( $myitems as $myitem ):
        $edit_link = get_edit_post_link($myitem->ID);
        endforeach;
        endif;
        return $edit_link;
    }
/**
 * Add a login link to the members navigation
 */
function add_logout_link( $items, $args )
{
    if($args->theme_location == 'main-nav')
    {
        if(is_user_logged_in())
        {
            $items .= '<li><a href="'. user_profile_link() .'">Edit Profile</a></li>';
            $items .= '<li class="has-dropdown"><a href="#">Add New</a>';
            $items .= '<ul class="dropdown"><li><a href="' . admin_url() . 'post-new.php">Blog Post</a></li>';
            $items .= '<li><a href="' . admin_url() . 'post-new.php?post_type=news">News Item</a></li>';
            $items .= '<li><a href="' . admin_url() . 'post-new.php?post_type=events">Event Listing</a></li>';
            $items .= '<li><a href="' . admin_url() . 'post-new.php?post_type=finding">Finding</a></li></ul></li>';
            $items .= '<li class="logout"><a href="'. wp_logout_url() .'">Log Out</a></li>';

        } else {
            $items .= '<li><a href="'. wp_login_url() .'">Log In</a></li>';
        }
    }

    return $items;
}

function add_IEmenu_logout_link( $menuitems, $args )
{
    if($args->theme_location == 'footer-links')
    {
        if(is_user_logged_in())
        {
            $menuitems .= '<li><a href="'. user_profile_link() .'">Edit Profile</a></li>';
            $menuitems .= '<li class="has-dropdown"><a href="#">Add New</a>';
            $menuitems .= '<ul class="dropdown"><li><a href="' . admin_url() . 'post-new.php">Blog Post</a></li>';
            $menuitems .= '<li><a href="' . admin_url() . 'post-new.php?post_type=news">News Item</a></li>';
            $menuitems .= '<li><a href="' . admin_url() . 'post-new.php?post_type=events">Event Listing</a></li>';
            $menuitems .= '<li><a href="' . admin_url() . 'post-new.php?post_type=finding">Finding</a></li></ul></li>';
            $menuitems .= '<li class="logout"><a href="'. wp_logout_url() .'">Log Out</a></li>';

        } else {
            $menuitems .= '<li><a href="'. wp_login_url() .'">Log In</a></li>';
        }
    }

    return $menuitems;
}



/**
 * Change title box text for new submissions depending on custom post type
*/

function wpb_change_title_text( $title ){
     $screen = get_current_screen();

     if  ( 'finding' == $screen->post_type ) {
          $title = 'Enter title of finding';
     }

    if  ( 'events' == $screen->post_type ) {
          $title = 'Enter event name';
     }

    if  ( 'news' == $screen->post_type ) {
          $title = 'Enter headline';
     }

     return $title;
}

add_filter( 'enter_title_here', 'wpb_change_title_text' );

/**
 * Redirect authors to the home page on login
*/

add_filter( 'login_redirect', 'login_redirect_example', 10, 3 );

function login_redirect_example( $redirect_to, $request, $user ) {
    global $user;
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        if ( in_array( 'administrator', $user->roles ) ) {
            return admin_url();
        } else {
            return home_url();
            }
    }
    return;
}

/**
 * Remove admin bar for all non-admins
*/

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

function fields_in_feed($content) {
    if(is_feed()) {
        $post_id = get_the_ID();
        $output .= the_field("file_upload");
        $output .= the_field("file_uploadb");
        $output .= the_field("file_uploadc");
        $output .= the_field("external_link");
        $content = $output . '<p>' . $content . '</p>';
    }
    return $content;
}
add_filter('the_excerpt_rss','fields_in_feed');


// Add help text to right of new news item screen in a metabox
function wherlnews_metabox_top_right() {
    add_meta_box( 'after-title-help', 'HELP', 'wherlnews_top_right_help_metabox_content', 'news', 'side', 'high' );
}
// callback function to populate metabox
function wherlnews_top_right_help_metabox_content() { ?>
    <?php add_thickbox(); ?>

        <p><a href="https://qsnapnet.com/snaps/l687g8nvbgw1xlx?TB_iframe=true&width=600&height=550" class="thickbox">Adding a news item!</a></p>

        <a href="mailto:alastair@alastaircox.com" target="_blank">Still stuck? Email Alastair</a>

<?php }
add_action( 'add_meta_boxes', 'wherlnews_metabox_top_right' );


// Add help text to right of new event screen in a metabox
function wherlevent_metabox_top_right() {
    add_meta_box( 'after-title-help', 'HELP', 'wherlevent_top_right_help_metabox_content', 'events', 'side', 'high' );
}
// callback function to populate metabox
function wherlevent_top_right_help_metabox_content() { ?>
    <?php add_thickbox(); ?>

     <p><a href="https://qsnapnet.com/snaps/82dx0vsjrtivygb?TB_iframe=true&width=600&height=550" class="thickbox">Adding an event!</a></p>

     <a href="mailto:alastair@alastaircox.com" target="_blank">Still stuck? Email Alastair</a>

<?php }
add_action( 'add_meta_boxes', 'wherlevent_metabox_top_right' );

// Add help text to right of new post screen in a metabox
function wherlpost_metabox_top_right() {
    add_meta_box( 'after-title-help', 'HELP', 'wherlpost_top_right_help_metabox_content', 'post', 'side', 'high' );
}
// callback function to populate metabox
function wherlpost_top_right_help_metabox_content() { ?>
    <?php add_thickbox(); ?>

    <p><a href="https://qsnapnet.com/snaps/hh518ucujuivn29?TB_iframe=true&width=900&height=550" class="thickbox">Adding a blog post!</a></p>

     <a href="mailto:alastair@alastaircox.com" target="_blank">Still stuck? Email Alastair</a>

<?php }
add_action( 'add_meta_boxes', 'wherlpost_metabox_top_right' );

// Add help text to right of edit person screen in a metabox
function wherlperson_metabox_top_right() {
    add_meta_box( 'after-title-help', 'HELP', 'wherlperson_top_right_help_metabox_content', 'people', 'side', 'high' );
}
// callback function to populate metabox
function wherlperson_top_right_help_metabox_content() { ?>
    <?php add_thickbox(); ?>

        <p><a href="https://qsnapnet.com/snaps/zvjlizxu4u6jemi?TB_iframe=true&width=900&height=550" class="thickbox">Editing your profile!</a></p>

     <a href="mailto:alastair@alastaircox.com" target="_blank">Still stuck? Email Alastair</a>

<?php }
add_action( 'add_meta_boxes', 'wherlperson_metabox_top_right' );

?>
