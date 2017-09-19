<?php
if($_POST){
  $to = "info@travelbrewery.com"; // this is your Email address
  $name = $_POST['Name'];
  $from = $_POST['Email']; // this is the sender's Email address

  $phone =$_POST['Phone'];
  $query=$_POST['Query'];
if(isset($query)&&!empty($query))

  {$subject = "Query by an Interested Customer";

  $message = $name . " \n showed interest in your East European Sojourn Tour \n\n Contact Details \n\n Name:" .$name ."\n\n Email: " .$from . "\n\n Contact Number:" . $phone ."\n\n"
            "QUERY BY CUSTOMER \n" .$query;

  }
  else {
    $subject = "Sign Up Details for Interested Customer";

    $message = $name . " \n showed interest in your East European Sojourn Tour \n\n Contact Details \n\n Name:" .$name ."\n\n Email: " .$from . "\n\n Contact Number:" . $phone ."\n\n"
  }


  $headers = "From:" . $from;
  $headers2 = "From:" . $to;
  mail($to,$subject,$message,$headers);

  // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
