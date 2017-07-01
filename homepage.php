<?php
/* Template Name: Homepage */
$headerData=get_field('header_first_sections');
$headerData=$headerData[0];
$leftHeaderButton=$headerData['left_button'][0];
$rightHeaderButton=$headerData['right_button'][0];
$whatWeDoSection=get_field('what_we_do');
//var_dump($whatWeDoSection[0]);die;
$whatWeDoSection=$whatWeDoSection[0];
$container=$whatWeDoSection['containers'];
$financialWrapper=get_field('financial-wrapper');
$phishingWrapper=get_field('phishing-wrapper');
$cyberTheardWrapper=get_field('cyber-threat-wrapper');
$errorReportingWrapper=get_field('error-reporting-wrapper');
$blackListWrapper=get_field('blacklist-wrapper');
$threatMappingWrapper=get_field('threat-mapping-wrapper');
get_header('homepage');
?>

<div id="cover">
    <noscript>This site requires javascript to function. Please enable javascript and reload.</noscript>
    <?php
    $finalLogo=esc_url( get_template_directory_uri() ).'/img/norse-mark-60px-white.svg';
    if(get_header_image() != FALSE){
        $finalLogo=get_header_image();
    }
    ?>

    <img class="loading-img" src=<?php echo $finalLogo; ?> >
<!--    --><?php //$startUpLogo=get_header_image();
//    if(header_image() != NULL) {
//            $startUpLogo = str_replace("\0", "", $startUpLogo);
//        ?>
<!---->
<!--        --><?php
//    }else{
//     ?>
<!--        <img class="loading-img" src="--><?php //echo esc_url( get_template_directory_uri() ); ?><!--/img/norse-mark-60px-white.svg">-->
<!--        --><?php
//    }
//    ?>
    <p>LOADING</p>
