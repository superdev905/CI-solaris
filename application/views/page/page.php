<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>

<div class="stages-container">
    <div class="stage">
        <div class="row">
            <div class="small-12 columns">
                <div class="stage-window">
                    <div class="stage-header" role="banner" style="background: #162d5f">
                        <h3 class="invert" style="color: white">Tracking details for <span>#TY089349</span></h3>
                    </div>
                    <div class="stage-body">
                        <div class="row">
                            <div class="small-12 large-6 columns">
                                <div class="detail-box">
                                    <div class="detail-name">Product(s)</div>
                                    <div class="detail-content">BMW 7</div>
                                </div>
                                <div class="detail-box">
                                    <div class="detail-name">Product type</div>
                                    <div class="detail-content">Passenger Car</div>
                                </div>
                                <div class="detail-box">
                                    <div class="detail-name">Value</div>
                                    <div class="detail-content">€ 8900</div>
                                </div>
                            </div>
                            <div class="small-12 large-6 columns">
                                <div class="detail-box">
                                    <div class="detail-name">Seller</div>
                                    <div class="detail-content">Domino's Pizza - Canterbury</div>
                                </div>
                                <div class="detail-box">
                                    <div class="detail-name">Buyer</div>
                                    <div class="detail-content">Domino's Pizza - Canterbury</div>
                                </div>
                                <div class="detail-box">
                                    <div class="detail-name">Tracking Status</div>
                                    <div class="detail-content">
                                        <span class="label warning"><i class="fa fa-clock-o"></i> Pending</span> buyer response
                                    </div>
                                </div>
                                <div class="button-group large expanded">
                                    <a href="" class="button success go-ahead" role="button"><i class="fa fa-check"></i> Approve &amp; Continue</a>
                                    <a href="" class="button alert" role="button"><i class="fa fa-close"></i> Decline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stage">
        <div class="row">
            <div class="small-12 columns">
                <div class="stage-window">
                    <div class="stage-header" role="banner" style="background: #162d5f">
                        <h3 class="invert" style="color: white">Delivery details for <span>#TY089349</span></h3>
                    </div>
                    <div class="stage-body">
                        <div class="row">
                            <div class="small-12 large-6 columns">
                                <h3>Delivery To</h3>
                                <hr>
                                <div class="detail-box">
                                    <div class="detail-name">Address</div>
                                    <div class="detail-content">64A Military Rd, <br>Canterbury, <br>CT1 1LU, <br>England</div>
                                </div>
                                <div class="button-group large expanded">
                                    <a href="" class="button success go-ahead" role="button"><i class="fa fa-check"></i> Continue</a>
                                    <a class="button warning" role="button" data-open="exampleModal2"><i class="fa fa-edit"></i> Edit</a>
                                </div>
                            </div>
                            <div class="small-12 large-6 columns">
                                <h3>Delivery From</h3>
                                <hr>
                                <div class="detail-box">
                                    <div class="detail-name">Address</div>
                                    <div class="detail-content">64A Military Rd, <br>Canterbury, <br>CT1 1LU, <br>England</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stage">
        <div class="row">
            <div class="small-12 columns">
                <div class="stage-window">
                    <div class="stage-header" role="banner" style="background: #162d5f">
                        <h3 class="invert" style="color: white">Transport status: Pending payment</h3>
                    </div>
                    <div class="stage-body">
                        <div class="row">
                            <div class="small-12 large-6 columns">
                                <h3>Payment Details:</h3>
                                <hr>
                                <div class="detail-box">
                                    <div class="detail-name">Payment Method</div>
                                    <div class="detail-content">Bank Transfer</div>
                                </div>
                                <div class="detail-box">
                                    <div class="detail-name">Amount to Pay</div>
                                    <div class="detail-content">&euro; 10,000</div>
                                </div>
                            </div>
                            <div class="small-12 large-6 columns">
                                <h3>Additional information</h3>
                                <hr>
                                <div class="detail-box">
                                    <div class="detail-name">Date Started</div>
                                    <div class="detail-content">2017-05-17 17:33:35 <span data-tooltip="bsghgu-tooltip" aria-haspopup="true"
                                                                                          class="has-tip" data-disable-hover="false"
                                                                                          tabindex="1" title=""
                                                                                          aria-describedby=""><span
                                                class="fa fa-question-circle-o" aria-hidden="true"></span></span></div>
                                </div>

                                <div class="detail-box">
                                    <div class="detail-name">Transport Type</div>
                                    <div class="detail-content">Express Transport</div>
                                </div>

                                <div class="detail-box">
                                    <div class="detail-name">Inspection Time</div>
                                    <div class="detail-content">12 Days <span data-tooltip="52mq8y-tooltip" aria-haspopup="true"
                                                                              class="has-tip" data-disable-hover="false" tabindex="1"
                                                                              title="" aria-describedby=""><span
                                                class="fa fa-question-circle-o" aria-hidden="true"></span></span></div>
                                </div>
                                <div class="button-group large">
                                    <a href="" class="button success expanded" role="button"><i class="fa fa-map"></i> View Tracking</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- This is the first modal -->
<div class="reveal" id="exampleModal2" data-reveal>
    <?php echo form_open('update_address', array('data-abide' => '', 'novalidate' => '')) ?>
    <?php if (isset($contact_errors)) echo $contact_errors; ?>

    <div class="row">

        <div class="small-12 columns">
            <h4>Edit Delivery Address:</h4>
            <label for="b_address">Old Address:
                <?php
                $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'value' => '$transaction[0]->b_address');
                echo form_input($b_address); ?>
            </label>
            <label for="b_address">New Address:
                <?php
                $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'value' => '');
                echo form_input($b_address); ?>
            </label>
        </div>
        <div class="small-12 columns">
            <button type="submit" value="send" class="button success float-right"><i class="fa fa-check"></i> Confirm Address</button>
        </div>
    </div>
    <?php echo form_close(); ?>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
