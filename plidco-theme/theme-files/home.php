<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php
$the_query = new WP_Query( array( 'category_name' => 'homepage', 'posts_per_page' => 1 ) );
// Start the loop.
while ( $the_query->have_posts() ) : $the_query->the_post();
  /*
   * Include the Post-Format-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
   */
  //get_template_part( 'template-parts/content', get_post_format() );
?>

  <div class="banner slideshow">
		<a href="">
			<img class="banner-img slide-img"
			     src="http://plidco.com/resources/uploaded/images/Plidco_Home_Rotationals_Final_1250.png"
			     alt="environment 2"/>
		</a>
		<a href="">
			<img class="banner-img slide-img"
			     src="http://plidco.com/resources/uploaded/images/Ready for Emergency2.png"
			     alt="ReadyForEmergency2"/>
		</a>
		<a href="">
			<img class="banner-img slide-img"
			     src="http://plidco.com/resources/uploaded/images/PowerGrip2.png"
			     alt="PowerGrip2"/>
		</a>
		<a href="">
			<img class="banner-img slide-img"
			     src="http://plidco.com/resources/uploaded/images/custom solutions for you.png"
			     alt="CustomSolutions"/>
		</a>
		<a href="">
			<img class="banner-img slide-img"
			     src="http://plidco.com/resources/uploaded/images/OffshoreRepair2.png"
			     alt="offshore2"/>
		</a>
	</div>
<!--
  <div class="mobile-nav-slider">
    <div>
      <a href="/">Home</a>
      <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/about-plidco">About</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/product-line">Products</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/videos">Videos</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/distributor-locator">Find Distributor</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/request-quote">Request Quote</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/request-catalog">Catalog</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
    <div>
        <a href="/contact">Contact</a>
        <img src="http://plidco.com/modules/default/resources/images/red-button.png">
    </div>
  </div>
-->
  <div class="main-content">


    <div class="head">
    <h1>Making Hazardous Pipeline Repair Safer</h1>
    <div class="content-editable" data-id="189">
      <?php the_content();?>
      Since 1949, PLIDCO<sup>®</sup> has been the leader in pipeline repair fittings by creating innovative solutions to help minimize costly shutdowns and assure worker safety. With hundreds of thousands of fittings installed around the world, PLIDCO<sup>®</sup> is the number one source for safe, reliable pipeline repair products.</div>
    </div>
    <div class="content">
      <?php
        $post_left = get_field('home_page_left_post');
        $post_middle = get_field('home_page_middle_post');
        $post_right = get_field('home_page_right_post');
      ?>
    <div class="content-editable content-interior left" data-id="191">
      <?php
      // override $post
      setup_postdata( $post_left );
      the_content();?>
    </div>
    <div class="content-editable content-interior middle" data-id="192">
      <?php
      // override $post
      setup_postdata( $post_middle );
      the_content();?>
    <h1><a href="../../../slideshow">See PLIDCO Application Slide Show</a></h1>
    <a href="../../../slideshow"><img src="../../../resources/uploaded/images/Screen Shot 2015-10-07 at 11.20.05 PM.png" alt="" width="338" height="253" /></a>
    </div>
    <div class="content-editable content-interior right" data-id="193">
      <?php
      // override $post
      setup_postdata( $post_right );
      the_content();?>
    <img src="../../../resources/uploaded/images/plidco catalog.png" alt="" width="203" height="265" />

    <a href="../../../request-catalog">Click here to receive</a> the PLIDCO<sup>®</sup> full line pipeline repair product catalog.

    </div>
    </div>
  </div>

<?php
	// End the loop.
	endwhile;
?>

<?php get_footer(); ?>
