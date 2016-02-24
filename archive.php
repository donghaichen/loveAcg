<?php get_header(); ?>


				<!-- Main -->
					<div id="main">

						
						<!-- Work -->
							<section class="panel" style="display: block;">
								
								
							 <div class="col-mb-12 col-8">
								 <?php if ( have_posts() ) :while ( have_posts() ) : the_post(); ?>
									 <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
										 <header>
											 <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
										 </header>

										 <div class="post-content" itemprop="articleBody">
											 <?php echo mb_strimwidth(strip_tags(apply_filters(‘the_content’, $post->post_content)), 0, 200,”…”); ?>
										 </div>
									 </article>

								 <?php endwhile;endif; ?>
								 <?php pagination($query_string); ?>
							 </div><!-- end #main -->
								
							</section>

						<!-- Contact -->

					</div>

<?php get_footer(); ?>
