<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="Clare Financial Services"></div>
        <div class="item"><img src="http://clarefs.com.au/wp/wp-content/uploads/2015/10/slide2.jpg" alt="Clare Financial Services"></div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="Clare Financial Services"></div>     
	<div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg" alt="Clare Financial Services"></div>   
     </div>
    </div>
	<div class="services-wrap">
    <div id="services" class="services">
        <div class="container">
			<div class="row">
            <div class="service-box"><div class="service-box-inner text-center">
            	<a href="http://clarefs.com.au/wp/our-services/retirement-planning/"><p><span class="glyphicon glyphicon-leaf" aria-hidden="true" style="font-size: 60px;color: #4b77c1;"></span></p>
                <p>Superannuation & Retirement planning</p></a>
            </div></div>
            <div class="service-box"><div class="service-box-inner text-center">
            	<a href="http://clarefs.com.au/wp/our-services/portfolio-planning-and-management/"><p><span class="glyphicon glyphicon-signal" aria-hidden="true" style="font-size: 60px;color: #4b77c1;"></span></p>
                <p>Investing</p></a>
            </div></div>
            <div class="service-box"><div class="service-box-inner text-center">
            	<a href="http://clarefs.com.au/wp/our-services/income-and-asset-protection/"><p><span class="glyphicon glyphicon-briefcase" aria-hidden="true" style="font-size: 60px;color: #4b77c1;"></span></p>
                <p>Life Insurance, Income & Asset Protection</p></a>
            </div></div>
            <div class="service-box"><div class="service-box-inner text-center">
            	<a href="http://clarefs.com.au/wp/our-services/debt-management/"><p><span class="glyphicon glyphicon-calendar" aria-hidden="true" style="font-size: 60px;color: #4b77c1;"></span></p>
                <p>Budget & Debt Management</p></a>
            </div></div>
		<div class="service-box"><div class="service-box-inner text-center">
            	<a href="http://clarefs.com.au/wp/our-services/general-insurance/"><p><span class="glyphicon glyphicon-globe" aria-hidden="true" style="font-size: 60px;color: #4b77c1;"></span></p>
                <p>General Insurance</p></a>
            </div></div>
            </div>
        </div>
    </div>
	</div>
	<div class="clear:both;width:100%;height:1px;"></div>
	<div id="content" class="bc-content" role="main">
        <div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post -->
			<?php endwhile; ?>
            		</div>
                <div class="col-md-4 col-lg-4 bc-sidebar">
                	<a class="btn btn-default" href="http://clarefs.com.au/wp/contact-us/" role="button">Make an appointment</a>
                    <a class="btn btn-default" href="http://clarefs.com.au/wp/links-resources-calculators/" role="button">Quick links</a>
                    <a class="btn btn-default" href="http://clarefs.com.au/wp/Calculators/" role="button">Calculators</a><div class="award"><img src="<?php echo get_template_directory_uri(); ?>/img/award.jpg" alt="Award" class="img-circle"></div>
		</div>
		</div>
		</div>
		</div><!-- #content -->
<?php get_footer(); ?>