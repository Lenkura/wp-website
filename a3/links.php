<!DOCTYPE html>
<html lang='en'>
<?php require_once('tools.php');
start_module("Home");
?>

<main>
    <article>
        <h2>List of all Letters and Postcards</h2>
        <ul class=linksyear>
            <li>
                <span>Years Displayed:</span>
            </li>
            <li><input type='checkbox' id='1914' name='1914' value='1914' class='linkyearbutton' checked onclick="linksviewyear(1914)" />
                <label for="1914">1914</label>
            </li>
            <li><input type='checkbox' id='1915' name='1915' value='1915' class='linkyearbutton' checked onclick="linksviewyear(1915)" />
                <label for="1915">1915</label>
            </li>
            <li><input type='checkbox' id='1916' name='1916' value='1916' class='linkyearbutton' checked onclick="linksviewyear(1916)" />
                <label for="1916">1916</label>
            </li>
            <li> <input type='checkbox' id='1917' name='1917' value='1917' class='linkyearbutton' checked onclick="linksviewyear(1917)" />
                <label for="1917">1917</label>
            </li>
            <li> <input type='checkbox' id='1918' name='1918' value='1918' class='linkyearbutton' checked onclick="linksviewyear(1918)" />
                <label for="1918">1918</label>
            </li>

        </ul>

        <section id="1914links">
            <h3>1914</h3>
            <ul>
                <li><a href='letters.php'>[Post Card] August 25th 1914.</a></li>
                <li><a href='letters1.php'>[Post Card] August 28th 1914.</a></li>
                <li><a href='letters2.php'>[Post Card] August 31st 1914.</a></li>
                <li><a href='letters3.php'>[Letter] September 3rd 1914.</a></li>
                <li><a href='letters4.php'>[Post Card] September 7th 1914.</a></li>
            </ul>
        </section>
        <section id="1915links">
            <h3>1915</h3>
            <ul>
                <li><a href=''>[Filler doc] link does not work</a></li>
                <li><a href=''>[Filler doc] link does not work</a></li>
            </ul>
        </section>
        <section id="1916links">
            <h3>1916</h3>
            <ul>
                <li><a href=''>[Filler doc] link does not work</a></li>
                <li><a href=''>[Filler doc] link does not work</a></li>
            </ul>
        </section>
        <section id="1917links">
            <h3>1917</h3>
            <ul>
                <li><a href=''>[Filler doc] link does not work</a></li>
                <li><a href=''>[Filler doc] link does not work</a></li>
                <li><a href=''>[Filler doc] link does not work</a></li>
            </ul>
        </section>
        <section id="1918links">
            <h3>1918</h3>
            <ul>

                <li><a href=''>[Filler doc] link does not work</a></li>
                <li><a href=''>[Filler doc] link does not work</a></li>
            </ul>
        </section>
    </article>
    <?php end_module(); ?>