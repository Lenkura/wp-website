<?php
session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE);


function end_module()
{
  $footer = <<<'FOOTER'
  </main>
  <footer>
    <img src="../../media/Poppy.png" alt='Poppy' class='watermark' /> <!-- image source : http://clipart-library.com/poppy-cliparts.html */ -->
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

function start_module($pageTitle)
{
  $header = <<<"HEADER"
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>$pageTitle</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>
  <script src='../wireframe.js'></script>
  <script src='script.js'></script>

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
//File Reader
function beep(){
  echo "<p>This is a test</p>";
}
function dynamiccontent()
{

  if (($fp = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", "r")) && flock($fp, LOCK_SH) !== false) {
    $headings = fgetcsv($fp, 0, "\t");
    while (($aLineOfCells = fgetcsv($fp, 0, "\t")) !== false)
      $records[] = $aLineOfCells;
    flock($fp, LOCK_UN);
    fclose($fp);
    print_r($headings);
    print_r($records[0][2]);
    echo "<p>{$records[0][0]}</p>";
    echo "<p>{$records[0][7]}</p>";
  }
}

function letter($num)
{
  if (($fp = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", "r")) && flock($fp, LOCK_SH) !== false) {
    $headings = fgetcsv($fp, 0, "\t");
    while (($aLineOfCells = fgetcsv($fp, 0, "\t")) !== false)
      $records[] = $aLineOfCells;
    flock($fp, LOCK_UN);
    fclose($fp);
    $date = $records[$num][0];
    $datec = date_create($records[$num][0]);
    $formateddate = date_format($datec, "dS F Y");
    $content = $records[$num][7];
    if ($records[$num][2] == 'Postcard') {
    $postcard = <<<"BLOCK"
    <main>
    <article class='cardnote'>
    <h2>[Post Card] $formateddate.</h2>
   <p> On the first page of the exercise book Aunt Alice has written:- Book No. 1 written by Alice Baker. Letters received from D. R. Baker after his enlistment for the war Sept. 1914.
           </p>
           <p class='hovertip'>Hover over the card for a map</p>
       </article>
       <article class='postcard'>
           <div>
               <p class='carddate'>$date.</p>
               <section class='cardcontent'>
                   <p>$content</p>
               </section>
               <p class='cardend'>*********************************</p>
           </div>
           <!-- Card Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/14_08/post-card-august-25th-1914 -->
           <div><img src='../../media/Cairomap.png' /></div>
           <!-- image source : Google Maps -->
       </article>
BLOCK;
    echo $postcard; } else if ($records[$num][2] == 'Letter'){
      $letter = <<<"BLOCK"
      <main>
        <article class='cardnote'>
            <h2>[Letter] $formateddate.</h2>
        </article>
        <article class='letter'>
            <p class='carddate'>$date.</p>
            <section class='lettercontent'>$content</section>
            <p class='cardend'>*********************************</p>
            <!-- Letter Source: https://www.sites.google.com/site/anzacdouglasraymondbaker/letters/15_09/gallipoli-sept-4th-1915 -->
        </article>
BLOCK;
        echo $letter;


    }
  }
}

?>