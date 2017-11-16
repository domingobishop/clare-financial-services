		</div><!-- #main -->
		<footer id="foot" class="bc-footer">
			<div class="container">
                <div class="row text-center">
                    <div class="footer-col col-md-3">
                        <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
                            <ul class="sidebar1">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            </ul>
                        <?php } ?>
                    </div>
                    <div class="footer-col col-md-3">
                        <?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
                            <ul class="sidebar2">
                                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                            </ul>
                        <?php } ?> 
                    </div>
                    <div class="footer-col col-md-3">
                        <?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                            <ul class="sidebar3">
                                <?php dynamic_sidebar( 'sidebar-3' ); ?>
                            </ul>
                        <?php } ?>
                    </div>
                    <div class="footer-col col-md-3">
                        <?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
                            <ul class="sidebar4">
                                <?php dynamic_sidebar( 'sidebar-4' ); ?>
                            </ul>
                        <?php } ?> 
                    </div>
                </div>
                <div class="row bc-info">
					<div class="col-lg-8 col-lg-offset-2 text-center">
                    <p>
                        <small><?php echo esc_attr( get_option('footer_1') ); ?><br>
                            <a href="http://clarefs.com.au/wp/terms-conditions" target="_blank">Terms and Conditions</a></small>
                    </p>
                    <p>
                        <small>Any advice in this site is of a general nature only and has not been tailored to your personal circumstances.
                        Please seek personal advice prior to acting on this information. Please note that GWM Adviser Services is not
                        responsible for the advice and services provided by Clare General Insurance Services Pty Ltd.<br/>
                        Graeme Wandel is an owner of Clare General Insurance Services Pty Ltd and as a result will receive
                        distributions and/or other benefits from Clare General Insurance Services Pty Ltd.</small>
                    </p>
                    	<p><small>Copyright © <?php echo date("Y"); ?></small></p> 
			<p><small><a href="http://creatistic.com.au" target="_blank">Website made by Creatistic</a></small></p> 
                    </div>
                </div>
            </div>
		</footer><!-- #foot -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
    
    <!-- jQuery -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
    <!-- Additional JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bc.js"></script>
    
    
</body>
</html>