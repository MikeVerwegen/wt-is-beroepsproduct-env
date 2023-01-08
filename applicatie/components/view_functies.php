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
        $html .= '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . substr($film['URL'], -32) . ' " title="Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br>';
    } else {
        $html .= 'Geen trailer beschikbaar<br>';
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

?>