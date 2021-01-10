<?php
get_header();
?>
    <section class="offer" style="background-image: url(<?php the_field('offer__bg'); ?>);">
        <div class="container">
            <div class="offer__content">
                <h1 class="offer__title" data-aos="fade-up" data-aos-delay="300"><?php the_field('offer__title'); ?></h1>
                <ul class="offer__list" data-aos="fade-up" data-aos-delay="500">
                    <li class="offer__list-item"><?php the_field('offer__list-1'); ?></li>
                    <li class="offer__list-item"><?php the_field('offer__list-2'); ?></li>
                    <li class="offer__list-item"><?php the_field('offer__list-3'); ?></li>
                </ul>
                <a href="#" class="offer__button button popap-btn" data-aos="fade-up" data-aos-delay="500"><?php the_field('offer__button-text'); ?></a>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <h2 class="about__title section__title" data-aos="fade-up">
                <?php the_field('about__title'); ?>
            </h2>
            <div class="about__content">
                <div class="about__text" data-aos="fade-up">
                    <p class="about__text-item"><?php the_field('about__text-1'); ?></p>
                    <p class="about__text-item"><?php the_field('about__text-2'); ?></p>
                    <p class="about__text-item"><?php the_field('about__text-3'); ?></p>
                </div>
                <ul class="about__list" data-aos="fade-up">
					<li class="about__list-item about__list-item1"><span style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/about/billiards.png);"></span><?php the_field('about_list-1'); ?></li>
                    <li class="about__list-item about__list-item2"><span style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/about/bus.png);"></span><?php the_field('about_list-2'); ?></li>
					<li class="about__list-item about__list-item3"><span style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/about/parking.png);"></span><?php the_field('about_list-3'); ?></li>
					<li class="about__list-item about__list-item4"><span style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/about/wifi.png);"></span><?php the_field('about_list-4'); ?></li>
					<li class="about__list-item about__list-item5"><span style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/about/pool.png);"></span><?php the_field('about_list-5'); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="rooms">
        <div class="container">
            <h2 class="rooms__title section__title" data-aos="fade-up"><?php the_field('room__title'); ?></h2>
            <div class="rooms__wrapper">
                <img src="<?php the_field('rooms__bg'); ?>" alt="bed" class="rooms__bg" data-aos="fade-up">
                <div class="rooms__content" data-aos="fade-up">
                    <div class="rooms__content-title"><?php the_field('rooms__content-title'); ?></div>
                    <div class="rooms__guest"><span class="rooms__guest-icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/person.png);"></span><?php the_field('rooms__guest'); ?></div>
                    <ul class="rooms__list">
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span
                                class="rooms__list-item_bold">1 спальня:</span> <?php the_field('rooms__list-item-1'); ?></li>
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span
                                class="rooms__list-item_bold">2 спальня:</span> <?php the_field('rooms__list-item-2'); ?></li>
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span
                                class="rooms__list-item_bold">3 спальня:</span> <?php the_field('rooms__list-item-3'); ?></li>
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span
                                class="rooms__list-item_bold">Гостинная:</span> <?php the_field('rooms__list-item-4'); ?></li>
                    </ul>
                </div>
            </div>
			<div class="rooms__wrapper">
                <div class="rooms__content" data-aos="fade-up">
                    <div class="rooms__content-title"><?php the_field('rooms__content-title_family'); ?></div>
                    <ul class="rooms__list">
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span class="rooms__list-item_icon"></span><span
                                class="rooms__list-item_bold">Двухместный номер</span> <?php the_field('rooms__list-item-1_family'); ?></li>
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span class="rooms__list-item_icon"></span><span
                                class="rooms__list-item_bold">Двухместный номер </span> <?php the_field('rooms__list-item-2_family'); ?></li>
                        <li class="rooms__list-item"><span class="rooms__list-item_icon" style="background-image: url(<?php echo get_template_directory_uri (); ?>/img/rooms/bedroom.png);"></span><span class="rooms__list-item_icon"></span><span
                                class="rooms__list-item_bold">Cемейный номер</span> <?php the_field('rooms__list-item-3_family'); ?></li>
                    </ul>
                </div>
				<img src="<?php the_field('rooms__bg_family'); ?>" alt="bed" class="rooms__bg" data-aos="fade-up">
            </div>
        </div>
