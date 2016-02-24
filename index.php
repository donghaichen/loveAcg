<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


				<!-- Main -->
					<div id="main">

						
						<!-- Work -->
							<section class="panel" style="display: block;">
								
								
							 <div class="col-mb-12 col-8">
        
            <article class="post" itemscope="" itemtype="http://schema.org/BlogPosting" style="
    min-height: 450px;
">
    			<header class="index">
									<h1><?php $this->options->title() ?></h1>
								
									<p><?php $this->options->description() ?></p>
								</header>
    			
                <div class="post-content mobile-hide" itemprop="articleBody" style="
    float: right;
">
<img src="<?php $this->options->themeUrl('/assets/images/me.jpg'); ?>" alt="">
        			
                </div>
    		</article>

           
    </div><!-- end #main -->
								
							</section>

						<!-- Contact -->

					</div>

<?php $this->need('footer.php'); ?>