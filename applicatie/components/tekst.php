<?php

function schrijfTekst($pagina) {
  $html = '';

  if ($pagina === 'BEDRIJF') {
    $html .= <<<BEDRIJF
    <h1>
      Over ons
    </h1>
    <p>
      Fletnix is een streamingdienst die recent haar entree op de markt heeft gemaakt. Het doel van Fletnix is om de
      komende jaren uit te breiden, zodat het haar gebruikers een breed assortiment aan mediaproducten aan kan
      bieden, en zo een optimale kijkervaring kan bieden.
    </p>
    <p>
      Het hangt af van het land waar je woont welke Fletnix-entiteit je toegang biedt tot de Fletnix-service en in
      aanmerking komt als verantwoordelijke door de verwerking van je gegevens. De entiteit wordt vermeld in de
      e-mail waarin je lidmaatschap of betaling wordt bevestigd.
    </p>
    <p>
      <strong>Fletnix, Inc.</strong><br />
      Karperstraat 8-10<br />
      1075 KZ Amsterdam, Nederland<br />
      KvK: 62266519<br />
      Btw-nummer: NL853746333B01<br />
      Aandelenkapitaal: 12.500 euro<br />
      E-mailadres: nl@fletnix.com<br />
    </p>
BEDRIJF;
  } elseif ($pagina === 'PRIVACY') {
    $html .= <<<PRIVACY
    <h1>
      Privacyverklaring
    </h1>
    <p>
      De voorwaarden die van toepassing zijn voor de Fletnix-service zijn afhankelijk van uw locatie.
    </p>
    <p>
      Wij zijn ons bewust dat het voor u van groot belang is te weten hoe uw persoonsgegevens worden gebruikt en gedeeld.
      Wij hechten eraan dat u erop vertrouwt dat wij dat op een zorgvuldige en weloverwogen wijze doen.
    </p>
    <p>
      Wij verzamelen de volgende soorten gegevens:
      <ul>
        <li>
          <strong>Door u verstrekte gegevens:</strong> Wij ontvangen en bewaren gegevens die u ons verstrekt in het kader van Fletnix.
          U kunt ervoor kiezen bepaalde gegevens niet te verstrekken, maar dat betekent dan wel dat u mogelijk niet volledig gebruik kunnen maken van onze services.
        </li>
        <li>
          <strong>Automatisch verzamelde gegevens:</strong> Wij verzamelen en bewaren automatisch bepaalde soorten gegevens wanneer u gebruikmaakt van Fletnix, waaronder gegevens over uw gebruik.
          Net als veel andere websites maken wij gebruik van cookies en andere unieke identificatoren.
        </li>
        <li>
          <strong>Gegevens afkomstig uit andere bronnen:</strong> Wij kunnen gegevens uit andere bronnen afkomstige gegevens over u.
        </li>
      </ul>
    </p>
    <p>
      Voor het testen van nieuwe features wordt uitsluitend gebruik gemaakt van testdata.
      Fletnix maakt hiervoor geen gebruik van persoonlijke gegevens van haar gebruikers.
    </p>
PRIVACY;
  } else {
    throw new RuntimeException('Kon tekst voor pagina niet ophalen. ');
  }

  return $html;
}

?>
