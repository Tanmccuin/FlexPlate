<?php
/*
 Template Name: Sidebar Page
 
 * This is a default page with a sidebar. 
 * 
 * 
 * For more info: http://codex.wordpress.org/Page_Templates
 * 
 * Visual interactive WordPress template hierarchy: https://wphierarchy.com
*/
?>

<?php get_header(); ?>

			<div class="container" id="content">

				<div id="inner-content" class="row">

						<main id="main" class="col-xs-12 col-md-8 col-lg-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php // Edit the loop in /templates/loop. Or roll your own. ?>
							<?php get_template_part( 'templates/loop'); ?>

						</main>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
