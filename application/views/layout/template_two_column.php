<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

$this->load->view('layout/header.php');
?>
<div class="whole-wrap" style="margin-bottom: 120px;">
	<div class="container">
		<div class="section-top-border">

			<div class="row top-n-bottom">
			    <div class="col-lg-3 col-md-4 col-sm-12 mt-sm-30 element-wrap">
			    	<?php $this->load->view('layout/sidebar.php'); ?>
				</div>
			    <div class="col-lg-9 col-md-8 col-sm-12 columns">
			        <?php if (isset($mainContent)) {
			            $this->load->view($mainContent);
			        } ?>
			    </div>
			</div>	

		</div>
	</div>
</div>
<?php $this->load->view('layout/footer.php'); ?>



