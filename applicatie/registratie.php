<?php
  declare(strict_types=1);
  
  $titel = "Fletnix";
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/formRegistratie.php';
  
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
        genereerRegistratieFormulier();
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
