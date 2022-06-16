<?php
/**
 * @package unitone
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * Filters the list of allowed template part area values.
 *
 * @param array $default_area_definitions An array of supported area objects.
 * @return array
 */
function unitone_default_wp_template_part_areas( $default_area_definitions ) {
	return array_merge(
		$default_area_definitions,
		array(
			array(
				'area'        => 'unitone/contents/post',
				'label'       => __( 'Post contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/contents/page',
				'label'       => __( 'Page contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/post',
				'label'       => __( 'Post page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/page-header/page',
				'label'       => __( 'Page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/404',
				'label'       => __( '404 contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/404',
				'label'       => __( '404 page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/home',
				'label'       => __( 'Home contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/home',
				'label'       => __( 'Home page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/archive',
				'label'       => __( 'Archive contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/archive',
				'label'       => __( 'archive page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/search',
				'label'       => __( 'Search contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/search',
				'label'       => __( 'Search page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/product-archive',
				'label'       => __( 'WooCommerce product archive contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/product-archive',
				'label'       => __( 'WooCommerce product archive page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/product',
				'label'       => __( 'WooCommerce product contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/product',
				'label'       => __( 'WooCommerce product page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/contents/bbpress',
				'label'       => __( 'bbPress contents', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'main',
			),
			array(
				'area'        => 'unitone/page-header/bbpress',
				'label'       => __( 'bbPress page header', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'header',
			),
			array(
				'area'        => 'unitone/comments',
				'label'       => __( 'Comments', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'div',
			),
			array(
				'area'        => 'unitone/footer-breadcrumbs',
				'label'       => __( 'Footer breadcrumbs', 'unitone' ),
				'icon'        => 'layout',
				'description' => '',
				'area_tag'    => 'div',
			),
		)
	);
}
add_filter( 'default_wp_template_part_areas', 'unitone_default_wp_template_part_areas' );
