<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Send an Email </title>
</head>
<body>
<form id="my Form">
        <h2>Send an Email</h2>
        <label>Name</label>
        <input id ="name" type = "text" placeholder="Enter Name">
        <br><br>
        <label>Email</label>
        <input id="email" type="text"placeholder="Enter Email">
        <br> <br>
        <label>Subject</label>
        <input id="subject"type="text"placeholder="Enter Subject">
        <br><br>
        <p>Message</p>
        <textarea id="body" rows="5"placeholder="Type Message"></textarea>
        <br><br>
        <button type ="button" onclick="sendEmail()"value="Send an Email">Submit</button>
</form>
</body>
</html>