<?php
/*
 Template Name: Full Width Page
 * 
 * No Sidebar on this page.
*/
?>

<?php get_header(); ?>

			<div class="container" id="content">

				<div id="inner-content" class="row">

						<main id="main" class="col-xs" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php // Edit the loop in /templates/loop. Or roll your own. ?>
							<?php get_template_part( 'templates/loop'); ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
