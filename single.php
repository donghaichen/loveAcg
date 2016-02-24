<?php get_header(); ?>

				<!-- Main -->
					<div id="main">

						
						<!-- Work -->
							<section class="panel" style="display: block;">
								
								
							 <div class="col-mb-12 col-8">

									 <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
										 <header> <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></header>

										 <div class="post-content" itemprop="articleBody">
											 <?php
											 if ( have_posts() ) :
												 // Start the Loop.
												 while ( have_posts() ) : the_post();
													 the_content();

											 endwhile;endif;
											 ?>

										 </div>
									 </article>


       
    </div><!-- end #main -->
								
							</section>

						<!-- Contact -->

					</div>

<?php get_footer(); ?>