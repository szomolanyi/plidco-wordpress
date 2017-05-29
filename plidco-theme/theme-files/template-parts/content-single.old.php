<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header pl-product__header">

		<?php
			$image = get_field('banner');
			if( !empty($image) ): ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="pl-product--wrap">
		<div class="pl-product--left">
			<?php
				$image1 = get_field('left_image');
				/*echo '<pre>';
					var_dump( $image1 );
				echo '</pre>';*/
				if( !empty($image1) ): ?>
					<p><?php echo $image1['caption']; ?></p>
					<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
					<p><?php echo $image1['description']; ?></p>
			<?php endif; ?>
		</div>
		<div class="pl-product--right">
			<?php the_content(); ?>
		</div>
	</div>

</article><!-- #post-## -->
