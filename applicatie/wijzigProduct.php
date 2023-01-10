<?php
  declare(strict_types=1);

  session_start();
if (!isset($_SESSION['user'])) {
  session_destroy();
} else if (!isset($_SESSION['admin'])) {
  header('Location: /');
} else {
  $_SESSION['paginasBezocht']++;
}
  
  $movie_id = $_GET['id'];
  $titel = "Wijzig mediaproduct " . $movie_id;

  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/formWijzig.php';
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
        genereerWijzigFormulier($movie_id);
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
