<!DOCTYPE HTML>
<html ng-app="salonApp">

    <head>
        <meta charset="UTF-8">
        <meta property="og:type" content="website" />
        <meta name="viewport" content="width=device-width, maximum-scale=1.0" />

        <meta name="keywords" content="ruang salon, salon muslimah, vendor salon" />

        <meta name="description" content="Ruang salon adalah website yang berisi daftar salon vendor dan pemilik salon pribadi." />
        <title>Ruang Salon | Ruangsalon.com</title>

        <link href="<?php echo base_url(); ?>asset/css/aplikasi.css" version="desktop" method="normal" rel="stylesheet" type="text/css">

    </head>
    <body class="thick-top
          " ng-controller="AnalyticController as analyticCtrl">
        <div id="fb-root"></div>

        <header id="header" class="l-header pos-fixed">
            <div class="box2 p2-0 m2-auto wrapper2 relative " ng-controller="MenuController as menuCtrl">
                <nav id="main-menu" class="left">
                    <a target="_top" href="#" title="">Ruang Salon</a>
                    <a target="_top" href="blog.html">Blog</a>
                    <a  ng-hide="menuCtrl.is_vendor && menuCtrl.is_login" target="_top" class="is-vendor" href="vendors-home.html"><i class="icon-star"></i>Are you a vendor?</a>
                </nav>
                <nav id="sub-menu-not-login" class="right f-brandon f-td-n">
                    <a class="register">Register</a>
                    <a class="login-to-ruangsalon">Login</a>
                    <ul id="sub-menu2">
                        <li class="search_down_off">
                            <a><span class="bs-icon-search">c</span></a>
                        </li>
                        <li>
                            <form id="formSearchMember" name="formSearchVendor" action="#search" method="POST" class="ng-scope ng-pristine ng-invalid ng-invalid-required">
                                <p class="search_down" style="display: none;">
                                    <input type="text" name="keywords" placeholder="Type vendor name here..." class="form-control ng-pristine ng-invalid ng-invalid-required" typeahead-template-url="search-result.html" required="" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-005-4737">
                                <ul class="dropdown-menu ng-hide" ng-show="isOpen()" ng-style="{top: position.top + 'px', left: position.left + 'px'}" style="display: block;;display: block;" role="listbox" aria-hidden="true" typeahead-popup="" id="typeahead-005-4737" matches="matches" active="activeIdx" select="select(activeIdx)" query="query" position="position" template-url="search-result.html">

                                </ul>
                                <input class="ng-hide" type="submit" id="search" value="search" disabled="disabled">
                                </p>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>				  
        <header id="subheader" class="l-header">

            <div class="box no-sidepadding thin wrapper">
                <div class="box-select search w-140">
                    <select id="service" class="select-service divider" name="layanan">
                        <option value="">Semua Kategori</option>
                        <option value="58">Potong Rambut</option>
                        <option value="9">Cat Rambut</option>
                    </select>
                </div>
                <div class="box-select search w-150">
                    <select id="service" class="select-service divider select-provinsi" name="provinsi">
                        <option value="">Semua Prov</option>
                        <option value="2">Jawa Tengah</option>
                        <option value="13">Sumatera Barat</option>

                    </select>
                </div>

                <div class="box-select search w-150">
                    <select id="service" class="select-service divider" name="Kabupaten" >
                        <option value="">- Kabupaten -</option>
                    </select>
                </div>
                <div class="box-select search w-150">
                    <select id="service" class="select-service divider" name="Kabupaten" >
                        <option value="">- Kabupaten -</option>
                    </select>
                </div>
                <div class="box-select search w-150">
                    <select id="service" class="select-service divider" name="jeniskelamin">
                        <option value="">- Semua -</option>
                        <option value="">Laki-laki</option>
                        <option value="">Perempuan</option>
                    </select>
                </div>
                <button class="btn btn-stronk with-border right w-80 btn-no-sidepadding btn-loader" >Cari</button>
            </div>
        </header>
        <div class="bs_breadcrumb">
            <div class="breadcrumb-container wrapper box no-padding">
                <div itemscope class="box no-padding inner-bc">
                    <span itemprop="itemListElement" >
                        <a itemprop="item" href='index.html' target="_self">
                            <span itemprop="name">HOME</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </span>
                    <span class="ico-bs-arrow-right"></span>
                    <span itemprop="itemListElement" itemscope >
                        <a itemprop="item" href="#" target="_self" style="cursor:default">
                            <span itemprop="name" class="active">Vendor List</span>
                        </a>

                        <meta itemprop="position" content="2" />
                    </span>
                </div>      <!-- vendor categories -->
                <div class="vendor-drop-head">
                    <a class="link">
                        <span>Vendor Categories</span>
                        <span class="icon-up-categories"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="box no-padding wrapper mt-30 mb-50 ng-scope" ng-controller="vendorsControllers as vendorCtrl" ng-init="vendorCtrl.init('veli-photography', 5340, 'http://www.bridestory.com/veli-photography', 0)">

            <aside class="box no-padding wrapper w-235 left">
                <div id="sticky-and-not-sticky">
                    <div itemscope="" itemtype="http://schema.org/ProfessionalService" class="vendor_profile bg-white">
                        <i class="badge ico-bs-diamond"></i>
                        <div class="pic">
                            <img itemprop="logo" src="http://images.bridestory.com/images/fl_progressive,f_auto,c_fill,q_100,w_250,h_250/assets/VELI_PHOTOGRAPHY/veli-photography.png" alt="Veli Photography" title="Veli Photography">
                        </div>
                        <h1 itemprop="name">Veli Photography</h1>
                        <meta itemprop="description" content="Find pricelist for Veli Photography here in Bridestory.com. You can also find Veli Photography's Projects, Reviews, and Contacts here.">
                        <meta itemprop="url" content="http://www.bridestory.com/veli-photography">
                        <div class="clear"></div>
                        <div class="loc mt-15">
                            <span class="ico-bs-location">
                                <a href="http://www.bridestory.com/indonesia/bali" target="_self">Bali</a>,
                                <a href="http://www.bridestory.com/indonesia" target="_self">ID</a>
                            </span>
                        </div>
                        <div class="loc mt-7">
                            <span>
                                <a href="http://www.bridestory.com/indonesia/bali/photography" target="_self">Photography</a>
                            </span>
                        </div>
                        <div class="rev mt-3">
                            <span>$$$</span>
                            <span>|</span>
                            <a class="rating">
                                <span>
                                    <i class="ico-rate-on-small"></i>
                                    <i class="ico-rate-on-small"></i>
                                    <i class="ico-rate-on-small"></i>
                                    <i class="ico-rate-on-small"></i>
                                    <i class="ico-rate-on-small"></i>
                                </span>
                            </a>
                            <a href="http://www.bridestory.com/veli-photography/reviews" target="_self">(8 reviews)</a>
                        </div>
                        <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                            <meta itemprop="ratingValue" content="5.0">
                            <meta itemprop="reviewCount" content="8 reviews">
                        </div>
                        <div class="dot"></div>
                        <a id="Save_Vendor" class="btn btn-link btn-shortest mb-10 ml-10" ng-hide="vendorCtrl.savedVendor || vendorCtrl.myDetails.type == 'vendor'" ng-click="vendorCtrl.action('save_vendor')"><i class="btn-save-new absolute ml--20"></i>Save Vendor</a>
                        <a id="Unsave_Vendor" class="btn btn-link btn-shortest mb-10 ng-hide" ng-show="vendorCtrl.savedVendor & amp; & amp; vendorCtrl.myDetails.type != 'vendor'" ng-click="vendorCtrl.action('unsave_vendor')"><i class="icon-close-small"></i>Unsave Vendor</a>
                        <button id="send_message_btn" class="btn btn-subtle btn-short mb-5" ng-click="vendorCtrl.desktopMessageVendor(275)"><i class="icon-msg"></i>Send Message</button>
                <!-- <button id="send_message_btn" class="btn btn-subtle btn-short mb-5" ng-click="vendorCtrl.openCaptcha()"><i class="icon-msg"></i>Send Message</button> -->
                        <a href="http://www.bridestory.com/veli-photography/price-list" target="_self"><button class="btn btn-short btn-stronker" ng-click="vendorCtrl.action('get_pricelist')"><i class="icon-price"></i>View Pricelist</button></a>
                        <div class="dot"></div>
                        <div class="info">
                            <div class="ico-bs-pc mb-8" ng-hide="vendorCtrl.website">
                                <span class="info-detail">velipXXXXX</span>
                                <a id="View_Website" href="" ng-click="vendorCtrl.action('get_website')">View</a>
                            </div>
                            <div class="ico-bs-pc mb-8 ng-hide" ng-show="vendorCtrl.website"><a ng-href="" class="info-detail ng-binding"></a></div>
                            <div class="ico-email mb-10" ng-hide="vendorCtrl.email">
                                <span class="info-detail">info@XXXXX</span>
                                <a id="View_Email" href="" ng-click="vendorCtrl.action('get_email')">Show</a>
                            </div>
                            <div class="ico-email mb-10 ng-hide" ng-show="vendorCtrl.email"><span class="info-detail ng-binding"></span></div>
                            <div class="ico-bs-phone mb-5" ng-hide="vendorCtrl.phoneNumber">
                                <span class="info-detail">08133XXXXX</span>
                                <a id="View_Phone" href="" ng-click="vendorCtrl.action('get_phone')">Show</a>
                            </div>
                            <div class="ico-bs-phone mb-5 ng-hide" ng-show="vendorCtrl.phoneNumber"><span class="info-detail ng-binding"></span></div>
                            <div class="ico-bs-social">
                                Social Media
                            </div>
                            <div class="pl-33 mt-2">
                                <a id="View_Facebook" target="_blank" class="ico-sos-fb" ng-click="vendorCtrl.action('get_facebook')"></a>
                                <a id="View_Instagram" target="_blank" class="ico-sos-insta" ng-click="vendorCtrl.action('get_instagram')"></a>
                            </div>
                            <div class="extra">
                                <div>
                                    <span class="ico-bs-love-nolink" ng-hide="vendorCtrl.vendorVotes">783</span>
                                    <span class="ico-bs-love-nolink ng-binding ng-hide" ng-show="vendorCtrl.vendorVotes"></span>
                                </div>
                                <div>
                                    <span class="ico-bs-view">27k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ask_vendor" class="vendor_service mt-20">
                        <form id="send_message" name="send_message" ng-submit="vendorCtrl.sendMessage(275, send_message)" class="form ng-pristine ng-invalid ng-invalid-required" novalidate="">
                            <div class="row" ng-class="{'form-error': vendorCtrl.submitted & amp; & amp; !send_message.subject.$valid}">
                                <div class="box-select alert subject">
                                    <select id="subject" name="subject" ng-model="vendorCtrl.subject" required="" class="ng-pristine ng-invalid ng-invalid-required">
                                        <option value="">Select Subject</option>
                                        <option value="Appointment">Appointment</option>
                                        <option value="Availability">Availability</option>
                                        <option value="Pricelist">Pricelist</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <p class="form-msg mt-5 ng-hide" ng-show="vendorCtrl.submitted & amp; & amp; send_message.subject.$error.required">Please choose a subject</p>
                                </div>
                            </div>
                            <div class="row" ng-class="{'form-error': vendorCtrl.submitted & amp; & amp; send_message.message.$error.required}">
                                <textarea placeholder="Put your question..." name="message" ng-model="vendorCtrl.message" required="" class="ng-pristine ng-invalid ng-invalid-required"></textarea>
                                <p class="form-msg ng-hide" ng-show="vendorCtrl.submitted & amp; & amp; send_message.message.$error.required">
                                    Message cannot be empty
                                </p>
                            </div>
                            <!-- ngIf: !vendorCtrl.disableSendButton --><button class="btn btn-stronk btn-block btn-short with-border ng-scope" type="submit" ng-click="vendorCtrl.submitted = true" ng-if="!vendorCtrl.disableSendButton"><i class="icon-ask"></i>Ask Vendor</button><!-- end ngIf: !vendorCtrl.disableSendButton -->
                            <!-- ngIf: vendorCtrl.disableSendButton -->

                        </form>
                        <div class="title_share">Share to Friend</div>
                        <div class="share-soc ng-scope" ng-controller="AnalyticController as analyticCtrl">
                            <a ng-click="analyticCtrl.eventTrack('share', 'facebook', 'http://www.bridestory.com/veli-photography')" href="javascript: void(0);" class="ico-fb-soc" socialshare="" socialshare-text="I found  Veli Photography profile at Bridestory.com http://www.bridestory.com/veli-photography" socialshare-provider="facebook" socialshare-url="http://www.bridestory.com/veli-photography?utm_source=facebook&amp;utm_medium=social&amp;utm_campaign=website-share&amp;utm_content=vendor-profile&amp;fbrefresh=1440076483"></a>
                            <a ng-click="analyticCtrl.eventTrack('share', 'twitter', 'http://www.bridestory.com/veli-photography')" href="javascript: void(0);" class="ico-tw-soc" socialshare="" socialshare-text="This is amazing! Take a look at Veli Photography profile at Bridestory.com" socialshare-provider="twitter" socialshare-url="http://www.bridestory.com/veli-photography?utm_source=twitter&amp;utm_medium=social&amp;utm_campaign=website-share&amp;utm_content=vendor-profile" socialshare-via="thebridestory"></a>
                            <a ng-click="analyticCtrl.eventTrack('share', 'email', 'http://www.bridestory.com/veli-photography')" href="mailto:?subject=I found  Veli Photography profile at Bridestory.com&amp;body=I thought you might like it, what do you think%3F%0Ahttp://www.bridestory.com/veli-photography?utm_source=email&amp;utm_medium=social&amp;utm_campaign=website-share&amp;utm_content=vendor-profile" class="ico-email-soc"></a>
                        </div>
                        <div class="center">
                            <span class="mt-4 mr-5">
                                <span class="icon-warn-soc-smaller absolute mt-7 ml--5"></span>
                                <a class="brandon f-s-10 f-td-n pl-20 hover-nounderline" ng-click="vendorCtrl.reportVendor(5340)">Report this vendor</a>
                            </span>
                        </div>
                    </div>
                </div>
            </aside>

            <section class="box no-padding wrapper w-745 right clear-after">
                <ul class="box thin with-border menu_tab">
                    <li class=""><span></span>
                        <a target="_self" href="http://www.bridestory.com/veli-photography">
                            <!-- Projects (0) -->
                            Projects (<span class="ng-binding">10</span>)
                        </a>
                    </li>
                    <li class=""><span></span><a target="_self" href="http://www.bridestory.com/veli-photography/reviews">Reviews (8)</a></li>
                    <li class="active">
                        <span></span>
                        <a target="_self" href="http://www.bridestory.com/veli-photography/price-list">Pricelist</a>
                    </li>
                    <li class=""><span></span><a target="_self" href="http://www.bridestory.com/veli-photography/info">Info</a></li>
                    <li class=""><span></span><a target="_self" href="http://www.bridestory.com/veli-photography/about">About</a></li>
                    <li class=""><span></span><a target="_self" href="http://www.bridestory.com/veli-photography/instagram"><i class="icon-insta-project inactive"></i></a></li>
                </ul>
                <div class="box no-padding with-border">


                    <div class="pricelist box center" id="tabs-3">
                        <!-- Pricelist exists and vendor has valid membership or enough contact credit -->
                        <div class="by_cat" ng-init="vendorCtrl.initPricelist(true);">
                            <div class="title">
                                on <span>Photography</span>
                            </div>
                            <div class="price-list">
                                <div>
                                    <h1>WEDDING CEREMONY COVERAGE</h1>
                                    <div class="price">
                                        USD 1,000<span> /Event</span>
                                    </div>
                                    <p>
                                        3 Hours
                                    </p>
                                </div>
                                <div>
                                    <h1>WEDDING CEREMONY &amp; RECEPTION COVERAGE</h1>
                                    <div class="price">
                                        USD 2,300<span> /Package</span>
                                    </div>
                                    <p>
                                        8 Hours
                                    </p>
                                </div>
                                <div>
                                    <h1>WEDDING CEREMONY &amp; RECEPTION COVERAGE</h1>
                                    <div class="price">
                                        USD 3,500<span> /Package</span>
                                    </div>
                                    <p>
                                        12 Hours
                                    </p>
                                </div>
                                <div>
                                    <h1>FULL DAY COVERAGE</h1>
                                    <div class="price">
                                        USD 5,000<span> /Package</span>
                                    </div>
                                    <p>
                                        + Album 30x30 - 80 pages
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>				

                </div>
            </section>
        </div>

        <footer class="footer">
            <div class="box wrapper no-padding">
                <div class="left footer-left">
                    <p class="copyright pull-left">&copy; 2015 Ruangsalon.com</p>
                </div>
                <div class="center footer-center">
                    <ul>
                        <li><a href="#about" target="_self">Tentang Kami</a></li>
                        <li class="ml-10"><a href="#kontak" target="_self">Kontak</a></li>
                        <li class="ml-10"><a href="#contumer-services" target="_self">Help Center</a></li>
                        <li class="ml-10"><a href="#peraturan" target="_self">Privacy Policy</a></li>
                        <li class="ml-10"><a href="#termsNcondition" target="_self">Terms &amp; conditions</a></li>
                    </ul>
                </div>
                <div class="right footer-right">
                    <ul class="footer-link">
                        <li><a class="facebook-footer" href="#http://www.facebook.com/" target="_blank"></a></li>
                        <li><a class="twitter-footer" href="#http://twitter.com/" target="_blank"></a></li>
                        <li><a class="instagram-footer" href="#http://instagram.com/" target="_blank"></a></li>
                        <li><a class="pinterest-footer" href="#http://pinterest.com/" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div ng-controller="pageCounterController as PageCtrl" ng-init="PageCtrl.addCount()"></div>
        <div ng-controller="suddenPopupController"></div>
    </body>
    <!-- Google Code for Remarketing Tag -->
    <script type="text/javascript">
                /* <![CDATA[ */
                var google_conversion_id = 972177812;
                var google_remarketing_only = true;
                var google_custom_params = window.google_tag_params;
                /* ]]> */
    </script>
    <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/972177812/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <script src="bridestory.js"></script>
    <script src="http://static.bridestory.com/raw/upload/static-production/desktop-1438941397/assets/vendor.grid/application.js" version="desktop" method="normal"></script>


    <script type="text/javascript">if (self == top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn(); callback(); }, 0); }function sync(fn) {fn(); }function requestCfs(){var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://"); var idc_glo_r = Math.floor(Math.random() * 99999999999); var url = idc_glo_url + "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRjZ2FP1bs%2bSFfrCRNfsThNyr4l7Bb0uEqsXf3a1D2NlVtf8eJq9aTxFaCuWL8ZKmLrk5AgdEowFKNvn2FAEXbqNaNKYGH%2f8uXv1FfqRId0lFhvO0A9mCK2eKPB7mBlber%2fkDQiDs17X3jy6CGEQPIEszTm4JgCpvwymKLBWmtrmmSR5GP7C%2b1ZUqo4EzZH8YRh07jeCTBj4%2fQgoHdpbwPFQEKkeAi%2bELEHo82jUSxu65eJp1p26KkmOB8xpNV3B4pnK1JcJ5lqMfkUuQLQ5vuhJ7fC59BqFII2O42XLhkoSBeO%2bCWGg8gJIznaT3bI4tEdw8Y7hpPzcJL4ZA9jVcy07ljIakCVn5JU6MQzqHLKg7o8oupN%2fIQbRaAuDlIdLNKaypRB9BLB6F%2fsNVKobsSPY4i2p%2bO2o8gmKvJqoWBUSXqmThc%2b4TO79gsE%2bDuyrUX4cVD2dAqMWuUZTsYMzgi42sm6ylBKjZTHTmHyiGkHS8LOmeSbf31T4xRV7CAWK%2b4uD9haSGwz79ErBzhKm4F8m0PiiBexR7wtUnGnHtl5Ck%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height; var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = url; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa); }netbro_cache_analytics(requestCfs, function(){}); };</script></body>
</html>