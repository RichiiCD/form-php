<?php


if (isset($_POST['pokemon1'])) {
    if (strtoupper($_POST['pokemon1']) == "PIKACHU") {
        session_start();
        $_SESSION['pantalla1'] = 'check';
        header('Location: ../views/pantalla1.php');
    } else {
        header('Location: ../index.php?msg=25');
    }
} else if (isset($_POST['pokemon2'])) {
    if (strtoupper($_POST['pokemon2']) == "CHARMANDER") {
        session_start();
        $_SESSION['pantalla2'] = 'check';
        header('Location: ../views/pantalla2.php');
    } else {
        header('Location: ../views/pantalla1.php?msg=4');
    }
}



