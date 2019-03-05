<?php foreach ($getPreviewPost as $post) { ?>

    <div class="article">
        <a href="/index.php?c=post_single&post_id=<?php echo $post['id_post']?>" class="article__title"><?php echo $post['post_title'] ?></a>
        <p class="article__desc"><?php echo substr($post['post_text'], 0, 1000) . "..."; ?></p>
        <div class="article__video">
            <iframe class="article__frame" src="<?php echo $post['post_video_src']?>"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
        <div class="article__inner">
            <a href="/index.php?c=post_single&post_id=<?php echo $post['id_post']?>" class="article__link">Читать далее...</a>
            <div class="article__date"><?php echo $post['post_date']?></div>
        </div>
    </div>

<?php } ?>