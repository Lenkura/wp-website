<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>
</head>

<body>

  <header>
    <div>Put company logo and name here</div>
  </header>

  <nav>
    <h1>Navigation</h1>
    <ul>
      <li>Home</li>
      <li>Letter</li>
      <li>Other</li>
      <li>Filler</li>
      <li>Pineapple</li>
    </ul>


  </nav>

  <main>
  <div class="parallax">
    <article class='content'>
      <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
      <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text </p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text </p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text v </p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text</p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text v</p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text</p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text</p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text </p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text</p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text </p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text</p>
      <p> Filler Text Filler TextFiller Tr TextFiller TextFiller TextFiller Text </p>
    </article>
    <article>
      <p> Lemonade banana smoothie pie </p>
      <p> Lemonade banana smoothie pie </p>
      <p> Lemonade banana smoothie pie </p>
      <p> Lemonade banana smoothie pie </p>
    </article>
    </div>
    <article class='postcard'>
      <div>
        <p class='carddate'>January 13th. 1915.</p>
        <p class='cardnote'>(Letter to Dad)</p>
        <p class='cardcontent'> Today I received a long-delayed letter from you dated Oct. 4th and containing twelve stamps. They would have been very welcome if I had got them at the right time, but by the look of the envelope the letter has been travelling about a bit – I will enclose it just for fun.
          Anyway, I was jolly glad to get it and hope you will find time to write to me again. I also got a very welcome letter from Dot today, dated Dec. 7th and it was very interesting to hear news of things in Gympie and especially news of the family affairs. Having already written a long letter to Mag and P.Cds to Ivy which will be going by the same mail as this, I have very little news to tell you so this letter will be short.
          We are getting plenty of hard training and will be fit to go to the front at anytime now and according to what we hear it may not be long. The Turks are beginning to move and we might meet them, anyway, we are always kept ready to move at 24 hours notice. Without boasting I can safely say that the Queensland Battalion is the best trained of any from Australia and our Company of the 9th beats any other. Time after time we have been complimented when carrying out some work or other. Yesterday our Coy. did very well at their shooting under trying circumstances for the wind and sand was blowing in our faces all the time
          One evening when we were on Brigade Picquet and standing at the “slope arms” with bayonets fixed while “retreat” was being blown, the Brigade Major was heard to say, “By jove! That’s good. I never saw men stand so steady.” We did stick our chests out after that.
          Yesterday morning the whole Battalion was formed into a square and a poor beggar who had been court- martialled was marched up into the square and the sentence was read out by the Adjutant. He had been found guilty on three charges and was sentenced to six months hard labour and then to be discharged from His Majesty’s Forces with ignominy. I did not envy him his position, standing bare-headed before 1,000 men. The same thing occurred this morning except that this fellow only got three months. So, you see, the bad-‘uns are being culled out by degrees.
          I will keep the stamps you sent as I may be able to exchange them for others that will suit Dot. No more news, hope all you home folk are in good health, my thoughts are always with you. Jim Graham and Bill Money wish to be remembered to you all.</p>
        <p class='cardend'>*********************************</p>
      </div>
      <div><img src='../media/Cairomap.png'/></div>
      <!-- image source : Google */ -->
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