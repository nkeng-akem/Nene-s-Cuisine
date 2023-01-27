<!-- Sample HTML Form -->
<form method="post" action="subscriberform.php">
<textarea name="message"></textarea>
<input type="submit">
</form>
<?php
if($_POST["Message"]) {
mail("john@johndoe.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
<form action="https://getform.io/f/697abf5a-ef63-4a63-a9c9-ddeabc60d090" method="POST">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="text" name="message">
    <!-- add hidden Honeypot input to prevent spams -->
    <input type="hidden" name="_gotcha" style="display:none !important">
    <!-- checkbox handle -->
    <input type="checkbox" name="subscribe" value="yes" checked>
    <input type="hidden" name="subscribe" value="no">
    <!-- radio button handle -->
    <input type="radio" name="gender" value="male" checked>
    <input type="radio" name="gender" value="female">
    <input type="radio" name="gender" value="other">
    <!-- select field handle -->
    <select name="work-experience">
        <option value="one-year">0-1 years</option>
        <option value="one-five-years">1-5 years</option>
    </select>
    <button type="submit">Send</button>
</form>