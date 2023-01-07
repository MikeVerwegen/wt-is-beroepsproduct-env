<?php
declare(strict_types=1);
?>
<?php
  $titel = "Over ons";
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/informatie.php';
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
        schrijfBedrijfsinformatie();
        ?>
      </main>
    </div>
  </body>
</html>
