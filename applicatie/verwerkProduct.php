<?php

require_once 'components/data_functies.php';

$retrievedID = haalHoogsteMovieIDOp();
$ID = $retrievedID['movie_id'] + 1;
$titel = $_POST['titel'];
if (!empty($_POST['duur'])) {
    $duur = $_POST['duur'];
} else {
    $duur = NULL;
}
if (!empty($_POST['descr'])) {
    $beschrijving = $_POST['descr'];
} else {
    $beschrijving = NULL;
}
if (!empty($_POST['jaar'])) {
    $jaar = $_POST['jaar'];
} else {
    $jaar = NULL;
}
if (!empty($_POST['cover'])) {
    $cover = $_POST['cover'];
} else {
    $cover = NULL;
}
if (!empty($_POST['prev'])) {
    $vorig_deel = $_POST['prev'];
} else {
    $vorig_deel = NULL;
}
$prijs = $_POST['price'];
if (!empty($_POST['url'])) {
    $trailer = $_POST['url'];
} else {
    $trailer = NULL;
}

voegFilmToe($ID, $titel, $duur, $beschrijving, $jaar, $cover, $vorig_deel, $prijs, $trailer);
header("Location: mediaproduct.php?movie_id=" . $ID);

?>