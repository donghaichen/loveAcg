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
                                 <?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>
                                     <article class="post" itemscope itemtype="http://schema.org/BlogPosting">


                                         <div class="post-content" itemprop="articleBody">
                                             <?php the_content() ?>
                                         </div>
                                     </article>

                                 <?php endwhile;endif; ?>

       
    </div><!-- end #main -->
								
							</section>

						<!-- Contact -->

					</div>

<?php get_footer(); ?>