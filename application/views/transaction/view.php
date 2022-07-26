<?php if (!empty($transaction)) : ?>
    <div class="banner internal-banner" role="banner">
        <div class="sub-round-we-go">
            <div class="row text-center">
                <div class="small-12 columns">
                    <h2 class="text-center invert" style="color: white">Transaction Details</h2>
                    <h3 class="text-center invert" style="color: white">#<span data-tooltip
                                                   aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1"
                                                   title="Transaction reference number"><?= $transaction[0]->reference ?></span></h3>
                </div>
            </div>
        </div>
    </div>


    <div class="transaction-content" style="margin-bottom: 0;">
        <div class="row">
            <div class="small-12 large-6 columns">
                <h4 class="pre-detail-header">Seller Details</h4>
                <hr>
                <div class="detail-box">
                    <div class="detail-name">Name</div>
                    <div class="detail-content"><?= $transaction[0]->s_name ?></div>
                </div>
                <div class="detail-box">
                    <div class="detail-name">Address</div>
                    <div
                        class="detail-content"><?= str_replace(', ', ', <br>', $transaction[0]->s_address) ?></div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <h4 class="pre-detail-header">Buyer Details</h4>
                <hr>
                <div class="detail-box">
                    <div class="detail-name">Name</div>
                    <div class="detail-content"><?= $transaction[0]->b_name ?></div>
                </div>
                <div class="detail-box">
                    <div class="detail-name">Address</div>
                    <div
                        class="detail-content"><?= str_replace(', ', ', <br>', $transaction[0]->b_address) ?></div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="small-12 large-6 columns">
                <h4 class="pre-detail-header">Transaction Details</h4>
                <hr>
                <div class="detail-box">
                    <div class="detail-name">Date Started</div>
                    <div class="detail-content"><?= $transaction[0]->date_created ?> <span data-tooltip
                                                                                           aria-haspopup="true"
                                                                                           class="has-tip"
                                                                                           data-disable-hover="false"
                                                                                           tabindex="1"
                                                                                           title="Date and time when the transaction was created"><span
                                class="fa fa-question-circle-o" aria-hidden="true"></span></span></div>
                </div>

                <div class="detail-box">
                    <div class="detail-name">Transport Type</div>
                    <div class="detail-content">Express Transport</div>
                </div>

                <div class="detail-box">
                    <div class="detail-name">Inspection Time</div>
                    <div
                        class="detail-content"><?= $transaction[0]->inspection_days ?> <?= ($transaction[0]->inspection_days > 1) ? 'Days' : 'Day' ?>
                        <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1"
                              title="Inspection days start from the day of the delivery. If this occurs after 6PM then inspection days start from the following day."><span
                                class="fa fa-question-circle-o" aria-hidden="true"></span></span></div>
                </div>


            </div>

            <div class="small-12 large-6 columns">
                <h4 class="pre-detail-header">Delivery Address</h4>
                <hr>
                <div class="detail-box">
                    <div class="detail-name">Address</div>
                    <div
                        class="detail-content" data-magellan>
                        <a href="#map"
                           title="Click to see map"><?= str_replace(', ', ', <br>', $transaction[0]->b_address) ?></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row align-center">
            <div class="small-12 large-6 columns">
                <h4 class="pre-detail-header">Transaction Details</h4>
                <hr>
                <div class="detail-box">
                    <div class="detail-name">Product(s)</div>
                    <div class="detail-content"><?= $transaction[0]->p_brief ?></div>
                </div>
                <div class="detail-box">
                    <div class="detail-name">Product type</div>
                    <div class="detail-content"><?= $transaction[0]->p_type ?></div>
                </div>
                <div class="detail-box">
                    <div class="detail-name">Quantity</div>
                    <div class="detail-content"><?= $transaction[0]->p_qty ?></div>
                </div>

                <div class="detail-box">
                    <div class="detail-name">Value</div>
                    <div class="detail-content">&euro; <?= $transaction[0]->p_value ?> <span data-tooltip
                                                                                             aria-haspopup="true"
                                                                                             class="has-tip"
                                                                                             data-disable-hover="false"
                                                                                             tabindex="1"
                                                                                             title="Value of the transported product. Not including administration fees"><span
                                class="fa fa-question-circle-o" aria-hidden="true"></span></span></div>
                </div>

            </div>
            <div class="small-12 large-6 columns">
                <h4 class="pre-detail-header">Additional Information</h4>
                <hr>
                <div class="detail-box">
                    <div class="detail-name">Product Description</div>
                    <div class="detail-content"><?= $transaction[0]->p_description ?></div>
                </div>
                <div class="detail-box">
                    <div class="detail-name">Deadline</div>
                    <div class="detail-content">
                        <?php if (dateDiff($transaction[0]->deadline) < 0) : ?>
                            <?= $transaction[0]->deadline ?> | <?php echo dateDiff($transaction[0]->deadline) * -1 ?><?php echo (dateDiff($transaction[0]->deadline) == -1) ? ' Day ' : ' Days ' ?> left
                        <?php else: ?>
                            Transaction has expired on <?= $transaction[0]->deadline ?>
                        <?php endif; ?>
                        <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1"
                              title="This represents the transaction response deadline. If the response has already been given then the transaction will proceed as intended otherwise it will be deleted"><span
                                class="fa fa-question-circle-o" aria-hidden="true"></span></span>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="detail-name">Payment Method</div>
                    <div class="detail-content">Upfront Bank Transfer</div>
                </div>


                <div class="detail-box">
                    <div class="detail-name">Current Status</div>
                    <div
                        class="detail-content">
                        <?php if ($transaction[0]->status == 'Y') : ?>
                            <span class="label success"><i class="fa fa-check"></i> Approved</span> on
							<?php $originalDate = $transaction[0]->date_updated;
