<?php
/**
 * Template Name: Work Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Design Lift-Off Theme
 */

$theURL = get_template_directory_uri();

get_header(); ?>

<div class="content_wrapper index">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<ul class="product_list shadow-box-container">
			<?php
				$args = array( 'post_type' => 'portfolio-item' );
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); 
			?> 
				<li class="portfolio-list-item col_3 clearfix">
					<div class="portfolio-list-thumb no-js">
						<a href="<?php print_custom_field('image_large'); ?>">
							<?php print_custom_field('image:to_image_tag','thumbnail'); ?>
							<span><?php the_title(); ?></span>
						</a>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
<?php endwhile; // end of the loop. ?>

</div><!-- end content_wrapper -->

<?php get_footer(); ?>