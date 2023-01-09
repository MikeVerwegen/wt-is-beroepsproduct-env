<?php

function filmsNaarHTML($films) 
{
    $html = '';
    foreach ($films as $film) {
        $html .= '<div class="preview-item">
        <a href="mediaproduct.php?movie_id=' . $film['movie_id'] . '">
          <img src="' . $film['cover_image'] . '" alt="Preview: ' . $film['title'] . '"/>
        </a><br>
        <a href="mediaproduct.php?movie_id=' . $film['movie_id'] . '">
            ' . $film['title'] . '
        </a>
      </div>';
    }
    return $html;
}

function genresNaarHTML($genres)
{
    $html = '';
    foreach ($genres as $genre) {
        $html .= '<a href="index.php?genre=' . $genre['genre_name'] . '">
        ' . $genre['genre_name'] . '</a>';
    }
    return $html;
}

function filmgegevensNaarHTML($film, $genres)
{
    $html = '<h1>
    ' . $film['title'] . '
  </h1>
  <div id="poster">
    <img src="' . $film['cover_image'] . '" alt="Preview: ' . $film['title'] . '" width="100">
  </div>
  <p>';
    if (!empty($genres)) {
        'Genres: ';
        foreach ($genres as $genre) {
            $html .= '<a href="index.php?genre=' . $genre['genre_name'] . '">
                ' . $genre['genre_name'] . '</a><br>';
        }
        $html .= '<br>';
    }
    $html .= $film['publication_year'] . ' - ' . $film['duration'] . ' minuten - €' . $film['price'] . '<br><br>
    ' . $film['description'] . '<br><br>';
    if (!empty($film['URL'])) {
        $html .= '<a href="' . $film['URL'] . '" target="_blank" rel="noopener noreferrer">Bekijk de trailer <u>hier</u></a><br>';
    } else {
        $html .= 'Geen trailer beschikbaar<br>';
    }
    if (isset($_SESSION['user'])) {
        $html .= '<a href="")"><u>Bekijk deze film</u></button><br>';
    }
    return $html;
}

function castNaarHTML($regisseurs, $cast)
{
    $html = '';
    if (!empty($regisseurs)) {
        $html .= '<br><table>
        <tr>
            <th>Director</th>
        </tr>
        ';
        foreach ($regisseurs as $regisseur) {
            $html .= '<tr>
                <td>' . $regisseur['firstname'] . ' ' . $regisseur['lastname'] . '</td>
            </tr>';
        }
        $html .= '</table>';
    }
    if (!empty($cast)) {
        $html .= '<br><table>
        <tr>
            <th>Acteur</th>
            <th>Rol</th>
        </tr>
        ';
        foreach ($cast as $acteur) {
            $html .= '<tr>
                <td>' . $acteur['firstname'] . ' ' . $acteur['lastname'] . '</td>
                <td>' . $acteur['role'] . '</td>
            </tr>';
        }
        $html .= '</table>';
    }
    return $html;
}

function landenNaarHTML($landen)
{
    $html = '<label for="land">Nationaliteit: *</label>
        <select id="land" name="land" required>';
    foreach ($landen as $land) {
        $html .= '<option value="' . $land['country_name'] . '">' . $land['country_name'] . '</option>';
    }
    $html .= '</select><br/>';
    return $html;
}

function contractenNaarHTML($contracten)
{
    $html = '<label for="abbo">Abonnementkeuze: *</label>
        <select id="abbo" name="abbo" required>';
    foreach ($contracten as $contract) {
        $html .= '<option value="' . $contract['contract_type'] . '">' . $contract['contract_type'] . ' - €' . $contract['price_per_month'] . '/maand - ' . $contract['discount_percentage'] . '% korting</option>';
    }
    $html .= '</select><br/>';
    return $html;
}

function betaalmethodenNaarHTML($betaalmethoden)
{
    $html = '<label for="pay">Betaalmethode: *</label>
        <select id="pay" name="pay" required>';
    foreach ($betaalmethoden as $betaalmethode) {
        $html .= '<option value="' . $betaalmethode['payment_method'] . '">' . $betaalmethode['payment_method'] . '</option>';
    }
    $html .= '</select><br/>';
    return $html;
}

?>