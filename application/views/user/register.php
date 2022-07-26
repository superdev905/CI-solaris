<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>
<div class="top-n-bottom">
    <div class="row">
        <div class="column">
            <h1 class="">Registrations are no longer necessary to use our online tracking system.</h1>
            <p class="lead">However, if your are still keen on registering and would like to subscribe to our newsletters, you can do so <a data-open="register-modal">here</a></p>
        </div>
    </div>
</div>

<div class="reveal" id="register-modal" data-reveal>
    <div class="row">
        <div class="small-12 columns">

            <?php $form_attr = array('class' => 'register-form', 'data-abide' => '', 'novalidate' => ''); ?>

            <?php echo form_open('register/submit', $form_attr); ?>
            <div data-abide-error class="alert callout" style="display: none;">
                <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.</p>
            </div>

            <?php echo form_fieldset('Account Details:'); ?>
            <label for="acc_email">Email
                <?php $acc_email = array('name' => 'acc_email', 'id' => 'acc_email', 'required' => '');
                echo form_input($acc_email); ?>
            </label>
            <label for="acc_pass">Password
                <?php $acc_pass = array('name' => 'acc_pass', 'id' => 'acc_pass', 'required' => '', 'type' => 'password');
                echo form_input($acc_pass); ?>
            </label>
            <label for="acc_pass_confirm">Confirm Password
                <?php $acc_pass = array('name' => 'acc_pass_confirm', 'id' => 'acc_pass_confirm', 'required' => '', 'type' => 'password', 'data-equalto' => 'acc_pass');
                echo form_input($acc_pass); ?>
                <span class="form-error">Hey, passwords are supposed to match!</span>
            </label>
            <?php echo form_fieldset_close(); ?>
            <button type="submit" class="button" value="submit">Register</button>
            <?php echo form_close(); ?>

        </div>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


