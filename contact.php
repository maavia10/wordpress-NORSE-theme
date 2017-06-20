<?php
/* Template Name: contact-template */
get_header();
?>
<div class="hero master-color-bg">
  <div class="container">
  	<div class="overlay">
  	  <h4 style="text-align: center; color: #333;">Norse</h4>
<h1 style="text-align: center; color: #333;">Contact Sales</h1>
  	</div>
  </div>
</div>
<div id="content" role="main">
  <h2>Get in Touch with Norse</h2>
<div class="fc-wysiwyg">
	<p>Fill out the form below and one of our Sales representatives will contact you as soon as possible.</p>
</div><section id="contact-form" class="contact flex"><div class="container">
				<div class="row">
			<div class="col-sm-12">
				<h4 class="form-hdr">Please fill out the form below:</h4>
                <div class="contact-form">
                	<script src="http://app-sj01.marketo.com/js/forms2/js/forms2.min.js"></script><form id="mktoForm_374"></form>
                	<script>MktoForms2.loadForm("//app-sj01.marketo.com", "681-ONL-293", 374, function(form){
                	  form.onSuccess(function(values, followUpUrl){ 
                	    form.getFormElem().hide(500);
                			            jQuery('h4.form-hdr').replaceWith('<h4 class="form-hdr text-center">Thank you! Your information has been submitted.');
                	    //return false to prevent the submission handler continuing with its own processing
                	    return false;
                	  });
                	});
                	MktoForms2.whenReady(function(){
                	  jQuery('.mktoFormCol').each(function(){
                	    var input_id = jQuery(this).find('input').attr('id'),
                	    textarea_id = jQuery(this).find('textarea').attr('id');
                	    if (input_id != '') {jQuery(this).addClass(input_id);};
                	    if (textarea_id != '') {jQuery(this).addClass(textarea_id);};
                	  });
                	});
                	</script></div>
			</div>
		</div>
	</div>
</section></div><!-- /#content -->
<?php

get_footer();
?>

