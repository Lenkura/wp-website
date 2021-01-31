<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letter Index</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime(" style.css "); ?>">
    <script src='../wireframe.js'></script>
    <script src='script.js'></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <img src='../../media/drbakersmol.png' alt='Douglas Raymond Baker'>
        <h1>Douglas Raymond Baker</h1>
        <h1>An ANZAC Letter Collection</h1>
    </header>

    <nav>
        <ul>
            <a href="index.php">
                <li>Home</li>
            </a>
            <a href="Introduction.php">
                <li>Introduction</li>
            </a>
            <a href="letters.php">
                <li>Post Card Example</li>
            </a>
            <li id='location'>Document Index</li>
            <a href="contact.php">
                <li>Contact</li>
            </a>
        </ul>
    </nav>

    <main>
        <article>
            <h2>List of all Letters and Postcards</h2>
            <ul class=linksyear>
                <li>
                    <span>Years Displayed:</span>
                </li>
                <li><input type='checkbox' id='1914' name='1914' value='1914' class='linkyearbutton' checked onclick="linksviewyear(1914)" />
                    <label for="1914">1914</label></li>
                <li><input type='checkbox' id='1915' name='1915' value='1915' class='linkyearbutton' checked onclick="linksviewyear(1915)"/>
                    <label for="1915">1915</label></li>
                <li><input type='checkbox' id='1916' name='1916' value='1916' class='linkyearbutton' checked onclick="linksviewyear(1916)"/>
                    <label for="1916">1916</label></li>
                <li> <input type='checkbox' id='1917' name='1917' value='1917' class='linkyearbutton' checked onclick="linksviewyear(1917)"/>
                    <label for="1917">1917</label></li>
                <li> <input type='checkbox' id='1918' name='1918' value='1918' class='linkyearbutton' checked onclick="linksviewyear(1918)"/>
                    <label for="1918">1918</label></li>

            </ul>

            <section id="1914links">
                <h3>1914</h3>
                <ul>
                    <li><a href='letters.php'>[Post Card] August 25th 1914.</a></li>
                    <li><a href='letters2.php'>[Post Card] August 31st 1914.</a></li>
                    <li><a href='letters4.php'>[Post Card] October 23rd 1914.</a></li>
                </ul>
            </section>
            <section id="1915links">
                <h3>1915</h3>
                <ul>
                    <li><a href='letters1.php'>[Letter] 4th September 1915.</a></li>
                    <li><a href=''>[Filler doc] link does not work</a></li>
                    <li><a href=''>[Filler doc] link does not work</a></li>
                </ul>
            </section>
            <section id="1916links">
                <h3>1916</h3>
                <ul>
                    <li> <a href='letters3.php'>[Letter] 2nd February 1916.</a></li>
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
                    <li> <a href='letters5.php'>[Letter] 12th January 1918.</a></li>
                    <li><a href=''>[Filler doc] link does not work</a></li>
                    <li><a href=''>[Filler doc] link does not work</a></li>
                </ul>
            </section>
        </article>
        <?php end_module(); ?>