<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class=block>
            <div class=single-post>
                <div class=post-title>
                    <div class=date>
                        <h2><?php the_time('j F') ?></h2>
                        <h2><?php the_category(', ') ?></h2>
                    </div>
                    <div class=full-title>
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                </div>
                <div class=post-content>
                    <p> <?php the_content(); ?> </p>
                </div>
            </div>
        </div>

        <?php comments_template(); ?>

    <?php endwhile; else: ?>
        <h1>Uh oh.</h1>
        <p>Sorry, no posts matched your criteria. Wanna search instead?</p>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>

    <?php endif; ?>

<?php get_footer(); ?>
