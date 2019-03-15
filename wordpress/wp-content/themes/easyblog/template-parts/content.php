<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EasyBlog
 */

?>

<div class="dt-archive-posts">

	<div class="dt-archive-post">

		<?php if ( has_post_thumbnail() ) : ?>

		<figure>
			<?php the_post_thumbnail( 'easyblog-blog-img' ); ?>
		</figure>

		<?php endif; ?>

		<article>
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="dt-archive-post-content">
				<?php the_excerpt(); ?>
			</div><!-- .dt-archive-post-content -->

			<div class="entry-footer">
				<a class="transition35" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php _e( 'Read more', 'easyblog' ); ?></a>
			</div><!-- .entry-footer -->
		</article>
	</div><!-- .dt-archive-post -->

</div><!-- .dt-category-posts -->
