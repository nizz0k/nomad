<?php
/**
 * Template Name: Institute Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$treat_img = get_field('treatments_image');

?>

<div class="wrapper" id="page-wrapper">

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
