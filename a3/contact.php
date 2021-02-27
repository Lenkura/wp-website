<!DOCTYPE html>
<html lang='en'>
<?php require_once('tools.php');
require_once('post-validation.php');
start_module("Home");
?>

<main>
    <article>
        <h1>Contact</h1>
        <p>If you would like to reach us for any reason, please fill out the following form</p>
        <?= $message ?>
        <form action="contact.php" method="POST" target='' id='contactform'>
            <fieldset>
                <legend>Contact Form</legend>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Douglas Raymond Baker" required onchange="nameerror()" value="<?= $returnname ?>">

                <p class='contacterror' id='nameerror'></p><?= $nameError ?>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Douglas@email.com" required onchange="emailerror()" value="<?= $cleanEmail ?>">
                <p class='contacterror' id='emailerror'></p><?= $emailError ?>

                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" placeholder="0412345678" onchange="mobileerror()" value="<?= $returnmobile ?>">
                <p class='contacterror' id='mobileerror'></p><?= $mobileError ?>

                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Reason for contact" required onchange="subjecterror()" value="<?= $returnsubject ?>">
                <p class='contacterror' id='subjecterror'></p><?= $subjectError ?>

                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter your message" form="contactform" required onchange="messageerror()"><?= $returnmessage ?></textarea>
                <p class='contacterror' id='messageerror'></p><?= $messageError ?>

            </fieldset>
            <input type='checkbox' id='remember' name='remember' value='remember' onclick="rememberme()" />
            <label id='rememberlabel' for="remember">Remember Me</label>
            <input type='checkbox' id='novalid' name='novalid' onclick="document.getElementById('contactform').noValidate = this.checked;">
            <label id='novalidlable' for="novalid">Disable client side validation</label>

            <input type="submit" value="Submit">
        </form>
    </article>
    <?php end_module(); ?>
    <script>
        retrieverememberme()
    </script>