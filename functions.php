<?php
/*
 *  Author: Nicolas Métivier
 *  URL: nicolasmetivier.fr | @nicolasmetivier
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 500, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');


    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// ADD IMAGE TO TAXONOMY 



// GET PARENT/CHILD TAXONOMY 

add_action( 'taxonomy_hierarchy_staff', 'taxonomy_hierarchy' );
 
function taxonomy_hierarchy() {
	global $post;
	$taxonomy = 'taxonomy-presentoirs'; 
	$terms = wp_get_post_terms( $post->ID, $taxonomy );
 
	foreach ( $terms as $term ) {
		if ($term->parent != 0) 
		{ 
		$child_term = $term; 
		$child_id = $child_term->term_id;
		$ancestors = get_ancestors( $child_id, 'taxonomy-presentoirs' );
		
		echo '<ul class="list-serv">';
		foreach ( $ancestors  as $parent_tax ) {
                $taxonomy = 'taxonomy-presentoirs'; 
                $term = get_term( $parent_tax, $taxonomy );
                $name = $term->name;
                $term_link = get_term_link($parent_tax, 'taxonomy-presentoirs');
 
		echo '<li class="cat-item parent"><a href="'.$term_link.'">'.$name.'</a></li>';
		}
                $term_link_child = get_term_link($child_id, 'taxonomy-presentoirs');		
		echo '<li class="cat-item child"><a href="'.$term_link_child.'">'.$child_term->name.'</a></li>';
		}
		echo '</ul>';
    }	
}


// SEARCH FORM 
function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div class="d-flex p-relative align-items-end"><label class="screen-reader-text" for="s"></label>
    <input type="text" placeholder="Rechercher ..." value="' . get_search_query() . '" name="s" id="s" />
    <button type="submit" id="searchsubmit"><i class="material-icons text-white fs-20">search</i></button>
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );


// ACF assert_options
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// File extention upload allowed
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function my_setup() {
    /*  Ajout d'un logo dans l'onglet personnaliser */
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );
}
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      }
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      }
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }

// Load styles
function theme_styles(){
    
}

// LOAD SCRIPTS

// function replace_core_jquery_version() {
//     wp_deregister_script( 'jquery' );
//     // Change the URL if you want to load a local copy of jQuery from your own server.
//     wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
// }
// add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function custom_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) { 
        wp_enqueue_script('cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', ['jquery'], true);
        // wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', ['jquery'], '1.0.0', true);
        // wp_enqueue_script('tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', ['jquery'], '1.0.0', true);
        // wp_enqueue_script('scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.min.js', ['jquery'], '1.0.0', true);
        // wp_enqueue_script('scrollmagicindicator', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', ['jquery'], '1.0.0', true);
        // wp_enqueue_script('animation.gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js', ['jquery'], '1.0.0', true);
        // wp_enqueue_script('scrollto.gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/ScrollToPlugin.min.js', ['jquery'], '1.0.0', true);
        // wp_register_script('CustomEase', get_template_directory_uri() . '/assets/js/lib/CustomEase.min.js', array('jquery'), false, false); // Custom CustomEase
        // wp_enqueue_script('CustomEase'); // Enqueue it!
        wp_register_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, false); // Custom scripts
        wp_enqueue_script('scripts'); // Enqueue it!
       
     }
}

// ADD ACTION

add_action( 'after_setup_theme', 'my_setup');
add_action('wp_enqueue_scripts', 'theme_styles'); // Add Theme Stylesheet
add_action('init', 'custom_scripts'); // Add Custom Scripts


