<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="top-n-bottom">
    <div class="transaction-content">
        <div class="stages-container">
            <div class="stage active">
                <div class="stage-content">
                    <div class="row">
                        <div class="small-12 columns text-center">
                            <h2 class="pre-detail-header">Track <strong>XY123456</strong></h2>
                            <hr>
                        </div>
                        <div class="small-12 large-6 columns">
                            <div class="detail-box">
                                <div class="detail-name">Product</div>
                                <div class="detail-content"><?= $transaction[0]->p_brief ?></div>
                            </div>
                            <div class="detail-box">
                                <div class="detail-name">Description</div>
                                <div class="detail-content"><?= $transaction[0]->p_description ?></div>
                            </div>
                            <div class="detail-box">
                                <div class="detail-name">Price</div>
                                <div class="detail-content">&euro; 2000</div>
                            </div>
                        </div>
                        <div class="small-12 large-6 columns">
                            <div class="detail-box">
                                <div class="detail-name">Seller:</div>
                                <div class="detail-content"><?=$transaction[0]->s_name?></div>
                            </div>
                            <div class="detail-box">
                                <div class="detail-name">Buyer:</div>
                                <div class="detail-content"><?=$transaction[0]->b_name?></div>
                            </div>
                            <div class="detail-box">
                                <div class="detail-name">Status:</div>
                                <div class="detail-content">
                                    <?php if ($transaction[0]->status == 'Y') : ?>
                                        <span class="label success">Approved</span> on <?= $transaction[0]->date_updated ?>
                                    <?php elseif ($transaction[0]->status == 'N') : ?>
                                        <span class="label alert">Declined</span> on <?= $transaction[0]->date_updated ?>
                                    <?php else : ?>
                                        <?php if (dateDiff($transaction[0]->deadline) < 0) : ?>
                                            <span class="label warning">Pending</span> Buyer response
                                        <?php else: ?>
                                            <span class="label secondary">Expired</span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <?php
                            $form_attr = array(
                                'class' => 'respond-form ajax-response-form',
                                'data-abide' => '',
                                'novalidate' => ''
                            );
                            echo form_open('answer/' . $transaction[0]->reference, $form_attr); ?>
                            <div class="button-group expanded">
                                    <label for="approve_transaction" class="button large success response ajax" data-response="APPROVE">
                                        <span><i class="fa fa-check"></i> Confirm &amp; Continue</span>
                                        <?php $approve_transaction = array('name' => 'response', 'id' => 'approve_transaction', 'type' => 'radio', 'hidden' => '', 'value' => 'APPROVE');
                                        echo form_input($approve_transaction); ?>
                                    </label>
                                    <label for="decline_transaction" class="button large alert response ajax" data-response="DECLINE">
                                        <span><i class="fa fa-times"></i> Decline</span>

                                        <?php $decline_transaction = array('name' => 'response', 'id' => 'decline_transaction', 'type' => 'radio', 'hidden' => '', 'value' => 'DECLINE');
                                        echo form_input($decline_transaction); ?>
                                    </label>
                            </div>



                            <?php if ($this->session->userdata('status') != 'logged_in') : ?>
                                <div class="pin-input" style="opacity: 0; visibility: hidden;">
                                    <span class="close-window">X</span>
                                    <label for="pin">Please confirm PIN:

                                        <?php $pin = array('name' => 'pin', 'id' => 'pin', 'type' => 'text', 'required' => '', 'pattern' => 'number', 'autocomplete' => 'off');
                                        echo form_input($pin); ?>
                                        <span class="form-error">
                        Please enter a valid PIN
                    </span>
                                    </label>
                                    <button type="submit" class="submit-pin ajax-submit-pin">ENTER PIN</button>
                                </div>
                            <?php else: ?>
                                <div class="pin-input" style="opacity: 0; visibility: hidden;">
                                    <span class="close-window">X</span>
                                    <button type="submit" class="submit-pin">SEND RESPONSE</button>
                                </div>
                            <?php endif; ?>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stage">
                <div class="stage-content">
                    <div class="row">
                        <div class="small-12 large-6 columns">
                            <h4 class="pre-detail-header">Delivery to:</h4>
                            <hr>
                            <div class="detail-box">
                                <div class="detail-name">Address</div>
                                <div
                                    class="detail-content"><?= str_replace(', ', ', <br>', $transaction[0]->b_address) ?></div>
                            </div>

                            <div class="button-group expanded">
                                <a href="" class="button success"><i class="fa fa-check"></i> Confirm</a>
                                <a href="" class="button warning"><i class="fa fa-edit"></i> Edit</a>
                            </div>
                        </div>
                        <div class="small-12 large-6 columns">
                            <h4 class="pre-detail-header">From:</h4>
                            <hr>
                            <div class="detail-box">
                                <div class="detail-name">Address</div>
                                <div
                                    class="detail-content"><?= str_replace(', ', ', <br>', $transaction[0]->s_address) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stage">
                <div class="stage-content"></div>
            </div>
        </div>
    </div>
</div>
