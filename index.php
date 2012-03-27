<?php
/**
 * Template Name: Index Page
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
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1>
					<?php if( !is_page() && !is_single() ) { ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
					<?php
						} else { 
							the_title();
						} 
					?>
				</h1>
				
				<?php if(!is_page()) { ?>
				<div class="post-date">
					<span class="post-day"><?php the_time('j'); ?></span>
					<span class="post-month"><?php the_time('M'); ?></span>
					<span class="post-year"><?php the_time('Y'); ?></span>
				</div>
				<?php } ?>


				<?php if ( has_post_thumbnail() ) { ?>
					<?php 
						if( is_single() ) { 
						   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
					?>
						<div class="post-list-featured-image">
							<a href="<?php echo $large_image_url[0]; ?>" title="<?php the_title(); ?>" class="post-img-large">
								<?php 
									$args = array('class' => 'post-thumbnail' );
									the_post_thumbnail( 'medium', $args );
								?>
							</a>
						</div>
					<?php } else { ?>
						<div class="post-list-featured-image">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
					<?php }	?>
				<?php }	?>
			</header>
				<?php
					// if single post, show article, otherwise display excerpt
					if( is_single() || is_page() ) {
						the_content();
					} else {
						the_excerpt();
					}
				?>
						
				<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
			<footer>
				<?php // if single post, show some footer stuff
					if( is_single() ) { ?>
						<div class="post-meta">
							<div>
								<span class="posted-on">Posted on </span>
								<span class="posted-time"><?php the_time('F j, Y'); ?>
								</span>
							</div>
							<div>
								<span class="post-tags">Tags </span> 
								<ul class="post-tags-list">
									<li>
										<?php 
											$theTags = get_the_tag_list('','</li> &#8226;
 <li>','');	
											if(empty($theTags)) {
												echo '(No Tags)';
											} else {
												echo $theTags;
											}
										?>
									</li>
								</ul>
								</span>
							</div>
						</div>
						<div class="share-article">
							<span>Share this article via</span>
							<ul>
								<li><a href="http://twitter.com/home?status=<?php echo get_the_title() . ' ' . get_permalink();?>" target="_blank">Twitter</a></li>
								<li>&#8226;
 <a href="http://www.facebook.com/share.php?u=<?php the_permalink();?>" target="_blank">Facebook</a></li>
								<li>&#8226;
 <a class="email-article" href="mailto:?subject=<?php echo get_bloginfo('name') . ' Article: ' . get_the_title(); ?>&body=Enjoy this article:%0D%0A<<?php the_permalink(); ?>>">Email</a></li>
							</ul>
						</div>
				<?php } ?>
			</footer>
		</article>

	<?php endwhile; // end of the loop. ?>

</div><!-- end content_wrapper -->

<?php get_footer(); ?>