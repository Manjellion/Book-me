<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
    <section class="about_us_wrapper">
        <div class="container">
            <div class="row">
                <?php

                    $heading = get_field('heading');
                    if($heading) {
                        echo '<div class="col-12">';
                            echo '<h1>'.$heading.'</h1>';
                        echo '</div>';
                    }

                    $sub_heading = get_field('sub_heading');
                    if($sub_heading) {
                        echo '<div class="col-12">';
                            echo '<p class="subheading">'.$sub_heading.'</p>';
                        echo '</div>';
                    }

                ?>
            </div>
            <div class="row">
                <?php

                    $main_image = get_field('main_image');
                    if($main_image) {
                        echo '<div class="col-12">';
                            echo '<img src="'.$main_image['url'].'" alt="'.$main_image['alt'].'">';
                        echo '</div>';
                    }

                ?>
            </div>
        </div>
    </section>
<?php
get_footer();