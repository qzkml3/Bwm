<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EasyBlog
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<?php
		if ( is_active_sidebar( 'dt-front-page-before-content' ) ) : ?>
		<div class="col-lg-12 col-md-12">
			<div class="dt-front-sidebar-wrap">
				<?php dynamic_sidebar( 'dt-front-page-before-content' ); ?>
			</div><!-- .dt-front-sidebar-wrap -->
		</div><!-- .col-lg-12 -->
		<?php endif; ?>

		<div class="col-lg-8 col-md-8">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php if ( have_posts() ) :

						while ( have_posts() ) : the_post();
						
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile; ?>

						<?php wp_reset_postdata(); ?>

						<div class="clearfix"></div>

						<div class="dt-pagination-nav">
							<?php echo paginate_links(); ?>
						</div><!---- .dt-pagination-nav ---->

					<?php else : ?>

						<p><?php _e( 'Sorry, no posts matched your criteria.', 'easyblog' ); ?></p>

					<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .col-lg-8 -->

		<aside class="col-lg-4 col-md-4">
			<div class="dt-sidebar">
				<?php get_sidebar(); ?>
			</div><!-- dt-sidebar -->
		</aside><!-- .col-lg-4 -->

		<?php if ( is_active_sidebar( 'dt-front-page-after-content' ) ) : ?>
			<div class="col-lg-12 col-md-12">
				<div class="dt-front-sidebar-wrap">
					<?php dynamic_sidebar( 'dt-front-page-after-content' ); ?>
				</div><!-- .dt-front-sidebar-wrap -->
			</div><!-- .col-lg-12 -->
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
