<?php 
    if(empty($_POST)){
        echo 'Not Today!!!!!';
        exit;
    }

    $name = '';
    $email = '';
    $subject = '';
    $message = '';
    $recipient = 'adamgoarleyphotography@gmail.com';

    if(isset($_POST['name'])){
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['email'])){
        $email = str_replace(array("\r","\n","%0a","%0d"),'',$_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['subject'])){
        $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }

    $headers = [
        'From'=>'noreply@test.ca',
        'Reply-To'=>$name.'<'.$email.'>'
    ];

    if(mail($recipient, $subject, $message, $headers)){
        echo '<p>Thanks for getting in touch with me!,'.$name.'. I will reply within 48 hours</p>';
    }else{
        echo '<p>Your email did not go through</p>';
    }
?>