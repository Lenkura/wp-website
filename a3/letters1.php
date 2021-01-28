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
            <li id='location'>Letters</li>

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
            <h2>[Letter] 4th September 1915.</h2>
        </article>
        <article class='letter'>
            <p class='carddate'>4th September 1915. </p>
            <section class='lettercontent'>
                <p>Dear Dad,</p>
                <p>Having been issued with another envelope I am again able to write a letter without much chance of it being opened. I have answered Mothers last letter and have since received one from Ivy which was very welcome although there was no news
                    in it – it was dated July 11th. The parcel has not yet turned up but they are generally longer in coming than letters and I am living in expectations of receiving it any time now.</p>
                <p>We are jogging along as usual, things being very quiet in general except for daily artillery duels and we are constantly dodging shrapnel and high explosives. There is a fair amount of sickness among the troops – the hard life for such
                    a long time is beginning to tell and every day some are being sent away for a spell – our Company is only about ½ strength. When we landed here in April we were overstrength and since then we have received six lots of reinforcements
                    of from 120 to 150 in each – now the 9th is about 700 strong or less. There are many yarns about that we are about to be relieved within a fortnight for the winter months but we do not know what to believe. Anyway, I suppose you will
                    know as soon as we do if that happens. We all think here that it would be a good plan if they sent the 1st Division to Australia for the winter months – don’t you?</p>
                <p>The other day I got a great surprise – young Ted Eardley turned up here to see me – the lad that was in the Compression Room at the Scottish on my shift. He is just as wild as ever and seemed quite delighted to meet me. He has only been
                    here a week – landed with the 11th Light Horse – left Australia in June. There is really not much to write about, dear Dad, for the days pass one after another in much the same way – the things we look forward most is mail day and
                    bread day. We have become that sick of hard biscuits that we can hardly bear to look at them – the only way we can eat them now is to soak them in water and then fry them in fat. You would laugh to hear our conversation sometimes on
                    the food question. Half a dozen of us will get together and each will tell the rest what he most longs for. Not being able to get what we like, I fancy will make us appreciate the good things if we get back. How I would like to be
                    sitting down with you all to a good cup of tea and a hot scone and butter. Butter! I have not tasted it for over 3 months. We feel like kings when we get bread and are quite satisfied to eat jam and treacle with it. Just fancy, I have
                    not spoken to a female since I left Malta or seen one since leaving Egypt the second time. Well I am living in hopes of living the good times over again.</p>
                <p>Just tell Mother not to worry about me, I am doing A1 and I feel quite confident that I will continue to do so. Please remember me to George Thomas and Capt. Jackson, many of the fellows here wish they were back with us. The officer in
                    charge of our Coy. is Lt. Chambers, they will know him, he is far from being popular with the lads.</p>
                <p>Well Dad, I have to get the tea now [4.20 p.m.] so will close this rather poor letter hoping all at home are in good health and spirits. Remember me to all friends and relations. Just heard that another mail is in, hope there is something
                    for me.</p>
            </section>
            <p class='cardend'>*********************************</p>
            <!-- Letter Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/15_09/gallipoli-sept-4th-1915 -->
        </article>
        <article class='letternav'>
            <a href="letters.php" id='letternavl'>Previous article</a>
            <a href="links.php" id='letterdirectory'>Letter Directory</a>
            <a href="letters2.php" id='letternavr'>Next article</a>
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