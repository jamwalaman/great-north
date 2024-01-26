			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_single() || is_archive()) :
			?>
				</div><!-- /.col -->

				<?php
				get_sidebar();
				?>

				</div><!-- /.row -->
			<?php
			endif;
			?>
			</main><!-- /#main -->
			<footer id="footer">
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<?php
								$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

								if (!empty($header_logo)) :
								?>
									<img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
								<?php
								else :
									echo esc_attr(get_bloginfo('name', 'display'));
								endif;
								?>
							</a>
						</div>

					</div><!-- /.row -->
				</div><!-- /.container -->
			</footer><!-- /#footer -->
			</div><!-- /#wrapper -->
			<?php
			wp_footer();
			?>
			</body>

			</html>