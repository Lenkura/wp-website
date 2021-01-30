<?php
  session_start();
  
error_reporting( E_ERROR | E_WARNING | E_PARSE );


function end_module() {
  $footer = <<<'FOOTER'
  </main>
  <footer>
    <img src='../../media/Poppy.png' alt='Poppy' class='watermark' /> <!-- image source : http://clipart-library.com/poppy-cliparts.html */ -->
    <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Raymond Louey s3853718  https://github.com/Lenkura/wp Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. </div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>

    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

  </footer>
  </body>

</html>
FOOTER;
  echo $footer;
}

function start_module($pageTitle) {
  $header = <<<"HEADER"
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>$pageTitle</title>

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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <img src='../../media/drbakersmol.png' alt='Douglas Raymond Baker'>
    <h1>Douglas Raymond Baker</h1>
    <h1>An ANZAC Letter Collection</h1>
  </header>
  <nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="introduction.php">Introduction</a></li>
    <li><a href="links.php"> Document Index</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>
HEADER;
  echo $header;
}

?>