<?php get_header('page') ?>

<div id="page-title">

    <div class="row">

        <div class="ten columns centered text-center">
            <h1><span>Category</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
        </div>

    </div>

</div> <!-- Page Title End-->


<article class="post">
    <div class="entry-header cf">
        <h1><a href="<?php the_permalink() ?>" title=""><?php the_title() ?></a></h1>
        <p class="post-meta">
            <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
            <span class="categories">
                <?php the_tags('', ' / ') ?>
            </span>
        </p>
    </div>

    <div class="post-thumb">
        <a href="<?php the_permalink() ?>" title=""><?php the_post_thumbnail('post_thumb') ?></a>
    </div>
    <div class="post-content">
        <?php
        the_content();
        ?>

    </div>

</article> <!-- post end -->