<?php
/* Template Name: whoareyou-template */
$headerImage=get_field('header_image');
$bottoImag=get_field('bottom_image');
$content=get_field('main_content');
$contentAfter=get_field('conent_after_image');
//var_dump($content);die;
get_header();
?>
    <div class="hero master-color-bg">
      <div class="container">
        <div class="overlay">
    <h1 style="text-align: center; "><?php the_title();?></h1>
        </div>
      </div>
    </div>
    <div id="content" role="main">
      <div class="container">
    <div class="row">
    <div class="col-sm-12">

    <div class="fc-wysiwyg">
        <?php echo $content; ?>
        <?php if($bottoImag!=NULL){ ?>
        <div class="fc-full-bleed-image" style="background-position: center center;background: rgba(0, 0, 0, 0) url('<?php echo $bottoImag;?>') no-repeat scroll center center"></div>
    <?php } ?>
        <?php echo $contentAfter;?>
    </div>
    </div>
    </div></div></div><!-- /#content -->

<?php

if($headerImage!=NULL){
    ?>
    <input type="hidden" id="headdImage" value="<?php echo $headerImage ?>">
    <script>
        $(document).ready(function () {
            var imagUrl=$('#headdImage').val();
            $('.page-id-247 .hero').css('background','url('+imagUrl+') center center no-repeat');
        });
    </script>
    <?php
}
get_footer();
?>