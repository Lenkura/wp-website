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
            <h2>[Post Card] August 31st 1914.</h2>
            <p class='carddate'>Hover over the card for a map</p>
        </article>
        <article class='postcard'>
            <div>
                <p class='carddate'>August 31st 1914.</p>
                <section class='cardcontent'>
                    <p> On Saturday when we came into camp from drill at 12 o’clock, we were told that the Commandant was very pleased with the progress made and had granted us a half holiday so the Gympie lads decided to go to the city. We had a good time
                        in Brisbane and had tea at a fish shop. Met Herb at about 7 p.m. and we all went to the Empire but the show was very poor. We have had issued to us two towels, two pairs under-pants, two singlets, two pairs socks, a sweater and
                        a cake of soap. I think we will get boots in a day or two and other things. </p>
                    <p> A church parade was held but none of the Gympie lads attended. It happened to be a voluntary one! We are all keeping in pretty good health and hope you all are at home. Today is payday, we are to get paid every fortnight, this time
                        we will get 11 days. I am only drawing half of mine and banking the rest. Love to all.

                    </p>
                </section>
                <p class='cardend'>*********************************</p>
            </div>
            <!-- Card Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/14_08/post-card-august-31st-1914 -->
            <div><img src='../../media/brisbanemap.PNG' /></div>
            <!-- image source : Google Maps -->
        </article>
        <article class='letternav'>
            <a href="letters1.php" id='letternavl'>Previous article</a>
            <a href="links.php" id='letterdirectory'>Letter Directory</a>
            <a href="letters3.php" id='letternavr'>Next article</a>
        </article>
        <?php end_module(); ?>