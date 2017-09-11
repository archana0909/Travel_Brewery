<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Le Pension Group">
  <title>Travel Brewery | All Inclusive Dubai Vacation packages at the best prices around | Dubai</title>
  <meta name="description" content="Unravel the Awesome Travel Deals With Travel Brewery " />
  <meta name="Keywords" content="Europe Travel packages,Budapest,Vienna, Prague , Travel offers ,best deals for Europe Travel,Affordable European Vacation, International Group Tours ,Customized Holiday Packages, Personalized Vacations, International Honeymoon Destinations,  backpack group tours, backping europe ,travel websites india,travel planning  "/>
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600|Monoton" rel="stylesheet" type="text/css">
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Theme CSS -->
  <link href="css/creative.css" rel="stylesheet">
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '213981915623012'); // Insert your pixel ID here.
      fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=213981915623012&ev=PageView&noscript=1"
        /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-104500346-1', 'auto');
        ga('send', 'pageview');
        </script>
      </head>
      <body>
        <?php include 'header.php';?>
        <?php
        setlocale(LC_MONETARY, 'en_US');
        $headerBackimg ="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/dubai-1505040_1920.jpg";
        $headerHeading="Amazing &nbsp;&nbsp;Dubai";
        $tripStartDate="October/November 2017 </br> (Flexible Departures Available)";
        $tripEndDate="";
        $tripDuration="5 Days / 4 Nights";
        $flyToDest="Dubai";
        $flyBackFrom="Dubai";
        $packagePrice=40999;
        $tourTag="Amazing Dubai";
        $tourDesc="Explore one of world's most futuristic cities, an amazing amalgmation of modernity, architectural beauty and rich lifestyles.";
        ?>
        <!-- Section for header -->
        <section id="iti-header" style="background-image:url(<?php echo $headerBackimg; ?>)">
          <div class="section-wrap">
            <h1 class="section-heading"><?php echo $headerHeading; ?></h1>
            <div class="section-desc">
              <h3 ><?php echo $tripDuration; ?></h3>
              <p class="price">price per adult &nbsp;<strong style="color:#ffd700;"><i class="fa fa-inr"></i> <?php echo money_format('%!i',$packagePrice) ?>/-</strong></p>
            </div>
            <h3 style="color:#ffd700;"><i class="fa fa-hashtag"></i><?php echo $tourTag; ?></h3>
          </div>
        </section>

        <!-------section for Itinerary----- -->
        <section id="iti-summary">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-8">
                <div class="row">
                  <div class="tour-overview col-sm-6">
                    <p class="text"><i class="fa fa-2x fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $tripDuration ?></p>
                  </div>
                  <div class="tour-overview col-sm-6">
                    <p class="text"><i class="fa fa-2x  fa-calendar-check-o" aria-hidden="true"></i>&nbsp;<strong>Tour Dates&nbsp; :&nbsp;</strong><?php echo $tripStartDate; ?></p>
                  </div>
                  <div class="tour-overview col-sm-6">
                    <p class="text"><i class="fa fa-2x fa-plane" aria-hidden="true"></i>&nbsp;<strong>Fly To &nbsp; :&nbsp;</strong><?php echo $flyToDest ?></p>
                  </div>
                  <div class="tour-overview col-sm-6">
                    <p class="text"><i class="fa fa-2x  fa-plane fa-flip-horizontal" aria-hidden="true"></i>&nbsp;&nbsp;<strong>Return From&nbsp; :&nbsp;</strong><?php echo $flyBackFrom ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--itinerary details here-->
        <section id="iti-view">
          <div class="container-fluid iti-navbar">
            <div class="row">
              <ul class="col-md-12 nav navbar-nav" id="tripdetail-navbar">
                <li class="nav-item">
                  <a class="page-scroll" href="#iti-detail">Trip Detail</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#iti-itinerary">Itinerary</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll"  href="#iti-photos">Photos</a>
                </li>

              </ul>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <div class="iti-page-view" id="iti-detail" >
                  <h2>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    Tour Details
                  </h2>
                  <div><?php echo $tourDesc; ?>
                    <hr class="light">
                  </div>
                  <div class="tripdetails">
                    <div class="row outline">
                      <div class="col-xs-6">
                        <h4>Departure</h4>
                      </div>
                      <div class="col-xs-6">
                        <p>Delhi/Mumbai</p>
                      </div>
                    </div>
                    <div class="row outline">
                      <div class="col-xs-6">
                        <h4>Departure Time</h4>
                      </div>
                      <div class="col-xs-6">
                        <p>3 Hours Before Flight Time</p>
                      </div>
                    </div>
                    <div class="row outline">
                      <div class="col-xs-6">
                        <h4>Price Includes</h4>
                      </div>
                      <div class="col-xs-6">
                        <ul class="inline-list-style">
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;International Flights</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Visa</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Airport Transfers</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Stay in a 3 or 4 Star Hotel</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Breakfast</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Desert Safari with a royal BBQ Dinner and ballet dance performance</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Evening Dhow Cruise with Dinner</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Half Day Dubai City Tour</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;All Taxes and Service Charges</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Trip and Travel assistance</li>
                          <li class="list_style"><i class="fa fa-check" style="color:#3BB5C9"></i>&nbsp;Concierge service by a Travel Brewery Expert</li>
                        </ul>
                      </div>
                    </div>
                    <div class="row outline">
                      <div class="col-xs-6">
                        <h4>Price Excludes</h4>
                      </div>
                      <div class="col-xs-6">
                        <ul class="inline-list-style">
                          <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Travel Insurance</li>
                          <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Any tips/local taxes</li>
                          <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Meals other than ones mentioned above</li>
                          <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Paid Attractions</li>
                          <li class="list_style"><i class="fa fa-times" style="color:#414141"></i>&nbsp;Anything not mentioned above</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <br>

                <!--Itinerary details-->

                <div class="iti-page-view row outline" id="iti-itinerary" >
                  <div id="accordion" role="tablist" aria-multiselectable="true">
                    <ul class="iti-left-desc fa-ul iti-List inline-list-style ">
                      <li>
                        <span class="fa-stack ">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa-li fa fa-plane fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <strong class="iti-heading">Fly From India and Land in <?php echo $flyToDest; ?></strong>

                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="fa-stack ">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header" role="tab" id="heading0">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                    <strong class="iti-heading">Day 1</strong>
                                  </a>
                                </div>
                                <div id="collapse0" class="collapse in" role="tabpanel" aria-labelledby="heading0">
                                  <div class="card-block">
                                    <hr class="light"/>
                                    <p class="iti-text">

                                      Arrival from India to Dubai International Airport, you will get a private pick up and drop from the Airport to your hotel. Your hotel is hand picked by our experts and is a 3 or 4 star property in a great location and equipped with world class facilities. Rest of the day is free to self explore the city, you can visit some of the popular malls in the evening or the traditional souks.
                                    </p>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="fa-stack ">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header" role="tab" id="heading1">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <strong class="iti-heading">Day 2</strong>
                                  </a>
                                </div>
                                <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
                                  <div class="card-block">
                                    <hr class="light"/>
                                    <p class="iti-text">
                                      Enjoy a half day city tour of Dubai on your second day. Visit some of the world famous attractions such as Burj Al Arab, Jumeirah Mosque and the magnificent Burj Khalifa - world's tallest building. You will travel in comfortable air conditioned coaches and you will have an English speaking driver to take you along. Once back you can relax and stretch and then spend the evening exploring this amazing city.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="fa-stack ">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header" role="tab" id="heading2">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <strong class="iti-heading">Day 3</strong>
                                  </a>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
                                  <div class="card-block">
                                    <hr class="light"/>
                                    <p class="iti-text">
                                      Enjoy a hearty buffet breakfast at your hotel, the rest of the day till evening will be free to self explore. In the evening get ready for a romantic cruise on a traditional arabic dhow boat along with lip smacking dinner. Glide past some lavish residences and iconic buildings of Dubai.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="fa-stack ">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa-li fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="card">
                                <div class="card-header" role="tab" id="heading3">
                                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <strong class="iti-heading">Day 4</strong>
                                  </a>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
                                  <div class="card-block">
                                    <hr class="light"/>
                                    <p class="iti-text">
                                      Todays highlight will be an evening desert safari. Enjoy the ride in an SUV through the magnificent dunes of desert. A desert safari is the ultimate experience in Dubai and is not to be missed. Followed by the drive, enjoy a deicious BBQ dinner clubbed with a traditional belly dancing performance! You can also opt for some of the optional activities available.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li >
                        <span class="fa-stack ">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa-li fa fa-plane fa-stack-1x fa-inverse"></i>
                        </span>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <strong class="iti-heading">Fly back to India from <?php echo $flyBackFrom; ?></strong>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="container-fluid outline iti-page-view" id="iti-photos">
                  <div class="carousel slide" id="carousel-photos-1" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img alt="Dubai"
                        src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/dubai-2677795_640.jpg" data-holder-rendered="true">
                      </div>
                      <div class="item">
                        <img alt="Dubai"
                        src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/desert-689561_640.jpg" data-holder-rendered="true">
                      </div>
                      <div class="item">
                        <img alt="Dubai"
                        src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/dubai-2521766_640.jpg" data-holder-rendered="true">
                      </div>
                      <div class="item">
                        <img alt="Dubai"
                        src="http://www.travelbrewery.com/blog/wp-content/uploads/2017/09/burj-al-arab-2624317_640.jpg" data-holder-rendered="true">
                      </div>
                      <a href="#carousel-photos-1" class="left carousel-control" role="button" data-slide="prev"> <span
                        class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span
                        class="sr-only">Previous</span> </a>
                        <a href="#carousel-photos-1"class="right carousel-control" role="button" data-slide="next"> <span
                          class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span
                          class="sr-only">Next</span> </a></div>
                        </div>


                      </div>
                      <br>
                    </div>
                  </div>
                </div>
              </section>
              <aside class="submit-enquiry" id="enquiry-form">
                <?php include 'submit-enquiry.php'; ?>
              </aside>
              <?php include 'footer.php';?>
              <!-- jQuery -->
              <script src="vendor/jquery/jquery.min.js"></script>
              <!-- Bootstrap Core JavaScript -->
              <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
              <!-- Plugin JavaScript -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>

              <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
              <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
              <script src="//lightwidget.com/widgets/lightwidget.js"></script>
              <!-- Theme JavaScript -->
              <script src="js/creative.js"></script>
            </body>
            </html>
