</div> <!-- END WRAP -->

<footer class="page_footer clearfix">	
		<div id="wrap" class="clearfix">
		
		<div class="to_top right">
			<a href="#top-of-page" class="localLink" title="Back to Top">
				<span>Top</span>
			</a>
		</div>
				
		<div class="col_12">
			<div class="col_3">
				<h4>Site Menu</h4>
<?php 
	wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'footer-nav', 'menu_class' => '' , 'menu_id' => '' ) );
?>
			</div>
			<div class="col_6 contact_form">
				<h4>Contact Me</h4>		
				
				<form class="" action="">
					<ul>
						<li class="right">
							<ul class="button-bar social_buttons">
								<li>
									<a href="mailto:aaron@designliftoff.com"><span class="icon blue" data-icon="@"></span> Email
									</a>
								</li>
								<li>
									<a href="https://twitter.com/#!/mrmustarde" title="Twitter"><span class="icon blue social" data-icon="T"></span> Twitter
									</a>
								</li>
								<li>
									<a href="http://www.facebook.com/profile.php?id=100001090854741" title="Facebook" >
										<span class="icon blue social" data-icon="F"></span>
										Facebook
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com/in/aneville" title="LinkedIn" >
										<span class="icon blue social" data-icon="I"></span>
										LinkedIn
									</a>
								</li>
							</ul>
							
						</li>
						<li>
							<label for="name" class="col_2 alpha right">Name</label>
							<input type="text" class="col_10 omega" id="name"  placeholder="Your Name" />
						</li>
						<li>
							<label for="email" class="col_2 alpha right">Email</label>
							<input type="text" class="col_10 omega" id="email"  placeholder="someone@somewhere.com" />
						</li>
						<li>
							<label for="message" class="col_2 alpha right message_label">Message</label>
							<textarea class="col_10 omega" id="message" placeholder="Your message..."> </textarea>
						</li>
						<li class="col_12 right submit_item">
							<a class="blue button pop" href=""><span class="icon medium white" data-icon="@"></span>Send</a>
						</li>
					</ul>
				</form>
			</div>
			<div class="col_3 instagram_section">
				<h4>Instagram</h4>
				<?php dynamic_sidebar('Instagram Widget Section'); ?>
			</div>
							
		</div> <!-- end footer content wrapper -->
		<div class="copyright col_12">
			<span>&#169; 2012 Design Lift-Off</span>
		</div>

</div><!-- END WRAP -->
</footer>

<div class="link-admin">
	<a href="<?php echo admin_url(); ?>" class="link-admin-anchor" title="Admin" >+</a>
	
	<div class="login-form">
		<?php if (!(current_user_can('level_0'))){ ?>
		<h4>Login</h4>
		<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
			<input type="text" name="log" id="log" placeholder="username" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" size="20" />
			<input type="password" name="pwd" id="pwd" size="20"  placeholder="password" />
			<input type="submit" name="submit" value="Send" class="button" />
		    <p>
		       <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me</label>
		       <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
		    </p>
		</form>
		<a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">Recover password</a>
		<?php } else { ?>
			<h4>Currently Logged In</h4>
			<ul class="button-bar logout-form">
				<li>
					<a href="<?php echo wp_logout_url(site_url()); ?>"><span class="icon blue" data-icon="Q"></span> logout
					</a>
				</li>
				<li>
					<a href="<?php echo admin_url(); ?>"><span class="icon blue" data-icon="G"></span> admin
					</a>
				</li>
			</ul>
		<?php }?>
	</div>
</div>

</body></html>