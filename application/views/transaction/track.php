<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>

<section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center" style="background:white">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <!-- <div class="banner_content d-flex flex-md-row flex-column"> -->
                        <!-- <div class="banner-left text-md-right">
                            <h1 class="text-uppercase" style="color: #ffffff;">Track your vehicle</h1>
                        </div> -->
                        <div class="banner-right position-relative" style="text-align: center; margin-top: 8rem">
                            <?php $form_attr = array('class' => 'tracking-form', 'data-abide' => '', 'novalidate' => ''); ?>
                            <?php echo form_open('track/submit', $form_attr); ?>
                            <p style="margin-bottom: 10px; color: #2C477A !important; font-size: 25px">
                               Enter your transaction ID
                            </p>
                            <div data-abide-error class="alert callout" style="display: none;">
                                <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span>
                                        Please fill in the tracking number</p>
                            </div>
                            <input type="text" name="tracking" class="txt input-group-field form-control my-4 my-input" id="tracking" placeholder="Example: AB12345" required="" >
                            <button type="submit" class="main_btn mt-md-0 mt-4" href="#">Track</button>
                            <?php echo form_close(); ?>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</section>



<div class="whole-wrap" style="margin-bottom: 120px;">
    <div class="container">
        <div class="section-top-border">

<?php if (isset($contact_errors)) echo $contact_errors; ?>
<?php if ($this->uri->segment(3) && $this->uri->segment(3) == 'success'): ?>
    <div class="success">
        Email sent!
    </div>
<?php endif; ?>

<?php echo form_open('action/send_email', array('id' => 'contact-form','data-abide' => '', 'novalidate' => '')) ?>
<div class="row">
    <h3 class="mb-30 title_color">Having trouble? Let us know and we will help</h3>
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="mt-10">
            <input type="text" name="name" id="name" placeholder="Please enter your name here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your name here'"
             required="Please enter your name here" class="single-input">
        </div>
        <div class="mt-10">
            <input type="email" name="email" id="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
             required="Please enter your email here" class="single-input">
        </div>
        <div class="input-group-icon mt-10">
            <div class="icon">
                <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <input type="tel" name="phone" id="phone" placeholder="Please enter your phone number here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Please enter your phone number here'"
             required="Please enter your phone number" class="single-input">
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="mt-10">
            <textarea name="message" id="message" class="single-textarea" style="height: 140px;" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'"
             required></textarea>
        </div>
    </div>
    <div class="col-sm-12 mt-10">
        <button type="submit" value="send" class="genric-btn info radius float-right">SEND ENQUIRY</button>
    </div>
</div>
<?php echo form_close(); ?>
        
        </div>
    </div>
</div>

