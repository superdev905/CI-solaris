<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Developer: Makhmudov J.
 * Date: 10/01/2018
 * Email: applepopov803@gmail.com
 */

?>
       
  <!--================ start footer Area =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-5 col-md-6 col-sm-6">
          <div class="single-footer-widget"> 
            <p style="color:#ffffff;font-weight:bold;">Vehicle Escrow</p>
            <p>Secure your vehicle transaction using our services. Funds are only disbursed to the seller when the vehicle has been inspected and approved by the buyer.</p>
          </div>
        </div>
        <div class="col-lg-5  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Data Protection</h6>
                <a href="<?php echo base_url()?>site/legal_info" class="internal-link">Privacy policy</a><br>
                <a href="<?php echo base_url()?>site/terms_and_conditions" class="internal-link">Terms of service</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-5 col-sm-5 social-widget">
          <div class="single-footer-widget">
            <h6>Contact Us</h6>
            <p><?=WEBSITE_PHONE?></p>
            <p><?=WEBSITE_PHONE?></p>
            <p><?=WEBSITE_EMAIL?></p>
          </div>
        </div> -->
        <div class="col-3"> 
          <img src="<?php echo base_url()?>assets/img/footer-logo.png" />
        </div>
        
        <div class="col-4 footer_item text-center">
          <h4>Solaris Transport </h4>
          <ul>
            <li>
                Tel +49 3222 998 2117           </li>
            <li>
              <a href="<?php echo base_url()?>site/contact">Contact us</a> </li>
            <li>
              <a href="<?php echo base_url()?>site/services">Services</a>            </li>
              <li>
              <a href="<?php echo base_url()?>site/howitworks">How it works</a>            </li>
          </ul>
        
        </div>
        <div class="col-4 footer_item text-center">
          <h4>Legal</h4>
          <ul>
            <li>
              <a href="<?php echo base_url()?>site/terms_and_conditions">Terms and conditions</a>
            </li>
            <li>
              <a href="<?php echo base_url()?>site/legal_info">Privacy policy</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="<?=SITE_URL?>" target="_blank"><?=WEBSITE_NAME?></a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area =================-->

  <!--================ Optional JavaScript =================-->
  <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
  <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/popper.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/jquery-ui/jquery-ui.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/isotope/isotope-min.js"></script>
  <script src="<?php echo base_url()?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/mail-script.js"></script>

  <script src="<?php echo base_url()?>assets/js/custom.js"></script>
  <script src="<?php echo base_url()?>public/js/custom.js"></script>
  <script type="text/javascript">function add_chatinline(){var hccid=25710785;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>



    <script type="text/javascript"> 
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <!-- Flag click handler -->
    <script type="text/javascript">
        $('ul.select-lang li span.change-country').click(function() {
          var lang = $(this).data('lang');
          console.log("lang", lang);
          var frame = $('.goog-te-menu-frame:first');
          if (frame.length != 1) {
            alert("Error: Could not find Google translate frame.");
            return false;
          }
          frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
          return false;
        });
    </script>
    <script type="text/javascript">
      function defer(method) {
  if (window.jQuery)
    method();
  else
    setTimeout(function() {
      defer(method)
    }, 50);
}
defer(function() {
  (function($) {
    
    function doneResizing() {
      var totalScroll = $('.resource-slider-frame').scrollLeft();
      var itemWidth = $('.resource-slider-item').width();
      var difference = totalScroll % itemWidth;
      if ( difference !== 0 ) {
        $('.resource-slider-frame').animate({
          scrollLeft: '-=' + difference
        }, 500, function() {
          // check arrows
          checkArrows();
        });
      }
    }
    
    function checkArrows() {
      var totalWidth = $('#resource-slider .resource-slider-item').length * $('.resource-slider-item').width();
      var frameWidth = $('.resource-slider-frame').width();
      var itemWidth = $('.resource-slider-item').width();
      var totalScroll = $('.resource-slider-frame').scrollLeft();
      
      if ( ((totalWidth - frameWidth) - totalScroll) < itemWidth ) {
        $(".next").css("visibility", "hidden");
      }
      else {
        $(".next").css("visibility", "visible");
      }
      if ( totalScroll < itemWidth ) {
        $(".prev").css("visibility", "hidden");
      }
      else {
        $(".prev").css("visibility", "visible");
      }
    }
    
    $('.arrow').on('click', function() {
      var $this = $(this),
        width = $('.resource-slider-item').width(),
        speed = 500;
      if ($this.hasClass('prev')) {
        $('.resource-slider-frame').animate({
          scrollLeft: '-=' + width
        }, speed, function() {
          // check arrows
          checkArrows();
        });
      } else if ($this.hasClass('next')) {
        $('.resource-slider-frame').animate({
          scrollLeft: '+=' + width
        }, speed, function() {
          // check arrows
          checkArrows();
        });
      }
    }); // end on arrow click
    
    $(window).on("load resize", function() {
      checkArrows();
      $('#resource-slider .resource-slider-item').each(function(i) {
        var $this = $(this),
          left = $this.width() * i;
        $this.css({
          left: left
        })
      }); // end each
    }); // end window resize/load
    
    var resizeId;
    $(window).resize(function() {
        clearTimeout(resizeId);
        resizeId = setTimeout(doneResizing, 500);
    });
    
  })(jQuery); // end function
});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"> </script>
<script>
  
// International telephone format
// $("#phone").intlTelInput();
// get the country data from the plugin
var countryData = window.intlTelInputGlobals.getCountryData(),
  input = document.querySelector("#phone"),
  addressDropdown = document.querySelector("#address-country");

// init plugin
var iti = window.intlTelInput(input, {
  hiddenInput: "full_phone",
  utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
});

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
  addressDropdown.value = iti.getSelectedCountryData().iso2;
});

// listen to the address dropdown for changes
addressDropdown.addEventListener('change', function() {
  iti.setCountry(this.value);
});
</script>
</body>

</html>