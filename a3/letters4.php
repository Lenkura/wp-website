<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letters</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime(" style.css "); ?>">
    <script src='../wireframe.js'></script>

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
            <a href="introduction.php">
                <li>Introduction</li>
            </a>
            <li id='location'>Post Card Example</li>

            <a href="links.php">
                <li>Document Index</li>
            </a>
            <a href="contact.php">
                <li>Contact</li>
            </a>
        </ul>
    </nav>

    <main>

        <article class='cardnote'>
            <h2>[Post Card] October 23rd 1914.</h2>
            <p class='carddate'>Hover over the card for a map</p>
        </article>
        <article class='postcard'>
            <div>
                <p class='carddate'>Octover 23rd 1914.</p>
                <section class='cardcontent'>
                    <p> I have just come off parade and am trying to write these few lines before tea. Finished a letter to Mum a couple of hours ago and it is still raining, the sea is getting rough but it does not affect me at all, I am feeling A1. They
                        are very stingy with the water now, we have to wash in salt water and only get about half a bottle a day of drinking water. I generally manage to find enough water for at least one wash a day. The Y.M.C.A. chap has been giving
                        out plenty of magazines and novels, draughts and cards and quoits so things are not too bad. Nearly all of our Coy. have had their hair cut right off with the clippers – we do look bonsor, one chap had his shaved off and he gets
                        a hot time over it. Well, I will have to ring off as our mess orderly is setting the table for tea and I am in the way. We have tea at 5 p.m. and coffee is served out at 7.40 p.m.. We were paid 14/- (fourteen shillings) yesterday
                        so everyone is feeling rich again. </p>

                </section>
                <p class='cardend'>*********************************</p>
            </div>
            <!-- Card Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/14_08/post-card-august-25th-1914 -->
            <div><img src='../../media/brisbanemap.PNG' /></div>
            <!-- image source : Google Maps -->
        </article>
        <article class='letternav'>
            <a href="letters3.php" id='letternavl'>Previous article</a>
            <a href="links.php" id='letterdirectory'>Letter Directory</a>
            <a href="letters5.php" id='letternavr'>Next article</a>
        </article>
    </main>

    <footer>
        <img src='../../media/Poppy.png' alt='Poppy' class='watermark' />
        <!-- image source : http://clipart-library.com/poppy-cliparts.html */ -->
        <div>&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Put your name(s), student number(s) and group name here. Last modified
            <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. </div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>

        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

    </footer>

</body>

</html>