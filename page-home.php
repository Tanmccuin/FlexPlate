<?php
/*
 Template Name: Home Page
 * 
 * Use this template for a static home page. 
 * If you don't need the main loop, remove it
 * and get busy.
*/
?>

<?php get_header(); ?>

			<div class="container" id="content">

				<div id="inner-content" class="row">

						<main id="main" class="col-xs" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php // Edit the loop in /templates/loop. Or roll your own. ?>
							<?php get_template_part( 'templates/loop'); ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
