<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--================ Home Banner Area =================-->
<section class="home_banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner_content text-center" style="color: #003e70">
            <!-- <div class="banner-left text-md-right">
            <h1 class="text-uppercase">Track Service</h1>
          </div> -->
            <div>
              <h2 class="font-weight-bold">Just buy your car online</h2>
            </div>
            <div>
              <p>
                We transport it and process your payment | New & Second-Hand |
                21 days money back guarantee
              </p>
              <p></p>
            </div>

            <div class="d-flex justify-content-center">
              <a
                class="btn btn-warning mr-2"
                style="color: white; background-color: #2C477A"
                href="<?=base_url()?>track/submit"
              >
                Track your transaction
              </a>
              <a class="btn btn-primary" href="<?=base_url()?>track/submit">
                Track your transaction</a
              >
            </div>
            <!-- <div class="banner-right position-relative"> -->
            <!-- <?php $form_attr = array('class' => 'lon-tracking banner-right position-relative', 'data-abide' => '', 'novalidate' => '', 'style' => 'position:relative'); 
            echo form_open('track/submit', $form_attr);
            ?>
            <p style="margin-bottom: 10px;">
              Please input transaction ID number to track your transaction.
            </p>
              <input class="hide" value="" name="t_link" id="t_link" type="hidden">
              <input type="text" name="tracking" class="txt input-group-field form-control" id="tracking" placeholder="<?=$link['enter_tracking']?>" required>
              <button type="submit" class="main_btn mt-md-0 mt-4" href="#">Track</button>
            <?php echo form_close(); ?> -->
            <!-- </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Feature Area =================-->

<section class="feature-area section_gap_top">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-12">
        <div class="text-center" style="color: #003e70">
          <h2>Buy a car online & have it delivered</h2>
        </div>
        <div class="row text-center">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <div><img src="<?=base_url()?>assets/img/Shield-Icon.svg" /></div>
            <div class="section_gap_item">
              <h3>Affordable Transport</h3>
              <p>
                With the help of our transport partners we can find the best solution for your transport at a low price and fast delivery.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <div><img src="<?=base_url()?>assets/img/Shield-Icon.svg" /></div>
            <div class="section_gap_item">
              <h3>Safe Payment</h3>
              <p>
                We combine the escrow procedure known from lawyers and notaries with digital technologies. This enables us to set new standards in payment transactions for secure trading - fair, cost-effective, fast.             </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
            <div><img src="<?=base_url()?>assets/img/Shield-Icon.svg" /></div>
            <div class="section_gap_item">
              <h3>MoneyBack Guarantee</h3>
              <p>
                With us you get a 21-day money-back guarantee: You don't just do a short test drive, but a real everyday test.  21 days to make sure that your car really suits you perfectly.              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Feature Area =================-->
<section class="review-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-3 col-xm-5">
        <div class="trustpilot" style="text-align: center; margin-bottom: 20px">
          <div class="header">
            <h4>Our clients Feedback</h4>
          </div>
          <div>
            <img src="<?=base_url()?>assets/img/45.png" />
          </div>
          <!-- <div></div>
          <div>
            <img src="<?=base_url()?>assets/img/trustpilot.png" />
          </div> -->
        </div>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-9 col-xm-7">
        <div class="row resources">
          <div class="container" id="resource-slider">
            <button class="arrow prev"></button>
            <button class="arrow next"></button>
            <div class="resource-slider-frame">
              <div class="resource-slider-item">
                <div class="resource-slider-inset">
                  <div class="resource">
                    <div
                      class="d-flex mb-1"
                      style="justify-content: space-between"
                    >
                      <img src="<?=base_url()?>assets/img/5.png" />
                    </div>

                    <div
                      class="hmt small text-justify"
                      style="
                        color: black;
                        line-height: 17px !important;
                      //  -webkit-text-stroke-width: thin;
                      "
                    >
                      Alles hat geklappt obwohl auf Anfang ich hatte Angst
                      online Auto zu kaufen. Von Kundenservice bis Zustellung
                      alles super. Auto wie auf Bilder. Ich werde sicher weiter
                      empfehlen.
                    </div>
                    <div class="hmt small" style="color: rgba(0, 0, 0, 0.6)">
                      Patryk
                    </div>
                  </div>
                </div>
              </div>
              <div class="resource-slider-item">
                <div class="resource-slider-inset">
                  <div class="resource">
                    <div
                      class="d-flex mb-1"
                      style="justify-content: space-between"
                    >
                      <img src="<?=base_url()?>assets/img/5.png" />
                    </div>
                    <div
                      class="hmt small text-justify"
                      style="
                        color: black;
                        line-height: 17px !important;
                 //       -webkit-text-stroke-width: thin;
                      "
                    >
                      Professionell, freundlich, transparent und kompetent.
                      Schnelle Auslieferung nach Ankündigung und Absprache.
                    </div>
                    <div class="hmt small" style="color: rgba(0, 0, 0, 0.6)">
                      Vladimir</div>
                  </div>
                </div>
              </div>
              <div class="resource-slider-item">
                <div class="resource-slider-inset">
                  <div class="resource">
                    <div
                      class="d-flex mb-1"
                      style="justify-content: space-between"
                    >
                      <img src="<?=base_url()?>assets/img/5.png" />
                    </div>

                    <div
                      class="hmt small text-justify"
                      style="
                        color: black;
                        line-height: 17px !important;
                   //     -webkit-text-stroke-width: thin;
                      "
                    >
                      Ich bin sehr zufrieden es hat alles super geklappt die
                      ganze Abwicklung der Service die Mitarbeiter nett und
                      freundlich haben alles super erklärt haben sich um ein
                      gekümmert die Lieferung vom Auto klappte super ich würde
                      immer wieder ein Auto kaufen
                    </div>
                    <div class="hmt small" style="color: rgba(0, 0, 0, 0.6)">
                      Olga
                    </div>
                  </div>
                </div>
              </div>
              <div class="resource-slider-item">
                <div class="resource-slider-inset" style="overflow-y: scroll">
                  <div class="resource">
                    <div
                      class="d-flex mb-1"
                      style="justify-content: space-between"
                    >
                      <img src="<?=base_url()?>assets/img/5.png" />
                    </div>

                    <div
                      class="hmt small text-justify"
                      style="
                        color: black;
                        line-height: 17px !important;
                 //       -webkit-text-stroke-width: thin;
                      "
                    >
                      Es hat alles perfekt und problemlos funktioniert, sehr
                      freundlich und hilfsbereite Mitarbeiter, von der
                      Bestellung bis zu Lieferung dauert nicht so lange und
                      läuft alles so schnell. Ich habe meine auto gekauft
                      und am Anfang hatte ich bißchen Stress weil online kauf
                      war, aber nach dem Lieferung würde ich jeder empfehlen auf
                    jeden Fall.</div>
                    <div class="hmt small" style="color: rgba(0, 0, 0, 0.6)">
                    Schmoor</div>
                  </div>
                </div>
              </div>
              <div class="resource-slider-item">
                <div class="resource-slider-inset" style="overflow-y: scroll">
                  <div class="resource">
                    <div
                      class="d-flex mb-1"
                      style="justify-content: space-between"
                    >
                      <img src="<?=base_url()?>assets/img/5.png" />
                    </div>

                    <div
                      class="hmt small text-justify"
                      style="
                        color: black;
                        line-height: 17px !important;
                 //       -webkit-text-stroke-width: thin;
                      "
                    >
                      Class Service! First of all: the sale and delivery went
                      absolutely smoothly!  A big plus is the 500 "free
                      kilometers" and 21 days for test driving. I was contacted
                      via email and phone about every single step. The car was
                      even delivered a few hours earlier. Thanks a lot for this!                    </div>
                    <div class="hmt small" style="color: rgba(0, 0, 0, 0.6)">
                      George S.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ About Area =================-->
