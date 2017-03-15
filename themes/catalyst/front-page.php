<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>


<section class="front-page">

  <div class ="home-hero"></div>

    <div>
        <div class="formula">
            <h2>the catalyst formula</h2>
            <div></div>
            <a>learn more</a>
        </div>

        <div class="projects">
            <h2>our project</h2>
            <div></div>
            <a>view more projects</a>
        </div>

        <div class="team">
            <h2>team catalyst</h2>
            <div></div>
            <a>collaborate with us</a>
        </div>
    </div>

        <p><a href="<?php echo get_post_type_archive_link('adventure'); ?>">learn more</a></p>

</section>



<?php get_footer(); ?>