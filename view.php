<?php
    $sql = mysqli_connect('localhost', 'root', '', 'flep');

    $pytanie = "SELECT COUNT(id_ogloszenia) FROM ogloszenie;";
    $sas = mysqli_query($sql, $pytanie); 
    
    while($wiersz = mysqli_fetch_array($sas)) $liczba = $wiersz['COUNT(id_ogloszenia)'];
    
    for ($x=1; $x<$liczba+1; $x++) {
        print("<a href='main.php?id=$x'>a</a>".'<br>');
    }
    mysqli_close($sql);
    // $id = (int)$_GET['id'];
?>