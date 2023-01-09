<?php

require_once 'components/data_functies.php';

if ($_POST['ww'] != $_POST['hww']) {
    echo "Wachtwoorden komen niet overeen, probeer opnieuw. ";
} else {
    $voornaam = $_POST['vnaam'];
    $tussenvoegsel = $_POST['tussen'];
    $achternaam = $_POST['anaam'];
    if (!empty($tussenvoegsel)) {
        $lastname = $tussenvoegsel . ' ' . $achternaam;
    } else {
        $lastname = $achternaam;
    }
    $geslacht = $_POST['gesl'];
    $mail = $_POST['mail'];
    $land = $_POST['land'];
    $geboortedatum = $_POST['datum'];
    $abonnement = $_POST['abbo'];
    $betaalmethode = $_POST['pay'];
    $iban = $_POST['iban'];
    $gebruikersnaam = $_POST['user'];
    $wachtwoord = $_POST['ww'];

    $hash = password_hash($wachtwoord, PASSWORD_DEFAULT);
    voltooiRegistratie($voornaam, $lastname, $geslacht, $mail, $land, $geboortedatum, $abonnement, $betaalmethode, $iban, $gebruikersnaam, $hash);
    header("Location: login.php");
}

?>