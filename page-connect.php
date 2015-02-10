<div class="container lg-moon-container cont-space-above">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
		<img class="header-pic" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/connect-page/header.jpg" alt="">
                            </div> <!-- col -->

<div class="col-sm-4 col-sm-offset-4">
    Have any questions for us? Feel free to send us a message with the form below! <br><br>
		<?php 
if(isset($_POST['submit'])){
    $to = "dfgranadosreyes@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Message from GaiaCollective";
    $subject2 = "Copy of your message to Gaia Collective";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    /*mail($from,$subject2,$message2,$headers2); */// sends a copy of the message to the sender
    echo "<h4> <b>Mail Sent. Thank you " . $first_name . ", we will contact you shortly.</h4>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<form action="" method="post" class="connect-form">
First Name<br> <input type="text" name="first_name"><br>
Last Name<br> <input type="text" name="last_name"><br>
Email<br> <input type="text" name="email"><br>
Message<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Submit" class="email-submit">
</form>


                                       </div> <!-- col -->
	</div> <!-- row -->
	
</div> <!-- container -->

