<?php 
$ip_address = "saved in db";
if ($transaction[0]->ip_address != "") {
    $ip_address = $transaction[0]->ip_address;
} ?>

<?php if (($transaction[0]->status == '-2') || ($transaction[0]->status == '1')) : ?>

    <?php if (!empty($transaction)) : ?>
        <div class="top-n-bottom pdb-0" style="margin-bottom: 100px;">
            <?php
            $form_attr = array(
                'method' => 'post'
            );
            echo form_open('action/update_transaction_details', $form_attr); ?>
            <div class="stages-container">
                <?php if ($transaction[0]->status == '-2') : ?>
                <!-- Start Displaying New Transaction to approve and continue -->
                <div class="stage">
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="stage-window">
                                <div class="stage-header" role="banner" style="background: #2C477A">
                                    <h3 class="invert" style="color: white">Tracking details for
                                        <span>#<?= $transaction[0]->reference ?></span></h3>
                                </div>
                                <div class="stage-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="blog-author">
                                                <div class="media align-items-center">
                                                    <?php 
                                                        $url = 'assets/img/agencies/' . $transaction[0]->b_detail_1_2 . '.jpg';
                                                    ?>
                                                    <img src="<?= site_url($url) ?>" style="border-radius: 50%; margin-right: 20px; margin-bottom: 20px;" alt="">
                                                    <div class="media-body">
                                                        <h4 style="color: #03060c;"><?= $transaction[0]->b_detail_1 ?></h4>
                                                        <p>Our company agent is responsible for your transaction. The company agent will process your payment and assist you with your transaction. If you have questions use the contact form and indicate your transaction ID </span><strong><?= $transaction[0]->reference ?></strong>.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Upper box -->
                                    <div class="upper-box">
                                        <div class="row clearfix">   
                                            <div class="price-column col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 30px;">
                                                <h4 style="color: #03060c;">Seller Details/Pick-up Location</h4>
                                                <ul class="price-list" style="list-style: none; margin: 0;">
                                                    <li><strong>Name:</strong> <span><?= $transaction[0]->s_name ?></span></li>
                                                    <li><strong>Address:</strong> <span><?= $transaction[0]->s_address ?></span></li>
                                                </ul>               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="line-height: normal; margin-top: 10px;">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <!-- BEGIN Portlet PORTLET-->
                                            <div class="portlet box red">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <h4 style="color: #03060c;"><i class="fa fa-shield fa-rotate-270"></i>Transaction Details</h4></div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> <i class="fa fa-sort" style="color: white;"></i> </a>
                                                        <a href="" class="fullscreen"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="blue" data-handle-color="red">
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Vehicle</strong></div>
                                                            <div class="detail-content"><?= $transaction[0]->p_brief ?></div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Vehicle description</strong></div>
                                                            <div class="detail-content"><?= $transaction[0]->p_description ?></div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Vehicle type</strong></div>
                                                            <div class="detail-content"><?= $transaction[0]->p_type ?></div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Value(&euro;)</strong></div>
                                                            <div class="detail-content"><?= $transaction[0]->p_value ?></div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Inspection period</strong></div>
                                                            <div class="detail-content"><?= $transaction[0]->inspection_days ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Portlet PORTLET-->
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <!-- BEGIN Portlet PORTLET-->
                                            <div class="portlet box red">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <h4 style="color: #03060c;"><i class="fa fa-shield fa-rotate-270"></i>Additional Information</h4></div>
                                                    <div class="tools">
                                                        <a href="javascript:;" class="collapse"> <i class="fa fa-sort" style="color: white;"></i> </a>
                                                        <a href="" class="fullscreen"> </a>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1" data-rail-color="blue" data-handle-color="red">
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Transport Method</strong></div>
                                                            <div class="detail-content"><?= $transaction[0]->t_type ?></div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Transport Type</strong></div>
                                                            <div class="detail-content">Express Transport</div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Transport Status</strong></div>
                                                            <div class="detail-content"><strong>Vehicle to be collected</strong></div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Payment Method</strong></div>
                                                            <div class="detail-content">Bank Transfer
                                                                <div>
                                                                    <img src="<?=base_url()?>assets/img/sepa.png" style="height: 30px; display: inline-block;">
                                                                    <img src="<?=base_url()?>assets/img/bank.png" style="width: 70px; display: inline-block;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="detail-box">
                                                            <div class="detail-name"><strong>Transaction Status</strong></div>
                                                            <div class="detail-content"><p><img src="<?=base_url()?>assets/img/pending_LOGO.png" style="width: 50px; display: inline-block;">Pending Response</p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Portlet PORTLET-->
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 40px;">
                                        <div class="small-12 large-3"></div>
                                        <div class="small-12 large-6 columns">
                                            <div class="button-group expanded large">
                                                <a href="<?= site_url('transaction-accept') ?>"
                                                   class="button large success response-button"
                                                   data-reference-number="<?= $transaction[0]->reference ?>"
                                                   data-response="approve" role="button"
                                                   data-id="<?= $transaction[0]->pin ?>"> Accept </a>
                                                <a href="<?= site_url('transaction-decline') ?>"
                                                   class="button large alert response-button"
                                                   data-reference-number="<?= $transaction[0]->reference ?>"
                                                   data-response="decline" role="button"
                                                   data-id="<?= $transaction[0]->pin ?>"><i class="fa fa-close"></i>
                                                    Decline</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Displaying New Transaction -->
                <?php endif ?>
                <!-- Start Displaying Buyer Details to input -->
                <div class="stage">
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="stage-window">
                                <div class="stage-header" role="banner" style="background: #2C477A">
                                    <h3 class="invert" style="color: white" >Please select delivery address</h3>
                                </div>
                                <div class="stage-body">
                                    <div class="row">
                                        <div class="small-12 large-12 columns">
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">Name</div>
                                                <div class="detail-content"><input type="text" id="b_name" name="b_name"></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">Address</div>
                                                <div class="detail-content"><input type="text" id="b_address" name="b_address"></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">City</div>
                                                <div class="detail-content"><input type="text" id="b_city" name="b_city"></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">Postal code</div>
                                                <div class="detail-content"><input type="text" id="b_postal_code" name="b_postal_code"></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">Phone number</div>
                                                <div class="detail-content"><input type="number" id="b_phone" name="b_phone"></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">Email</div>
                                                <div class="detail-content"><input type="text" id="b_email" name="b_email"></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name" style="border-right: 0px; line-height: 2.2;">Country</div>
                                                <div class="detail-content"><input type="text" id="b_country" name="b_country"></div>
                                            </div>
                                            <input type="hidden" name="id" value="<?= $transaction[0]->id ?>">
                                            <input type="hidden" name="reference" value="<?= $transaction[0]->reference ?>">
                                            <div class="callout warning" style="display: none; height: 50px; margin-bottom: 15px;" id="ajaxWarning">
                                                <p><i class="fa fa-exclamation-circle"></i> ERROR. Please input all fields correctly.</p>
                                            </div>
                                            <div class="button-group expanded large" style="margin-top: 0">
                                                <a href="" class="button large success go-ahead" role="button" style="background-color: #2C477A"><i
                                                    class="fa fa-check"></i> Next </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Displaying Buyer Details -->
                <!-- Start Displaying Payment Details to confirm -->
                <div class="stage">
                    <div class="row">
                        <div class="small-12 columns">
                            <div class="stage-window">
                                <div class="stage-header" role="banner" style="background: #2C477A">
                                    <h3 class="invert" style="color: white"><p id="buyername"></p>Transaction ID <?= $transaction[0]->reference ?> summary</h3>
                                </div>
                                <div class="stage-body">
                                    <div class="row">
                                        <div class="small-12 large-6 columns">
                                            <h3>Payment Details</h3>
                                            <hr>
                                            <div class="detail-box">
                                                <div class="detail-name">Vehicle</div>
                                                <div class="detail-content"><?= $transaction[0]->p_brief ?></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name">Value</div>
                                                <div class="detail-content">&euro; <?= $transaction[0]->p_value ?></div>
                                            </div>
                                            <div class="detail-box">
                                                <div class="detail-name">Inspection time</div>
                                                <div class="detail-content"><?= $transaction[0]->inspection_days ?></div>
                                            </div>
                                        </div>

                                        <div class="small-12 large-6 columns">
                                            <h3>Transaction Details:</h3>
                                            <hr>
                                            <div class="detail-box">
                                                <div class="detail-name">Payment method</div>
                                                <div class="detail-content">Bank transfer</div>
                                            </div>

                                            <div class="detail-box">
                                                <div class="detail-name">Transaction deadline</div>
                                                <div class="detail-content">2 Day(s)</div>
                                            </div>

                                            <div class="detail-box">
                                                <input type="checkbox" name="" required> I agree with the <a href="<?=SITE_URL?>/site/terms_and_conditions">terms and conditions</a> of this transaction
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 30px;">
                                        <div class="small-12 large-6 columns">
                                        </div>
                                        <div class="small-12 large-6 columns">
                                            <div class="large">
                                                <button class="button large success expanded approve_button" style="text-transform: uppercase;background-color: #2C477A"> Process Transaction </button>
                                                <button class="button large success expanded hide"><i
                                                        class="fa fa-map" ></i>  Process Transaction </button>
                                                <p> To prevent anonymous access to this transaction and to have a secure transaction your IP (<?php echo $ip_address ?>) is being stored. </p>
                                            </div>
                                        </div>
                                        <div class="small-12 columns">*Your payment will be processed in <?= $transaction[0]->b_detail_4 ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Displaying Payment Details -->
            </div>
            <?php echo form_close(); ?>

            <div class="pin-input" style="opacity: 0; visibility: hidden;">
                <span class="close-window">X</span>
                <label for="pin">Please confirm PIN:
                    <?php $pin = array('name' => 'pin', 'id' => 'pin', 'type' => 'text', 'required' => '', 'pattern' => 'number', 'autocomplete' => 'off');
                    echo form_input($pin); ?>
                    <span class="form-error">
                        Please enter a valid PIN
                    </span>
                </label>
                <a href="" class="submit-pin ajax-submit">ENTER PIN</a>
            </div>

            <div class="reveal" id="exampleModal2" data-reveal>
                <div class="row">
                    <div class="small-12 columns">
                        <h4>Edit Delivery Address:</h4>
                        <label for="b_address">Old Address:
                            <?php
                            $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'disabled' => 'disabled', 'value' => $transaction[0]->b_address);
                            echo form_input($b_address); ?>
                        </label>
                        <label for="b_address">New Address:
                            <?php
                            $b_address = array('name' => 'b_address', 'id' => 'b_address', 'type' => 'text', 'required' => '', 'value' => '');
                            echo form_input($b_address); ?>
                        </label>
                    </div>
                    <div class="small-12 columns">
                        <a href="#" class="button success float-right"><i class="fa fa-check"></i>
                            Confirm Address
                        </a>
                    </div>
                </div>
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

    <?php else : ?>
        <div class="callout warning" data-closable>
            <p class="lead">An error occurred when trying to get your transaction. Please try again</p>
            <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if ($this->session->userdata('role') == 'Admin') : ?>
        <div class="top-n-bottom">
            <div class="row">
                <div class="small-12 columns">
                    <a href="<?= site_url('dashboard') ?>" class="button expanded clr-white" style="background-color: #2C477A">Back to Admin Area</a>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php else : ?>
    <!-- Start Transaction Details -->
    <?php if (!empty($transaction)) : ?>
        <!--================ Start Banner Area =================-->
        <section class="home_banner_area banner-area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="banner_content d-flex flex-md-row flex-column">
                                <div class="banner-left text-md-right">
                                    <h1 class="text-uppercase"><?= $transaction[0]->reference ?></h1>
                                </div>
                                <div class="banner-right position-relative">
                                    <p>
                                        Transaction Details Page
                                    </p>
                                    <span class="main_btn mt-4 mt-md-0" href="#">
                                        <a href="<?=base_url()?>" class="text-white">Home</a>
                                        <i class="fa fa-arrow-right mx-2"></i>
                                        <a href="#" class="text-white">Details</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Banner Area =================-->

        <section class="blog_area single-post-area">
            <div class="container">
                <div class="row">
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <?php 
                                $url = 'assets/img/agencies/' . $transaction[0]->b_detail_1_2 . '.jpg';
                            ?>
                            <img src="<?= site_url($url) ?>" alt="">
                            <div class="media-body">
                                <a href="#">
                                  <h4><?= $transaction[0]->b_detail_1 ?></h4>
                                </a>
                                <p>Our company agent is responsible for your transaction. 
								The company agent will process your payment and assist you with your transaction. 
								You can contact our agent at <strong>contact@solaris-trans.com</strong> and indicate your transaction ID </span><strong><?= $transaction[0]->reference ?></strong>. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- details -->  
                <div class="section-top-border">
                    <!-- <h3 class="mb-30 title_color">Transaction details</h3> -->
                    <div class="progress-table-wrap">
                        <!-- Seller Details -->
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="detail-title"><h3 class="mb-30 title_color">Pick-up location</h3></div>
                                <div class="detail-value"><img src="<?= site_url() ?>/assets/img/services/pick-up.png" style="float: right; margin-top: -70px"></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Address</div>
                                <div class="detail-value"><p><?= $transaction[0]->s_address ?></p></div>
                            </div>
                        </div>
                        <!-- Payment Details -->
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="detail-title"><h3 class="mb-30 title_color">Transaction details</h3></div>
                                <form class="detail-value" method="post" action="<?=base_url()?>action/print_invoice/<?=$transaction[0]->reference ?>">  
                                    <button type="submit" class="genric-btn info radius float-right"> PRINT INVOICE </button>
                                </form>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Vehicle</div>
                                <div class="detail-value"><p><?= $transaction[0]->p_brief ?></p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Vehicle description</div>
                                <div class="detail-value"><p><?= $transaction[0]->p_description ?></p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Value &euro;</div>
                                <div class="detail-value"><p><?= $transaction[0]->p_value ?></p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Inspection period</div>
                                <div class="detail-value"><p><?= $transaction[0]->inspection_days ?> Day(s)</p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Client ID number</div>
                                <div class="detail-value"><p>K0620881</p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Invoice number</div>
                                <div class="detail-value"><p>PB842021</p></div>
                            </div>

                            <div class="table-row">
                                <div class="detail-title">Transport method</div>
                                <div class="detail-value"><p>Open Transport</p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Transport type</div>
                                <div class="detail-value"><p>Express Transport</p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Transport status</div>
                                <div class="detail-value"><p>Vehicle to be collected</p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Payment method</div>
                                <div class="detail-value"><p>Upfront Bank Transfer</p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Transaction date</div>
                                <div class="detail-value"><p><?php echo date("d-m-Y") ?></p></div>
                            </div>
                        </div>
                        <!-- Buyer Details -->
                        <div class="progress-table">
                            <div class="table-head">
                                <div class="detail-title"><h3 class="mb-30 title_color">Delivery address</h3></div>
                                <div class="detail-value"><img src="<?= site_url() ?>/assets/img/services/delivery.png" style="float: right; margin-top: -70px"></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Name</div>
                                <div class="detail-value"><p><?= $transaction[0]->b_name ?></p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">Address</div>
                                <div class="detail-value"><p><?= $transaction[0]->b_address ?></p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">City</div>
                                <div class="detail-value"><p><?= $transaction[0]->b_city ?></p></div>
                            </div>
                            <div class="table-row">
                                <div class="detail-title">IP Address</div>
                                <div class="detail-value"><p><?= $transaction[0]->ip_address ?></p></div>
                            </div>
                            <div class="table-row">
                                <strong>Notification: An email was sent to 
                                <?= $transaction[0]->b_email ?> Please check SPAM/Bulk messages also.</span></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- transaction details page end -->

        <?php if ($this->session->userdata('role') == 'Admin') : ?>
            <div class="top-n-bottom">
                <div class="row">
                    <div class="small-12">
                        <a href="<?= site_url('dashboard') ?>" class="button expanded clr-white" style="background-color: #2C477A">Back to Admin Area</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    <?php endif; ?>
    <!-- End Transaction Details -->
<?php endif; ?>