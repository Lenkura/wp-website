<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2 - Home</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
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
    <div>Douglas Raymond Baker - ANZAC Letter Collection</div>
  </header>

  <nav>
    <h1>Navigation</h1>
    <ul>
      <li id='location'>Home</li>
      <a href="letters.html">
        <li>Letter</li>
      </a>
      <a href=".html">
        <li>Other</li>
      </a>
      <a href=".html">
        <li>Filler</li>
      </a>
      <a href=".html">
        <li>Pineapple</li>
      </a>
    </ul>


  </nav>

  <main>
    <img src='../media/drbaker.png' alt='Douglas Raymond Baker' id='baker'>
    <img src='../media/bakerdocs.png' alt='Service Record' id='service'>
    <article class='content'>

      <h1> Welcome to the Douglas Raymond Baker Letter Collection
      </h1>

      <p>This year is the centenary of the birth of the ANZAC legend. As such, many people, particularly young people, are looking for ways to connect with people of that period and inparticular, those who created the ANZAC legend. </p>
      <p>This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home. In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences while visiting his relatives in England during leave.
        They start from the beginning of basic training in Brisbane in August 1914 and end in May 1918.
        They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on the battlefield was like.
      </p>
      <p>From the menu on the above, read the Introduction to set the scene. Then, to start reading the letters and post cards, click on Letters.</p>
    </article>


  </main>

  <footer>
    <img src='../media/Poppy.png' alt='Poppy' class='watermark' /> <!-- image source : http://clipart-library.com/poppy-cliparts.html */ -->
    <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>

    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

  </footer>

</body>

</html>