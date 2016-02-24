<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


				<!-- Main -->
					<div id="main">

						
						<!-- Work -->
							<section class="panel" style="display: block;">
								
								
							 <div class="col-mb-12 col-8">
        
            <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting" style="
    min-height: 450px;
">
    			<header class="index">
									 <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
            <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
								</header>
    			
                   		</article>

           
    </div><!-- end #main -->
								
							</section>

						<!-- Contact -->

					</div>

<?php $this->need('footer.php'); ?>