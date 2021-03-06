<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ECVET STEP Themes
 * @subpackage ECVET STEP One
 * @since ECVET STEP One 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<article id="post-0" class="post error404 not-found">
            	<div class="entry-container">
                	<?php if ( is_active_sidebar( 'sidebar-notfound' ) ) :
					
						dynamic_sidebar( 'sidebar-notfound' ); 
					
					else : ?>
                
                        <header class="entry-header">
                            <h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'ecvetstep' ); ?></h1>
                        </header><!-- .entry-header -->
    
                        <div class="entry-content">
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ecvetstep' ); ?></p>
    
                            <?php get_search_form(); ?>
    
                            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    
                            <div class="widget">
                                <h2 class="widget-title"><?php _e( 'Most Used Categories', 'ecvetstep' ); ?></h2>
                                <ul>
                                <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
                                </ul>
                            </div><!-- .widget -->
    
                            <?php
                            /* translators: %1$s: smilie */
                            $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'ecvetstep' ), convert_smilies( ':)' ) ) . '</p>';
                            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                            ?>
    
                            <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

						</div><!-- .entry-content -->
                   
                   <?php endif; ?>     
                        
             	</div><!-- .entry-container -->       
			</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php get_footer(); ?>