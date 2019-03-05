<div class="row">
    <div class="col-md-2 col-lg-2">
        <div class="post__user">
            <img src="img/post_photo.jpeg" alt="ava photo" class="post__photo">
            <div class="post__name">Username</div>
            <div class="post__date"><?php echo $getPostSingle['post_date'] ?></div>
        </div>
    </div>
    <div class="col-md-10 col-lg-10">
        <div class="post">
            <h1 class="post__title">
                <?php echo $getPostSingle['post_title'] ?>
            </h1>
            <div class="post__video">
                <iframe class="post__frame" src="<?php echo $getPostSingle['post_video_src']?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="post__text">
                <?php echo $getPostSingle['post_text'] ?>
            </div>
            <a href="/index.php" class="post__link">Вернуться к списку статей</a>
        </div>
    </div>
</div>
