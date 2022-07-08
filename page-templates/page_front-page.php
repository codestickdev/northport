<?php
/*
 *  Template name: Strona główna
 */
get_header(); ?>

<main class="northport northport--main">

    <?php if(get_field('mainHeader_slider')): ?>
    <section id="top" class="mainHeader">
        <div class="mainHeader__slider">
            <?php while(have_rows('mainHeader_slider')): the_row(); ?>
                <div class="slide" style="background-image: url('<?php echo get_sub_field('mainHeader_slider_image'); ?>')"></div>
            <?php endwhile; ?>
        </div>
        <div class="mainHeader__wrap">
            <h1><?php the_field('mainHeader_title'); ?></h1>
            <p><?php the_field('mainHeader_subtitle'); ?></p>
        </div>
        <!-- <div class="mainHeader__social">
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social/social_ig.svg'; ?>"/>
            </a>
            <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/images/social/social_fb.svg'; ?>"/>
            </a>
        </div> -->
    </section>
    <?php endif; ?>

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
        <div class="mainAbout__full">
            <div class="wrap">
                <h2>North Port Estate</h2>
                <p>Apartamenty stworzone<br/>w harmonii z naturą</p>
            </div>
        </div>
        <div class="mainAbout__divider" id="apartments">
            <img src="<?php echo get_template_directory_uri() . '/images/frontpage/logo_white_vec.svg'; ?>"/>
            <h2>Wyszukiwarka graficzna</h2>
        </div>
    </section>
    <section class="mainApartaments section-anchor">
        <div class="mainApartaments__wrap">
            <div class="mainApartaments__photo">
                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/apartments_new.jpeg'; ?>" />
                <div class="pointers">
                    <div class="pointers__typ01" data-type="1"></div>
                    <div class="pointers__typ02" data-type="2"></div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="area" viewBox="5 -234 1260 700" fill="none">
                    <path d="M.02 336.28 119.3 322.75 119.3 322.75 120.52 259.55 603.39 217.55 1101.97 229.08 1101.97 336.28 746.73 336.28 606.42 336.28 605.23 389.65 233.2 389.65 .02 363.01 .02 336.28z" class="area__floor area__floor--one" fill="#fff" fill-opacity="0.2" stroke="#BCA58A" stroke-width="2" data-type="1"/>
                    <path d="M141.24 248.89 141.24 190.97 222.49 173.94 222.49 163.57 201.74 165.83 295.26 104.19 610.51 21.3 822.33 34.06 1101.97 83.14 1101.97 95.05 1101.97 215.9 603.43 201.25 141.24 248.89z" class="area__floor area__floor--two" fill="#fff" fill-opacity="0.2" stroke="#BCA58A" stroke-width="2" data-type="2"/>       
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
                    <div class="apInfo__type apInfo__type--active" data-type="1">
                        <div class="heading">
                            <h3>TYP I</h3>
                        </div>
                        <div class="content">
                            <div class="apInfo__info">
                                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/typ_01.jpg'; ?>"/>
                            </div>
                            <div class="apInfo__availability">
                                    <a href="#contact" class="btn">
                                        <span>Zapytaj o dostępność</span>
                                    </a>
                                </div>
                                <div class="apInfo__close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/arrow_up_blue.svg'; ?>"/>    
                                </div>
                            <div class="content__open">
                                <img src="<?php echo get_template_directory_uri() . '/images/arrow_down_gold.svg'; ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="apInfo__type apInfo__type--active" data-type="2">
                        <div class="heading">
                            <h3>TYP II</h3>
                        </div>
                        <div class="content">
                            <div class="apInfo__info">
                                <img src="<?php echo get_template_directory_uri() . '/images/frontpage/typ_02.jpg'; ?>"/>
                            </div>
                            <div class="apInfo__availability">
                                    <a href="#contact" class="btn">
                                        <span>Zapytaj o dostępność</span>
                                    </a>
                                </div>
                                <div class="apInfo__close">
                                    <img src="<?php echo get_template_directory_uri() . '/images/arrow_up_blue.svg'; ?>"/>    
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
            <div id="mainMap">
                <?php while(have_rows('mainMap')): the_row();
                    $name = get_sub_field('mainMap_name');
                    $cat = get_sub_field('mainMap_cat');
                    $marker = get_sub_field('mainMap_marker');
                ?>
                    <div class="marker" data-name="<?php echo $name; ?>" data-category="<?php echo $cat; ?>" data-lat="<?php echo $marker['lat']; ?>" data-lng="<?php echo $marker['lng']; ?>"></div>
                <?php endwhile; ?>
                <div class="marker marker--northport" data-name="Northport" data-category="northport" data-lat="54.1843561" data-lng="21.7516381"></div>
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

    <section class="mainInfo mainInfo--about" id="developer">
        <div class="mainInfo__wrap container">
            <div class="mainInfo__content mainInfo__content--full">
                <div class="content">
                    <h3>O deweloperze</h3>
                    <p><?php echo get_field('aboutDev_main'); ?></p>
                </div>
            </div>
            <div class="mainInfo__content mainInfo__content--reverse">
                <div class="image">
                    <img src="<?php echo get_field('aboutDev_image'); ?>"/>
                </div>
                <div class="content">
                    <h2>Nasz realizacje</h2>
                    <h3><?php echo get_field('aboutDev_title'); ?></h3>
                    <?php echo get_field('aboutDev_content'); ?>
                </div>
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
                    <label for="contactAcceptance_1">Wyrażam zgodę na otrzymywanie informacji marketingowych, w tym ofert, drogą elektroniczną (email, SMS) od spółki Monte Carlo Residence</label>
                </div>
                <div class="contactForm__checkbox">
                    <div class="input"></div>
                    <input type="checkbox" name="contactAcceptance_2" required/>
                    <label for="contactAcceptance_2">Wyrażam zgodę na otrzymywanie informacji marketingowych w tym ofert przez telefoniczne połączenia głosowe od spółki Monte Carlo Residence</label>
                </div>
                <div class="contactForm__info">
                    <p>W dowolnym momencie mogę cofnąć moją zgodę. Wycofanie zgody nie wpływa na zgodność z prawem czynności, których dokonano na podstawie zgody przed jej wycofaniem.</p>
                    <p><a href="#" target="_blank">Informacje dotyczące przetwarzania danych osobowych</a></p>
                </div>
                <div class="contactForm__submit">
                    <button type="submit" class="btn"><span>Wyślij</span></button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>