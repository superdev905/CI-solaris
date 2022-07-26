<?php

/**
 * Developer: Apple-vCTO
 * Date: 05/03/2020
 * Email: applepopov803@gmail.com
 */

?>

<div class="single-element-widget">
    <h3 class="mb-30 title_color">Account Options</h3>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('dashboard') ?>">Dashboard</a>
    </div>
    <?php if ($this->session->userdata('status') == 'logged_in' && $this->session->userdata('role') == 'Admin') : ?>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('edit') ?>">Edit My Account</a>
    </div>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('change_password') ?>">Change Password</a>
    </div>
    <?php elseif ($this->session->userdata('status') == 'logged_in' && $this->session->userdata('role') == 'User') : ?>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('edit/' . $this->session->userdata('id')) ?>">Edit My Account</a>
    </div>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('change_password/' . $this->session->userdata('id')) ?>">Change Password</a>
    </div>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('/delete_account/' . $this->session->userdata('id')) ?>">Delete</a>
    </div>
    <?php endif; ?>
</div>
<div class="single-element-widget">
    <h3 class="mb-30 title_color">Website Options</h3>
    <div class="switch-wrap d-flex justify-content-between">
        <a href="<?= site_url('new') ?>">New Transaction</a>
    </div>
</div>
