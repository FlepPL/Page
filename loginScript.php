<?php
    session_start();
    $sql = mysqli_connect('localhost', 'root', '', 'flep');
    $login = $_POST["login"];
    $password = $_POST["password"]; 
    $checkdata = "SELECT email FROM uzytkownik WHERE email = '$login' AND haslo = '$password';"; 
    $checkuserdata = "SELECT id_uzytkownika,imie,nazwisko,email,telefon FROM uzytkownik WHERE email = '$login' AND haslo = '$password';"; 
    $result = mysqli_query($sql, $checkdata); 
    if($login == null || $password == null){
        echo "<script type='text/javascript'>alert('Wprowadz popawnie pola');</script>";
        include 'login.php';
    }else{
        if (mysqli_num_rows($result) == 1){      
            $_SESSION['bob'] = false;
            $_SESSION['email'] = $login;
            $wynik = mysqli_query($sql, $checkuserdata); 
            while($row = mysqli_fetch_array($wynik)){
                $_SESSION['id'] = $row['id_uzytkownika'];
                $_SESSION['imie'] = $row['imie'];
                $_SESSION['nazwisko'] = $row['nazwisko'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['telefon'] = $row['telefon'];

            }
            echo "<script type='text/javascript'>alert('Zalogowano Pomyślnie');</script>";
            include 'main.php';
        }else{
            echo "<script type='text/javascript'>alert('Hasło lub Login są błedne, spróbój ponownie');</script>";
            include 'login.php';
        }

    }
    mysqli_close($sql);
?>
