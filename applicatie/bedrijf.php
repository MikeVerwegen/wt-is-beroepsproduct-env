<?php
  declare(strict_types=1);
  
  $titel = "Over ons";
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/tekst.php';
  
  echo genereerHead($titel);
?>
  <body>
    <div class="grid">
      <header>
        <?=
        HTML_HEADER;
        ?>
      </header>
      <main>
        <?=
        schrijfTekst('BEDRIJF');
        ?>
      </main>
      <footer>
        <?=
        HTML_FOOTER;
        ?>
      </footer>
    </div>
  </body>
</html>
