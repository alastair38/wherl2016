<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

   <div class="date">
   <?php $date = DateTime::createFromFormat('Ymd', get_field('event_start'));
echo $date->format('F d, Y'); ?>
	<?php if( get_field('event_time') ){
        echo ' / ' . get_field('event_time');
}
?>
    </div>

	<div class="blog-article large-12 columns">

	<header class="article-header">

		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

	</header> <!-- end article header -->

	<section class="event-content clearfix" itemprop="articleBody">
		<?php the_excerpt(); ?>

		<?php if( get_field('event_address') ): ?>
                                   <i class="fi-marker" title="Event Location"> </i>
                                    <span><?php the_field('event_address'); ?></span>
                                    <?php endif; ?>
	</section> <!-- end article section -->

    <footer class="article-footer">
         <?php if( get_field('conference_name') ): ?>
              <?php $date = DateTime::createFromFormat('Ymd', get_field('findings_date'));
                    $date = ' (' . $date->format('d F Y') . ')'; ?>
        <p>Presented at <strong><?php echo get_field('conference_name') .  $date ;?></strong></p>
                            <?php endif; ?>
	</footer> <!-- end article footer -->


	</div>



</article> <!-- end article -->
