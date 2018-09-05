<?php
if(isset($_POST['submit'])){

    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    //check name is set
    if($name ==''){
        $error[] = 'Name is required';
    }

    //check for a valid email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = 'Please enter a valid email address';
    }

    //if no errors carry on
    if(!isset($error)){

        //set the data of the CSV
        $Content .= "$name, $email\n";
		$myfile = file_put_contents('test.txt', $Content.PHP_EOL , FILE_APPEND | LOCK_EX);
		# Title of the CSV
        /* $Content = "Name, Email\n";

        //set the data of the CSV
        $Content .= "$name, $email\n";

        # set the file name and create CSV file
        $FileName = "formdata-".date("d-m-y-h:i:s").".csv";
        header('Content-Type: application/csv'); 
        header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
        echo $Content;
        exit(); */
    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://movinginplacefilm.us18.list-manage.com/subscribe/post?u=165138abd3cbf99bb0a43f258&amp;id=6755316769" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_165138abd3cbf99bb0a43f258_6755316769" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://movinginplacefilm.us18.list-manage.com/subscribe/post?u=165138abd3cbf99bb0a43f258&amp;id=6755316769" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_165138abd3cbf99bb0a43f258_6755316769" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

	<!-- Begin MailChimp Signup Form -->
<!-- <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">-->
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:50%;}
</style>
<div id="mc_embed_signup">
<form action="https://movinginplacefilm.us18.list-manage.com/subscribe/post?u=165138abd3cbf99bb0a43f258&amp;id=6755316769" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div id="mc_embed_signup_scroll">
	<h3 style="color:black;">Subscribe to our mailing list!</h3>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_165138abd3cbf99bb0a43f258_6755316769" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->



    <div class="col-md-8 col-md-offset-2">
      <h3>Subscribe to our newsletter!</h3>
      <form action="https://movinginplacefilm.us18.list-manage.com/subscribe/post?u=165138abd3cbf99bb0a43f258&amp;id=6755316769" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="mce-FNAME" name="FNAME" class="form-control" placeholder="Name" required="required">
			  <!-- <input type="text" value="" name="FNAME" class="required" id="mce-FNAME"> -->
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="mce-EMAIL" name="EMAIL" class="form-control" placeholder="Email" required="required">
			  <!-- <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"> -->
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
 		<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
		</div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_165138abd3cbf99bb0a43f258_6755316769" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default"></div> 
      </form>
    </div>
  </div>
</div>