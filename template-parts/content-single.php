<?php
/**
 * @package Oria
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="single-thumb">
			<?php the_post_thumbnail('oria-large-thumb'); ?>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
		<div class="entry-meta">
			<?php oria_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'oria' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
	<footer class="entry-footer">
		<?php oria_entry_footer(); ?>

		<!--<div class="author-bio">
			<?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
			<h3 class="author-title">Written by <?php the_author_link(); ?></h3>
			<p class="author-description"><?php the_author_meta('description'); ?></p>
	  </div>-->

	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
