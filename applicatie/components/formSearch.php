<?php

function genereerZoekFormulier() {
  $html = '
    <p>
        Op deze pagina kunt u zoeken op een combinatie van titel en genre. Zoeken op een van beiden kan via de header bovenaan de pagina.
    </p>
    <form action="/" method="get"> 
    <fieldset>
      <label for="titel">Zoekopdracht:</label>
      <input id="titel" type="text" name="titel" required/>
      <br>';
  $genres = haalAlleGenresOp();
  $html .= genresNaarHTML($genres);
  $html .= '
    </fieldset>
    <input type="submit" value="Zoeken op titel en genre"/>
  </form><br>';
  return $html;
}

define('HTML_FORM_SEARCH', genereerZoekFormulier());

?>
