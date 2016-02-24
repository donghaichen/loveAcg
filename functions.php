<?php
if(function_exists('register_nav_menus')){
    register_nav_menus( array(
        'header-menu' => __( 'topnav' )
    ) );
};
function pagination($query_string){
    global $posts_per_page, $paged;
    $my_query = new WP_Query($query_string ."&posts_per_page=-1");
    $total_posts = $my_query->post_count;
    if(empty($paged))$paged = 1;
    $prev = $paged - 1;
    $next = $paged + 1;
    $range = 2; // only edit this if you want to show more page-links
    $showitems = ($range * 2)+1;

    $pages = ceil($total_posts/$posts_per_page);
    if(1 != $pages){
        echo "<div class='pagination page-navigator'>";
        echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<li><a href='".get_pagenum_link(1)."'>最前</a></li>":"";
        echo ($paged > 1 && $showitems < $pages)? "<li><a href='".get_pagenum_link($prev)."'>上一页</a></li>":"";

        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
            }
        }

        echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."'>下一页</a>" :"";
        echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."'>最后</a>":"";
        echo "</div>\n";
    }
}
