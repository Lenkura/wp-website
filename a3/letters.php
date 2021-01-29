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
            <h2>[Post Card] August 25th 1914.</h2>
            <p> On the first page of the exercise book Aunt Alice has written:- Book No. 1 written by Alice Baker. Letters received from D. R. Baker after his enlistment for the war Sept. 1914.
            </p>
            <p class='hovertip'>Hover over the card for a map</p>
        </article>
        <article class='postcard'>
            <div>
                <p class='carddate'>August 25th 1914.</p>
                <section class='cardcontent'>
                    <p> Just have a chance to write a few lines at a small shop near the Camp. We had about four hours in Brisbane before going to Camp and had a good look round. Arrived in Camp about 6 p.m. and all the Gympie lads [Infantry] were placed
                        in one tent [11 of us]. The Light Horse are nearly a mile from us. Of course it was my luck to be made Tent Orderly for the first day – getting the tucker and cleaning up. We have had nothing issued to us yet, so just as well I
                        brought something. There is no child’s play in this camp – plenty of hard work – they mean business. We have a free hand at night so far and can write as we like. Saw Herb as we were marching to the Camp. He was going back from
                        work and I had only time to shake hands with him – could not leave the ranks. We will be under Captain Jackson. He has been appointed Captain of the Northern Rivers men and managed to get us in with him. Cannot write any more,
                        am in a hurry. Will write more later on. Am feeling quite homesick. Had our feet examined today, teeth tomorrow I think.</p>
                </section>
                <p class='cardend'>*********************************</p>
            </div>
            <!-- Card Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/14_08/post-card-august-25th-1914 -->
            <div><img src='../../media/Cairomap.png' /></div>
            <!-- image source : Google Maps -->
        </article>
        <article class='letternav'>
            <a href="letters5.php" id='letternavl'>Previous article</a>
            <a href="links.php" id='letterdirectory'>Letter Directory</a>
            <a href="letters1.php" id='letternavr'>Next article</a>
        </article>
        <?php end_module(); ?>