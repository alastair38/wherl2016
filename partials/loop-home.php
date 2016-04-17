<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
	</header> <!-- end article header -->

    <section class="entry-content clearfix" itemprop="articleBody">
        <?php the_post_thumbnail('full');?>
    <div id="home-content"><?php the_content(); ?></div>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->


</article> <!-- end article -->
