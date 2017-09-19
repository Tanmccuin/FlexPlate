<?php 
/*
 * Custom Post Type Archive Template
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type call is "register_post_type( 'staff' )",
 * then your template name should be archive-staff.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div class="container" id="content">

				<div id="inner-content" class="row">

					<main id="main" class="col-xs-12 col-md-8 col-lg-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<h1 class="archive-title h2"><?php post_type_archive_title(); ?></h1>

							<?php // Edit the loop in /templates/archive-loop. Or roll your own. ?>
							<?php get_template_part( 'templates/archive', 'loop'); ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
