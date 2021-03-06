<?php
/**
 * The template for displaying content in the page.php template
 *
 * @package ECVET STEP Themes
 * @subpackage ECVET STEP One
 * @since ECVET STEP One 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if ( function_exists( 'ecvetstep_content_image' ) ) : ecvetstep_content_image(); endif; ?>
    
    <div class="entry-container">
    
		<header class="entry-header">
    		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ecvetstep' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
        	<?php the_content(); ?>
         	<?php wp_link_pages( array( 
				'before'		=> '<div class="page-link"><span class="pages">' . __( 'Pages:', 'ecvetstep' ) . '</span>',
				'after'			=> '</div>',
				'link_before' 	=> '<span>',
				'link_after'   	=> '</span>',
			) ); 
			?>
     	</div><!-- .entry-content -->
        
        <footer class="entry-meta">          
            <?php edit_post_link( __( 'Edit', 'ecvetstep' ), '<span class="edit-link">', '</span>' ); ?>        
        </footer><!-- .entry-meta -->
        
  	</div><!-- .entry-container -->
    
</article><!-- #post-<?php the_ID(); ?> -->