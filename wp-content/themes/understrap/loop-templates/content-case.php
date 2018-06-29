
<div class="col-lg-3 pt-3">

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail(); ?>
        <div class="desc-section">
            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <?php the_content() ?>
        </div>
        <!-- /.desc-section -->

    </article><!-- #post-## -->

</div>