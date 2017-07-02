<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

<footer class="site-footer">
    <div class="container">
        <?php
        if (   is_active_sidebar( 'first-footer-widget-area'  )
            && is_active_sidebar( 'second-footer-widget-area' )
            && is_active_sidebar( 'third-footer-widget-area'  )
            && is_active_sidebar( 'fourth-footer-widget-area' )
        ) {
            ?>
            <div class="row">
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
                    <small>&copy; 2016</small>
                </div>
            </div>
            <?php
        }elseif (is_active_sidebar( 'first-footer-widget-area'  )
            && is_active_sidebar( 'second-footer-widget-area' )
            && is_active_sidebar( 'third-footer-widget-area'  )
            && ! is_active_sidebar( 'fourth-footer-widget-area' )){
            ?>
            <div class="row">
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <small>&copy; 2016</small>
                </div>
            </div>
            <?php
        }elseif (is_active_sidebar( 'first-footer-widget-area'  )
            && is_active_sidebar( 'second-footer-widget-area' )
            && ! is_active_sidebar( 'third-footer-widget-area'  )
            && ! is_active_sidebar( 'fourth-footer-widget-area' )){
            ?>
            <div class="row">
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <!--                    --><?php //dynamic_sidebar( 'third-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">

                    <small>&copy; 2016</small>
                </div>
            </div>
            <?php
        }elseif (is_active_sidebar( 'first-footer-widget-area'  )
            && ! is_active_sidebar( 'second-footer-widget-area' )
            && ! is_active_sidebar( 'third-footer-widget-area'  )
            && ! is_active_sidebar( 'fourth-footer-widget-area' )
        ){
            ?>
            <div class="row">
                <div class="col-sm-3">
                    <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <!--                    --><?php //dynamic_sidebar( 'second-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">
                    <!--                    --><?php //dynamic_sidebar( 'third-footer-widget-area' ); ?>
                </div>
                <div class="col-sm-3">

                    <small>&copy; 2016</small>
                </div>
            </div>
            <?php
        }else{ ?>
            <div class="row">
                <div class="col-sm-3">
                    <h3>About</h3>
                    <div class="menu-about-container">
                        <ul id="menu-about" class="menu">
                            <li id="menu-item-739"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-739"><a
                                        href="products/index.html">Products</a></li>
                            <li id="menu-item-740"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-740"><a
                                        href="about-us/who-we-are/index.html">Who We Are</a></li>
                            <li id="menu-item-741"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-741"><a
                                        href="markets/index.html">Markets</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3>Resources</h3>
                    <div class="menu-resources-container">
                        <ul id="menu-resources" class="menu">
                            <li id="menu-item-1257"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1257"><a
                                        href="resources/index.html#case-studies">Case Studies</a></li>
                            <li id="menu-item-1258"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1258"><a
                                        href="resources/index.html#white-papers">White Papers</a></li>
                            <li id="menu-item-1259"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1259"><a
                                        href="resources/index.html#analyst-reports">Analyst Reports</a></li>
                            <li id="menu-item-1260"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1260"><a
                                        href="resources/index.html#data-sheets">Data Sheets</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3>Info</h3>
                    <div class="menu-info-container">
                        <ul id="menu-info" class="menu">
                            <li id="menu-item-753"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-753"><a
                                        href="about-us/privacy-policy/index.html">Privacy Policy</a></li>
                            <li id="menu-item-752"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-752"><a
                                        href="about-us/terms-of-use/index.html">Terms of Use</a></li>
                            <li id="menu-item-1093"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1093"><a
                                        href="contact/index.html">Contact Norse</a></li>
                            <li id="menu-item-768"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-768"><a
                                        href="site-map/index.html">Site Map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="socials">
                        <a class="youtube" target="_blank" href="https://www.youtube.com/user/norsecorporation"></a>
                        <a class="facebook" target="_blank" href="https://www.facebook.com/NorseCorporation"></a>
                        <a class="twitter" target="_blank" href="https://twitter.com/norsecorp"></a>
                        <a class="linkedin" target="_blank"
                           href="https://www.linkedin.com/company/norse-corporation"></a>
                        <a class="rss" href="http://darkmatters.norsecorp.com/feed/"></a>
                    </div>
                    <small>&copy; 2016</small>
                </div>
            </div>
        <?php } ?>
    </div>
</footer>
	</div><!-- .site-inner -->
</div><!-- .site -->
<?php

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
$logoUrl=$logo[0];
?>
<input type="hidden" id="logoImage" name="logoImage" value="<?php echo $logoUrl; ?>">
<?php
//var_dump($logoUrl);die;
if($logoUrl != NULL){
    ?>
    <script>
        $(document).ready(function () {
            var imagUrl=$('#logoImage').val();
//            console.log();
            $('.navbar-brand').css('background','url('+imagUrl+') center center no-repeat');
        });
    </script>
    <?php
}

?>
<?php wp_footer(); ?>
</body>
</html>
