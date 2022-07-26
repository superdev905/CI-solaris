<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>
<?php if (isset($success_message)) : ?>
    <div class="row">
        <div class="small-12 columns">
            <div class="callout success" data-closable>
                <p><?= $success_message ?></p>
                <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
if ($this->session->userdata('role') == 'Admin') {
    $disabled = FALSE;
} else {
    $disabled = TRUE;
}
?>
<div class="top-n-bottom" style="margin-bottom: 100px;">
    <?php $form_pending = array('id' => 'transaction_edit_form_p', 'class' => 'new-t-form', 'data-abide' => '', 'novalidate' => ''); ?>
    <?php $form_expired = array('id' => 'transaction_edit_form_e', 'class' => 'new-t-form', 'data-abide' => '', 'novalidate' => ''); ?>
    <?php $form_approved = array('id' => 'transaction_edit_form_a', 'class' => 'new-t-form', 'data-abide' => '', 'novalidate' => ''); ?>

<?php
    if ($transaction[0]->status == '-2') { // pending status
?>
    <?php echo form_open('amend/' . $transaction[0]->reference . '/submit', $form_pending); ?>
    <div class="row">
        <div class="small-12 columns">
            <div data-abide-error class="alert callout" style="display: none;">
                <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.
                </p>
            </div>
        </div>

        <div class="small-12 large-6 columns">
            <?php echo form_fieldset('Seller Details:', array('class' => 'seller_details')); ?>

            <label for="acc_email">Seller Email
                <?php
                if ($disabled) {
                    $s_email = array('name' => 's_email', 'id' => 's_email', 'type' => 'text', 'disabled' => '', 'value' => $transaction[0]->s_email);
                } else {
                    $s_email = array('name' => 's_email', 'id' => 's_email', 'value' => $transaction[0]->s_email);
                }
                echo form_input($s_email); ?>
            </label>
            <label for="s_name">Seller Name
                <?php
                $s_name = array('name' => 's_name', 'id' => 's_name', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->s_name);
                echo form_input($s_name); ?>
            </label>
            <label for="s_address">Seller Address
                <?php
                $s_address = array('name' => 's_address', 'id' => 's_address', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->s_address);
                echo form_input($s_address); ?>
            </label>
            <label for="s_phone">Seller Phone
                <?php
                $s_phone = array('name' => 's_phone', 'id' => 's_phone', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->s_phone);
                echo form_input($s_phone); ?>
            </label>
            <?php echo form_fieldset_close(); ?>

        </div>

        <div class="small-12 large-6 columns">
            <?php echo form_fieldset('Buyer Details:', array('class' => 'buyer_details')); ?>

            <label for="acc_email">Buyer Email
                <?php $b_email = array('name' => 'b_email', 'id' => 'b_email', 'required' => '', 'value' => $transaction[0]->b_email);
                echo form_input($b_email); ?>
            </label>
            <label for="b_name">Buyer Name
                <?php
                $s_name = array('name' => 'b_name', 'id' => 'b_name', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->b_name);
                echo form_input($s_name); ?>
            </label>
            <label for="b_address">Buyer Address
                <?php
                $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->b_address);
                echo form_input($b_address); ?>
            </label>
            <label for="b_phone">Buyer Phone
                <?php
                $b_phone = array('name' => 'b_phone', 'id' => 'b_phone', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->b_phone);
                echo form_input($b_phone); ?>
            </label>
            <?php echo form_fieldset_close(); ?>

        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <hr>
            <?php echo form_fieldset('Transaction Details:', array('class' => 'transaction_details')); ?>

            <label for="p_type">Product Type</label>
            <div class="form-select">
                <?php
                $attributes = array(
                    'id' => 'p_type',
                    'name' => 'p_type',
                    'required' => '',
                );

                $options = array(
                    'Passenger Car' => 'Passenger Car',
                    'Van' => 'Van',
                    'Lorry' => 'Lorry',
                    'Boat' => 'Boat',
                    'Motorcycle' => 'Motorcycle',
                    'Quad (ATV)' => 'Quad (ATV)'
                );
                echo form_dropdown($attributes, $options, $transaction[0]->p_type); ?>
            </div>
            <label for="p_brief">Product Brief
                <?php
                $p_brief = array('name' => 'p_brief', 'id' => 'p_brief', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->p_brief);
                echo form_input($p_brief); ?>
            </label>
            <label for="p_brief">Product Value
                <?php
                $p_value = array('name' => 'p_value', 'id' => 'p_value', 'type' => 'text', 'required' => '', 'value' => $transaction[0]->p_value);
                echo form_input($p_value); ?>
            </label>
            <label for="p_qty">Product Quantity
                <div class="input-group">
                    <?php
                    $p_qty = array('name' => 'p_qty', 'id' => 'p_qty', 'type' => 'number', 'required' => '', 'min' => '1', 'max' => '100', 'value' => $transaction[0]->p_qty);
                    echo form_input($p_qty); ?>
                    <!--                    <div class="input-group-button">
                                            <button class="button" data-negative>-</button>
                                            <button class="button" data-positive>+</button>
                                        </div>-->
                </div>
            </label>
            <label for="inspection">Days of Inspection
                <div class="input-group">
                    <?php
                    $inspection = array('name' => 'inspection', 'id' => 'inspection', 'type' => 'number', 'required' => '', 'placeholder' => 'Inspection days *', 'min' => '1', 'max' => '14', 'value' => $transaction[0]->inspection_days);
                    echo form_input($inspection); ?>
                    <!--                    <div class="input-group-button">
                                            <button class="button" data-negative>-</button>
                                            <button class="button" data-positive>+</button>
                                        </div>-->
                </div>
            </label>
            <label for="deadline">Transaction Deadline
                <?php
                $deadline = array('name' => 'deadline', 'id' => 'deadline', 'type' => 'text', 'required' => '', 'min' => date('Y-m-d'), 'value' => $transaction[0]->deadline);
                echo form_input($deadline); ?>
            </label>
            <label for="p_description">Product Description
                <?php
                $data = array(
                    'name' => 'p_description',
                    'id' => 'p_description',
                    'rows' => '3',
                    'style' => 'resize:none',
                    'value' => $transaction[0]->p_description
                );

                echo form_textarea($data);
                ?>
            </label>
                
            <?php echo form_fieldset_close(); ?>

            <div style="display: flex;">
                <button type="submit" class="button col-sm-6 genric-btn info" value="submit">Update</button>
                <a class="button secondary col-sm-6" href="<?= site_url('dashboard') ?>">Back</a>
            </div>
    
        </div>
    </div>
    
