<section class="about box" id="about">
  <div class="box__container about__container">
    <div class="about__info about__section">
      <div class="title-box">
        <div class="title-box__back">О нас</div>
        <h2 class="title-box__title">Издательский дом «Сегмент»</h2>
      </div>
      <p class="about__description">Издательский дом «Сегмент»  (ООО «Колорград») – это крупнейший в стране частный издательско-полиграфический комплекс, специализирующийся на издании книг малыми тиражами. Мы оказываем услуги полного цикла – от работы с текстом до изготовления книг.</p>
    </div>
    <div class="about__section">

      <?php 
          $counttab = get_field('rasschitat_stoimost_tab')[0];
      ?>

      <div class="count-tab">
        <div class="count-tab__section --text">
          <p class="count-tab__description">
            <?php echo $counttab['tekst']; ?>
          </p>
          <div class="count-tab__btn btn link" data-go-to="quiz-form">
            <div class="btn__title">
              <?php echo $counttab['tekst_knopki']; ?>
            </div>
          </div>
        </div>
        <div class="count-tab__section --img">
          <img 
            src="<?php echo $counttab['kartinka']; ?>"
            alt="<?php echo $counttab['alt_u_kartinki']; ?>"
            loading="lazy"
            >
        </div>
      </div>
    </div>
  </div>
</section>