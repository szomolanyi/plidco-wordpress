<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="banner">
  <?php
    $image = get_field('banner');
    if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="content-editable banner-img" />
  <?php endif; ?>
</div>

<div class="main-content">
  <div class="content inter-content">
    <div class="content-editable content-right">
      <?php the_content(); ?>
    </div>
    <div class="content-editable content-left">
      <?php
				$image1 = get_field('left_image');
				/*echo '<pre>';
					var_dump( $image1 );
				echo '</pre>';*/
				if( !empty($image1) ): ?>
					<h1><?php echo $image1['caption']; ?></h1>
					<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
					<h1><?php echo $image1['description']; ?></h1>
			<?php endif; ?>
	  </div>
  </div>
</div>
