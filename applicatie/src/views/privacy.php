<?php
declare(strict_types=1);
?>
<?php
  $titel = "Privacyverklaring";
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/verklaring.php';
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
        schrijfPrivacyverklaring();
        ?>
      </main>
    </div>
  </body>
</html>
