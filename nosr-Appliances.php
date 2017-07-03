<?php
/* Template Name: norseAppliances-template */
$backImg=get_field('back_image');
$logoImg=get_field('logo_image');
$frontImg=get_field('front_image');
$contentOfPage=get_field('the_content_of_Page');
//var_dump($logoImg,$frontImg);die;
get_header();
?>
    <div class="hero master-color-bg">
        <div class="container">
            <div class="overlay">
                <h4 style="text-align: center;"><?php the_title(); ?></h4>
                <?php if($logoImg){
                    ?>
                    <p style="text-align: center;"><img class="size-full" src="<?php echo $logoImg;?>" alt="norse-appliance-white"></p>
                    <?php
                }else{ ?>
                <p style="text-align: center;"><img class="size-full" src="/wp-content/uploads/2015/06/norse_appliance_white.svg" alt="norse-appliance-white"></p>
                <?php } ?>
                <p style="text-align: center; margin-top: 30px;"><img class="alignnone wp-image-249 size-medium" src="<?php echo $frontImg;?>" alt="server-appliance" width="470" height="151"></p>
            </div>
        </div>
    </div><div id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="fc-wysiwyg">
<?php echo $contentOfPage;?>
</div></div>
</div><!-- /#content -->

<?php

if($backImg){
    ?>
    <input type="hidden" id="headdImages" value="<?php echo $backImg?>">
    <script>
        $(document).ready(function () {
            var imagUrl=$('#headdImages').val();
            $('.page-id-247 .hero').css('background','url('+imagUrl+') center center no-repeat');
        });
    </script>
    <?php
}
get_footer();
?>