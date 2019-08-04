<!DOCTYPE html>
<html lang="en">

<?php
include 'header.html';
?>

    
    <div class="jumbotron">
      <div class="container">
        <h1>Get in touch</h1>
        <p>You can reach me through <a href="http://linkd.in/1aqZUGj">LinkedIn</a> and <a href="https://twitter.com/_sferrari">Twitter</a>, or you can fill out the form below to send me an email. Thanks!</p>
        
      </div>
    </div>

    <div class="container">
      <div style="max-width: 30rem">
        

          <h2>Send me an email</h2>
              
              <?php
          function spamcheck($field) {
            // Sanitize e-mail address
            $field=filter_var($field, FILTER_SANITIZE_EMAIL);
            // Validate e-mail address
            if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
              return TRUE;
            } else {
              return FALSE;
            }
          }
          ?>

          
          <?php
          // display form if user has not clicked submit
          if (!isset($_POST["submit"])) {
            ?>
            
        <form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
         <fieldset>
          <div class="form-group">
            <label for="name">Your name</label>
            <input id="name" name="name" type="text" class="form-control" required="">  
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="control-label" for="emailAddress">Your email</label>
              <input id="emailAddress" name="from" type="email" class="form-control" required="">
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="control-label" for="subject">Subject</label>
              <input id="subject" name="subject" type="text" class="form-control" required="">
          </div>

          <!-- Textarea -->
          <div class="form-group">
            <label class="control-label" for="message">Message</label>
              <textarea rows="3"  id="message" name="message" class="form-control"></textarea>
          </div>

          <!-- Button -->
          <div class="control-group">
            <label class="control-label" for="singlebutton"></label>
            <button type="submit" id="singlebutton" name="submit" value="Send Email" class="btn btn-outline-primary" style="margin-bottom:5px;" >Send Email</button>
          </div>

          </fieldset>
        </form>


          <?php 
        } else {  // the user has submitted the form
          // Check if the "from" input field is filled out
          if (isset($_POST["from"])) {
            // Check if "from" email address is valid
            $mailcheck = spamcheck($_POST["from"]);
            if ($mailcheck==FALSE) {
              echo "Invalid input";
            } else {
              $from = $_POST["from"]; // sender
              $subject = $_POST["subject"];
              $message = $_POST["message"];
              // message lines should not exceed 70 characters (PHP rule), so wrap it
              $message = wordwrap($message, 70);
              // send mail
              mail("",$subject,$message,"From: $from\n");
              echo "Thank you for sending me an email. I will reply as soon as possible.";
            }
          }
        }
        ?>

  </div>


<?php
include 'footer.html';
?>

</html>