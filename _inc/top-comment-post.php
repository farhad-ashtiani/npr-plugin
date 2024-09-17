<?php
$args =[
    'post_type'=>['post','tech'],
    'post_status'=>'publish',
    'order'=>'DESC',
    'orderby'=>'comment_count',
    'post_per_page'=>5
];
$the_query = new WP_Query($args);
if($the_query->have_posts()):
    while ($the_query->have_posts()) : $the_query->the_post();?>
        <li><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></li>
<?php
endwhile;
wp_reset_postdata();
    endif;
