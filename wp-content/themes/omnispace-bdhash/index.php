<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package omnispace-bdhash
 */

get_header();
?>

	<main id="primary" class="site-main">
        <?php
            include 'index-parts/part1.php';
            include 'index-parts/part4.php';
            include 'index-parts/part3.php';
            include 'index-parts/part5.php';
            include 'index-parts/part2.php';
		?>
	</main><!-- #main -->

<?php
get_footer();