<section class="about-area">
  <div class="container-fluid">
    <div class="row">
      <div
        class="col-lg-12 p-1"
        style="color: white; max-width: 99% !important"
      >
        <div class="p-3">
          <img
            class="back-img"
            style="width: 100%"
            src="<?php echo base_url()?>assets/img/1.jpg"
            alt="logo"
          />
          <div class="col-lg-5 col-md-12 p-4">
            <h3>Find your dream car</h3>
            <p style="overflow-wrap: anywhere" class="py-2">
              Search, browse, find and select your dream car. Simple!
              We will handle the rest for you.
            </p>
            <a
              class="btn btn-warning my-2 px-5 text-white"
              style="background-color: #2C477A; font-size: 25px"
              href="<?php echo base_url()?>site/services"
            >
              Learn more
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 col-md-12 mt-2">
            <div class="p-4 origin-img">
              <img
                class="back-img"
                src="<?php echo base_url()?>assets/img/111111.jpg"
                alt="logo"
              />
              <div class="col-lg-8 col-md-12">
                <h3>Delivery guaranteed</h3>
                <p style="overflow-wrap: anywhere" class="py-2">
                  Our transport partners will arrive at your door with your dream car.
                </p>
                <a
                  class="btn btn-warning my-2 px-5 text-white"
                  style="background-color: #2C477A"
                  href="<?php echo base_url()?>site/services"
                >
                  Learn more
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 mt-2">
            <div class="p-4 origin-img">
              <img
                class="back-img"
                src="<?php echo base_url()?>assets/img/3.jpg"
                alt="logo"
              />
              <div class="col-lg-8 col-md-12">
                <h3>Full inspection</h3>
                <p style="overflow-wrap: anywhere" class="py-2">
                  With us you get a 21-day money-back guarantee: You don't just do a short test drive, but a real everyday test. 21 days to make sure that your car really suits you perfectly.                </p>
              <a
                  class="btn btn-warning my-2 px-5 text-white"
                  style="background-color: #2C477A"
                  href="<?php echo base_url()?>site/howitworks"
                >
                  Learn more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 col-md-12 mt-2">
            <div class="p-4 origin-img">
              <img
                class="back-img"
                src="<?php echo base_url()?>assets/img/222222.jpg"
                alt="logo"
              />
              <div class="col-lg-8 col-md-12">
                <h3>Fair &amp; transparent</h3>
                <p style="overflow-wrap: anywhere" class="py-2">The step-by-step process guarantees fair and transparent handling. Deliberate fraud is excluded, as no car is delivered or money is paid out without appropriate consideration.<br />
                A payout or refund of money is only made in agreement between both parties.</p>
                <a
                  class="btn btn-warning my-2 px-5 text-white"
                  style="background-color: #2C477A"
                  href="<?php echo base_url()?>site/services"
                >
                  Learn more
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 mt-2">
            <div class="p-4 origin-img">
              <img
                class="back-img"
                src="<?php echo base_url()?>assets/img/33333.jpg"
                alt="logo"
              />
              <div class="col-lg-8 col-md-12">
                <h3>Dedicated support</h3>
                <p style="overflow-wrap: anywhere" class="py-2">
                  We process a low number of transactions in order to offer dedicated support and assistance.
                Each transaction is handled by an individual agent so we can provide dedicated support for each client.</p>
                <a
                  class="btn btn-warning my-2 px-5 text-white"
                  style="background-color: #2C477A"
                  href="<?php echo base_url()?>site/howitworks"
                >
                  Learn more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
