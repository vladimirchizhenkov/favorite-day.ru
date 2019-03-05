<div class="row">
    <div class="col-md-12 col-lg-12 mb-4">
        <div class="notice">
            <div class="notice__left">
                <img src="/assets/img/temp/notice_dump.jpg" alt="notice img" class="notice__img">
            </div>
            <div class="notice__right">
                <p class="notice__text">Подборка интересных статей о жизни ру и зарубежного
                    outdoor-сообщества.</p>
                <p class="notice__text">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Ab amet architecto aut consequuntur culpa eaque excepturi fuga iste
                    itaque iusto magni quae, sequi tempore, totam veniam? A beatae culpa</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <?php foreach($getPreviewArticle as $article) { ?>

    <div class="col-md-4 col-lg-4 mb-4">
        <article class="article article--card">
            <img src="<?php echo '/upload/article/' . $article['article_img_src']?>" alt="art pic" class="article__img img-fluid">
            <a href="/index.php?c=article_single&id_article=<?php echo $article['id_article']?>" class="article__title"><?php echo $article['article_title']?></a>
            <p class="article__desc">
               <?php echo substr($article['article_text'], 0, 350) . '...'?>
            </p>
            <div class="article__inner">
                <a href="/index.php?c=article_single&id_article=<?php echo $article['id_article']?>" class="article__link">Читать далее...</a>
                <div class="article__date"><?php echo $article['article_date']?></div>
            </div>
        </article>
    </div>

    <?php } ?>
</div>