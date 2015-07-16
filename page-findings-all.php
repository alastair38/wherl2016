<?php
/*
Template Name: All Findings Minimal
*/
?>


<?php get_header(); ?>

<?php

$findings_link = get_post_type_archive_link( 'finding' );
$field = get_field_object('finding_type');

$args = array();
$args['form'] = array('action' => '',
                                'method' => 'GET');
$args['wp_query'] = array('post_type' => array('finding'),
                          'posts_per_page' => 10,
                          'orderby'    => 'meta_value_num',
                          'order'      => 'DESC',
                          'meta_key'  => 'findings_date'

                          );
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'findings_date',
                  'format' => 'select',
                  'allow_null' => "CHOOSE YEAR",
                  'data_type' => 'DATE',
                  'compare' => 'LIKE',
                  'values' => array(  '2014' => '2014', '2015' => '2015', '2016' => '2016', '2017' => '2017',));
$args['fields'][] = array(
                  'type' => 'taxonomy',
                  'taxonomy' => 'findings_categories',
                  'format' => 'select',
                  'allow_null' => "CHOOSE TYPE",
                  'values' => array( 'policy-outputs' => 'Policy Outputs', 'presentations' => 'Presentations', 'publications' => 'Publications'));
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'findings_project',
                  'format' => 'select',
                  'allow_null' => "CHOOSE PROJECT",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array(  '37' => 'Allostatic Load Over Time and Paid Work', '38' => 'Modelling Life Histories', '39' => 'Modelling Retirement Income', '40' => 'Paid Work and Health', '41' => 'Paid Work and Mental Health', '42' => 'Paid Work, Health and Cohort Change'));
$args['fields'][] = array(
                  'type' => 'meta_key',
                  'meta_key' => 'resource_author',
                  'format' => 'select',
                  'allow_null' => "CHOOSE AUTHOR",
                  'data_type' => 'CHAR',
                  'compare' => 'LIKE',
                  'values' => array( '108' => 'John Adams', '103' => 'Chris Brooks', '105' => 'Nicholas Campbell', '63' => 'Dr Laurie Corna', '64' => 'Chris Curry', '107' => 'Mel Duffield', '65' => 'Dr Giorgio Di Gessa', '102' => 'Dr Marcus Green', '66' => 'Professor Karen Glaser', '106' => 'Simon Marlow', '67' => 'Dr Peggy McDonough', '71' => 'Dr Loretta Platts', '109' => 'Shamil Popat', '68' => 'Dr Debora Price', '104' => 'Phil Rossall', '72' => 'Lawrence Sacco', '73' => 'Professor Amanda Sacker', '74' => 'Professor Robert Stewart', '69' => 'Rachel Stutchbury', '70' => 'Dr Diana Worts'));
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
                    <div id="search" class="row" role="aside">
                    <h5>Filter</h5>
                    <div class="columns" >
                    <?php $my_search->the_form(); ?>
                     </div>


                    </div>



					<div id="search-results" class="large-12 medium-8 columns clearfix" role="main">

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
