<?php
/**
 * Developer: Apple-vCTO
 * Date: 05/03/2020
 * Email: applepopov803@gmail.com
 */

?>
<div class="whole-wrap" style="min-height: 800px;">
    <div class="container">
        <!-- <a href="<?= site_url('new') ?>" role="button" class="button success float-right"><i class="fa fa-plus"> -->
        <div class="section-top-border">
            <h3 class="mb-30 title_color float-left">Transaction List</h3>
            <a href="<?= site_url('new') ?>" class="genric-btn info circle float-right"><i class="fa fa-plus"></i> New Transaction</a>
            <div class="progress-table-wrap" style="clear: both;">
                <div class="progress-table">
                    <div class="table-head text-center">
                        <div class="reference">Reference</div>
                        <div class="status">Status</div>
                        <div class="pin">PIN</div>
                        <div class="buyer">Buyer</div>
                        <div class="seller">Seller</div>
                        <div class="controls">Controls</div>
                    </div>
                    <?php if (isset($transactions) && count($transactions) > 0) : 
                        foreach ($transactions as $_key => $_value) { ?>  
                    <div class="table-row">
                        <div class="reference">
                            <a href="<?= site_url('track/' . $_value->reference) ?>"><span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" tabindex="1" title="Go to Tracking Page"><?= $_value->reference ?></span></a>
                        </div>
                        <div class="status">
                            <?php  
                                switch ($_value->status) {
                                    case '-2':
                            ?>
                            <span class="label warning"><i class="fa fa-clock-o"></i> Pending</span>
                            <?php
                                        break;
                                    case '-1':
                            ?>
                            <span class="label secondary"><i class="fa fa-hourglass-o"></i> Expired</span>
                            <?php
                                        break;
                                    case '0':
                            ?>
                            <span class="label alert"><i class="fa fa-close"></i> Declined</span> on <small><?=$_value->date_updated ?></small>
                            <?php
                                        break;
                                    case '1':
                            ?>
                            <span class="label success"><i class="fa fa-check"></i> Transaction approved</span> on <small><?=$_value->date_updated ?></small>
                            <?php
                                        break;
                                    case '2':
                            ?>
                            <span class="label success"><i class="fa fa-check"></i> Awaiting payment</span> on <small><?=$_value->date_updated ?></small>
                            <?php
                                        break;
                                    case '3':
                            ?>
                            <span class="label success"><i class="fa fa-check"></i> Payment confirmed</span> on <small><?=$_value->date_updated ?></small>
                            <?php
                                        break;
                                    case '4':
                            ?>
                            <span class="label success"><i class="fa fa-check"></i> Transport in progress</span> on <small><?=$_value->date_updated ?></small>
                            <?php
                                        break;
                                    case '5':
                            ?>
                            <span class="label success"><i class="fa fa-check"></i> Delivery finished</span> on <small><?=$_value->date_updated ?></small>
                            <?php
                                        break;
                                }
                            ?>
                        </div>
                        <div class="pin"><?= $_value->pin ?></div>
                        <div class="buyer"><?= $_value->b_email ?></div>
                        <div class="seller"><?= $_value->s_email ?></div>
                        <div class="controls">
                            <?php if ($_value->status < 0) { ?>
                                <a href="<?= site_url('amend/' . $_value->reference) ?>"
                                   class="genric-btn info-border circle small"><i class="fa fa-edit"></i> Edit</a>
                            <?php } elseif ($_value->status == 0) {
                            ?>
                                <a id="<?= $_value->id ?>" href="<?= site_url('reset') ?>"
                                   class="genric-btn primary-border circle small reset"><i class="fa fa-cog"></i> Reset</a>
                            <?php } else { ?>
                                <a id="<?= $_value->id ?>" href="<?= site_url('reset') ?>"
                                   class="genric-btn primary-border circle small reset"><i class="fa fa-cog"></i> Reset</a>
                                <a href="<?= site_url('amend/' . $_value->reference) ?>"
                                   class="genric-btn info-border circle small"><i class="fa fa-edit"></i> Edit</a>
                            <?php } ?>
                            <a href="<?= site_url('erase/' . $_value->reference) ?>"
                               class="genric-btn danger-border circle small delete"><i class="fa fa-trash"></i> Delete</a>
                        </div>
                    </div>
                    <?php } 
                    else: ?>
                    <div class="table-row">No transactions found</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

