<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>


<section class="front-page">
    <header>
        <div class="header-text">
            <h1>we improve the quality of peoples lives</h1>
            <p>We build communities.</p>
            <p>We use real estate to affect social change.</p>
        </div>
        <div class ="home-hero"></div>
    </header>
    <div class="front-content">
        <div class="formula">
            <h2>the catalyst formula</h2>
            <div></div>
             <div class="readmore"><a href="">learn more</a></div>
        </div>

        <div class="projects">
            <h2>our projects</h2>
            <p class="proj-desc">Our Goal is to serve people better by offering our real estate development expertise and a share of ownership</p>
            <?php get_template_part( 'template-parts/projects-carousel', 'projects carousel' ); ?>
             <div class="readmore"><a>view more projects</a></div>
        </div>

        <div class="team">
            <h2>team catalyst</h2>
            <div></div>
            <div class="readmore"><a>collaborate with us</a></div>
        </div>
    </div>
</section>



<?php get_footer(); ?>