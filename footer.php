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
                            <a href="">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/twitter.png"></img> 
                                </span>
                                <span class=desc> Follow Me On Twitter </span>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <a href="">
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
                            <a href="">
                                <span class=image>
                                    <img src="<?php bloginfo('template_directory'); ?>/png/gplus.png"></img> 
                                </span>
                                <span class=desc> Circle Me On GPlus</span>
                            </a> 
                        </td>
                    </tr>
                    <tr>
                        <td> 
                            <a href="">
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
                            <a href="">
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
                <h3> Categories </h3>
                <ul>
                    <li> Lorem Mauris felis </li>
                    <li> Lorem felis </li>
                    <li> Mauris felis </li>
                    <li> felis </li>
                </ul>
            </div>
            <div class=list>
                <h3> Archive </h3>
                <ul>
                    <li> Lorem Mauris felis </li>
                    <li> Lorem felis </li>
                    <li> Mauris felis </li>
                    <li> felis </li>
                </ul>
            </div>
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
