<?php
/*
 *  Template name: Strona główna
 */
get_header(); ?>

<main class="northport northport--main">
    <section class="mainHeader" style="background-image: url('<?php echo get_field('mainHeader_bg'); ?>');">
        <div class="mainHeader__wrap">
            <h1><?php the_field('mainHeader_title'); ?></h1>
            <p><?php the_field('mainHeader_subtitle'); ?></p>
        </div>
        <div class="mainHeader__social">
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social_tw.svg'; ?>"/>
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social_ig.svg'; ?>"/>
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social_fb.svg'; ?>"/>
            </a>
        </div>
    </section>
    <section class="mainCounter">
        <div class="mainCounter__wrap container">
            <?php while(have_rows('mainCounter')): the_row();
                $number = get_sub_field('mainCounter_number');
                $name = get_sub_field('mainCounter_name');
            ?>
            <div class="mainCounter__number ready">
                <span class="number" data-number="<?php echo $number; ?>">0</span>
                <span class="name"><?php echo $name; ?></span>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
    <section class="mainAbout">
        <div class="mainAbout__wrap container">
            <div class="mainAbout__content">
                <div class="image">
                    <img src="<?php the_field('mainAbout_first_img'); ?>"/>
                </div>
                <div class="content">
                    <?php the_field('mainAbout_first_content'); ?>
                </div>
            </div>
            <div class="mainAbout__content mainAbout__content--second">
                <div class="content">
                    <?php the_field('mainAbout_second_content'); ?>
                </div>
                <div class="image">
                    <img src="<?php the_field('mainAbout_second_img'); ?>"/>
                </div>
            </div>
        </div>
        <div class="mainAbout__divider">
            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/logo_white_vec.svg'; ?>"/>
        </div>
    </section>
    <section class="mainApartaments">
        <div class="mainApartaments__wrap">
            <div class="mainApartaments__photo">
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartaments.png'; ?>" />
                <div class="area">
                    <div class="area__floor area__floor--one" data-floor="1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 983 461" fill="none">
                            <path d="M623 27L1 161V459L982 209V131L806 2L623 27Z" fill="white" fill-opacity="0.2" stroke="#BCA58A" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="area__floor area__floor--zero" data-floor="0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1130 401" fill="none">
                            <path d="M1055 2L1051 72L1031 77L1064 126H1108L1114 167H1097L1128 207L376 400H1.5V276L1055 2Z" fill="white" fill-opacity="0.2" stroke="#BCA58A" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>