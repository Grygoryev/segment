<section class="intro box" id="intro">
  <div class="intro__container box__container"><a class="intro__arrow-down link" href="#about" data-go-to="about"></a>
    <div class="intro__slider-container swiper-intro-container common-slider">
      <div class="swiper-intro-button-prev intro__slider-controller common-slider__controller common-slider__controller--left">
          <div class="common-slider__btn-icon"></div>
      </div>
      <div class="swiper-intro-button-next intro__slider-controller common-slider__controller common-slider__controller--right">
          <div class="common-slider__btn-icon"></div>
      </div>
      <div class="swiper-wrapper intro__swipper-wrapper">

	      <?php

		      $repeater = get_field( 'slider_on_main_page' );
		      $count = 1;

		      foreach( $repeater as $item ) {
			      ?>
              <div class="intro__slide swiper-slide">
                  <img class="intro__img --director-img"
                       src="<?php echo $item['slidermain_picture']['sizes']['medium_large']; ?>"
                       loading="lazy"
<!--                       srcset="--><?php //echo $item['slidermain_picture']['sizes']['large']; ?><!-- 2x"-->
                       alt="<?php echo $item['slidermain_title'] ?>"
                  >
                  <div class="intro__text-info">
                      <div class="intro__back --from-one-example">
	                      <?php echo $item['slidermain_title']; ?>
                      </div>
                      <?php if ($count == 1) { ?>
                            <h1 class="intro__title"><?php echo $item['slidermain_title']; ?></h1>
                    <?php } else { ?>
                            <h2 class="intro__title"><?php echo $item['slidermain_title']; ?></h2>
                      <?php } ?>
                      <p class="intro__description">
									      <?php echo $item['slidermain_description']; ?>
                      </p>
                      <a href="<?php echo $item['slidermain_button_link']; ?>" class="intro__btn btn">
                          <div class="btn__title"><?php echo $item['slidermain_button_text'];?></div>
                      </a>
                  </div>
              </div>
			      <?php
                    $count++;
		      }
	      ?>


<!--        <div class="intro__slide swiper-slide">-->
<!--            <img class="intro__img --director-img" src="img/worker.png" alt="Издаем книги от 1 экземпляра" title="Издаем книги от 1 экземпляра">-->
<!--          <div class="intro__text-info">-->
<!--            <div class="intro__back --from-one-example">Издаем книги от <br> 1 экземпляра</div>-->
<!--            <h2 class="intro__title">Издаем книги от 1 экземпляра</h2>-->
<!--            <p class="intro__description">Наши заказчики — это профессиональные и начинающие авторы, преподаватели, ученые, компании, государственные учреждения и предприятия.</p>-->
<!--            <div class="intro__btn btn">-->
<!--              <div class="btn__title">Задать вопрос</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="intro__slide swiper-slide"><img class="intro__img" src="img/intro-img5.png">-->
<!--          <div class="intro__text-info">-->
<!--            <div class="intro__back --about-manufactures">Создаем книги о <br> предприятиях «под ключ»</div>-->
<!--            <h2 class="intro__title">Создаем книги о предприятиях «под ключ»</h2>-->
<!--            <p class="intro__description">Занимается выпуском юбилейных, корпоративных и имиджевых книг о предприятиях.</p>-->
<!--            <div class="btn">-->
<!--              <div class="btn__title">Задать вопрос</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="intro__slide swiper-slide"><img class="intro__img" src="img/intro-img2.png">-->
<!--          <div class="intro__text-info">-->
<!--            <div class="intro__back --special">Особый переплет для <br> особых персон</div>-->
<!--            <h2 class="intro__title">Особый переплет для особых персон</h2>-->
<!--            <p class="intro__description">Продолжаем многовековую традицию создания роскошных экземпляров в ограниченных количествах.</p>-->
<!--            <div class="btn">-->
<!--              <div class="btn__title">Задать вопрос</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="intro__slide swiper-slide"><img class="intro__img" src="img/intro-img3.png">-->
<!--          <div class="intro__text-info">-->
<!--            <div class="intro__back --areas-n-cities">Создаем книги о городах <br> и районах</div>-->
<!--            <h2 class="intro__title">Создаем книги о городах и районах</h2>-->
<!--            <p class="intro__description">Книга о городе, поселке или районе станет достойным подарком для гостей и местных жителей, поможет сохранить историю для будущих поколений.</p>-->
<!--            <div class="btn">-->
<!--              <div class="btn__title">Задать вопрос</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="intro__slide swiper-slide"><img class="intro__img" src="img/intro-img4.png">-->
<!--          <div class="intro__text-info">-->
<!--            <div class="intro__back --rebuilding">Воссоздаем книжные <br> памятники</div>-->
<!--            <h2 class="intro__title">Воссоздаем книжные памятники</h2>-->
<!--            <p class="intro__description">Выполняем весь комплекс работ по созданию факсимиле – от работы с оригиналом, подготовки макета до изготовления книги.</p>-->
<!--            <div class="btn">-->
<!--              <div class="btn__title">Задать вопрос</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="intro__slide swiper-slide"><img class="intro__img" src="img/intro-img1.png">-->
<!--          <div class="intro__text-info">-->
<!--            <div class="intro__back --typography">Типография <br> требовательных клиентов</div>-->
<!--            <h2 class="intro__title">Типография требовательных клиентов</h2>-->
<!--            <p class="intro__description">Наши клиенты – это частные лица и компании с высокими требованиями к качеству и срокам изготовления продукции.</p>-->
<!--            <div class="btn">-->
<!--              <div class="btn__title">Задать вопрос</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

      </div>
    </div>
  </div>
</section>