$newDate = date("d-m-Y", strtotime($originalDate));
?>
                        <?php elseif ($transaction[0]->status == 'N') : ?>
                            <span class="label alert"><i class="fa fa-close"></i> Declined</span> on <?= $transaction[0]->date_updated ?>
                        <?php else : ?>
                            <?php if (dateDiff($transaction[0]->deadline) < 0) : ?>
                                <span class="label warning"><i class="fa fa-clock-o"></i> Pending</span> buyer response
                            <?php else: ?>
                                <span class="label secondary">Expired</span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
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
        </div>

    </div>



<?php if ($this->session->userdata('role') == 'Admin') : ?>
    <div class="row">
        <div class="small-12 columns" style="margin-bottom: 40px">
            <a href="<?= site_url('dashboard') ?>" class="button expanded">Back</a>
        </div>
    </div>
<?php endif; ?>
<div class="row expanded map-container">
    <div id="controls" class="text-center">
        <span id="departing">LOADING DRIVER ROUTE...</span><br>
        <span id="destination">Please be patient as this may take a while</span>
    </div>
    <div id="map" data-magellan-target="map">

    </div>
</div>
<script>

    // hack Google Maps to bypass API v3 key (needed since 22 June 2016 http://googlegeodevelopers.blogspot.com.es/2016/06/building-for-scale-updates-to-google.html)
    var target = document.head;
    var observer = new MutationObserver(function (mutations) {
        for (var i = 0; mutations[i]; ++i) { // notify when script to hack is added in HTML head
            if (mutations[i].addedNodes[0].nodeName == "SCRIPT" && mutations[i].addedNodes[0].src.match(/\/AuthenticationService.Authenticate?/g)) {
                var str = mutations[i].addedNodes[0].src.match(/[?&]callback=.*[&$]/g);
                if (str) {
                    if (str[0][str[0].length - 1] == '&') {
                        str = str[0].substring(10, str[0].length - 1);
                    } else {
                        str = str[0].substring(10);
                    }
                    var split = str.split(".");
                    var object = split[0];
                    var method = split[1];
                    window[object][method] = null; // remove censorship message function _xdc_._jmzdv6 (AJAX callback name "_jmzdv6" differs depending on URL)
                    //window[object] = {}; // when we removed the complete object _xdc_, Google Maps tiles did not load when we moved the map with the mouse (no problem with OpenStreetMap)
                }
                observer.disconnect();
            }
        }
    });
    var config = {attributes: true, childList: true, characterData: true}
    observer.observe(target, config);
</script>
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript">

    window.readyHandlers = [];
    window.ready = function ready(handler) {
        window.readyHandlers.push(handler);
        handleState();
    };

    window.handleState = function handleState() {
        if (['interactive', 'complete'].indexOf(document.readyState) > -1) {
            while (window.readyHandlers.length > 0) {
                (window.readyHandlers.shift())();
            }
        }
    };

    document.onreadystatechange = window.handleState;

    ready(function () {

        var directionsDisplay;
        var directionsService = new google.maps.DirectionsService();
        var map;
        var start = '<?= $transaction[0]->s_address ?>';
        var end = '<?= $transaction[0]->b_address ?>';

        function initialize() {
            directionsDisplay = new google.maps.DirectionsRenderer();
            var centerOfMap = new google.maps.LatLng(51.5, 0);
            var mapOptions = {
                disableDefaultUI: true,
                draggable: true,
                scrollwheel: false,
                zoom: 8,
                center: centerOfMap,
                styles: [{"stylers": [{"saturation": -100}]}, {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#4FC1E9"}]
                }, {"elementType": "labels", "stylers": [{"visibility": "on"}]}, {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#A0D468"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels.text",
                    "stylers": [{"visibility": "on"}]
                }, {}]
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            directionsDisplay.setMap(map);

        }

        function calcRoute() {

            var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                    var fieldNameElement1 = document.getElementById('departing');
                    var fieldNameElement2 = document.getElementById('destination');
                    fieldNameElement1.textContent = 'Departing: ' + start;
                    fieldNameElement2.textContent = 'Destination: ' + end;
                }
            });

        }

        function seeTheMap() {
            initialize();
            calcRoute();
        }

        google.maps.event.addDomListener(window, 'load', seeTheMap);

    });
</script>


