<?php
if (isset($_POST['Email'])) {

    $email_to = "paula.dogariu@gmail.com";
    $email_subject = "New reservation";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    if (
        !isset($_POST['email'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $email = $_POST['email'];
    $name = $_POST['name'];

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "email: " . clean_string($email) . "\n";
    $email_message .= "name: " . clean_string($name) . "\n";
    $email_message .= "small"   . clean_string($small) . "\n";
    $email_message .= "large"   . clean_string($large) . "\n";

    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    
    echo"<div class='text-center alert alert-success'>Message added Successfully!</div>";
    echo file_get_contents("contact.html");
}
?>