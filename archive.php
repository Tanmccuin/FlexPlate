<?php get_header(); ?>
	
	<div class="container" id="content">

		<div id="inner-content" class="row">

			<main id="main" class="col-xs-12 col-md-8 col-lg-9" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php // Edit the loop in /templates/archive-loop. Or roll your own. ?>
				<?php get_template_part( 'templates/archive', 'loop'); ?>

			</main>

			<?php get_sidebar(); ?>

		</div>

	</div>

<?php get_footer(); ?>
