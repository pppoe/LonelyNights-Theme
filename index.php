<?php
/**
 * The main template file.
 *
 */
?>

<?get_header(); ?>

<div id="container" >
    <div id="content" role="main">
        <div class=content id="mainlist">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class=post>
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <h2>In <?php the_category(', ') ?> on <?php the_time('j F Y') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></h2>
                <div class=subseperator>
                    <span></span>
                </div>

                <div class=postContent>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    </p>
                    <div class=subseperatorpair>
                        <span></span>
                    </div>
                </div>

            </div>

            <?php endwhile ?>
            <?php endif ?>

            <div class=navigation>
                <span class="older"><?php next_posts_link('&larr; Older') ?></span>
                <span class="newer"><?php previous_posts_link('Newer &rarr;') ?></span>
            </div>

        </div><!-- #content -->
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>
