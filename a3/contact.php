<!DOCTYPE html>
<html lang='en'>
<?php require_once('tools.php');
start_module("Home");
?>

    <main>
        <article>
            <h1>Contact</h1>
            <p>If you would like to reach us for any reason, please fill out the following form</p>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="POST" target='_blank' id='contactform'>
                <fieldset>
                    <legend>Contact Form</legend>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Douglas Raymond Baker" required onchange="nameerror()">

                    <p class='contacterror' id='nameerror'>Names Must be Letters and Punctuation Only</p>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Douglas@email.com" required onchange="emailerror()">
                    <p class='contacterror' id='emailerror'>Please Enter Valid Email</p>

                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" placeholder="0412345678" onchange="mobileerror()">
                    <p class='contacterror' id='mobileerror'>Australian Phone Numbers Only</p>

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Reason for contact" required onchange="subjecterror()">
                    <p class='contacterror' id='subjecterror'>Please Enter a Reason for Contact</p>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" form="contactform" required onchange="messageerror()"></textarea>
                    <p class='contacterror' id='messageerror'>Please Enter a Message</p>

                </fieldset>
                <input type='checkbox' id='remember' name='remember' value='remember' />
                <label id='rememberlabel' for="remember">Remember Me</label>
                <input type="submit" value="Submit">

            </form>
        </article>
        <pre><?php print_r($_POST); ?></pre>
        <?php end_module(); ?>