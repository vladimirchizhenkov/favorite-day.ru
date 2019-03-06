<div class="row">
    <div class="col-md-2 col-lg-2">
        <div class="post__user">
            <img src="img/post_photo.jpeg" alt="ava photo" class="post__photo">
            <div class="post__name"><?php echo $getArticleSingle['article_author']?></div>
            <div class="post__date">Опубликовано: <?php echo $getArticleSingle['article_date'] ?></div>
        </div>
    </div>
    <div class="col-md-10 col-lg-10">
        <div class="post">
            <h1 class="post__title">
                <?php echo $getArticleSingle['article_title'] ?>
            </h1>
            <div style="color: red; text-align: center;">
                Сюда вывести картинку из превьюхи
            </div>
            <div class="post__text">
                <?php echo $getArticleSingle['article_text'] ?>
            </div>
            <a href="/index.php?c=article" class="post__link">Вернуться к списку статей</a>
        </div>
    </div>
</div>