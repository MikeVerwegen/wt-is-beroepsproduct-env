<?php
declare(strict_types=1);
?>
<?php
  $titel = "Home - Fletnix";
  require_once 'components/verbinding.php';
  require_once 'components/head.php';
  require_once 'components/header.php';
  echo genereerHead($titel);
?>
  <link rel="stylesheet" href="css/preview.css">
  <body>
    <div class="grid">
      <header>
        <?=
        maakHeader();
        ?>
      </header>
      <main>
        <div class="preview-grid" id="preview">
          <spiderman>
            <a href="mediaproduct">
              <img src="images/thumbnail-spiderman.jpg" alt="Preview van Spider-Man: No Way Home"/>
            </a>
            <p>Spiderman: No Way Home</p>
          </spiderman>
          <bond>
            <a href="mediaproduct">
              <img src="images/thumbnail-jamesbond.jpg" alt="Preview van No Time To Die"/>
            </a>
            <p>No Time To Die</p>
          </bond>
          <venom>
            <a href="mediaproduct">
              <img src="images/thumbnail-venom.jpg" alt="Preview van Venom: Let There Be Carnage"/>
            </a>
            <p>Venom: Let There Be Carnage</p>
          </venom>
          <notice>
            <a href="mediaproduct">
              <img src="images/thumbnail-rednotice.jpg" alt="Preview van Red Notice"/>
            </a>
            <p>Red Notice</p>
          </notice>
          <grand>
            <a href="mediaproduct">
              <img src="images/thumbnail-grandtour.jpg" alt="Preview van The Grand Tour"/>
            </a>
            <p>The Grand Tour</p>
          </grand>
        </div>
      </main>
    </div>
  </body>
</html>
