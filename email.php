<?php
// email.php: dummy file to process an email sent via the form
echo "<p>Thank you, your email has been sent with the below information.</p>";
echo "<b>Name:</b> ".$_POST["name"]."</br>";
echo "<b>Email:</b> ".$_POST["email"]."</br>";
echo "<b>Subject:</b> ".$_POST["subject"]."</br>";
echo "<b>Message:</b> ".$_POST["message"];
?>