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
            <div id="lot" class="lots">
                <div class="lots__container _container">
                    <div class="lots__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">????????????????????</div>
                            <div class="title__main ">?????? ??????????????????????

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
                         
                        
                        
        
         <div  class="lots__slider slider-lots">
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
                                                <div class="current-bet-info-lot__label">????????</div>
                                                <div class="current-bet-info-lot__value"><?= $row['card_price'] ?></div>
                                                <div class="current-bet-info-lot__currency"><?= $row['card_currency'] ?></div>
                                            </div>
                                            
                                        </div>
                                        <a href="https://wa.me/996703153679" class="lot__btn btn btn_big">
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
                                    <a href="#">???????????????????? ??????</a>
                                </div>
                                <div class="control-slider-lots__arrow">
                                    <span><div class="swiper-button-next"></div></span>
                                </div>
                            </div>
                            <div class="swiper-button-next"><img src="<?php bloginfo('template_directory') ?>/assets/img/right_arrow.png" alt=""></div>
      <div class="swiper-button-prev"><img src="<?php bloginfo('template_directory') ?>/assets/img/left_arrow.png" alt=""></div>
      <div class="swiper-pagination"></div>
    </div>
</div>
                        
</div>
    <div class="lots__slider slider-lots">
                        
                        
    </div>


                </div>
            </div>
            
            <div id="test" class="services">
                <div class="services__container _container">
                    <div class="services__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">????????????????????????????</div>
                            <div class="title__main title__main_w">???????? ????????????
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
                                ?????????????? ????????????????
                            </a>
                            <div class="service__text">
                                ???????????????? ???????????????? ???? ?????????????? ???? 199 ??????????!
                            </div>
                            
                        </div>
                        <div class="services__column">
                            <a href="#" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/indiv.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/indiv.png" class="service__image"></picture>
                            </a>
                            <a href="#" class="service__title">
                                ?????????????????????? ????????????
                            </a>
                            <div class="service__text">
                               ???????????????? ?????????? , ???????????????????????????? ??????????!
                            </div>
                            
                        </div>
                        <div class="services__column">
                            <a href="#" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/staj.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/staj.png" class="service__image"></picture>
                            </a>
                            <a href="#" class="service__title">
                                ???????? ????????????
                            </a>
                            <div class="service__text">
                                ?????????????? ???????? ???????????? , ???????????????? ???? ???????????? ????????????!
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="quotes">
                <div class="quotes__container _container">
                    <div class="quotes__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">????????????????????</div>
                            <div class="title__main">????????????
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
                                        ???????? ??? ?????? ?????? ???????????????????????? ?????????????? ??????????????, ?????????? ???? ??????????????????
                                    </div>
                                    <div class="slider-quotes__info">
                                        <p>Erketai</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>




           
            
    </div>

    <div id="contact" class="services">
                <div class="services__container _container">
                    <div class="services__header block-header">
                        <div class="block-header__title title">
                            <div class="title__item">????????????????</div>
                            <div class="title__main title__main_w">???????? ???????????????????? ????????
                            </div>
                        </div>
                        <div class="block-header__decor block-decor">
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                            <div class="block-decor__icon">
                                <div>
                                    <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/block-header/contacts.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/block-header/contacts.png" alt=""></picture>
                                </div>

                            </div>
                            <div class="block-decor__items">
                                <span></span>
                            </div>
                        </div>

                    </div>
                    <div class="services__row">
                        
                        <div class="services__column">
                            <a href="https://www.instagram.com/erketai_bedding/?utm_medium=copy_link" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/instagram.png" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/instagram.png" class="service__image"></picture>
                            </a>
                            <a href="https://www.instagram.com/erketai_bedding/?utm_medium=copy_link" class="service__title">
                                ????????????????????
                            </a>
                            
                            
                        </div>
                        <div class="services__column">
                            <a href="#" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/facebook.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/facebook.png" class="service__image"></picture>
                            </a>
                            <a href="#" class="service__title">
                                Facebook
                            </a>
                            
                            
                        </div>

                        <div class="services__column">
                            <a href="https://wa.me/996703153679" class="services__item service">
                                <picture><source srcset="<?php bloginfo('template_directory') ?>/assets/img/services/whatsapp.webp" type="image/webp"><img src="<?php bloginfo('template_directory') ?>/assets/img/services/whatsapp.png" class="service__image"></picture>
                            </a>
                            <a href="https://wa.me/996703153679" class="service__title">
                                WhatsApp
                            </a>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>



<?php get_footer() ?>