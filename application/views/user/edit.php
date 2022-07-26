<?php
/**
 * Developer: Apple-vCTO.
 * Date: 05/03/2020
 * Email: applepopov803@gmail.com
 */
?>



<?php
$form_attr = array('class' => 'edit-form', 'data-abide' => '', 'novalidate' => '');
echo form_open('edit/' . $user[0]->id . '/submit', $form_attr); ?>
<div data-abide-error class="alert callout" style="display: none;">
    <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.</p>
</div>

<?php echo form_fieldset('Account Details:'); ?>
<hr>
<label for="acc_email">Email</label>
<?php $acc_email = array('type' => 'email', 'name' => 'acc_email', 'class' => 'single-input', 'id' => 'acc_email', 'required' => '', 'value' => $user[0]->email);
echo form_input($acc_email); ?>

<?php echo form_fieldset_close(); ?>
<div class="float-right" style="margin-top: 30px;">
    <a href="<?= site_url('dashboard') ?>" class="button secondary">Back to dashboard</a>
    <button type="submit" class="genric-btn info radius" value="submit" style="margin-left: 15px;">Update</button>
</div>
<?php echo form_close(); ?>
