<?php
/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */
?>
<div class="top-n-bottom">
    <div class="row">
        <div class="small-12 column">
            <?php if (isset($success_message)): ?>
                <div class="callout success" data-closable>
                    <?php echo $success_message; ?>
                    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="button-group">
                <a href="<?=site_url()?>" class="button">Home</a>
            </div>
        </div>
    </div>
</div>


