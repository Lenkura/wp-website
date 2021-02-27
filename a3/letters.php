<!DOCTYPE html>
<html lang='en'>
<?php require_once('tools.php');
start_module("Home");
?>
<main>
    <article class='cardnote'>
        <h2>Letter and Post Cards</h2>
        <p class='hovertip'>Hover over Post Cards for a map if the location is known</p>
    </article>

    <?php
    letter('1914/08/25');
    letter('1914/08/28');
    letter('1914/08/31');
    letter('1914/09/03');
    letter('1914/09/07');
    end_module(); ?>