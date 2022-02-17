<?php
/*
 *  Template name: Strona główna
 */
get_header(); ?>

<main class="northport northport--main">
    <section id="top" class="mainHeader" style="background-image: url('<?php echo get_field('mainHeader_bg'); ?>');">
        <div class="mainHeader__wrap">
            <h1><?php the_field('mainHeader_title'); ?></h1>
            <p><?php the_field('mainHeader_subtitle'); ?></p>
        </div>
        <div class="mainHeader__social">
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social/social_ig.svg'; ?>"/>
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social/social_fb.svg'; ?>"/>
            </a>
        </div>
    </section>
    <section id="about" class="mainCounter section-anchor">
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
            <div class="mainAbout__mobile">
                <div class="image">
                    <img src="<?php the_field('mainAbout_first_img'); ?>"/>
                </div>
                <div class="image">
                    <img src="<?php the_field('mainAbout_second_img'); ?>"/>
                </div>
            </div>
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
            <h2>Apartamenty</h2>
        </div>
    </section>
    <section id="apartments" class="mainApartaments section-anchor">
        <div class="mainApartaments__wrap">
            <div class="mainApartaments__photo">
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartaments.png'; ?>" />
                <div class="pointers">
                    <div class="pointers__typ01" data-type="1"></div>
                    <div class="pointers__typ02" data-type="2"></div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="area" viewBox="0 0 1370 720" fill="none">
                    <path xmlns="http://www.w3.org/2000/svg" d="M623 120L1 254V552L982 302V224L806 95L623 120Z" fill="white" fill-opacity="0.2" stroke="#BCA58A" stroke-width="2" class="area__floor area__floor--one" data-type="1"/>
                    <path xmlns="http://www.w3.org/2000/svg" d="M1055 323L1051 393L1031 398L1064 447H1108L1114 488H1097L1128 528L376 721H1.5V597L1055 323Z" fill="white" fill-opacity="0.2" stroke="#BCA58A" stroke-width="2" class="area__floor area__floor--two" data-type="2"/>
                </svg>
            </div>
            <div class="mainApartaments__heading">
                <h2>Apartamenty</h2>
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/logo_white_vec.svg'; ?>"/>
            </div>
            <div class="mainApartaments__info container">
                <div class="apInfo">
                    <div class="apInfo__nav">
                        <div class="type" data-type="1">
                            <h3>TYP I</h3>
                        </div>
                        <div class="type" data-type="2">
                            <h3>TYP II</h3>
                        </div>
                    </div>
                    <div class="apInfo__type" data-type="1">
                        <div class="heading">
                            <h3>TYP I</h3>
                        </div>
                        <div class="content">
                            <div class="apInfo__info">
                                <div class="apInfo__slider">
                                    <div class="slide">
                                        <div class="slide__left">
                                            <div class="content">
                                                <p>Powierzchnia: <span class="value">70,23m2</span></p>
                                                <p>Piętro: <span class="value">1</span></p>
                                                <p>Pokoje: <span class="value">2</span></p>
                                            </div>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide__right">
                                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartament_view.svg'; ?>"/>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="slide__left">
                                            <div class="content">
                                                <p>Powierzchnia: <span class="value">70,23m2</span></p>
                                                <p>Piętro: <span class="value">1</span></p>
                                                <p>Pokoje: <span class="value">2</span></p>
                                            </div>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide__right">
                                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartament_view.svg'; ?>"/>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apInfo__availability">
                                    <a href="#" class="btn">
                                        <span>Zapytaj o dostępność</span>
                                    </a>
                                </div>
                                <div class="apInfo__close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/arrow_up_blue.svg'; ?>"/>    
                                </div>
                            </div>
                            <div class="content__open">
                                <img src="<?php echo get_template_directory_uri() . '/images/arrow_down_gold.svg'; ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="apInfo__type" data-type="2">
                        <div class="heading">
                            <h3>TYP II</h3>
                        </div>
                        <div class="content">
                            <div class="apInfo__info">
                                <div class="apInfo__slider">
                                    <div class="slide">
                                        <div class="slide__left">
                                            <div class="content">
                                                <p>Powierzchnia: <span class="value">70,23m2</span></p>
                                                <p>Piętro: <span class="value">1</span></p>
                                                <p>Pokoje: <span class="value">2</span></p>
                                            </div>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide__right">
                                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartament_view.svg'; ?>"/>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="slide__left">
                                            <div class="content">
                                                <p>Powierzchnia: <span class="value">70,23m2</span></p>
                                                <p>Piętro: <span class="value">1</span></p>
                                                <p>Pokoje: <span class="value">2</span></p>
                                            </div>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide__right">
                                            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartament_view.svg'; ?>"/>
                                            <div class="actions">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/pdf.svg'; ?>"/>
                                                </a>
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri() . '/images/icons/3dview.svg'; ?>"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apInfo__availability">
                                    <a href="#" class="btn">
                                        <span>Zapytaj o dostępność</span>
                                    </a>
                                </div>
                                <div class="apInfo__close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/arrow_up_blue.svg'; ?>"/>    
                                </div>
                            </div>
                            <div class="content__open">
                                <img src="<?php echo get_template_directory_uri() . '/images/arrow_down_gold.svg'; ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="mainGallery section-anchor">
        <div class="mainGallery__wrap">
            <div class="mainGallery__heading">
                <h2>Galeria</h2>
                <p>Wybrane apartamenty z przykładowymi aranżacjami</p>
                <img src="<?php echo get_template_directory_uri() . '/images/logo_blue.svg'; ?>"/>
            </div>
            <div class="mainGallery__gallery container">
                <?php 
                    $images = get_field('mainGallery');
                    foreach($images as $image): ?>
                <div class="mainGallery__photo">
                    <img src="<?php echo $image['url']; ?>"/>
                    <a href="<?php echo $image['url']; ?>" data-lightbox="mainGallery" data-title="<?php echo $image['description']; ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/zoom_gallery_ico.svg'; ?>"/>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="localization" class="mainVideo section-anchor">
        <div class="mainVideo__heading">
            <h2>Malownicza lokalizacja</h2>
        </div>
        <div class="mainVideo__video container">
            <?php echo get_field('mainVideo'); ?>
        </div>
    </section>

    <section class="mainInfo">
        <div class="mainInfo__wrap container">
            <div class="mainInfo__content">
                <div class="image">
                    <img src="<?php echo get_field('mainInfo_first_image'); ?>"/>
                </div>
                <div class="content">
                    <h3><?php echo get_field('mainInfo_first_title'); ?></h3>
                    <?php echo get_field('mainInfo_first_content'); ?>
                </div>
                <div class="moreContent visible"><span>Czytaj więcej</span></div>
            </div>
            <div class="mainInfo__content mainInfo__content--reverse">
                <div class="image">
                    <img src="<?php echo get_field('mainInfo_second_image'); ?>"/>
                </div>
                <div class="content">
                    <h3><?php echo get_field('mainInfo_second_title'); ?></h3>
                    <?php echo get_field('mainInfo_second_content'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="mainMap">
        <div class="mainMap__map container">
            <?php $map = get_field('mainMap'); ?>
            <div id="mainMap">
                <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
            </div>
        </div>
        <div class="mainMap__info">
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/edukacja_ico.svg'; ?>"/>
                </div>
                <p>Edukacja</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/natura_ico.svg'; ?>"/>
                </div>
                <p>Natura</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/rozrywka_ico.svg'; ?>"/>
                </div>
                <p>Rozrywka</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/sport_ico.svg'; ?>"/>
                </div>
                <p>Sport</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/uslugi_ico.svg'; ?>"/>
                </div>
                <p>Usługi</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/restauracje_ico.svg'; ?>"/>
                </div>
                <p>Restauracje</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/szpitale_ico.svg'; ?>"/>
                </div>
                <p>Szpitale</p>
            </div>
            <div class="box">
                <div class="box__icon">
                    <img src="<?php echo get_template_directory_uri() . '/images/map/kultura_ico.svg'; ?>"/>
                </div>
                <p>Kultura</p>
            </div>
        </div>
    </section>

    <section id="contact" class="mainForm section-anchor">
        <div class="mainForm__wrap">
            <h2>Zapraszamy do kontaktu</h2>
            <form class="contactForm" name="contactForm">
                <div class="contactForm__row">
                    <input type="text" name="contactName" placeholder="Imię i nazwisko*" required/>
                </div>
                <div class="contactForm__row contactForm__row--half">
                    <input type="text" name="contactPhone" placeholder="Telefon*" required/>
                    <input type="email" name="contactMail" placeholder="Adres e-mail*" required/>
                </div>
                <div class="contactForm__row">
                    <textarea name="contactMessage" placeholder="Treść wiadomości*" required></textarea>
                </div>
                <div class="contactForm__checkbox">
                    <div class="input"></div>
                    <input type="checkbox" name="contactAcceptance_1" required/>
                    <label for="contactAcceptance_1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</label>
                </div>
                <div class="contactForm__checkbox">
                    <div class="input"></div>
                    <input type="checkbox" name="contactAcceptance_2" required/>
                    <label for="contactAcceptance_2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</label>
                </div>
                <div class="contactForm__submit">
                    <button type="submit" class="btn"><span>Wyślij</span></button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>