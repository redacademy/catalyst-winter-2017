<?php
/**
 * The template for displaying single posts for renters(renters page).
 *
 * @package Catalyst_Theme
 */

 get_header(); ?>

<section class="banner">
    <div>
        <img src="<?php echo CFS()->get('rent_logo'); ?>" alt="">
    </div>
</section>
<section class="about">
    <div class="blue-background-header">
        <h2 class='subheader-lrg'>About <?php echo CFS()->get('project_name'); ?></h2>
    </div>
    <div class="wrapper">
        <div class="about-text">
            <?php echo CFS()->get('about_copy'); ?>
        </div>
    </div>
</section>
<section class="floorplan">
    <div class="blue-background-header">
        <h2 class='subheader-lrg'>Floor Plans</h2>
    </div>
    <div class="wrapper">
        <div class="floorplan-container">
            <div class="floorplan-selection">
                <?php $homes = CFS()->get('spaces');
                foreach ($homes as $home) : ?>
                    <div class="selection">
                        <p><?php echo $home['home_type']; ?></p>
                        <?php if (CFS()->get('home_document')) : ?>
                            <a href="<?php echo CFS()->get('home_document'); ?>">
                                <img class="floorplan-img" src="<?php echo $home['floorplan_img']; ?>" alt="">
                            </a>
                        <?php else : ?>
                            <img class="floorplan-img" src="<?php echo $home['floorplan_img']; ?>" alt="">
                        <?php endif; ?>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
            <div class="floorplan-img-container">
                <?php foreach ($homes as $home) : ?>
                    <?php if (CFS()->get('home_document')) : ?>
                        <a href="<?php echo CFS()->get('home_document'); ?>">
                            <img src="<?php echo $home['floorplan_img']; ?>" alt="">
                        </a>
                    <?php else : ?>
                        <img src="<?php echo $home['floorplan_img']; ?>" alt="">
                    <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="floorplan-text">
            <?php echo CFS()->get('floorplan_copy'); ?>
        </div>
    </div>
</section>
<section class="rent">
    <div class="blue-background-header">
        <h2 class='subheader-lrg'>Rent</h2>
    </div>
    <div class="wrapper">
        <div class="rent-text">
            <?php echo CFS()->get('rent_copy'); ?>
        </div>
        <div class="rent-chart-container">
            <div class="rows">
                <div class="rent-row row-head">
                    <ul>
                        <li>Home Type</li>
                        <li>Home Size</li>
                        <li>Max Annual Income(<?php echo CFS()->get('income_year'); ?>)*</li>
                        <li>Rent Range</li>
                    </ul>
                </div>
                <?php foreach ( $homes as $home ) : ?>
                    <div class="rent-row row">
                        <ul>
                            <li><?php echo $home['home_type']; ?></li>
                            <li><?php echo $home['home_size']; ?></li>
                            <li><?php echo $home['max_annual_income']; ?></li>
                            <li><?php echo $home['rent_range']; ?></li>
                        </ul>
                    </div>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="fineprint">
            <p>*Gross Household Income</p>
        </div>
        <?php $furtherInfo = CFS()->get('further_info');
        if($furtherInfo) : ?>
        <div class="more-info">
            <h3>Further Information</h3>
            <?php echo CFS()->get('further_info'); ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<section class="contact">
    <div class="blue-background-header">
        <h2 class='subheader-lrg'>Contact</h2>
    </div>
    <div class="wrapper">
        <div class="contact-text">
            <?php echo CFS()->get('contact_copy'); ?>
        </div>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="505" title="Renters Contact"]'); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>