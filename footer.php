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

            <div class=list>
                <h3> About Me </h3>
                <p>
					<?php if (have_posts()) : the_post();
					the_author_description();
					endif;
					rewind_posts(); ?>
                </p>
            </div>

        </div>

        <br clear="all"/>

        <div class=credit>
            <p> Theme Designed by <a href="http://haoxiang.org"><strong>Haoxiang Li</strong></a> </p>
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
