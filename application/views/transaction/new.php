<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>
<div class="whole-wrap" style="margin-bottom: 120px;">
    <div class="container">

        <div class="section-top-border">

<?php if (isset($success_message)) : ?>
    <div class="row">
        <div class="col-sm-12 columns">
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
<div class="top-n-bottom">
    <?php $form_attr = array('class' => 'new-t-form', 'data-abide' => '', 'novalidate' => ''); ?>

    <?php echo form_open('new/submit', $form_attr); ?>

    <div class="row">
        <div class="col-sm-12 columns">
            <div data-abide-error class="alert callout" style="display: none;">
                <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 columns">
            <?php echo form_fieldset('Seller Details:', array('class' => 'seller_details')); ?>

            <label for="acc_email">Seller Email
                <?php
                if ($disabled) {
                    $s_email = array('name' => 's_email', 'id' => 's_email', 'class' => 'single-input', 'type' => 'text', 'disabled' => '', 'value' => (isset($my_email) && $this->session->userdata('role') != 'Admin') ? $my_email : '', 'placeholder' => 'Seller Email *');
                } else {
                    $s_email = array('name' => 's_email', 'id' => 's_email', 'class' => 'single-input', 'value' => (isset($my_email) && $this->session->userdata('role') != 'Admin') ? $my_email : '', 'placeholder' => 'Seller Email *');
                }
                echo form_input($s_email); ?>
            </label>
            <label for="s_name">Seller Name
                <?php
                $s_name = array('name' => 's_name', 'id' => 's_name', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Seller Name *');
                echo form_input($s_name); ?>
            </label>
            <label for="s_address">Seller Address
                <?php
                $s_address = array('name' => 's_address', 'id' => 's_address', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Seller Address *', 'aria-describedby' => 'sellerAddressHelpText');
                echo form_input($s_address); ?>
            </label>
            <p class="help-text" id="sellerAddressHelpText">The address needs to be separated with a comma. Ex: Street Name,
                7, 780080, Paris, France</p>
            <label for="s_phone">Seller Phone
                <?php
                $s_phone = array('name' => 's_phone', 'id' => 's_phone', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Seller Phone');
                echo form_input($s_phone); ?>
            </label>
            <?php echo form_fieldset_close(); ?>

        </div>

    </div>

    <div class="row">
        <div class="col-sm-12 columns">
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
                echo form_dropdown($attributes, $options); ?>
            </div>
            <label for="p_brief">Product Brief
                <?php
                $p_brief = array('name' => 'p_brief', 'id' => 'p_brief', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Short Product Description *');
                echo form_input($p_brief); ?>
            </label>
            <label for="p_brief">Product Value
                <?php
                $p_value = array('name' => 'p_value', 'id' => 'p_value', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Product Value *');
                echo form_input($p_value); ?>
            </label>
            <label for="p_qty">Product Quantity
                <div class="input-group">
                    <?php
                    $p_qty = array('name' => 'p_qty', 'id' => 'p_qty', 'class' => 'single-input', 'type' => 'number', 'required' => '', 'placeholder' => 'Product Quantity *', 'min' => '1', 'max' => '100');
                    echo form_input($p_qty); ?>
                    <!--            <div class="input-group-button">
                                    <button class="button" data-negative>-</button>
                                    <button class="button" data-positive>+</button>
                                </div>-->
                </div>
            </label>
            <label for="inspection">Days of Inspection
                <div class="input-group">
                    <?php
                    $inspection = array('name' => 'inspection', 'id' => 'inspection', 'class' => 'single-input', 'type' => 'number', 'required' => '', 'placeholder' => 'Inspection days *', 'min' => '1', 'max' => '14', 'aria-describedby' => 'inspectionHelpText');
                    echo form_input($inspection); ?>
                    <!--            <div class="input-group-button">
                                    <button class="button" data-negative>-</button>
                                    <button class="button" data-positive>+</button>
                                </div>-->
                </div>
            </label>

            <label for="p_type">Transaction Type</label>
            <div class="form-select">
                <?php
                $attributes = array(
                    'id' => 't_type',
                    'name' => 't_type',
                    'required' => '',
                );

                $options = array(
                    'Enclosed Transport' => 'Enclosed Transport',
                    'Open Transport' => 'Open Transport'
                );
                echo form_dropdown($attributes, $options); ?>
            </div>

            <p class="help-text" id="inspectionHelpText">Days of product inspection. Can be between 1 day and 2 weeks</p>
            <label for="deadline">Transaction Deadline
                <?php

                $deadline = array('name' => 'deadline', 'id' => 'deadline', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => date('Y-m-d'), 'min' => date('Y-m-d'));
                echo form_input($deadline); ?>
            </label>
            <label for="p_description">Product Description
                <?php
                $data = array(
                    'name' => 'p_description',
                    'id' => 'p_description',
                    'class' => 'single-textarea',
                    'rows' => '3',
                    'style' => 'resize:none'
                );

                echo form_textarea($data);
                ?>
            </label>
        </div>
    </div>

    <!-- start bank details -->
    <div class="row">
        <div class="col-sm-12 columns">
            <hr>
            <?php echo form_fieldset('Bank Details:', array('class' => 'transaction_details')); ?>
            
            <label for="b_detail_1">Account Owner</label>
            <div class="form-select">
                <?php
                $b_detail_1 = array('name' => 'b_detail_1', 'id' => 'b_detail_1', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Account Owner Name');
                echo form_input($b_detail_1); ?>
                <?php
                $attributes = array(
                    'id' => 'b_detail_1_2',
                    'name' => 'b_detail_1_2',
                    'required' => '',
                    'placeholder' => 'Account Owner Photo'
                );

                $options = array(
                    '1' => 'Female 1',
                    '2' => 'Female 2',
                    '3' => 'Female 3',
                    '4' => 'Male 1',
                    '5' => 'Male 2',
                    '6' => 'Male 3'
                );
                echo form_dropdown($attributes, $options); ?>
            </div>
            <label for="b_detail_2">IBAN
                <?php
                $b_detail_2 = array('name' => 'b_detail_2', 'id' => 'b_detail_2', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Bank Detail 2 *');
                echo form_input($b_detail_2); ?>
            </label>
            <label for="b_detail_3">BIC/SWIFT
                <?php
                $b_detail_3 = array('name' => 'b_detail_3', 'id' => 'b_detail_3', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Bank Detail 3 *');
                echo form_input($b_detail_3); ?>
            </label>
            <label for="b_detail_4">BANK
                <?php
                $b_detail_4 = array('name' => 'b_detail_4', 'id' => 'b_detail_4', 'class' => 'single-input', 'type' => 'text', 'required' => '', 'placeholder' => 'Bank Detail 4 *');
                echo form_input($b_detail_4); ?>
            </label>
            <?php echo form_fieldset_close(); ?>

        </div>
    </div>
    <!-- start bank details -->
    <div class="col-sm-12 columns">
        <div style="display: flex;">
            <button type="submit" class="button col-sm-6 genric-btn info" value="submit">Create</button>
            <a class="button secondary col-sm-6" href="<?= site_url('dashboard') ?>">Back</a>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>


        </div>
    </div>
</div>
