<!DOCTYPE html>
<html lang='en'>
<?php require_once('tools.php'); ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2 - Home</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>
  <script src='../wireframe.js'></script>

    <link rel=" preconnect" href="https://fonts.gstatic.com">
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
      <li id='location'>Home</li>
      <a href="introduction.php">
        <li>Introduction</li>
      </a>
      <a href="letters.php">
        <li>Post Card Example</li>
      </a>
      <a href="links.php">
        <li>Document Index</li>
      </a>
      <a href="contact.php">
        <li>Contact</li>
      </a>
    </ul>
  </nav>

  <main>
    <img src='../../media/drbaker.png' alt='Douglas Raymond Baker' id='baker'>
    <img src='../../media/bakerdocs.png' alt='Service Record' id='service'>
    <article class='content'>

      <h2> Welcome to the Douglas Raymond Baker Letter Collection
      </h2>
      <p>This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home. In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences while visiting his relatives in England during leave.
        They start from the beginning of basic training in Brisbane in August 1914 and end in May 1918.
        They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on the battlefield was like.
      </p>
      <p>From the menu above, read the Introduction to set the scene. Then, to start reading the letters and post cards, click on Letters.</p>
    </article>
    <article>

      <h2>Foreword by Ian Stuart Baker (Grandson of Douglas Raymond Baker)</h2>
      <p>As the grandson of the Douglas Raymond, I'd like to share some thoughts with modern readers.</p>
      <p>it would also help to recognise that in Grandfathers day, the letter was the only means of international
        communications for average people (telegrams were expensive and used rarely and international telephone calls, rarer still). That's why these letters are so important and why their content gives us window into their lives.</p>
      <p> From discussions
        with my Dad, it has came to light that the content of letters to his direct family deliberately leave out much of the dreadful suffering and drudgery experienced by the diggers. This intentional self-editing was intended to allay the
        fears and concerns of those at home, inparticular, his mother and sisters.</p>
      <p> Finally, let me express a debt of thanks to Great Aunt Alice for diligently transcribing the original letters for without this effort, we would not have the
        material we do today. Also, my gratitude to my father for his work transforming the hand-written script into a typed paper record and then into electronic format, making my part in this infinitely easier.
      </p>
    </article>

    <?php end_module(); ?>