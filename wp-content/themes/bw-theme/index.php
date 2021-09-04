<!DOCTYPE html>
    <?php 
    get_header();
    ?>
        <main class="page">
            <div class="main-slider">
                <div class="main-slider__body">
                    <div class="main-slider__item item-main-slider">
                        <div class="item-main-slider__content">
                            <div class="item-main__container _container">
                                <div class="title">
                                    <div class="title__item title_mod"> <p class="only"><?= CFS()->get('header_title')  ?></p></div>
                                    <div class="title__main title__main_w title__main_regular">
                                        <p class="laptev"><?= CFS()->get('header_subtitle')  ?></p>
                                    </div>
                                </div>
                                <div class="item-main-slider__text">
                                    <?= CFS()->get('header_slogan')  ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item-main-slider__bg _ibg">
                            <picture><source srcset="<?= CFS()->get('header_bg') ?>" type="image/webp"><img src="<?= CFS()->get('header_bg') ?>" alt=""></picture>
                        </div>
                    </div>

                </div>
                <!-- <div class="main-slider__control control-main-slider">
                    <div class="control-main-slider__arrow control-main-slider__arrow_prev"></div>
                    <div class="control-main-slider__decor">
                        <picture><source srcset="img/icons/decor.webp" type="image/webp"><img src="img/icons/decor.png" alt=""></picture>
                    </div>
                    <div class="control-main-slider__arrow control-main-slider__arrow_next"></div>
                </div> -->
            </div>
            <div class="lots">
                <div class="lots__container _container">
                    <div class="lots__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">Популярные</div>
                            <div class="title__main ">Наш Ассортимент

                            </div>
                        </div>
                        <div class="block-header__decor block-decor">
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                            <div class="block-decor__icon">
                                <div>
                                    <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/block-header/bet11.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/block-header/bet11.png" alt=""></picture>
                                </div>

                            </div>
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                        </div>
                         
                        
                        
        
         <div class="lots__slider slider-lots">
                        <div class="slider-lots__body _swiper">


                            <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                            

                                  <?php 
                            $loop = CFS()->get('card');
                            foreach($loop as $row){
                                ?>
                                <div class="swiper-slide">
                                <div class="slider-lots__slider">
                                    <div class="lot">
                                        <div class="lot__header">
                                            <a href="#" class="lot__image _ibg">
                                                <img src="<?= $row['card_img'] ?>">
                                            </a>
                                        
                                        </div>
                                        <a href="#" class="lot__title">
                                           <?= $row['card_title'] ?>
                                        </a>
                                        <div class="lot__info info-lot">
                                            
                                            <div class="info-lot__current-bet current-bet-info-lot">
                                                <div class="current-bet-info-lot__label">Цена</div>
                                                <div class="current-bet-info-lot__value"><?= $row['card_price'] ?></div>
                                                <div class="current-bet-info-lot__currency"><?= $row['card_currency'] ?></div>
                                            </div>
                                            
                                        </div>
                                        <a href="https://wa.me/996770220555" class="lot__btn btn btn_big">
                                            <span class="btn__body"><span><?= $row['card_btn'] ?></span></span>
                                        </a>
                                    </div>
                                </div>
                                </div>
                                <?php
                            }
                            ?>



                            
       
                            </div>
                            <div class="slider-lots__control control-slider-lots">
                                <div class="control-slider-lots__arrow">
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="control-slider-lots__link">
                                    <a href="#">Посмотреть ещё</a>
                                </div>
                                <div class="control-slider-lots__arrow">
                                    <span><div class="swiper-button-next"></div></span>
                                </div>
                            </div>
                            <div class="swiper-button-next"><img src="" alt=""></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>




                           
                            


                        </div>
                        
                    </div>
    <div class="lots__slider slider-lots">
                        
                        
    </div>


                </div>
            </div>
            
            <div class="services">
                <div class="services__container _container">
                    <div class="services__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">Дополнительные</div>
                            <div class="title__main title__main_w">Наши услуги
                            </div>
                        </div>
                        <div class="block-header__decor block-decor">
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                            <div class="block-decor__icon">
                                <div>
                                    <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/block-header/uslug.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/block-header/uslug.png" alt=""></picture>
                                </div>

                            </div>
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                        </div>

                    </div>
                    <div class="services__row">
                        <div class="services__column">
                            <a href="#" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/truck.png" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/truck.png" class="service__image"></picture>
                            </a>
                            <a href="#" class="service__title">
                                Быстрая Доставка
                            </a>
                            <div class="service__text">
                                Экспресс доставка по Бишкеку от 199 сомов!
                            </div>
                            
                        </div>
                        <div class="services__column">
                            <a href="#" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/indiv.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/indiv.png" class="service__image"></picture>
                            </a>
                            <a href="#" class="service__title">
                                Возможность Заказа
                            </a>
                            <div class="service__text">
                               Турецкие Ткани , индивидуальный пошив!
                            </div>
                            
                        </div>
                        <div class="services__column">
                            <a href="#" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/staj.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/staj.png" class="service__image"></picture>
                            </a>
                            <a href="#" class="service__title">
                                Стаж работы
                            </a>
                            <div class="service__text">
                                Большой опыт работы , качество на высшем уровне!
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="quotes">
                <div class="quotes__container _container">
                    <div class="quotes__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">Интересные</div>
                            <div class="title__main">ЦитатЫ
                            </div>
                        </div>
                        <div class="block-header__decor block-decor">
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                            <div class="block-decor__icon">
                                <div>
                                    <picture><source srcset="img/block-header/03.webp" type="image/webp"><img src="img/block-header/03.png" alt=""></picture>
                                </div>

                            </div>
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                        </div>

                    </div>
                    <div class="quotes__slider slider-quotes">
                        <div class="slider-quotes__body">
                            <div class="slider-quotes__slide">
                                <div class="slider-quotes__image">
                                    <img src="<?php bloginfo('template_directory') ?>/assets/img/erketai_img/logoErketai.png" alt="">
                                </div>
                                <div class="slider-quotes__content">
                                    <div class="slider-quotes__title">
                                        «Сон — как раз единственный отрезок времени, когда мы свободны»
                                    </div>
                                    <div class="slider-quotes__info">
                                        <p>Erketai</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-quotes__control control-slider-quotes">
                            <div class="control-slider-quotes__decor"></div>
                            <div class="control-slider-quotes__link">
                                <div class="control-slider-quotes__circle">

                                </div>
                            </div>
                            <div class="control-slider-quotes__decor"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="info__container _container">
                    
                </div>
            </div>
            
    </div>


<?php get_footer() ?>