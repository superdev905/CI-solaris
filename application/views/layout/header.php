<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- <link
      rel="icon"
      href="<?php echo base_url()?>assets/img/favicon.png"
      type="image/png"
    /> -->
    <link
      rel="icon"
      href="<?php echo base_url()?>assets/img/new_logo.png"
      type="image/png"
    />
    <title><?=WEBSITE_NAME?></title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/css/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/vendors/linericon/style.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/vendors/owl-carousel/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/vendors/nice-select/css/nice-select.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/vendors/animate-css/animate.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/vendors/jquery-ui/jquery-ui.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/css/responsive.css"
    />
    <!-- public css -->
    <link
      href="<?php echo base_url()?>public/css/app.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet" />
    <!-- custom css -->
    <link
      rel="stylesheet"
      href="<?php echo base_url()?>assets/css/custom.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <style type="text/css">
      body {
        top: 0 !important;
      }
      .skiptranslate {
        display: none;
      }
      .select-lang {
        margin-left: 0;
      }
      .select-lang li {
        margin-right: 10px;
      }
      .select-lang li span img {
        width: 27px;
        height: 18px;
        min-height: 18px;
        float: left;
      }
    </style>
  </head>

  <body>
    <!--================Header Menu Area =================-->
    <header class="header_area" style="position: relative">
      <div class="main_menu">
        <nav
          class="navbar navbar-expand-lg w-100"
          style="background-color: #2C477A; border: 0"
        >
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="<?php echo base_url()?>">
            <img
              src="<?php echo base_url('public/img/logo.png')?>"
              alt="logo"
              style="position: absolute; top: 0; height: 62px; background: antiquewhite;"
            />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            style="padding: 20px"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div
            class="collapse navbar-collapse offset"
            id="navbarSupportedContent"
          >
            <div class="w-100">
              <div class="col-lg-12 pr-lg-0" style="height: 62px">
                <ul class="nav navbar-nav justify-content-start">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url() ?>"
                      ><?=$link['home']?></a
                    >
                  </li>
                  <?php if ($this->session->userdata('status') == 'logged_in') :
                  ?>
                  <li class="nav-item submenu dropdown">
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                      role="button"
                      aria-haspopup="true"
                      aria-expanded="false"
                      ><?=$link['admin']?></a
                    >
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard') ?>"
                          ><?=$link['dashboard']?></a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          href="<?= site_url('edit/' . $this->session->userdata('id')) ?>"
                          ><?=$link['edit_account']?></a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          href="<?= site_url('change_password/' . $this->session->userdata('id')) ?>"
                          ><?=$link['change_pwd']?></a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('new') ?>"
                          ><?=$link['new_transaction']?></a
                        >
                      </li>
                      <li class="nav-item">
                        <a
                          class="nav-link"
                          href="<?= site_url('action/logout_account') ?>"
                          ><?=$link['log_out']?></a
                        >
                      </li>
                    </ul>
                  </li>
                  <?php endif; ?>
                  <li class="nav-item submenu dropdown">
                    <a
                      href="<?php echo base_url()?>site/services"
                      class="nav-link dropdown-toggle"
                      role="button"
                      aria-haspopup="true"
                      aria-expanded="false"
                      ><?=$link['services']?></a
                    >
                    <!-- data-toggle="dropdown" -->

                    <!-- <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>site/services"><?=$link['sub_service1']?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>site/services"><?=$link['sub_service2']?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>site/services"><?=$link['sub_service3']?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>site/services"><?=$link['sub_service4']?></a>
                      </li>
                    </ul> -->
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="<?php echo base_url()?>site/howitworks"
                      ><?=$link['how_it_works']?></a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      href="<?php echo base_url()?>site/contact"
                      ><?=$link['contact']?></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->
  </body>
</html>
