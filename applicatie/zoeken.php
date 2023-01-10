<?php
  declare(strict_types=1);

  session_start();
if (!isset($_SESSION['user'])) {
  session_destroy();
} else {
  $_SESSION['paginasBezocht']++;
}
  
  $titel = "Zoeken";
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/formSearch.php';
  require_once 'components/footer.php';

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
        HTML_FORM_SEARCH;
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
