<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>
<!--Login Section-->
<section class="quote-area" style="min-height: 800px;">
    <div class="container">
      <div class="row justify-content-center text-left section-title-wrap" style="padding-top: 80px;">
        <div class="text-center" style="margin: 40px;">
            <h1 class="col-sm-12">User Login</h1>
            <span class="col-sm-12">Please note: The boxes marked with * are mandatory and must be filled in.</span>
        </div>

        <div class="col-lg-12">
            <div class="estimated-cost" style="background: #fbf9ff; padding: 30px;">
                <?php 
                    $form_attr = array('id' => 'login-form', 'class' => 'form-wrap login-form', 'data-abide' => '', 'novalidate' => '');
                    echo form_open('login/submit', $form_attr) ?>
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.</p>
                    </div>
                <?php if (isset($contact_errors)) echo $contact_errors; ?>
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="firstName">Email: </label>
                        <input onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email: *'" placeholder="Your email: *" type="email" name="login_acc_email" id="login_acc_email" class="form-control" value="">
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="form-group">
                        <label for="lastName">Password: </label>
                        <input onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your password: *'" placeholder="Your password: *" type="password" name="login_acc_pass" id="login_acc_pass" class="form-control" value="">
                      </div>
                    </div>

                    <div class="col-lg-12 mt-4">
                      <div class="text-center confirm_btn_box">
                        <button type="submit" class="main_btn text-uppercase">Login</button>
                      </div>
                    </div>
                  </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>