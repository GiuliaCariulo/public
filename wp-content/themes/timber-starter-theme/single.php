<?php
/**
 * The Template for displaying all single posts
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context         = Timber::context();
$timber_post     = Timber::get_post();
$context['post'] = $timber_post;

//prend les posts du même type que le post actuel, sauf lui même
$context['related_type_posts'] = Timber::get_posts([
  'post_type' => $timber_post->post_type,
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => -3,
  'post__not_in' => [ $timber_post->ID ],
]);
 
$term = $timber_post->terms('category')[0];
 
//prend les posts de la même catégorie que le post actuel, sauf lui même
$context['related_taxonomy_posts'] = Timber::get_posts([
  'post_type' => array('book','podcast'),
  'post_status' => 'publish',
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'slug',
      'terms' => $term->slug,
    )
  ),
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => 3,
  'post__not_in' => [ $timber_post->ID ],
]);

 

if ( post_password_required( $timber_post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'single-' . $timber_post->ID . '.twig', 'single-' . $timber_post->post_type . '.twig', 'single-' . $timber_post->slug . '.twig', 'single.twig' ), $context );
}