// HTML5 Blank navigation
function customTheme_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    	wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!
    }
}
// Load conditional style
function ct_conditional_styles()
{
    // if (is_tax( 'taxonomy-presentoirs') || is_tax( 'taxonomy-mannequins' ) || is_search( ) ){
    //     wp_register_style('magnifier', get_template_directory_uri() . '/assets/css/magnifier.css', array(), '1.0', 'all');
    //     wp_enqueue_style('magnifier'); // Enqueue it!
    // }
}
// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page_template( array('templates/template-home.php') )){
        wp_register_script('home-script', get_template_directory_uri() . '/assets/js/home.js', array('jquery'), false, false); // Custom home script
        wp_enqueue_script('home-script'); // Enqueue it!        
    }
    if (is_page_template( array('templates/template-about.php') )){
        wp_register_script('about-script', get_template_directory_uri() . '/assets/js/about.js', array('jquery'), false, false); // Custom about script
        wp_enqueue_script('about-script'); // Enqueue it!        
    }
    // if (is_singular( 'presentoirs' ) ){
    //     wp_register_script('zoom', get_template_directory_uri() . '/assets/js/jquery.zoom.min.js', array('jquery'), true, true); // Custom magnificent script
    //     wp_enqueue_script('zoom'); // Enqueue it!  
    //     wp_register_script('single', get_template_directory_uri() . '/assets/js/single.js', array('jquery'), true, true); // Custom magnificent script
    //     wp_enqueue_script('single'); // Enqueue it!  
    // }
    // if ( is_tax( 'taxonomy-mannequins' ) || is_tax( 'taxonomy-presentoirs' ) ){
    //     wp_register_script('taxonomy-script', get_template_directory_uri() . '/assets/js/taxonomy.js', array('jquery'), false, false); // Custom taxonomy script
    //     wp_enqueue_script('taxonomy-script'); // Enqueue it!  
    // }
    
}



// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
        'burger-menu' => __('Burger Menu', 'starterTheme'),
        'categories-menu' => __('Categories Menu', 'customTheme')
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 3
    register_sidebar(array(
        'name' => __('Widget Area 3', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our Soin Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination
add_action('wp_enqueue_scripts', 'ct_conditional_styles'); // Add condional style

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    // register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('taxonomy-presentoirs', 'presentoirs');
    register_post_type('presentoirs', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('Présentoirs', 'slip-2020'), // Rename these to suit
                'singular_name' => __('Présentoir', 'slip-2020'),
                'add_new' => __('Add New', 'slip-2020'),
                'add_new_item' => __('Add New Présentoir', 'slip-2020'),
                'edit' => __('Edit', 'slip-2020'),
                'edit_item' => __('Edit Présentoir', 'slip-2020'),
                'new_item' => __('New Présentoir', 'slip-2020'),
                'view' => __('View Présentoir', 'slip-2020'),
                'view_item' => __('View Présentoir', 'slip-2020'),
                'search_items' => __('Search Présentoir', 'slip-2020'),
                'not_found' => __('No Présentoir found', 'slip-2020'),
                'not_found_in_trash' => __('Présentoir Not found in Trash', 'slip-2020')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                "with_front" => true
            ),
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag'
            ) // Add Category and Post Tags support
        )
    );
    register_taxonomy(
        'taxonomy-presentoirs',
        'presentoirs',
        array(
            'label'  => __('Custom Taxonomy', 'slip-2020'),
            'labels' =>
                array(
                    'name' 			=> __('Custom Taxonomies', 'slip-2020'),
                    'singular_name' => __('Custom Taxonomy', 'slip-2020'),
                    'all_items' 	=> __('All Custom Taxonomy', 'slip-2020'),
                    'edit_item' 	=> __('Edit Custom Taxonomy', 'slip-2020'),
                    'view_item' 	=> __('See Custom Taxonomy', 'slip-2020'),
                    'update_item' 	=> __('Update Custom Taxonomy', 'slip-2020'),
                    'add_new_item' 	=> __('Add Custom Taxonomy', 'slip-2020'),
                    'new_item_name' => __('New Custom Taxonomy', 'slip-2020'),
                    'search_items' 	=> __('Search Custom Taxonomy', 'slip-2020'),
                    'popular_items' => __('Popular Custom Taxonomy', 'slip-2020')
                ),
            'hierarchical' => true,
            'public' => true,
            'has_archive' => true,
            'rewrite'      => array('slug' => 'collection', 'with_front' => true)
        )
    );
}


/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

?>
