<div class="container lg-moon-container cont-space-above">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<img class="header-pic" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/custom-page/header.jpg" alt="">
			GAIA COLLECTIVE custom orders are one-of-a-kind pieces. As
			such, design will vary from stone to stone. Every piece of
			jewelry is specifically unique. Chose your stone and metals to
			have woven by one of our artists. 
			<br>
			Fill out the following form with your information and preferences for your custom order. 
			Make sure to note any additional details like whether you like light or heavy wire use on your item.
			We will contact you soon with more details including pricing and shipping times. 
			<br><br>
		</div>
	<div class="col-sm-8 col-sm-offset-2">
		<div class="col-sm-6 col-sm-offset-3">
		<?php 
		if(isset($_POST['submit'])){
		    $to = "dfgranadosreyes@gmail.com"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $first_name = $_POST['first_name'];
		    $last_name = $_POST['last_name'];
		    $stone = $_POST['stone'];
		    $subject = "Custom Order from GaiaCollective";
		    $subject2 = "Copy of your message to Gaia Collective";
		    $message = $first_name . " " . $last_name . " requested: "."\n\n" . $_POST['stone']. "\n\n" . $_POST['metal']."\n\n" . $_POST['type']."\n\n" . $_POST['artist']."\n\n" . $_POST['message'];
		    /*    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];*/

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    /*mail($from,$subject2,$message2,$headers2); */// sends a copy of the message to the sender
		    echo "<h4> <b>Mail Sent. Thank you " . $first_name . ", we'll get back to you soon</h4>";
		    // You can also use header('Location: thank_you.php'); to redirect to another page.
		}
		?>

		<form action="" method="post" class="custom-form">
			First Name<br> <input type="text" name="first_name"><br>
			Last Name<br> <input type="text" name="last_name"><br>
			Email<br> <input type="text" name="email"><br>

			<?php
			$custom_fields = get_post_meta(109,'custom_fields',true) ;
			$custom_field = explode(',', $custom_fields);
			$custom_field = array_reverse($custom_field);

			foreach($custom_field as $x)
			{

				$name = (string)$x;
				$valString = get_post_meta(109,$name,true);
				$valArray = explode(',', $valString);

				echo $name.': ';
				echo '<select type="text" name="'.$name.'">';

				foreach($valArray as $y)
				{
					echo "<option>".$y."</option>";

				}
				echo '</select><br>';
			}
			?>
		<br>

		Additional Details<br><textarea rows="5" name="message" cols="30"></textarea><br>
		<input type="submit" name="submit" value="Request" class="email-submit">
		</form>
		</div> <!-- col-sm-8 -->
</div> <!-- col -->
</div> <!-- row -->
</div> <!-- cont -->

