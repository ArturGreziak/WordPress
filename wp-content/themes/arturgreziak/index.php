<?php
get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
        echo '<h1 class="page_title_w">'.get_the_title().'</h1>';
        echo '<p class="main_content_w">'.get_the_content().'</p>';
        
        
	} 
}

echo '<h1 class="main_section_description_w">Ostatnie wpisy</h2>';
echo '<div class="last_posts_section_w">';
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
     'posts_per_page' => 3,
      'order' => 'ASC'
);

$the_query = new WP_Query($args);
if($the_query -> have_posts()){
    while($the_query -> have_posts()){
        $the_query -> the_post();
        echo '<div class="last_post_item_w">';
            the_title();
            echo '</br>';
            the_content();
            echo '</br>'; 
        echo '</dvi>';
    }
}

wp_reset_postdata();
echo '</div>';



get_footer();