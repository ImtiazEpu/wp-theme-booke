<div class="site-section py-5 bg-primary">
    <div class="container">
        <h3 class="text-white h4 mb-3 ml-3"><?php _e('Subscribe For The New Updates','booke')?></h3>
        <div class="d-flex">
            <input type="text" class="form-control mr-4 px-4" placeholder="Enter your email address...">
            <input type="submit" class="btn btn-white px-4" value="Send Email">
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-12">
						<?php
							if ( is_active_sidebar( "footer-left" ) ) {
								dynamic_sidebar( "footer-left" );
							}
						?>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 ml-auto">

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4"><?php _e( "Navigation", "booke" ) ?></h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footermenu',
								'menu_id'        => 'footermenu',
								'menu_class'     => 'list-unstyled'
							) );
						?>
                    </div>

                </div>

            </div>


            <div class="col-lg-4 mb-5 mb-lg-0" id="contact-section">
				
				<?php
					if ( is_active_sidebar( "footer-right" ) ) {
						dynamic_sidebar( "footer-right" );
					}
				?>
            </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="mb-4">
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<?php echo date( 'Y' ) ?>
					<?php
						if ( is_active_sidebar( "footer-bottom" ) ) {
							dynamic_sidebar( "footer-bottom" );
						}
					?>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>

        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>