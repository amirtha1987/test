<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oceanedge
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		if(!is_singular()) {
			oceanedge_post_thumbnail();
		}
	?>
	<header class="entry-header mb-2">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				oceanedge_posted_on();
				oceanedge_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php if(!is_singular()){ ?>
				<div class="entry-content">
					<?php
					if ( is_single() ) :
						the_content();
						
						wp_link_pages(
							array(
								'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'oceanedge' ) . '">',
								'after'    => '</nav>',
								/* translators: %: Page number. */
								'pagelink' => esc_html__( 'Page %', 'oceanedge' ),
							)
						);

					else :
						the_excerpt();
					?>
						<div class="readmore-meta mb-2">
							<a href="<?php the_permalink(); ?>"><?php echo __( 'Read More', 'oceanedge' ) ?> ></a>
						</div>
					<?php
					endif;
					?>
				</div><!-- .entry-content -->
			<?php } ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php 
		if(is_singular()) {
			oceanedge_post_thumbnail();
		}
	?>

	<?php if(is_singular()){ ?>
	<div class="entry-content">
		<?php
		if ( is_single() ) :
			the_content();
			
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'oceanedge' ) . '">',
					'after'    => '</nav>',
					/* translators: %: Page number. */
					'pagelink' => esc_html__( 'Page %', 'oceanedge' ),
				)
			);

		else :
			the_excerpt();
		?>
			<div class="readmore-meta mb-2">
				<a href="<?php the_permalink(); ?>"><?php echo __( 'Read More', 'oceanedge' ) ?> ></a>
			</div>
		<?php
		endif;
		?>
	</div><!-- .entry-content -->
	<?php } ?>

</article><!-- #post-<?php the_ID(); ?> -->
