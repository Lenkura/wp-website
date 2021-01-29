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
