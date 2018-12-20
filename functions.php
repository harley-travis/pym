<?php

// rewrite permalink rule for custom post type
 flush_rewrite_rules();
//enable post thumbnails
add_theme_support( 'post-thumbnails' ); 
the_post_thumbnail('medium');
the_post_thumbnail('large');
the_post_thumbnail('full');
if(function_exists('add_theme_support')){
    add_theme_support( 'post-thumbnails' ); 
    // set_post_thumbnail_size(150, 150, true);
    the_post_thumbnail_url( 'thumbnail' );       // Thumbnail (default 150px x 150px max)
	the_post_thumbnail_url( 'medium' );          // Medium resolution (default 300px x 300px max)
	the_post_thumbnail_url( 'large' );           // Large resolution (default 640px x 640px max)
	the_post_thumbnail_url( 'full' );            // Full resolution (original size uploaded)
    add_image_size('category-thumb', 300, 9999);
}


	

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Allow code in text edtiors
function add_mce_markup( $initArray ) {
    $ext = 'i[id|name|class|style]';
    if ( isset( $initArray['extended_valid_elements'] ) ) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'add_mce_markup' );

// Register Widgets
function midtown_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Site Title', 'midtown' ),
		'id' => 'logo-title',
		'description' => __( 'Enter the title of the site. This will display in the header of the site', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	) );

	register_sidebar( array(
		'name' => __( 'Header Phone Number', 'midtown' ),
		'id' => 'phone',
		'description' => __( 'Enter the contact phone number. This will display in the header of the site', 'midtown' ),
		'before_widget' => '<div class="inline-block">',
		'after_widget' => '</div>'
	) );

	register_sidebar( array(
		'name' => __( 'Header Nav', 'midtown' ),
		'id' => 'main-nav',
		'description' => __( 'Select links to display in the main nav. This will display in the header of the site', 'midtown' ),
		'before_widget' => '',
		'after_widget' => ''
	) );
	
	register_sidebar( array(
		'name' => __( 'Mobile Nav', 'midtown' ),
		'id' => 'mobile-nav',
		'description' => __( 'Select links to display in the mobile nav.', 'midtown' ),
		'before_widget' => '',
		'after_widget' => ''
	) );

	register_sidebar( array(
		'name' => __( 'Footer Site Title', 'midtown' ),
		'id' => 'footer-title',
		'description' => __( 'Enter the title of the site. This will display in the footer of the site', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Tag', 'midtown' ),
		'id' => 'footer-tag',
		'description' => __( 'Enter the tag of the site. This will display in the footer under the site title', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Description', 'midtown' ),
		'id' => 'footer-desc',
		'description' => __( 'Enter the description of the site. This will display in the footer under the site title', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Open Hours Footer', 'midtown' ),
		'id' => 'open-hours',
		'description' => __( 'Enter the open hours. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Contact Info', 'midtown' ),
		'id' => 'footer-contact-info',
		'description' => __( 'Enter the contact info. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Links', 'midtown' ),
		'id' => 'footer-links',
		'description' => __( 'Enter the links. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Social Links', 'midtown' ),
		'id' => 'social-links',
		'description' => __( 'Enter the links to the social media. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Privacy Link', 'midtown' ),
		'id' => 'privacy-link',
		'description' => __( 'Enter the privacy link. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Copyright', 'midtown' ),
		'id' => 'copyright',
		'description' => __( 'Enter the copyright info. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_widget' => '<div class="inline-block">',
		'after_widget' => '</div>'
	) );
	
	register_sidebar( array(
		'name' => __( 'Contact Form 7 Shortcode', 'midtown' ),
		'id' => 'contact-form',
		'description' => __( 'Insert shortcode from Contact Form 7', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	remove_filter('widget_text_content', 'wpautop');

}
add_action( 'widgets_init', 'midtown_widgets_init' );


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="input-group mb-3"><input name="post_password" id="' . $label . '" type="password" maxlength="20" class="form-control purple-input" placeholder="password" aria-label="password" aria-describedby="password"/><div class="input-group-append"><input type="submit" name="Submit" class="btn btn-outline-secondary btn-outline-purple" value="' . esc_attr__( "Done" ) . '" /></div></div></form>';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );


// display category chips
function category_chips($category) {
	
	
	echo category;
	echo ' holy smoke it worked';
	
}
add_action('wp_ajax_category_chips', 'category_chips'); 
//add_action('wp_ajax_nopriv_category_chips', 'category_chips');

// filter category functions
function misha_filter_function(){
	$args = array(
		'orderby' => 'date', // we will sort posts by date
		'order'	=> $_POST['date'] // ASC or DESC
	);
 
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) )

		// gather all the catogories in an array
		$category = $_POST['categoryfilter'];
	
		//print_r($category); // show me the category ids caught by the form

		// filter by the category ids
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => array_values($category),
			)
		);
	
		//print_r(array_values($category));
			
	// create a query
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
	
//			echo 
//				'<div class="article-card">
//					<a href="'.$query->post->guid.'">
//					<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" class="article-card-img" alt="'.$query->post->post_title.'">
//						<div class="">
//							<span class="">
//								<span class="">
//									<h5>'.$query->post->post_title.'</h5>
//								</span>
//							</span>
//						</div>
//					</a>
//				</div>';
	
	
	//print_r($query);
	
		//echo $query->the_post;
		//$category =  wp_get_post_categories($query->post->ID);
		$category_detail =  get_the_category($query->post->ID);

	// I THINK WE CAN TRASH THIS CAT LOOP
//		foreach($category_detail as $cd){
//			$category_obj = $cd->cat_name;
//		}
		//$category_name = json_encode(array("categories" => $category));

		$data = array(
			'url' => $query->post->guid,
			'image' => get_the_post_thumbnail_url(get_the_ID(),'full'),
			'title' => $query->post->post_title,
			'id' => $query->post->ID,
			'category' => $category_detail[0]->cat_name,
		);
	
		//print_r($data);
	
	
		// set empty array
		$dcounts = array();

		// loop through each dataset and add to array
		foreach ($data as $row) {
			
			//echo $row->url;
			
			$dcounts[] = $row;
			
		}
	
		//print_r($dcounts);
	
	
	
		//	$dcountjson = json_encode($dcounts, JSON_PRETTY_PRINT);
		//	print_r($dcountjson);
		//
		//	echo $dcountjson;
	
	
	

	
	// LEFT OFF
	// need to figure a way to return the data on the samne page in json format 
	// or another way to capture the category information
	//
	//
	// left to do
	// -----------------------
	// finish CSS
	// get slider.js working properly
	// chips and functionality
	// mobile nav visible

	
	
		echo json_encode($data, JSON_PRETTY_PRINT);
		//echo json_encode($dcounts, JSON_PRETTY_PRINT);

	
		//print_r($query);
		endwhile;
	
		// send these categories to the chips
		//$this->category_chips($category);
	
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
 
	die();
}
 
 
add_action('wp_ajax_myfilter', 'misha_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');

?>