        </div><!-- #main -->


        <div id="footer" role="contentinfo">
            <div id="colophon">

            <?php //get_sidebar( 'footer' ); ?>

            </div>
        </div><!-- footer -->

        <div class=seperator>
            <span></span>
        </div>

        <div class=bottomsec>
            <div class=table>
                <table>
                    <tr>
                        <td> 
                            <a href="https://twitter.com/mr_pppoe">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/twitter.png"></img> 
                                </span>
                                <span class=desc> Follow Me On Twitter </span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <a href="https://www.facebook.com/mr.pppoe">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/facebook.png"></img> 
                                </span>
                                <span class=desc> Friend Me On FB </span>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class=table>
                <table>
                    <tr>
                        <td> 
                            <a href="https://plus.google.com/111168737032894110254">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/gplus.png"></img> 
                                </span>
                                <span class=desc> Circle Me On GPlus</span>
                            </a> 
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <a href="mailto:mr.pppoe@gmail.com">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/gmail.png"></img> 
                                </span>
                                <span class=desc> Contact Me By Gmail </span>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>

            <div class=entry>
                <table>
                    <tr>
                        <td> 
                            <a href="/feed">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/rss.png"></img> 
                                </span>
                                <span class=desc> Subscribe Me </span>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>

            <div class=entry>
                <?php $args = array(
                    'orderby'          => 'name',
                    'order'            => 'ASC',
                    'limit'            => -1,
                    'category_name'    => 'Blogroll',
                    'hide_invisible'   => 1,
                    'show_updated'     => 0,
                    'echo'             => 1,
                    'categorize'       => 1,
                    'title_li'         => __('Bookmarks'),
                    'title_before'     => '<h2>',
                    'title_after'      => '</h2>',
                    'category_orderby' => 'name',
                    'category_order'   => 'ASC',
                    'class'            => 'linkstable',
                );
                ?>
                <?php wp_list_bookmarks($args) ?>            
            </div>

            <div class=list>
                <p>
                    <?php if (have_posts()) : the_post();
                    the_author_description();
                    endif;
                    rewind_posts(); ?>
                </p>
            </div>


        </div>

        <br clear="all"/>

        <div class=seperator>
        </div>

        <div class=credit>
            <p> Theme Designed by <a href="http://haoxiang.org"><strong>Haoxiang Li</strong></a></p> 
            <p> Credits: <a href="http://www.wpzoom.com/author/admin/"><strong>Pavel Ciorici</strong></a> and <a href=http://subtlepatterns.com/">Subtle Patterns</a></p>
            <p> This Site is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a> </p> 
        </div>

    </div><!-- #lonelynights -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
</body>
</html>
