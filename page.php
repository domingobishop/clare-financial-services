<?php get_header(); ?>

		<div id="content" class="bc-content page" role="main">
        <div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-8">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="page-header">

						<h1><?php the_title(); ?></h1>
					</div>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->
			
			<?php endwhile; ?>
            
            	</div>
<div class="col-md-4 col-lg-4 bc-sidebar">
                	<div class="sidebar-container">
                        <?php if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
                            <ul class="sidebar5">
                                <?php dynamic_sidebar( 'sidebar-5' ); ?>
                            </ul>
                        <?php } ?> 
                    </div>
</div>
			</div>
		</div>

		</div><!-- #content -->

<?php get_footer(); ?>