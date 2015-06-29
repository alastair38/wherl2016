<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

   <div class="date">
<?php the_time('F j, Y') ?>
    </div>

	<div class="blog-article large-12 columns">

	<header class="article-header">

		<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

	</header> <!-- end article header -->

	<section class="news-content clearfix" itemprop="articleBody">
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
	</div>



</article> <!-- end article -->
