<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/templates/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::context();

$timber_post     = Timber::get_post();
$context['page'] = $timber_post;


// demander à une ia pour la page taxonomie livre, viens chercher tous les posts taxonomie livre et catégorie féminisme
// $posts     = Timber::get_posts([
//     'post_type' => 'post',
// ]);

// $context['month-article'] = Timber::get_posts([
//     'post_type' => 'month-article',
//     'posts_per_page' => 1 
// ]);


// Timber::render('month-article', $context);

// $context['posts'] = Timber::get_posts(
// 	['post_type' => 'video', 'podcast', 'month-article', 'newspaper', 'book']
// );

$postArgs = array(
  'post_type' => array('month-article','newspaper','podcast','video'), //Add this line'posts_per_page' => 20,
  'post_status' => 'publish',
  'orderby' => 'post__in',
  'post__in' => $post_ids,
  'posts_per_page' => -1

);

$posts = get_posts($postArgs);

$context['posts'] = $posts;

// avec le $ c'est des variables php donc ici je pourrais écrire $articles à la place de $posts

// var_dump($context['posts']);
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );
