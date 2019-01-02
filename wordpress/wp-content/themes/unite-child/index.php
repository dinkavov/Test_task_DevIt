<?php
/**
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">

		<?php

            $query = new WP_Query( ['post_type' => 'movie'] );
            
            while ( $query->have_posts() ) {
                $query->the_post();
                get_template_part( 'content', get_post_format() );

            }
            wp_reset_postdata(); ?>

			<?php unite_paging_nav(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
