<div class="top-n-bottom">
    <div class="row">
        <div class="small-12 columns">

            <?php if($this->session->userdata('status') == 'logged_in') : ?>
                <a href="<?=site_url('dashboard') ?>" class="button clr-white">Dashboard</a>
            <?php endif; ?>

            <a href="<?=site_url()?>" class="button clr-white">Home</a>

        </div>
    </div>

</div>

