<?php get_header(); ?>

    <div class=content>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class=post>
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <h2>In <?php the_category(', ') ?> on <?php the_time('j F Y') ?> with <?php comments_popup_link('no comments', '1 comment', '% comments'); ?></h2>
                <div class=subseperator>
                    <span></span>
                </div>
                <p>
                    <?php the_content(); ?>
                </p>
                <div class=subseperatorpair>
                    <span></span>
                </div>
            </div>

            <div class=navigation>
                <span class="older"><?php previous_post_link('%link') ?></span>
                <span class="newer"><?php next_post_link('%link') ?></span>
            </div>

            <?php comments_template(); ?>

        <?php endwhile; else: ?>

            <h1>Uh oh.</h1>
            <div class="subseperator">
                <span></span>
            </div>
            <p>Sorry, no posts matched your criteria. Wanna search instead?</p>
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>

        <?php endif; ?>


</div> <!-- Content -->

<?php get_footer(); ?>
