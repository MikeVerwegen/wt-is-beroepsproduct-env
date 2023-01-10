<?php

function filmsNaarHTML($films) 
{
    $html = '';
    foreach ($films as $film) {
        $html .= '<div class="preview-item">
        <a href="mediaproduct.php?id=' . $film['movie_id'] . '">
          <img src="' . $film['cover_image'] . '" alt="Preview: ' . $film['title'] . '"/>
        </a><br>
        <a href="mediaproduct.php?id=' . $film['movie_id'] . '">
            ' . $film['title'] . '
        </a>
      </div>';
    }
    return $html;
}

function genresNaarHTML($genres)
{
    $html = '<label for="genre">Genre:</label>
        <select id="genre" name="genre" required>';
    foreach ($genres as $genre) {
        $html .= '<option value="' . $genre['genre_name'] . '">' . $genre['genre_name'] . '</option>';
    }
    $html .= '</select><br/>';
    return $html;
}

function genresNaarHTMLDrop($genres)
{
    $html = '';
    foreach ($genres as $genre) {
        $html .= '<a href="/?genre=' . $genre['genre_name'] . '">
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
            $html .= '<a href="/?genre=' . $genre['genre_name'] . '">
                ' . $genre['genre_name'] . '</a><br>';
        }
        $html .= '<br>';
    }
    if (!empty($film['publication_year'])) {
        $html .= $film['publication_year'] . ' - ';
    }
    if (!empty($film['URL'])) {
        $html .= $film['duration'] . ' minuten - ';
    }
    $html .= '€' . $film['price']. '<br><br>';
    if (!empty($film['URL'])) {
        $html .= $film['description'] . '<br><br>';
    } else {
        $html .= 'Geen beschrijving beschikbaar<br><br>';
    }
    if (isset($_SESSION['user'])) {
        $html .= '<a href="")"><u>Bekijk deze film</u></button><br><br>';
    }
    if (!empty($film['URL'])) {
        $html .= '<a href="' . $film['URL'] . '" target="_blank" rel="noopener noreferrer">Bekijk de trailer <u>hier</u></a><br>';
    } else {
        $html .= 'Geen trailer beschikbaar<br>';
    }
    return $html;
}

function castNaarHTML($regisseurs, $cast)
{
    $html = '<br>';
    if (!empty($regisseurs)) {
        $html .= '<table>
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
    } else {
        $html .= 'Geen regisseur(s) bekend<br>';
    }
    $html .= '<br>';
    if (!empty($cast)) {
        $html .= '<table>
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
    } else {
        $html .= 'Geen acteur(s) bekend<br>';
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