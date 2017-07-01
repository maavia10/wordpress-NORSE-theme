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
</section>
</div>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gmap.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/classie.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/changeHeader.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/affix-init.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/norseabc8.js?ver=1.04"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/norse-main60c6.js?ver=1.01"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/circular-slider60c6.js?ver=1.01"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/verticalpage_scroll.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/moment.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.rss.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/norse-home252d.js?ver=1.11"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wp-embed.mineb11.js?ver=4.4"></script>
<script type="text/javascript">
    document.write(unescape("%3Cscript src='" + document.location.protocol + "//munchkin.marketo.net/munchkin.js' type='text/javascript'%3E%3C/script%3E"));
</script><!-- LEADLANDER TRACKING -->
<script type="text/javascript" language="javascript">llactid = 22947</script>
<script type="text/javascript" language="javascript" src="wp-content/themes/norse/js/trackalyze.js"></script>
<!-- /LEADLANDER TRACKING --><!--VISISTAT SNIPPET-->
<script type="text/javascript">
    //<![CDATA[
    var DID = 239464;
    var pcheck = (window.location.protocol == "index.html") ? "https://sniff.visistat.com/live.js" : "http://stats.visistat.com/live.js";
    document.writeln('<scr' + 'ipt src="' + pcheck + '" type="text\/javascript"><\/scr' + 'ipt>');
    //]]>
</script><!--VISISTAT SNIPPET//-->
<script>Munchkin.init('681-ONL-293');</script>
<script>
    //google tracking
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-26527221-1', 'norse-corp.com');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

</script>
<script>
    jQuery(document).ready(function () {
        jQuery(".menu-item").on('click',function () {
            if(!jQuery(this).find('.dropdown-menu').hasClass('opened')){
                jQuery('.dropdown-menu').slideUp();
                jQuery(this).find('.dropdown-menu').slideDown().addClass('opened');
            }
            else{
                jQuery(this).find('.dropdown-menu').slideUp().removeClass('opened');
            }
        });
    });
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js"></script>
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

</body>
</html>
