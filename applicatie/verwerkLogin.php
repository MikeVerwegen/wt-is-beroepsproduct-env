<?php

session_start();

require_once 'components/data_functies.php';

$user = haalKlantOp($_POST['mail']);

if (!isset($user['customer_mail_address'])) {
    echo "Incorrect mailadres ingevoerd. ";
} else if (!$unhash = password_verify($_POST['ww'], $user['password'])) {
    echo "Incorrect wachtwoord ingevoerd. ";
} else {
    $_SESSION['user'] = $user['firstname'];
    $_SESSION['paginasBezocht'] = 0;
    header("Location: index.php");
}

?>