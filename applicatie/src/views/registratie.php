<?php
declare(strict_types=1);
?>
<?php
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
        maakHeader();
        ?>
      </header>
      <main>
        <?=
        genereerRegistratieFormulier();
        ?>
      </main>
    </div>
  </body>
</html>
