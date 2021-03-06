<?php
/**
 * @subpackage beetech
 */

get_header(); ?>
<div class="bt-wrapper">
    <div class="content-wrap-main">
    	<div id="primary" class="content-area">
    		<main id="main" class="site-main" role="main">
    
    		<?php
    		if ( have_posts() ) :
    
    			if ( is_home() && ! is_front_page() ) : ?>
    				<header>
    					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    				</header>
    
    			<?php
    			endif;
    
    			/* Start the Loop */
    			while ( have_posts() ) : the_post();
    
    				/*
    				 * Include the Post-Format-specific template for the content.
    				 * If you want to override this in a child theme, then include a file
    				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content', 'archive' );
    
    			endwhile;
    
    			the_posts_navigation();
    
    		else :
    
    			get_template_part( 'template-parts/content', 'none' );
    
    		endif; ?>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->

<?php
beetech_get_sidebar();
?></div>
</div><?php 
get_footer();
