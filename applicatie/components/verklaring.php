<?php
function schrijfPrivacyverklaring() {
  $html = <<<HEAD
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
HEAD;
  return $html;
}
?>
