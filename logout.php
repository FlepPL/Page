<?php
    session_start();
    include 'main.php';
    unset($_SESSION['email']);
    unset($_SESSION['imie']);
    unset($_SESSION['nazwisko']);
    unset($_SESSION['telefon']);
    session_destroy();
    echo "<script type='text/javascript'>alert('Wylogowano się pomyślnie');</script>";
?>