<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

$this->load->view('layout/header.php'); ?>
    <?php
    if (isset($mainContent)) {
        $this->load->view($mainContent);
    } ?>
<?php $this->load->view('layout/footer.php'); ?>
