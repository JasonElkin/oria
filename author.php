<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Oria
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth author-archive">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header clearfix">
				<?php echo get_avatar( get_the_author_meta('email'), '200' ); ?>
				<h1 class="author-title"><?php echo esc_html( get_the_author() ); ?></h1>
				<p class="author-description"><?php the_author_meta('description'); ?></p>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="posts-layout">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