</div>
<div class="main">
    <section id="home" class="section-container"><!-- video  -->
        <?php
        if($headerData['backgroud_image']){
            ?>
            <video autoplay loop poster="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hmpg_bg.jpg" id="bgvid">
                <source src="<?php echo $headerData['backgroud_image']; ?>" type="video/mp4"></source>
            </video>
            <?php
        }else{
        ?>
        <video autoplay loop poster="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hmpg_bg.jpg" id="bgvid">
            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/norse-home.webm" type="video/webm"></source>
            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/norse-home.mp4" type="video/mp4"></source>
            <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/norse-home.ogv" type="video/ogg" media=""></source>
        </video>
        <?php
        }
        ?>
        <div class="container main-header">
            <div class="hero-cta">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <div class="logo-mark"></div> -->
                        <?php
                        if($headerData['header_text'] != ''){
                        ?>
                            <h1 class="main-copy-hero">
                                <?php echo $headerData['header_text']; ?>
                            </h1>
                            <?php
                        }else{
                        ?>
                        <h1 class="main-copy-hero">
                            real-time visibility into global cyber attacks
                        </h1>
                            <?php
                        }
                        if($headerData['sub_headinng_text'] != ""){
                        ?>
                            <p class="main-copy-sub">
                                <?php
                                echo $headerData['sub_headinng_text'];
                                ?>
                            </p>
                            <?php
                        }else{
                        ?>
                        <p class="main-copy-sub">
                            from the world's largest dedicated threat intelligence network
                        </p>
                            <?php }?>
                    </div>
                </div>
                <div class="row main-button-section">
                    <div class="col-sm-12">
                        <div class="hero-buttons">
                            <?php
                            if($leftHeaderButton['text']!=""){
                            $url="javscript:void(0);";
                                if($leftHeaderButton['url']!=""){
                                $url=$leftHeaderButton['url'];
                            }
                                ?>
                                <a class="map-button button-override" target="_blank" href="<?php echo $url;?>"><?php echo $leftHeaderButton['text']; ?></a>
                                <?php
                            }else{
                            ?>
                            <a class="map-button button-override" target="_blank" href="http://map.norsecorp.com/">Live
                                Attacks</a>
                                <?php  } ?>
                            <?php
                            if($rightHeaderButton['text']!=""){
                                $url="javscript:void(0);";
                                if($rightHeaderButton['url']!=""){
                                    $url=$rightHeaderButton['url'];
                                }
                                ?>
                                <a class="map-button button-override contact-scroll" target="_blank" href="<?php echo $url;?>"><?php echo $rightHeaderButton['text']; ?></a>
                                <?php
                            }else{
                                ?>
                                <a class="map-button button-override contact-scroll" href="#">GET NORSE</a>
                            <?php  } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row larger-border">
                <div class="col-sm-12 main-icon text-center">
                    <a class="slide-down"><span class="fa-stack">
                <i class="fa fa-chevron-down fa-1x"></i>
              </span></a>
                </div>
            </div>
        </div>
    </section><!-- FACTOID -->
    <section id="factoid" class="section-container">
        <div class="container-fluid" id="factoid-info-container">
            <!-- INFO -->
            <div class="row factoid-top factoid-row">
                <div class="col-sm-12 factoid-info-center visible-xs" id="center-title-mobile">
                    <div id="factoid-title-mobile">
                        <?php
                        if($whatWeDoSection['main_text'] != ""){
                            ?>
                            <h2><?php echo $whatWeDoSection['main_text']; ?></h2>
                            <?php
                        }else{
                        ?>
                        <h2>what we do</h2>
                        <?php
                        }
                            ?>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div id="factoid-info-7" class="fact text-right">
                        <?php
                        $dataCircle=$container[0];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-7 pulse7">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-7 pulse7">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                        ?>
                            <p class="factoid-content" id="factoid-content-7">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                        ?>

                        <p class="factoid-content" id="factoid-content-7">
                            Norse Operates In 47 Countries Around The Globe
                        </p><?php } ?>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-2">
                    <div id="factoid-info-1" class="fact text-left">
                        <?php
                        $dataCircle=$container[1];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-1 pulse1">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-1 pulse1">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                            ?>
                            <p class="factoid-content" id="factoid-content-1">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>

                            <p class="factoid-content" id="factoid-content-1">
                                Norse Operates In 47 Countries Around The Globe
                            </p><?php } ?>
                    </div>
                </div>
            </div>
            <div class="row factoid-middle factoid-row">
                <div class="col-sm-4">
                    <div id="factoid-info-6" class="fact text-right">
                        <?php
                        $dataCircle=$container[2];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-6 pulse6">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-6 pulse6">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                            ?>
                            <p class="factoid-content" id="factoid-content-6">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>

                            <p class="factoid-content" id="factoid-content-6">
                                Norse Operates In 47 Countries Around The Globe
                            </p><?php } ?>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <div id="factoid-info-2" class="fact text-left">
                        <?php
                        $dataCircle=$container[3];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-2 pulse2">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-2 pulse2">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                            ?>
                            <p class="factoid-content" id="factoid-content-2">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>

                            <p class="factoid-content" id="factoid-content-2">
                                Norse Operates In 47 Countries Around The Globe
                            </p><?php } ?>
                    </div>
                </div>
            </div>
            <div class="row factoid-bottom factoid-row">
                <div class="col-sm-4">
                    <div id="factoid-info-5" class="fact text-right">

                        <?php
                        $dataCircle=$container[4];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-5 pulse5">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-5 pulse5">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                            ?>
                            <p class="factoid-content" id="factoid-content-5">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>

                            <p class="factoid-content" id="factoid-content-5">
                                Norse Operates In 47 Countries Around The Globe
                            </p><?php } ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="factoid-info-4" class="fact text-center">
                        <?php
                        $dataCircle=$container[5];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-4 pulse4">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-4 pulse4">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                            ?>
                            <p class="factoid-content" id="factoid-content-4">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>

                            <p class="factoid-content" id="factoid-content-4">
                                Norse Operates In 47 Countries Around The Globe
                            </p><?php } ?>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div id="factoid-info-3" class="fact text-left">
                        <?php
                        $dataCircle=$container[6];
                        if($dataCircle['heading']!=""){
                            ?>
                            <h3 class="ft fact-title-3 pulse3">
                                <?php echo $dataCircle['heading'];?>
                            </h3>
                            <?php
                        }else {
                            ?>

                            <h3 class="ft fact-title-3 pulse3">
                                47 Countries
                            </h3>
                            <?php
                        }
                        if($dataCircle['sub_heading']!=""){
                            ?>
                            <p class="factoid-content" id="factoid-content-3">
                                <?php echo $dataCircle['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>

                            <p class="factoid-content" id="factoid-content-3">
                                Norse Operates In 47 Countries Around The Globe
                            </p><?php } ?>
                    </div>
                </div>
            </div>
            <div class="hidden-xs" id="center-title">
                <div id="factoid-title">
                    <?php
                    if($whatWeDoSection['main_text'] != ""){
                        ?>
                        <h2><?php echo $whatWeDoSection['main_text']; ?></h2>
                        <?php
                    }else{
                        ?>
                        <h2>what we do</h2>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!-- CIRCLE NAV -->
            <div class="factoid-nav">
                <div id="slider"></div>
                <div id="white-border-slider"></div>
                <div id="slider-bg"></div>
            </div>
        </div>
        <div class="section-icon text-center">
            <a class="slide-down"><span class="fa-stack">
                <i class="fa fa-chevron-down fa-1x"></i>
              </span></a>
        </div>
    </section><!-- TIMELINE -->
    <section id="timeline" class="section-container">
        <div id="timeline-title">
            <h2>How We Can Help</h2>
        </div>

        <div class="container" id="main-timeline">
            <?php


            ?>
            <div class="timeline-wrapper" id="financial-wrapper">
                <div class="sonar-wrapper" id="financial-sonar">
                    <div class="sonar-emitter">
                        <div class="sonar-wave" id="financial-wave"></div>
                    </div>
                </div>
                <div class="content-wrapper" id="financial-content">
                    <div class="content-wrapper-inner" id="financial-content-inner">
                        <?php
                        if($financialWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $financialWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                        ?>
                        <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                            <?php }
                            if($financialWrapper[0]['sub_heading']!=""){
                            ?>
                                <p>
                                <?php echo $financialWrapper[0]['sub_heading']; ?>
                                </p>
                                <?php
                            }else{
                            ?>
                            <p>
                            Major financial institutions offload expensive firewalls by preemptively refusing
                            connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                            Internet &ndash; a list refreshed every five seconds.
                        </p>
                                <?php
                            } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-wrapper" id="phishing-wrapper">
                <div class="sonar-wrapper" id="phishing-sonar">
                    <div class="sonar-emitter">
                        <div class="sonar-wave" id="phishing-wave"></div>
                    </div>
                </div>
                <div class="content-wrapper" id="phishing-content">
                    <div class="content-wrapper-inner" id="phishing-content-inner">
                        <?php if($phishingWrapper[0]['heading']){
                            ?>
                            <h3 class="content-inner-title" id="phishing-title"><?php echo $phishingWrapper[0]['heading']; ?></h3>

                            <?php
                        }else {
                            ?>
                            <h3 class="content-inner-title" id="phishing-title">Phoil Phishing</h3>
                            <?php
                        }
                        ?>
                        <?php
if($phishingWrapper[0]['sub_heading']){
    ?>
    <p>
        <?php
        echo $phishingWrapper[0]['sub_heading'];
        ?>
    </p>
    <?php
}else{
    ?>

                        <p>
                            Large banking organizations prevent na&iuml;ve employees from infecting their whole
                            infrastructure by intercepting clicks on phishing emails and redirecting outbound
                            connections &ndash; that otherwise would have gone to malicious servers -- towards landing
                            pages that reinforce more cautious behaviors.
                        </p>
    <?php }?>
                    </div>
                </div>
            </div>

            <div class="timeline-wrapper" id="cyber-threat-wrapper">
                <div class="sonar-wrapper" id="cyber-threat-sonar">
                    <div class="sonar-emitter">
                        <div class="sonar-wave" id="cyber-threat-wave"></div>
                    </div>
                </div>
                <div class="content-wrapper" id="cyber-threat-content">
                    <div class="content-wrapper-inner" id="cyber-threat-content-inner">
                        <?php if($cyberTheardWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title"><?php echo $cyberTheardWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{?>
                        <h3 class="content-inner-title">Outsource Monitoring</h3>
                        <?php }
                        if($cyberTheardWrapper[0]['sub_heading']){
                            ?>
                            <p>
                                <?php
                                echo $cyberTheardWrapper[0]['sub_heading'];
                                ?>
                            </p>
                            <?php
                        }else{?>
                        <p>
                            Global multi-enterprise networks depend on Norse continuous threat monitoring to patrol
                            their networks and darknet sites around the world, looking for stolen credit card numbers,
                            electronic health records and sensitive emails. Norse telemetry helps enterprises and law
                            enforcement identify and prosecute cyber criminals worldwide.
                        </p>
                            <?php } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-wrapper" id="error-reporting-wrapper">
                <div class="sonar-wrapper" id="error-reporting-sonar">
                    <div class="sonar-emitter">
                        <div class="sonar-wave" id="error-reporting-wave"></div>
                    </div>
                </div>
                <div class="content-wrapper" id="error-reporting-content">
                    <div class="content-wrapper-inner" id="error-reporting-content-inner">
                        <?php  if($errorReportingWrapper[0]['heading']){
                            ?>
                            <h3 class="content-inner-title"><?php echo $errorReportingWrapper[0]['heading'];  ?></h3>
                            <?php
                        }else{?>
                        <h3 class="content-inner-title">Breach-In-Progress</h3>
                        <?php }if($errorReportingWrapper[0]['sub_heading']){
                            ?>
                            <p>
                                <?php
                                echo $errorReportingWrapper[0]['sub_heading'];
                                ?>
                            </p>
                            <?php
                        }else{ ?>
                        <p>
                            Overwhelmed government agencies intelligently filter thousands of daily security events from
                            their existing SIEMs through automated Norse filters to identify and stop the most serious
                            breaches -- while they&rsquo;re still in-progress.
                        </p>
    <?php }?>
                    </div>
                </div>
            </div>

            <div class="timeline-wrapper" id="blacklist-wrapper">
                <div class="sonar-wrapper" id="blacklist-sonar">
                    <div class="sonar-emitter">
                        <div class="sonar-wave" id="blacklist-wave"></div>
                    </div>
                </div>
                <div class="content-wrapper" id="blacklist-content">
                    <div class="content-wrapper-inner" id="blacklist-content-inner">
                        <?php
                        if($blackListWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title"><?php echo $blackListWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                        ?>
                        <h3 class="content-inner-title">Instant Checks</h3>
                        <?php }if($blackListWrapper[0]['sub_heading']){

           ?>
                            <p>
                                <?php echo $blackListWrapper[0]['sub_heading'];?>
                            </p>
                            <?php
                        }else{ ?>
                            <p>
                            Fast-growing tech companies give their SOC analysts &lsquo;Norse superpowers&rsquo; to
                            perform instant background checks and dig up detailed attack records on virtually any IP or
                            URL in the world, from our 7-petabyte attack history database.
                        </p>
    <?php } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-wrapper" id="threat-mapping-wrapper">
                <div class="sonar-wrapper" id="threat-mapping-sonar">
                    <div class="sonar-emitter">
                        <div class="sonar-wave" id="threat-mapping-wave"></div>
                    </div>
                </div>
                <div class="content-wrapper" id="threat-mapping-content">
                    <div class="content-wrapper-inner" id="threat-mapping-content-inner">
                        <?php
                        if($threatMappingWrapper[0]['heading']){
                            ?>
                            <h3 class="content-inner-title"><?php echo $threatMappingWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                        ?>
                        <h3 class="content-inner-title">Catch More</h3>
                        <?php }if($threatMappingWrapper[0]['sub_heading']){
                          ?>
                            <p>
                                <?php
                                echo $threatMappingWrapper[0]['sub_heading'];
                                ?>
                            </p>
                            <?php
                        }else{ ?>
                            <p>
                            Sophisticated technology customers use Norse to isolate totally new attack vectors their
                            current systems miss, by installing Norse attack intelligence behind their existing
                            firewalls and IPS&rsquo;s.
                        </p>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div> <!-- END OF DESKTOP / LAPTOP VIEW -->

        <!-- START MOBILE TIMELINE -->
        <div class="container" id="timeline-container-mobile">

            <div class="timeline-vertical-line" id="financial-vertical-line">
                <div class="timeline-circle" id="financial-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
                <div class="content-wrapper-mobile" id="financial-mobile-content">
                    <div class="content-wrapper-inner" id="financial-content-inner">
                        <?php
                        if($financialWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $financialWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                            ?>
                            <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                        <?php }
                        if($financialWrapper[0]['sub_heading']!=""){
                            ?>
                            <p>
                                <?php echo $financialWrapper[0]['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>
                            <p>
                                Major financial institutions offload expensive firewalls by preemptively refusing
                                connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                                Internet &ndash; a list refreshed every five seconds.
                            </p>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-vertical-line" id="phishing-vertical-line">
                <div class="timeline-circle" id="phishing-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
                <div class="content-wrapper-mobile" id="phishing-mobile-content">
                    <div class="content-wrapper-inner" id="phishing-content-inner">
                        <?php
                        if($phishingWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $phishingWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                            ?>
                            <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                        <?php }
                        if($phishingWrapper[0]['sub_heading']!=""){
                            ?>
                            <p>
                                <?php echo $phishingWrapper[0]['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>
                            <p>
                                Major financial institutions offload expensive firewalls by preemptively refusing
                                connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                                Internet &ndash; a list refreshed every five seconds.
                            </p>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-vertical-line" id="cyber-threat-vertical-line">
                <div class="timeline-circle" id="cyber-threat-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
                <div class="content-wrapper-mobile" id="cyber-threat-mobile-content">
                    <div class="content-wrapper-inner" id="cyber-threat-content-inner">
                        <?php
                        if($cyberTheardWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $cyberTheardWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                            ?>
                            <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                        <?php }
                        if($cyberTheardWrapper[0]['sub_heading']!=""){
                            ?>
                            <p>
                                <?php echo $cyberTheardWrapper[0]['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>
                            <p>
                                Major financial institutions offload expensive firewalls by preemptively refusing
                                connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                                Internet &ndash; a list refreshed every five seconds.
                            </p>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-vertical-line" id="error-reporting-vertical-line">
                <div class="timeline-circle" id="error-reporting-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
                <div class="content-wrapper-mobile" id="error-reporting-mobile-content">
                    <div class="content-wrapper-inner" id="error-reporting-content-inner">
                        <?php
                        if($errorReportingWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $errorReportingWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                            ?>
                            <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                        <?php }
                        if($errorReportingWrapper[0]['sub_heading']!=""){
                            ?>
                            <p>
                                <?php echo $errorReportingWrapper[0]['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>
                            <p>
                                Major financial institutions offload expensive firewalls by preemptively refusing
                                connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                                Internet &ndash; a list refreshed every five seconds.
                            </p>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-vertical-line" id="blacklist-vertical-line">
                <div class="timeline-circle" id="blacklist-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
                <div class="content-wrapper-mobile" id="blacklist-mobile-content">
                    <div class="content-wrapper-inner" id="blacklist-content-inner">
                        <?php
                        if($blackListWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $blackListWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                            ?>
                            <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                        <?php }
                        if($blackListWrapper[0]['sub_heading']!=""){
                            ?>
                            <p>
                                <?php echo $blackListWrapper[0]['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>
                            <p>
                                Major financial institutions offload expensive firewalls by preemptively refusing
                                connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                                Internet &ndash; a list refreshed every five seconds.
                            </p>
                            <?php
                        } ?>
                    </div>
                </div>
            </div>

            <div class="timeline-vertical-line" id="threat-mapping-vertical-line">
                <div class="timeline-circle" id="threat-mapping-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
                <div class="content-wrapper-mobile" id="threat-mapping-mobile-content">
                    <div class="content-wrapper-inner" id="threat-mapping-content-inner">
                        <?php
                        if($threatMappingWrapper[0]['heading']!=""){
                            ?>
                            <h3 class="content-inner-title" id="financial-title"><?php echo $threatMappingWrapper[0]['heading']; ?></h3>
                            <?php
                        }else{
                            ?>
                            <h3 class="content-inner-title" id="financial-title">Offloading</h3>
                        <?php }
                        if($threatMappingWrapper[0]['sub_heading']!=""){
                            ?>
                            <p>
                                <?php echo $threatMappingWrapper[0]['sub_heading']; ?>
                            </p>
                            <?php
                        }else{
                            ?>
                            <p>
                                Major financial institutions offload expensive firewalls by preemptively refusing
                                connections from Norse&rsquo;s list of the 5 million most dangerous addresses on the
                                Internet &ndash; a list refreshed every five seconds.
                            </p>
                            <?php
                        } ?>
                    </div>
                </div>
                <div class="timeline-circle last" id="financial-circle">
                    <div class="timeline-circle-inner"></div>
                </div>
            </div>
        </div> <!-- END MOBILE TIMELINE -->
        <div class="section-icon text-center">
            <a class="slide-down"><span class="fa-stack">
                <i class="fa fa-chevron-down fa-1x"></i>
              </span></a>
        </div>
    </section><!-- PRODUCTS -->
    <section id="products" class="section-container">
        <div class="container-fluid main-products">
            <div class="row products-row">
                <div class="col-sm-6 products-col appliance">
                    <div class="row appliance-row">
                        <div class="col-sm-12 appliance-content norse-product">
                            <h3>NORSE<span class="product-name"> APPLIANCE<sup>&trade;</sup></span></h3>
                            <div class="prod-content-fadein">
                                <p class="product-blurb">
                                    Your hardline to the Norse Intelligence Network that pre-emptively blocks attacks
                                    and improves your overall security ROI.
                                </p>
                                <a class="product-btn button-override" href="products/norse-appliance/index.html">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 products-col active intelligence-service">
                    <div class="row intelligence-service-row">
                        <div class="col-sm-12 intelligence-service-content norse-product">
                            <h3>NORSE<span class="product-name"> Intelligence Service<sup>&trade;</sup></span></h3>
                            <div class="prod-content-fadein">
                                <p class="product-blurb">
                                    Professional 24x7 continuous threat monitoring for large, multi-enterprise networks.
                                </p>
                                <a class="product-btn button-override"
                                   href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-icon text-center">
            <a class="slide-down"><span class="fa-stack">
                <i class="fa fa-chevron-down fa-1x"></i>
              </span></a>
        </div>
    </section><!-- INDUSTRY -->
    <section id="industry" class="section-container">
        <div class="solutions-title">Markets</div>
        <div class="container-fluid main-industries">
            <div class="row solutions-row">
                <div class="col-sm-6 double-verticals">
                    <div class="row solutions-row">
                        <div class="col-sm-12 solution financial-sector" id="financial">
                            <div class="financial-sector-content sector-content">
                                <h3>Financial</h3>
                                <div class="solution-content-fadein">
                                    <p id="financial-sector-blurb" class="solutions-blurb">
                                        Digital attacks cost the typical financial services organization millions every
                                        year. Banks, exchanges, card processors and insurance companies using Norse can
                                        block attacks earlier, spot gaps in their current security systems, and better
                                        manage their overall risk. Norse delivers the world&rsquo;s best-defended
                                        financial organizations better returns on their security investment.&nbsp;
                                    </p>
                                    <div class="solutions-btn" id="financial-sector-btn">
                                        <a class="button-override" href="markets/financial-services/index.html">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 solution government-sector">
                            <div class="gov-sector-content sector-content">
                                <h3>Government</h3>
                                <div class="solution-content-fadein">
                                    <p id="gov-sector-blurb" class="solutions-blurb">
                                        While adversaries increasingly target critical national infrastructure,
                                        responsibility for intelligence collection is shared across DoD, DHS and the
                                        DOJ. This sometimes creates unintended gaps and "blind spots" notwithstanding
                                        regulations that already make fast, effective intelligence sharing difficult.
                                        Government customers around the world rely on Norse to bridge the gaps and
                                        deliver insights from difficult-to-penetrate geographies and darknets.
                                    </p>
                                    <div class="solutions-btn" id="gov-sector-btn">
                                        <a class="button-override" href="markets/government/index.html">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 single-vertical solution technology-sector" id="tech">
                    <div class="tech-sector-content sector-content">
                        <h3>Technology</h3>
                        <div class="solution-content-fadein">
                            <p id="tech-sector-blurb" class="solutions-blurb">
                                Fast-growing tech companies are especially vulnerable to attack. Rapidly-scaling
                                infrastructures are excruciatingly difficult to grow securely, and hackers routinely
                                exploit those gaps as innovators struggle to focus on building their businesses.
                                Billion-dollar startups rely on Norse to pre-emptively block the advanced threats that
                                other systems miss.
                            </p>
                            <div class="solutions-btn" id="tech-sector-btn">
                                <a class="button-override" href="#">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section-icon text-center">
            <a class="slide-down"><span class="fa-stack">
                <i class="fa fa-chevron-down fa-1x"></i>
              </span></a>
        </div>
    </section>
    <section id="news" class="section-container">
        <div class="container-fluid">
            <div class="col-sm-7">
                <div class="news-col news">
                    <h2>News</h2>
                    <p><span class="date-time">01.20</span><a href="http://www.technewsworld.com/story/83005.html?rss=1"
                                                              target="_blank">Ukraine Mounts Investigation of Kiev
                            Airport Cyberattack</a></p>
                    <p><span class="date-time">01.19</span><a
                            href="https://fcw.com/articles/2016/01/19/iran-hacker-lyngaas.aspx" target="_blank">Prisoner
                            swap frees Iranian hacker</a></p>
                    <p><span class="date-time">01.18</span><a
                            href="http://searchsecurity.techtarget.com/news/4500271132/DHCP-servers-must-be-patched-against-denial-of-service-attacks"
                            target="_blank">DHCP servers must be patched against denial-of-service attacks</a></p>
                    <p><span class="date-time">01.11</span><a
                            href="http://www.networkworld.com/article/3020585/security/the-incident-response-fab-five.html#tk.rss_networkingnuggetsandsecuritysnippets"
                            target="_blank">The Incident Response &ldquo;Fab Five&rdquo;</a></p>
                    <p><span class="date-time">01.05</span><a
                            href="http://www.kotaku.com.au/2016/01/the-playstation-network-is-back-online/"
                            target="_blank">PLAYSTATION The PlayStation Network Is Back Online</a></p>
                    <p><span class="date-time">12.30</span><a
                            href="http://www.newsfactor.com/story.xhtml?story_id=012000EWJWI0" target="_blank">Cybersecurity
                            Predictions and Key Threats for 2016 Cybersecurity Predictions and Key Threats for 2016</a></p>
                    <p><span class="date-time">12.30</span><a
                            href="http://www.toptechnews.com/article/index.php?story_id=023000SKE5AI" target="_blank">NETWORK
                            SECURITY Cybersecurity Predictions and Key Threats for 2016</a></p>
                    <p><span class="date-time">12.29</span><a
                            href="http://www.eastoregonian.com/eo/editorials/20151229/other-views-terrorist-hacking-attacks-are-a-serious-threat"
                            target="_blank">Other views: Terrorist hacking attacks are a serious threat</a></p>
                    <p><span class="date-time">12.28</span><a
                            href="http://onlineathens.com/opinion/2015-12-28/what-others-say-government-should-come-clean-cyber-threats"
                            target="_blank">What others say: Government should come clean on cyber threats</a></p>
                    <p><span class="date-time">12.26</span><a
                            href="http://www.enterprise-security-today.com/news/5-Cybersecurity-Predictions-for-2016/story.xhtml?story_id=132004JY2Q9O"
                            target="_blank">5 Cybersecurity Predictions for 2016</a></p>
                    <p><span class="date-time">12.24</span><a
                            href="http://www.thedailytimes.com/opinion/other_voices/guard-the-power-grid/article_44e2af6a-abe0-5838-aac0-128ccf49b797.html"
                            target="_blank">Guard the power grid</a></p>
                    <p><span class="date-time">12.23</span><a href="http://www.tradearabia.com/news/IT_297318.html"
                                                              target="_blank">&lsquo;Only 49pc CEOs prepare for a future
                            cyber event&rsquo;</a></p>
                    <a href="#" class="more-news">More News</a>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="news-col blog">
                    <h2>Blog</h2>
                    <div id="blog-feed"></div>
                </div>
            </div>
        </div>
        <div class="section-icon text-center">
            <a class="slide-down"><span class="fa-stack">
                <i class="fa fa-chevron-down fa-1x"></i>
              </span></a>
        </div>
    </section>
    <section id="contact" class="section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-holder">
                        <script src="http://app-sj01.marketo.com/js/forms2/js/forms2.min.js"></script>
                        <form id="mktoForm_374"></form>
                        <script>MktoForms2.loadForm("//app-sj01.marketo.com", "681-ONL-293", 374, function (form) {
                                form.onSuccess(function (values, followUpUrl) {
                                    location.href = "";
                                    //return false to prevent the submission handler continuing with its own processing
                                    return false;
                                });
                            });
                            MktoForms2.whenReady(function () {
                                jQuery('.mktoFormCol').each(function () {
                                    var input_id = jQuery(this).find('input, select, textarea').attr('id');
                                    if (input_id != '') {
                                        jQuery(this).addClass(input_id);
                                    }
                                    ;
                                });
                                jQuery('.requestType').change(function () {
                                    jQuery('.mktoFormCol').each(function () {
                                        var input_id = jQuery(this).find('input, select, textarea').attr('id');
                                        if (input_id != '') {
                                            jQuery(this).addClass(input_id);
                                        }
                                        ;
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

       <?php get_footer('homepage'); ?>