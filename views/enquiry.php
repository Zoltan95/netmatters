<?php
    session_start();

    $name = "";
    $company = "";
    $email = "";
    $telephone = "";
    $message = ""; 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telephone']) && !empty($_POST['message'])) {
                $name = test_input($_POST['name']);      
                $company = test_input($_POST['company']);
                $email = test_input($_POST['email']);
                $message = test_input($_POST['message']);
                $telephone = test_input($_POST['telephone']);

            if (!preg_match("/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/",$telephone)) {
                $_SESSION["name"] = $name;
                $_SESSION["company"] = $company;
                $_SESSION["email"] = $email;
                $_SESSION["telephone"] = $telephone;
                $_SESSION["message"] = $message;
                
                $err = "Your phone number isn't valid.";
                return header("Location: /netmatters/contact#contact-form");
            }else {
                session_unset();
                session_destroy();
                return header("Location: /netmatters/contact#contact-form");
            }
        }
    }


?>

