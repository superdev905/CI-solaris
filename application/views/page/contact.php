<?php
/**
 * Developer: Apple-vCTO.
 * Date: 05/03/2020
 * Email: applepopov803@gmail.com
 */

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--================ Home Banner Area =================-->
<section
  class="home_banner_area banner-area"
  style="background: #f7f7f7 !important"
>
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-lg-flex d-none">
          <div
            class="banner_content d-flex flex-md-row flex-column align-items-center"
          >
            <div
              class="banner-right position-relative"
              style="background: none"
            >
              <span
                class="main_btn mt-4 mt-md-0 mod_button"
                style="
                  background: white;
                  border: 1px solid #f7f7f7;
                  padding: 10px 20px;
                  width: 244px;
                "
                href="#"
              >
                <a
                  href="<?php echo base_url()?>site/terms_and_conditions"
                  style="font-weight: 100; color: #4a4a4a"
                  >Terms and Conditions</a
                >
              </span>
              <span
                class="main_btn mt-4 mt-md-0 mod_button"
                style="
                  background: white;
                  border: 1px solid #f7f7f7;
                  padding: 10px 20px;
                  width: 244px;
                "
                href="#"
              >
                <a
                  href="<?php echo base_url()?>site/legal_info"
                  style="font-weight: 100; color: #4a4a4a"
                  >Privacy Policy</a
                >
              </span>
              <span
                class="main_btn mt-5 mod_button"
                style="
                  background: white;
                  border: 1px solid #f7f7f7;
                  padding: 10px 20px;
                  width: 244px;
                "
                href="#"
              >
                <a href="<?=base_url()?>site/contact" class="text-black"
                  >Contact</a
                >
              </span>
            </div>
          </div>
        </div>
        <section class="section_gap col-lg-8" style="background: white">
          <div class="container">
            <?php if(isset($success_message) && !is_null($success_message)) { ?>
            <div>
              <span
                class="label success"
                style="width: 100%; line-height: 30px; margin-bottom: 15px"
                ><i class="fa fa-check"></i>
                <?=$success_message;?></span
              >
            </div>
            <?php } ?>

            <div class="row">
              <div
                class="col-12 text-center"
                style="color: #003e70; font-size: 25px; font-weight: bold"
              >
                CONTACT
              </div>
              <div class="col-12">
                <p style="color: black; font-weight: bold; font-size: 20px">
                  customer service
                </p>
                <p style="font-size: 15px">
                  You are welcome to contact us by phone at the following times
                  or send your request using the form below
                </p>
              </div>
              <div class="col-lg-12" style="font-size: 15px">
                <div class="media contact-info mb-0">
                  <!-- <span class="contact-info__icon"
                    ><i class="fa fa-phone"></i
                  ></span> -->
                  <div class="media-body">
                    <p style="font-size: 15px" class="mb-0">
                      Times: Mon - Fri 08:00 - 20:00, Sat 09:00 - 18:00
                    </p>
                    <h3>
                      <a href="tel:+4932229982117" style="color: #999999"
                        >Phone:
                        <span style="color: #2C477A"><?=WEBSITE_PHONE?></span>
                      </a>
                    </h3>
                  </div>
                </div>
                <div class="media contact-info">
                  <!-- <span class="contact-info__icon"
                    ><i class="fa fa-envelope-o"></i
                  ></span> -->
                  <div class="media-body">
                    <h3>
                      <a
                        href="mailto:contact@solaris-trans.de.com"
                        style="color: #999999"
                        >Email:
                        <span style="color: #2C477A"><?=WEBSITE_EMAIL?></span>
                      </a>
                    </h3>
                    <p>Whatsapp Support: +491631020311</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <h2 class="contact-title">Send us your question</h2>
              </div>
              <div class="col-lg-12">
                <!-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate"> -->
                <?php echo form_open('action/send_email', array('id' =>
                'contact-form', 'class' => 'form-contact contact_form',
                'data-abide' => '', 'novalidate' => '')) ?>
                <?php if (isset($contact_errors)) echo $contact_errors; ?>
                <?php if ($this->uri->segment(3) && $this->uri->segment(3) ==
                'success'): ?>
                <div class="success">Email sent!</div>
                <?php endif; ?>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <p class="mb-0" style="color: black">
                        <?=$page['name']?>: *
                      </p>
                      <input
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '<?=$page['name']?>: *'"
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group md-group show-label">
                      <p class="mb-0" style="color: black">
                        <?=$page['phone']?>: *
                      </p>

                      <input
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '<?=$page['phone']?>: *'"
                        type="tel"
                        name="phone"
                        id="phone"
                        class="form-control"
                        value="+1"
                      />
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <p class="mb-0" style="color: black">
                        <?=$page['email']?>: *
                      </p>

                      <input
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '<?=$page['email']?>: *'"
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <p class="mb-0" style="color: black">
                        your questions to us ^
                      </p>

                      <textarea
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '<?=$page['message']?>: '"
                        class="form-control w-100"
                        rows="9"
                        cols="30"
                        id="message"
                        name="message"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group mt-2 mb-5 mb-lg-0">
                  <button
                    type="submit"
                    class="button button-contactForm main_btn"
                    style="background-color: #2C477A"
                  >
                    <?=$page['send_msg']?>
                  </button>
                </div>
                <?php echo form_close(); ?>
              </div>
              <div class="col-12 mt-4">
                By sending this message you agree to this procedure and to
                receiving the email invitation. For more information, please
                read our privacy policy.
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<!--================ End Home Banner Area =================-->

<!-- ================ contact section start ================= -->

<!-- ================ contact section end ================= -->
