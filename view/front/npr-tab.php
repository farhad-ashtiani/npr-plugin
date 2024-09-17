<?php
function wp_npr_layout(){
    ?>
    <div class="wrap">
        <ul class="tabs group">
            <li><a class="active" href="#/one">جدیترین ها</a></li>
            <li><a href="#/two">محبوب ترین ها</a></li>
            <li><a href="#/three">مطالب تصادفی</a></li>
        </ul>
        <div id="content">
            <div id="one">
                <ul>
                   <?php include_once NPR_PLUGIN_DIR.'_inc/top-new-post.php'?>
                </ul>
            </div>
            <div id="two">
                <ul>
                    <?php include_once NPR_PLUGIN_DIR.'_inc/top-comment-post.php'?>
                </ul>
            </div>
            <div id="three">
                <ul>
                    <?php include_once NPR_PLUGIN_DIR.'_inc/rand-post.php'?>
                </ul>
            
            </div>
        </div>
    </div>
<?php
}
add_shortcode('npr_tab','wp_npr_layout');

/*$categories=get_categories();   foreach($categories as $category) {     echo "<input type='checkbox' name='mychecky' value='$category->term_id' />";    echo $category->cat_name;
    echo '<br>';    }*/


