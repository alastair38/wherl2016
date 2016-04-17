<div class="large-12 columns show-for-large-up">
	<div class="fixed">

		<!-- If you want to use the more traditional "fixed" navigation.
		 simply replace "sticky" with "fixed" -->

		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<!-- Title Area -->

					<li class="name">
					<h1 class="title"><a href="<?php echo home_url(); ?>" title="This will take you home" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
				</li>


				<li class="toggle-topbar menu-icon">
					<a href="#"><span>Menu</span></a>
				</li>
			</ul>



<section class="top-bar-section notie">

        <?php joints_main_nav(); ?>

</section>


<!--[if lt IE 9]>

<section class="top-bar-section">

        <?php joints_footer_links(); ?>

			</section>

<![endif]-->

		</nav>
	</div>
</div>

<div class="large-12 columns show-for-medium-down">
	<div class="contain-to-grid fixed">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				<h1 class="title-mob"><img src="<?php echo get_template_directory_uri(); ?>/library/images/header_logo.png"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h1>
			</section>
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
			</section>

		</nav>
	</div>
</div>

<aside class="left-off-canvas-menu show-for-medium-down">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>
	</ul>
</aside>




<a class="exit-off-canvas"></a>
