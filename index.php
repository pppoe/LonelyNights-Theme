<?php
/**
 * The main template file.
 *
 */
?>

<?get_header(); ?>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <div class=block>
        <div class=single-post>
            <div class=post-title>
                <div class=date>
                    <h2><?php the_time('j F') ?></h2>
                    <h2><?php the_category(', ') ?></h2>
                </div>
                <div class=title>
                    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
                </div>
            </div>
            <div class=post-content>
                <p> <?php the_content(); ?> </p>
            </div>
        </div>
    </div>

    <?php endwhile ?>

    <!-- Page Indicator -->
    <div class=navigation>
        <!--<span class="prev"><?php next_post_link('%link'); ?></span>-->
        <span class="prev">
            <?php 
            next_posts_link('&#11013;');
            ?>
        </span>
        <span class="middle">
            <script type="text/javascript">
                update = new Date(document.lastModified);
                year = update.getFullYear();
                document.write("Copyright &copy; 2012" + (year==2009 ? "" : ("-"+year)) + " Haoxiang Li.");
            </script>
        </span>
        <span class="next">
            <?php 
            previous_posts_link('&#10145;') 
            ?>
        </span>
    </div><!-- #navigation -->

    <?php endif ?>

<?php get_footer(); ?>
