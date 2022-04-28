<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['imie']);
    unset($_SESSION['nazwisko']);
    unset($_SESSION['telefon']);
    session_destroy();
    include 'main.php';
    echo "<script type='text/javascript'>alert('Wylogowano się pomyślnie');</script>";
?>