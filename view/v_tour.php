<?php echo $getSliderTpl ?>

<div class="row">

    <?php foreach ($getPreviewTour as $tour) { ?>

    <div class="col-md-4 col-lg-4">
        <div class="tour-card"><a href="#" class="tour-card__link">
                <img class="tour-card__img img-fluid" src="<?php echo '/upload/tour/' . $tour['tour_img_src']?>"></a>
            <div class="tour-card__item">
                <a href="#"
                   class="tour-card__title"><?php echo $tour['tour_title']?></a>
                <p class="tour-card__desc"><?php echo $tour['tour_text']?></p>
                <p class="tour-card__place text text--weight-700"><?php echo $tour['tour_country']?> | <?php echo $tour['tour_region']?></p>
                <p class="tour-card__price text text--weight-700">Стоимость: <?php echo $tour['tour_price']?> &#8381;</p>
                <p class="tour-card__date text text--weight-700">Даты: <?php echo $tour['tour_date_start']?> - <?php echo $tour['tour_date_end']?></p>
                <div class="tour-card__box">
                    <a href="<?php echo '/view/static_tpl/' . $tour['tour_html_link']?>" class="tour-card__btn button button--color-blue">Подробнее</a>
                    <a href="#"
                       class="tour-card__btn button button--color-blue">Присоединиться</a>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
