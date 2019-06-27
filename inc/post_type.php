<?php
add_action( 'init', 'register_post_types' );
function register_post_types(){
  register_post_type('services', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Services', // основное название для типа записи
      'singular_name'      => 'Service', // название для одной записи этого типа
    ),
    'description'         => '',
    'public'              => true,
    'supports'            => array('title','editor', 'thumbnail', 'excerpt'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('portfolio', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Portfolios', // основное название для типа записи
      'singular_name'      => 'Portfolio', // название для одной записи этого типа
    ),
    'description'         => '',
    'public'              => true,
    'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );
  register_taxonomy(
    'cat',
    'portfolio',
    array(
      'label' => __( 'Category' ),
      'hierarchical' => true,
    )
  );

  register_post_type('review', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Reviews', // основное название для типа записи
      'singular_name'      => 'Review', // название для одной записи этого типа
    ),
    'description'         => '',
    'public'              => true,
    'supports'            => array('title','editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

}