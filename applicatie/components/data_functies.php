<?php

require_once 'db_connectie.php';

function haalAlleFilmsOp()
{
    global $verbinding;
    $sql = "SELECT [movie_id], [title], [cover_image] FROM [Movie] ORDER BY [title] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function zoekFilmsOpTitel($titel)
{
    global $verbinding;
    $sql = "SELECT [movie_id], [title], [cover_image] FROM [Movie] WHERE [title] LIKE :titel ORDER BY [title] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute([':titel' => $titel]);
    return $query->fetchAll();
}

function zoekFilmsOpGenre($genre)
{
    global $verbinding;
    $sql = "SELECT [M].[movie_id], [M].[title], [M].[cover_image] FROM [Movie] [M] INNER JOIN [Movie_Genre] [G] ON [M].[movie_id] = [G].[movie_id] WHERE [G].[genre_name] = :genre ORDER BY [M].[title] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute([':genre' => $genre]);
    return $query->fetchAll();
}

function zoekFilmsOpTitelEnGenre($titel, $genre)
{
    global $verbinding;
    $sql = "SELECT [M].[movie_id], [M].[title], [M].[cover_image] FROM [Movie] [M] INNER JOIN [Movie_Genre] [G] ON [M].[movie_id] = [G].[movie_id] WHERE [M].[title] LIKE :titel AND [G].[genre_name] = :genre ORDER BY [M].[title] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute([':titel' => $titel, 
                    ':genre' => $genre]);
    return $query->fetchAll();
}

function haalAlleGenresOp()
{
    global $verbinding;
    $sql = "SELECT [genre_name] FROM [Genre] ORDER BY [genre_name] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function haalFilmgegevensOp($movie_id)
{
    global $verbinding;
    $sql = "SELECT [title], [duration], [description], [publication_year], [cover_image], [price], [URL] FROM [Movie] WHERE [movie_id] = :movie_id;";
    $query = $verbinding->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    return $query->fetch();
}

function haalFilmGenresOp($movie_id)
{
    global $verbinding;
    $sql = "SELECT [genre_name] FROM [Movie_Genre] WHERE [movie_id] = :movie_id ORDER BY [genre_name] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    return $query->fetchAll();
}

function haalRegisseursOp($movie_id)
{
    global $verbinding;
    $sql = "SELECT [P].[firstname], [P].[lastname] FROM [Person] [P] INNER JOIN [Movie_Director] [M] ON [P].[person_id] = [M].[person_id] WHERE [M].[movie_id] = :movie_id ORDER BY [P].[lastname] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    return $query->fetchAll();
}

function haalCastOp($movie_id)
{
    global $verbinding;
    $sql = "SELECT [P].[firstname], [P].[lastname], [M].[role] FROM [Person] [P] INNER JOIN [Movie_Cast] [M] ON [P].[person_id] = [M].[person_id] WHERE [M].[movie_id] = :movie_id ORDER BY [P].[lastname] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute([':movie_id' => $movie_id]);
    return $query->fetchAll();
}

function haalAlleLandenOp()
{
    global $verbinding;
    $sql = "SELECT [country_name] FROM [Country] ORDER BY [country_name] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function haalAlleContractenOp()
{
    global $verbinding;
    $sql = "SELECT [contract_type], [price_per_month], [discount_percentage] FROM [Contract] ORDER BY [price_per_month] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function haalAlleBetaalmethodenOp()
{
    global $verbinding;
    $sql = "SELECT [payment_method] FROM [Payment] ORDER BY [payment_method] ASC";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function voltooiRegistratie($voornaam, $lastname, $geslacht, $mail, $land, $geboortedatum, $abonnement, $betaalmethode, $iban, $gebruikersnaam, $wachtwoord)
{
    global $verbinding;
    $sql = "INSERT INTO Customer([firstname], [lastname], [gender], [customer_mail_address], [country_name], [birth_date], [contract_type], [payment_method], [payment_card_number], [user_name], [password]) VALUES (:voornaam, :achternaam, :geslacht, :mail, :land, :geboortedatum, :abonnement, :betaalmethode, :iban, :gebruikersnaam, :wachtwoord)";
    $query = $verbinding->prepare($sql);
    $query->execute([':voornaam' => $voornaam, 
                    ':achternaam' => $lastname, 
                    ':geslacht' => $geslacht,
                    ':mail' => $mail, 
                    ':land' => $land, 
                    ':geboortedatum' => $geboortedatum, 
                    ':abonnement' => $abonnement, 
                    ':betaalmethode' => $betaalmethode, 
                    ':iban' => $iban, 
                    ':gebruikersnaam' => $gebruikersnaam, 
                    ':wachtwoord' => $wachtwoord]);
}

function haalKlantOp($mail)
{
    global $verbinding;
    $sql = "SELECT [firstname], [customer_mail_address], [password], [admin] FROM [Customer] WHERE [customer_mail_address] = :mail";
    $query = $verbinding->prepare($sql);
    $query->execute([':mail' => $mail]);
    return $query->fetch();
}

function haalHoogsteMovieIDOp()
{
    global $verbinding;
    $sql = "SELECT MAX([movie_id]) AS [movie_id] FROM [Movie]";
    $query = $verbinding->prepare($sql);
    $query->execute();
    return $query->fetch();
}

function voegFilmToe($ID, $titel, $duur, $beschrijving, $jaar, $cover, $vorig_deel, $prijs, $trailer)
{
    global $verbinding;
    $sql = "INSERT INTO [Movie]([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [URL]) VALUES (:ID, :titel, :lengte, :beschrijving, :jaar, :cover, :vorig_deel, :prijs, :trailer)";
    $query = $verbinding->prepare($sql);
    $query->execute([':ID' => $ID,
                    ':titel' => $titel,
                    ':lengte' => $duur,
                    ':beschrijving' => $beschrijving,
                    ':jaar' => $jaar,
                    ':cover' => $cover,
                    ':vorig_deel' => $vorig_deel,
                    ':prijs' => $prijs,
                    ':trailer' => $trailer]);
}

function wijzigFilmgegevens($movie_id, $titel, $duur, $beschrijving, $jaar, $cover, $vorig_deel, $prijs, $trailer)
{
    global $verbinding;
    $sql = "UPDATE [Movie] SET [title] = :titel, [duration] = :lengte, [description] = :beschrijving, [publication_year] = :jaar, [cover_image] = :cover, [previous_part] = :vorig_deel, [price] = :prijs, [URL] = :trailer WHERE [movie_id] = :id";
    $query = $verbinding->prepare($sql);
    $query->execute([':id' => $movie_id,
                    ':titel' => $titel,
                    ':lengte' => $duur,
                    ':beschrijving' => $beschrijving,
                    ':jaar' => $jaar,
                    ':cover' => $cover,
                    ':vorig_deel' => $vorig_deel,
                    ':prijs' => $prijs,
                    ':trailer' => $trailer]);
}

?>
