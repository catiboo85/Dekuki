<?php 

$emai_error = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"):
    if(empty($_POST["email"])):
        $email_error = "Email is required";
    else:
    $email = test_input($_POST["email"]);
    // checks to see if email address is proper form
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $email_error = "Oops! Not proper email format, try again.";
    endif; endif; endif;
?>
