<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Le Pension Group">
  <title>Travel Brewery |Sign up For best Travel Package Deals</title>
  <meta name="description" content="Terms And Conditions,Eastern Europe Tour Details ,Group Travel Tour starting on 22nd December 2017" />
  <meta name="Keywords" content=" Signup ,deals ,offer on europe travel ,Europe Travel packages,Budapest,Vienna, Prague , Travel offers ,best deals for Europe Travel,Affordable European Vacation, International Group Tours ,Customized Holiday Packages, Personalized Vacations, International Honeymoon Destinations,  backpack group tours, backping europe ,travel websites india,travel planning  "/>
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Theme CSS -->
  <link href="css/creative.css" rel="stylesheet">
</head>
<body>
  <?php
  if(isset($_POST['signup-button'])){
    $to = "info@travelbrewery.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $phone =$_POST['Phone'];

    $subject = "Sign Up Details for Interested Customer";

    $message = $name . "showed interest in your East European Sojourn Tour \n\n Contact Details \n\n\ Email: " .$from . "\n\n Contact Number:" . $phone ."\n\n";


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

    // You can also use header('Location: thank_you.php'); to redirect to another page.
  }
  ?>

  <!-- ------ This section consists of the sign up form for leads ------ -->
  <section id="signup-banner">
    <div class="container-fluid">
      <div class="row">
        <div class="hidden-xs col-sm-8 signup-imgbanner">
          <img class="img-responsive" src="../img/tourists.jpg" />
        </div>

        <div class="col-sm-4 signup-column">
          <h2>Sign up now!! </h2>
          <h4>To get Flat Rs3500 discount on our upcoming European Sujourn tour</h4>
          <br>
          <form id="signup-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group ">
              <label for="example-text-input" class="col-2 col-form-label">Name <span>* </span></label>
              <div class="col-10">
                <input class="form-control" type="text"  name="Name"  id="text-name" placeholder="Your Name">
              </div>
            </div>
            <div class="form-group ">
              <label for="example-email-input" class="col-2 col-form-label">Email <span>* </span></label>
              <div class="col-10">
                <input class="form-control" type="email" name="Email" placeholder="Email" id="email-input">
              </div>
            </div>
            <div class="form-group ">
              <label for="example-tel-input" class="col-2 col-form-label">Telephone <span>* </span></label>
              <div class="col-10">
                <input class="form-control" type="text" name="Phone"  placeholder="Mobile Number(+91-xxxxx-xxxxx)" id="tel-input">
              </div>
            </div>
            <div class="form-group text-center ">
              <input type="submit" name="signup-button" class="btn btn-primary " value="Unlock the Deal"></input>
            </div>
            <br>
          </form>
        </div>
        <!-- <div class="col-md-8 signup-imagebanner"></div> -->
      </div>
    </div>
  </section>

  <!-- ------ this section consists of the points to generate interest for users to sign up ------ -->
  <section id="tour-features-east-europe">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="offer-heading">We Offer the Best Prices</h3>
          <p>Enjoy the very best of East &amp; Central Europe during our 12 Day Europe Vacation tour through 5 countries,
            expertly planned and designed by travel enthusiasts at The Travel Brewery
          <br>
          <strong>The Trip begins on 22nd December 2017 !!</strong></p>
          </div>
          <div class="col-sm-8">
            <!--Tesetimonials here-->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5"> <!--Side image round one-->
            <img class="img-style" src="img/world-travel.jpg" title="Travel world with Travel Brewery" alt="Reasons why you should travel with Travel Brewery"/>
          </div>
          <div class="col-sm-7">
            <!--Reasons Why you should visit Europe-->
            <h3 class="offer-heading text-center">6 Reasons to Join Travel Brewery’s East European Backpacking Trip</h3>
            <ul class="inline-list-style">
              <li class="list-style">Explore 5 countries including Germany, Czech Republic, Austria, Bratislava and Hungary in 12 days</li>

              <li class="list-style">Celebrate Christmas in the beautiful city of Prague &amp; New Year’s in the party capital of the world - Budapest</li>

              <li class="list-style">Trip includes a Travel Buddy who will travel along to provide trip assistance during your tour</li>

              <li class="list-style">Travel with a group of diverse individuals, make new friends and plan up future vacations</li>

              <li class="list-style">Enjoy full freedom to self explore every city, no more fixed schedules and itineraries</li>

              <li class="list-style">Price includes stay, airport transfers, breakfast and full inter city and intra city travel</li>

            </ul>
          </div>

        </div>
      </div>
    </section> <?php include 'footer.php';?>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <!--< Theme JavaScript -->
    <script src="js/creative.js"></script>
  </body>
  </html>
