<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Contact Form</title>
</head>
<body>

    <form action="data/contact.php" method="post">
        <h1>Contact Me</h1>

        <label for="name-field">First and Last Name</label>
        <input id="name-field" name="name" type="text" placeholder="Name">

        <label for="email-field">Email</label>
        <input id="email-field" name="email" type="text" placeholder="Email">

        <label for="subject-field">What services are you looking for?</label>
        <input id="subject-field" name="Subject" type="text" placeholder="Subject">

        <label for="">Message</label>
        <textarea id="message-field"></textarea>
    </form>
    
</body>
</html>