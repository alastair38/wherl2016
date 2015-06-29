<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

	<div class="blog-article large-9 medium-8 columns">

	<header class="article-header">
		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

	</header> <!-- end article header -->
	<span class="blog-byline">
	<?php

						$persons = get_field('resource_author');

						?>
						<?php if( $persons ): ?>

							<?php foreach( $persons as $person ): ?>

									by <a href="<?php echo get_permalink( $person->ID ); ?>">
										<?php echo get_the_title( $person->ID ) . ', '; ?>
									</a>

							<?php endforeach; ?>

						<?php endif; ?>
	<?php the_time('F j Y') ?></span>
	<section class="blog-content clearfix" itemprop="articleBody">

		<?php the_excerpt(); ?>
	</section> <!-- end article section -->


	<footer class="article-footer">
        <p>This article is posted in: <?php the_category(', '); ?></p>
   	    <?php the_tags(); ?>
	</footer> <!-- end article footer -->
	</div>
    <div class="archive-thumbnail large-3 medium-4 columns">
        <?php if ( has_post_thumbnail() ) {
the_post_thumbnail('full' );
} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/library/images/featured.png" alt="<?php the_title(); ?>" />
<?php } ?>
    </div>


</article> <!-- end article -->
