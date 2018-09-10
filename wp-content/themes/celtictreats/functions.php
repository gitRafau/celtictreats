<?php

function petFiles() {
    wp_enqueue_style('petbs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('petstyle', get_stylesheet_directory_uri() . '/css/style.css'); 
    wp_enqueue_style('owlstyle', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css'); 
   	wp_enqueue_style('owlstyle', get_stylesheet_directory_uri() . '/css/owl.theme.default.min.css');            
    wp_enqueue_script('petjs', get_theme_file_uri('/js/pet.js'), array( 'jquery' ), false, true );
    wp_enqueue_script('ownsliderjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js' ,array( 'jquery' ), false, true );
}

add_action('wp_enqueue_scripts', 'petFiles');

function petFeatures() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'petFeatures');

add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
    }
} );

?>

<?php

function the_breadcrumb() {
    $sep = ' / ';
    if (!is_front_page()) {
    
    // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
    
    // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
    
    // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
    
    // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
    
    // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
        echo '</div>';
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/
?>

