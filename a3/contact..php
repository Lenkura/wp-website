<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>

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
            <a href="introduction.html">
                <li>Introduction</li>
            </a>
            <a href="letters.html">
                <li>Post Card Example</li>
            </a>
            <a href="links.html">
                <li>Document Index</li>
            </a>
            <li id='location'>Contact</li>
        </ul>
    </nav>

    <main>
        <article>
            <h1>Contact</h1>
            <p>If you would like to reach us for any reason, please fill out the following form</p>
            <form action="https://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="POST" target='_blank' id='contactform'>
                <fieldset>
                    <legend>Contact Form</legend>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Douglas Raymond Baker">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Douglas@email.com">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" placeholder="1234567890">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Reason for contact">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter your message" form="contactform"></textarea>
                </fieldset>
                <input type='checkbox' id='remember' name='remember' value='remember' />
                <label id='rememberlabel' for="remember">Remember Me</label>
                <input type="submit" value="Submit">

            </form>
        </article>
    </main>

    <footer>
        <img src='../../media/Poppy.png' alt='Poppy' class='watermark' />
        <!-- image source : http://clipart-library.com/poppy-cliparts.html */ -->
        <div>&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Raymond Louey s3853718 Last modified
            <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. </div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>

        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

    </footer>

</body>

</html>