<?php

require_once 'db_connectie.php';

function haalAlleFilmsOp()
{
    $sql = "SELECT title, cover_image FROM Movie";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function haalFilmsOp($titel, $genre)
{
    $sql = "SELECT [M].[title], [M].[cover_image] FROM [Movie M] INNER JOIN [Movie_Genre G] ON [M].[movie_id] = [G].[movie_id] WHERE [M].[title] LIKE :titel AND [G].[genre_name] = :genre";
    $query = $verbinding->prepare($sql);
    $query->execute(':titel' => $titel, 
                    ':genre' => $genre);
    return $query->fetchAll();
}

function haalAlleLandenOp()
{
    $sql = "SELECT [country_name] FROM [Country]";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function haalAlleContractenOp()
{
    $sql = "SELECT [contract_type], [price_per_month], [discount_percentage] FROM [Contract]";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function haalAlleBetaalmethodenOp()
{
    $sql = "SELECT [payment_method] FROM [Payment]";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function voltooiRegistratie($voornaam, $tussenvoegsel, $achternaam, $mail, $land, $geboortedatum, $abonnement, $betaalmethode, $iban, $gebruikersnaam, $wachtwoord)
{
    if (!empty($tussenvoegsel)) {
        $lastname = $tussenvoegsel . ' ' . $achternaam;
    } else {
        $lastname = $achternaam;
    }

    $sql = "INSERT INTO Customer([firstname], [lastname], [customer_mail_address], [country_name], [birth_date], [contract_type], [payment_method], [payment_card_number], [user_name], [password], [subscription_start]) VALUES (:voornaam, :achternaam, :mail, :land, :geboortedatum, :abonnement, :betaalmethode, :iban, :gebruikersnaam, :wachtwoord, GETDATE())"
    $query = $verbinding->prepare($sql);
    $query->execute(':voornaam' => $voornaam, 
                    ':achternaam' => $lastname, 
                    ':mail' => $mail, 
                    ':land' => $land, 
                    ':geboortedatum' => $geboortedatum, 
                    ':abonnement' => $abonnement, 
                    ':betaalmethode' => $betaalmethode, 
                    ':iban' => $iban, 
                    ':gebruikersnaam' => $gebruikersnaam, 
                    ':wachtwoord' => $wachtwoord);
    return $query->fetchAll();
}

?>
