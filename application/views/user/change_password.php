<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

$form_attr = array('class' => 'change-password-form', 'data-abide' => '', 'novalidate' => '');
echo form_open('change_password/' . $user[0]->id . '/submit', $form_attr); ?>
<div data-abide-error class="alert callout" style="display: none;">
    <p><span class="fa fa-exclamation-circle" aria-hidden="true"></span> There are some errors in your form.</p>
</div>
<?php if (
    ($this->session->userdata('status') == 'logged_in' && $this->session->userdata('role') != 'Admin')
    or
    ($this->session->userdata('status') == 'logged_in' && $this->session->userdata('id') == $user[0]->id)
) : ?>
    <?php echo form_fieldset('Change your password:'); ?>
    <hr>
<?php else: ?>
    <?php echo form_fieldset('Change password for: ' . $user[0]->email); ?>
<?php endif; ?>
<?php if ($this->session->userdata('status') == 'logged_in' && $this->session->userdata('role') != 'Admin') : ?>
    <label for="acc_pass" style="margin: 0">Password</label>
    <?php $acc_pass = array('name' => 'old_acc_pass', 'id' => 'old_acc_pass', 'type' => 'password', 'required' => '');
    echo form_input($acc_pass); ?>
<?php elseif
($this->session->userdata('status') == 'logged_in' && $this->session->userdata('id') == $user[0]->id
): ?>
    <label for="acc_pass" style="margin: 0">Password</label>
    <?php $acc_pass = array('name' => 'old_acc_pass', 'id' => 'old_acc_pass', 'class' => 'single-input mgb-15', 'type' => 'password', 'required' => '');
    echo form_input($acc_pass); ?>
<?php endif; ?>
<label for="new_acc_pass" style="margin: 0">New Password</label>
<?php $acc_pass = array('name' => 'new_acc_pass', 'id' => 'new_acc_pass', 'class' => 'single-input mgb-15', 'type' => 'password', 'required' => '');
echo form_input($acc_pass); ?>
<label for="new_acc_pass_confirm" style="margin: 0">Confirm New Password</label>
<?php $acc_pass = array('name' => 'new_acc_pass_confirm', 'id' => 'new_acc_pass_confirm', 'class' => 'single-input mgb-30', 'type' => 'password');
echo form_input($acc_pass); ?>
<?php echo form_fieldset_close(); ?>
<div class="float-right">
    <a href="<?= site_url('dashboard') ?>" class="button secondary">Back to dashboard</a>
    <button type="submit" class="genric-btn info radius" value="submit" style="margin-left: 15px;">Update</button>
</div>
<?php echo form_close(); ?>