<?php 
        echo form_close();
    } elseif ($transaction[0]->status == '-1') { // expired status
        echo form_open('allow/' . $transaction[0]->reference, $form_expired);
?>
    <div class="row">
        <div class="small-12 columns">
            <?php echo form_fieldset('Transaction Details:', array('class' => 'transaction_details')); ?>

            <label for="inspection">Days of Inspection
                <div class="input-group">
                    <?php
                    $inspection = array('name' => 'inspection', 'id' => 'inspection', 'type' => 'number', 'required' => '', 'placeholder' => 'Inspection days *', 'min' => '1', 'max' => '14', 'value' => $transaction[0]->inspection_days);
                    echo form_input($inspection); ?>
                    <!--                    <div class="input-group-button">
                                            <button class="button" data-negative>-</button>
                                            <button class="button" data-positive>+</button>
                                        </div>-->
                </div>
            </label>
            <label for="deadline">Transaction Deadline
                <?php
                $deadline = array('name' => 'deadline', 'id' => 'deadline', 'type' => 'text', 'required' => '', 'min' => date('Y-m-d'), 'value' => $transaction[0]->deadline);
                echo form_input($deadline); ?>
            </label>
                
            <?php echo form_fieldset_close(); ?>
            <div class="container editF-option-wrapper">
                <button type="submit" class="button col-sm-6" value="submit">Update</button>
                <a class="button secondary col-sm-6" href="<?= site_url('dashboard') ?>">Back</a>
            </div>
    
        </div>
    </div>
<?php
        echo form_close();
    } elseif ($transaction[0]->status > '0') { // approved status
        echo form_open('continue/' . $transaction[0]->reference, $form_approved);
?>

    <!-- Start Status -->
    <section id="progress_status_section">
        <div class="progress">
          <div class="progress_inner">
            <div class="progress_inner__step">
              <label for="step-1">Transaction approved</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-2">Awaiting payment</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-3">Payment confirmed</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-4"> Transport in progress</label>
            </div>
            <div class="progress_inner__step">
              <label for="step-5">Delivery finished</label>
            </div>
        <?php

            for ($i=1; $i <= 5 ; $i++) { 
                if ($i == $transaction[0]->status) {
        ?>
            <input checked="checked" id="step-<?php echo $i ?>" name="step" type="radio" value="<?php echo $i ?>">
        <?php
                } else {
        ?>
            <input id="step-<?php echo $i ?>" name="step" type="radio" value="<?php echo $i ?>">
        <?php
                }
            }
        ?>
            <div class="progress_inner__bar"></div>
            <div class="progress_inner__bar--set"></div>
            <div class="progress_inner__tabs">
              <div class="tab tab-0">
                <h1>Transaction approved</h1>
              </div>
              <div class="tab tab-1">
                <h1>Awaiting payment</h1>
              </div>
              <div class="tab tab-2">
                <h1>Payment confirmed</h1>
              </div>
              <div class="tab tab-3">
                <h1> Transport in progress</h1>
              </div>
              <div class="tab tab-4">
                <h1>Delivery finished</h1>
              </div>
            </div>
            <div class="progress_inner__status">

            </div>
          </div> 
        </div>
    </section>

    <div style="display: flex;">
        <button type="submit" class="button col-sm-6 genric-btn info" value="submit">Update</button>
        <a class="button secondary col-sm-6" href="<?= site_url('dashboard') ?>">Back</a>
    </div>
    <!-- End Status -->
<?php } 
    echo form_close();
?>
    
</div>
