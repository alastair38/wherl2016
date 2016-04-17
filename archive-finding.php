
<?php get_header(); ?>

<?php

$findings_link = get_post_type_archive_link( 'finding' );
$field = get_field_object('finding_type');

$args = array();
$args['form'] = array('action' => '',
                                'method' => 'GET');
$args['wp_query'] = array('post_type' => array('finding'),
                          'posts_per_page' => 10

                          );
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'finding_type',
                  'format' => 'select',
                  'allow_null' => "CHOOSE FINDING TYPE",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( 'policy' => 'Policy Outputs', 'presentations' => 'Presentations', 'publications' => 'Publications'));
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'findings_project',
                  'format' => 'select',
                  'allow_null' => "CHOOSE PROJECT",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( '186' => 'Allostatic Load Over Time and Paid Work', '187' => 'Modelling Life Histories', '188' => 'Modelling Retirement Income', '189' => 'Paid Work and Health', '190' => 'Paid Work and Mental Health', '191' => 'Paid Work, Health and Cohort Change'));
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'resource_author',
                  'format' => 'select',
                  'allow_null' => "CHOOSE AUTHOR",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( '103' => 'Dr Laurie Corna', '170' => 'Chris Curry', '101' => 'Dr Giorgio Di Gessa', '105' => 'Professor Karen Glaser', '168' => 'Dr Peggy McDonough', '194' => 'Dr Loretta Platts', '104' => 'Dr Debora Price', '195' => 'Lawrence Sacco', '196' => 'Professor Amanda Sacker', '197' => 'Professor Robert Stewart', '102' => 'Rachel Stutchbury', '169' => 'Dr Diana Worts'));
$args['fields'][] = array('type' => 'search',
                          'placeholder' => 'Enter search terms here',
                          'title' => 'Search',
                          'value' => '');
$args['fields'][] = array('type' => 'submit',
                          'value' => 'Search');
$args['fields'][] = array('type' => 'html',
                          'value' => '<div id="reset"><a href="' . $findings_link . '">Reset</a></div>');


$my_search = new WP_Advanced_Search($args);

?>




			<div id="content">

				<div id="inner-content" class="clearfix">

                  <div id="search-page" class="large-12 columns" role="main">
                   <h1 class="page-title"><?php echo 'Findings' ;?></h1>
                    <div id="search" class="large-4 medium-4 columns " role="aside">
                    <h5>Filter</h5>
                    <?php $my_search->the_form(); ?>



                    </div>



					<div id="search-results" class="large-8 medium-8 columns first clearfix" role="main">

						<?php


$my_search = new WP_Advanced_Search($args);
$temp_query = $wp_query;
$wp_query = $my_search->query();?>

<?php
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

<?php get_template_part( 'partials/loop', 'findings-search' ); ?>

<?php    endwhile;

$my_search->pagination(array('prev_text' => '«','next_text' => '»'));

endif;
wp_reset_query();
$wp_query = $temp_query;
?>


                      </div>

				    </div> <!-- end #main -->


    			</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
