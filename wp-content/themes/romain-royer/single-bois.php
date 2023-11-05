<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Romain_Royer
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) : ?>
			<section class="single-card">
				<?php the_post();?>
				<div class="single-card_content">
					<?php get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'romain-royer' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'romain-royer' ) . '</span> <span class="nav-title">%title</span>',
						)
					);?>
				</div>
			</section> 

			<!-- // If comments are open or we have at least one comment, load up the comment template. -->
			<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>

		<?php endwhile; // End of the loop.
		?>



	</main><!-- #main -->

<?php
get_footer();
