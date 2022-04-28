<?php
    $sql = mysqli_connect('localhost', 'root', '', 'flep');
    if (mysqli_connect_errno()) echo "Wystąpił błąd połączenia z bazą";
    $tytul = $_POST["tytulogloszenia"];
    $kategoria = $_POST["kategoriaogloszenia"]; 
    $zdjecie = $_POST["photo"]; 
    $opis = $_POST["opis"]; 
    $cena = $_POST["cena"]; 
    $telefon = $_POST["number"]; 
    $lokalizacja = $_POST["location"]; 
    $ogloszonko = "INSERT INTO ogloszenie (tytul,kategoria,opis,lokalizacja,cena) VALUES ('".$tytul."', '".$kategoria."', '".$opis."', '".$lokalizacja."', '".$cena."');"; 
    $bob = mysqli_query($sql, $ogloszonko); 
    echo "<script type='text/javascript'>alert('Stworzono nowe ogłoszenie');</script>";
    include 'main.php';
    mysqli_close($sql);
?>

