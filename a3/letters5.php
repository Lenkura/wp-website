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
            <h2>[Letter] 12th January 1918.</h2>
        </article>
        <article class='letter'>
            <p class='carddate'>No. 1 Command Depôt.<br>Sutton Veny.<br>12th January 1918 </p>
            <section class='lettercontent'>
                <p>My Dear Al,</p>
                <p>Saturday afternoon and no parade, but parades seldom trouble me for I have only been on one since I came here three weeks ago. Another advantage of having 3 stripes. I am just about war-weary now and sick of all Military affairs and as
                    for France, I hate it. England is very different and in peacetime it would be easy to stand the winter months, but not a country in the world can be classed with Australia, its glorious climate and sunshine – and its people. Even though
                    we have been turned down on the conscription question.</p>
                <p>There are worse places than this camp alongside the village of Sutton Veny which would be very pretty in the summertime and the district round about is full of the old world English views. I often go for a walk through the village and
                    along the country lanes. In the churchyard there are many Australians buried, some who have never seen France, they have taken ill at the training camps and died in the adjoining hospitals. It seems rather hard to go off like that.</p>
                <p> I am having an awfully lazy time just now, rising at 7.30 a.m. have breakfast at at the Mess at 8, walk about, buy the daily paper, read, write, etc. till dinner time at 1 p.m.. Same in the afternoon, sometimes having a bath, hot one,
                    or sit in the reading room before the fire. At night I shave, clean my boots, write letters perhaps, read and smoke [smoke all day too] and retire at 10 p.m.. In another week I hope to get four days leave but I am not sure of it yet
                    – if the Doctor marks me A.3. which means fit for Active Service I will be moved to another camp and so come a cropper. That is the worst of being a soldier, it is almost like being in gaol, your time is never your own hardly. But
                    I am lucky to be alive and lucky for many other reasons, have much to be thankful for. When I was wounded in Oct. the officer that was with me told the others that I was done for, what a surprise when they heard I had recovered so
                    quickly. Now I believe I am quite as well as when I left home, in spite of all hard times. </p>
                <p>My Aussie mail is still hanging back , but the other day I received a parcel from Jane Goldsworthy which left Australia sometime in Oct., so there should be letters for me. The parcel was very nice, it was sent from the base P.O. in London
                    to Sutton and Nellie sent it on. There is nothing much to write about dear Al – I hardly know what to tell you that would interest you. When on furlough I had a few nice trips to London, enjoying the hurry and bustle among the crowds
                    in the Strand, Piccadilly, Trafalgar Square, etc.. Often I had to ask a policeman the way it is so easy to get lost. The traffic of London is simply marvellous and nothing they say, to what it is in peacetime. Travelling by tube is
                    great, you can go to any part of London by the Underground in a few minutes. I would sometimes meet Nellie at London Bridge Station after she left the office and we would journey to Sutton together – a compartment to ourselves if possible.</p>
                <p>It is nearly teatime Al dear so I will close. I wonder if you are all well at home and what you are doing. I long for all those little details of home life, it is so long it is so long since I left, but I hope to return someday – surely
                    it will be this year. My best love to all and don’t forget to write now and again and tell me all the news.</p>
                <p> With much love from Ray.

                </p>

            </section>
            <p class='cardend'>*********************************</p>
            <!-- Letter Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/18_01/sutton-veny-jan-12th-18 -->
        </article>
        <article class='letternav'>
            <a href="letters4.php" id='letternavl'>Previous article</a>
            <a href="links.php" id='letterdirectory'>Letter Directory</a>
            <a href="letters1.php" id='letternavr'>Next article</a>
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