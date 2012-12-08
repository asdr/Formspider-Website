<div id="sidebar">

    <?php //if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

		<a id="subscribe-rss" href="<?php bloginfo('rss2_url'); ?>">
			<img src="/test/images/blog/rss.jpg" />
			Subscribe to RSS feed
		</a>

    	<?php get_search_form(); ?>
    
    	<!-- <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?> -->

		<div class="dropdown hidden">
    		<h2>Tags <span class="arrow-down"></span></h2>
    	 		<ul>
		            <?php
                    query_posts('category_name=learning-center');
                    if (have_posts()) : while (have_posts()) : the_post();

                        if( get_the_tag_list() ){
                            echo $posttags = get_the_tag_list('<li>','</li><li>','</li>');
                        }

                    endwhile; endif; 

                    wp_reset_query(); 
                	?>
				</ul>
		</div>
		
		<div class="dropdown hidden">
    		<h2>Archives <span class="arrow-down"></span></h2>
    		<ul>
    			<?php wp_get_archives('type=monthly'); ?>
    		</ul>
		</div>
        
    	<?php //wp_list_bookmarks(); ?>
    
		<div class="dropdown hidden">
    		<h2>Meta <span class="arrow-down"></span></h2>
	    	<ul>
	    		<?php wp_register(); ?>
	    		<li><?php wp_loginout(); ?></li>
	    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
	    		<?php wp_meta(); ?>
	    	</ul>
		</div>
    	
    	<!-- <h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	 -->
	<?php //endif; ?>

</div>