</section>
    <section class="pool">
        <div class="container">
            <div class="pool__title section__title" data-aos="fade-up"><?php the_field('pool__title'); ?></div>
            <div class="pool__wrapper">
                <div class="pool__content" data-aos="fade-up">
                    <div class="pool__content-title section__content-title"><?php the_field('pool__content-title'); ?></div>
                    <div class="pool__content-text section__content-text">
						<?php the_field('pool__content-text'); ?>
                    </div>
                    <a href="#" class="pool__button button button-transperent popap-btn"><?php the_field('pool__button'); ?></a>
                </div>
                <img src="<?php the_field('pool__img'); ?>" alt="pool" class="pool__img" data-aos="fade-up">
            </div>
        </div>
    </section>
    <section class="galery" id="galery">
        <div class="container">
            <div class="section__title galery__title"><?php the_field('galery__title'); ?></div>
            <div class="galery__wrapper">
				<?php echo do_shortcode('[URIS id=223]'); ?>
            </div>
			<div class="galery__wrapper">
				<?php echo do_shortcode('[URIS id=224]'); ?>
            </div>
        </div>
    </section>
    <section class="transfer">
        <div class="container">
            <div class="transfer__title section__title" data-aos="fade-up"><?php the_field('transfer__title'); ?></div>
            <div class="transfer__wrapper">
                <img src="<?php the_field('transfer__img'); ?>" alt="transfer" class="transfer__img" data-aos="fade-up">
                <div class="transfer__content" data-aos="fade-up">
                    <div class="transfer__content-title section__content-title"><?php the_field('transfer__content-title'); ?></div>
                    <div class="transfer__content-text section__content-text"><?php the_field('transfer__content-text'); ?></div>
                    <a href="#" class="transfer__button button button-transperent popap-btn"><?php the_field('transfer__button'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts" id="contact">
        <div class="contacts__map-bg">
            <img class="contacts__map-static" src="<?php the_field('contacts__map-static'); ?>" alt="map">
			
        </div>
        <div class="container">
            <div class="contacts__wrapper">
                <div class="contacts__content">
                    <div class="contacts__content-title section__content-title"><?php the_field('contacts__content-title'); ?></div>
                    <div class="contacts__adress"><?php the_field('contacts__adress'); ?></div>
					<?php 
					$contacts__tel = get_field('contacts__tel');
					if( $contacts__tel ): ?>
						<a class="contacts__tel" href="<?php echo $contacts__tel; ?>"><?php the_field('contacts__tel-name'); ?></a>
					<?php endif; ?>
										<?php 
					$contacts__mail = get_field('contacts__mail');
					if( $contacts__mail ): ?>
						<a class="contacts__mail" href="<?php echo $contacts__mail; ?>"><?php the_field('contacts__mail-name'); ?></a>
					<?php endif; ?>
                    <a href="#" class="contacts__button button button-transperent popap-btn"><?php the_field('contacts__button'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="popap">
        <div class="popap__wrapper">
            <div class="popap__inner">
                <div class="popap__button-close">
                    <span></span><span></span>
                </div>
                <div class="popap__title">
                    <h3 class="popap__title-title"><?php the_field('popap__title-title'); ?></h3>
                    <p class="popap__title-text"><?php the_field('popap__title-text'); ?></p>
                </div>
                <form class="popap__form" autocomplete="off" action="<?php echo get_template_directory_uri (); ?>/mail.php" method="POST">
                    <input name="user_name" class="popap__form-input" type="text" placeholder="Имя" required>
                    <input name="user_phone" class="popap__form-input" type="phone" placeholder="Телефон" required>
                    <button class="popap__form-button" type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </section>
<?php
get_footer();
