<?php
  declare(strict_types=1);
  
  $titel = 'Fletnix';
  
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/formLogin.php';
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
        <div id="logo">
          <figure>
            <img src="images/logo.png" alt=""/>
          </figure>
        </div>
        <?=
        HTML_FORM_LOGIN;
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
