<?php
/**
 * Template Name: Home Page
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

$templateDir = get_template_directory_uri();
$siteURL = get_site_url();

get_header(); ?>

<div class="content_wrapper home">

	<section class="welcome clearfix box">
		<header>
			<h2>
				We build rockets...<br /> er rather websites
			</h2>
		</header>
		<p>
			<em>Design Lift-Off</em> is all about making your business look great. My name is <em>Aaron Neville</em> and I design and build web sites. Maybe the rocket/business analogy is corny, but you have to admit it: <em>rockets are cool.</em>
		</p>
	</section><!-- end welcome -->

	<section class="work clearfix box">
		<div class="section_body">
			<ul class="home_portfolio fancybox">
				<li>
					<a class="fancybox-thumb" data-fancybox-group="thumb" href="<?php echo $templateDir; ?>/img/pf_slide_01.jpg" title="Fundraising University">
						<img data-fancybox-group="thumb" src="<?php echo $templateDir; ?>/img/pf_thumb_01.jpg" alt="" />
				</a></li>
				<li><a class="fancybox-thumb" data-fancybox-group="thumb" href="<?php echo $templateDir; ?>/img/pf_slide_02.jpg" title="Freedom Reserves">
					<img data-fancybox-group="thumb" src="<?php echo $templateDir; ?>/img/pf_thumb_02.jpg" alt="" />
				</a></li>
				<li><a class="fancybox-thumb" data-fancybox-group="thumb" href="<?php echo $templateDir; ?>/img/pf_slide_03.jpg" title="Youth Fundraising University">
					<img data-fancybox-group="thumb" src="<?php echo $templateDir; ?>/img/pf_thumb_03.jpg" alt="" />
				</a></li>
				<li><a class="fancybox-thumb" data-fancybox-group="thumb" href="<?php echo $templateDir; ?>/img/pf_slide_04.jpg" title="RNK Natural Horsemanship">
					<img data-fancybox-group="thumb" src="<?php echo $templateDir; ?>/img/pf_thumb_04.jpg" alt="" />
				</a></li>
				<li><a class="fancybox-thumb more-work" data-fancybox-group="thumb" href="<?php echo $siteURL; ?>/work" title="More Work">
					<img data-fancybox-group="thumb" src="<?php echo $templateDir; ?>/img/logo_rocketcircle.png" alt="" />
				</a></li>
			</ul>
		</div>
	</section><!-- end work -->

	<section class="process clearfix box">
		<header>
			<h2>The Process</h2>
			<p>A standard outline for the web design process</p>
		</header>
		<div class="section_body">
			<ul class="clearfix">
				<li class="col_3">
					<a href="<?php echo $siteURL; ?>/web-design-process#process_1" title="The Process">
						<img src="<?php echo $templateDir; ?>/img/fig_process-1.png" alt="" class="process_figure" />
						<h3>Plan</h3>
						<p>Work with client to determine goals. Research audience, software, and resources. Document project, roles, copyright, and financial points.</p>
					</a>
				</li>
				<li class="col_3">
					<a href="<?php echo $siteURL; ?>/web-design-process#process_2" title="The Process">
						<img src="<?php echo $templateDir; ?>/img/fig_process-2.png" alt="" class="process_figure" />
						<h3>Design</h3>
						<p>Mock-up project elements and begin review and approval cycle. Prepare pages for development by implementing graphic designs with HTML and CSS.</p>
					</a>
				</li>
				<li class="col_3">
					<a href="<?php echo $siteURL; ?>/web-design-process#process_3" title="The Process">
						<img src="<?php echo $templateDir; ?>/img/fig_process-3.png" alt="" class="process_figure" />
						<h3>Develop</h3>
						<p>Modify pages as templates and load them in to a content management system (CMS). Fill CMS with content. Begin testing, verifying links and functionality.</p>
					</a>
				</li>
				<li class="col_3">
					<a href="<?php echo $siteURL; ?>/web-design-process#process_4" title="The Process">
						<img src="<?php echo $templateDir; ?>/img/fig_process-4.png" alt="" class="process_figure" />
						<h3>Launch</h3>
						<p>Focus upon the finer details in the revision process. Ensure that site is live. Further testing and final checks. Present to client and assist with promotion as required.</p>
					</a>
				</li>
			</ul>
		</div>
	</section><!-- end process -->

</div><!-- end content_wrapper -->

<?php get_footer(); ?>