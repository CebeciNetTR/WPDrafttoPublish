<?php
$safeurl=112; // security cron
if(isset($_GET['run']) && $_GET['run']==$safeurl){

include("wp-config.php");
include("wp-load.php");
include("wp-admin/includes/taxonomy.php");
include("wp-admin/includes/post.php");

$args= [
    'post_status' => 'draft',
    'posts_per_page' => 1,
    'orderby' => 'rand'
        ];

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo get_the_title().'<br>';
$title=get_the_title();
$postid=get_the_ID();
    }


     $drafttopublish = [
        'ID' => $postid, 
        'post_status' => 'publish', 
        'post_date' => current_time('mysql'), 
        'post_date_gmt' => current_time('mysql', 1)
    ];
    if(wp_update_post($drafttopublish))
    {
        echo $title." post published";
    }
}
else {
    echo "Post Notfound";
}

}else{ echo "nothing";}

?>
