 <?php
    $sql = mysqli_connect('localhost', 'root', '', 'flep');
    if (mysqli_connect_errno()) {
        echo "Wystąpił błąd połączenia z bazą";
    }
    $imieAutora = $_POST["name"];
    $nazwisko = $_POST["lastname"]; 
    $email = $_POST["email"];
    $haslo = $_POST["password"];
    $telefon = $_POST["numer"];
    $dodaj = "INSERT INTO uzytkownik (imie,nazwisko,email,telefon,haslo) VALUES ('".$imieAutora."', '".$nazwisko."', '".$email."',  '".$telefon."','".$haslo."');"; 
    $emailBob = "SELECT email FROM uzytkownik WHERE email = '$email';";
    $result = mysqli_query($sql, $emailBob); 
    if (mysqli_num_rows($result) == 0) {
        $wprowadzenie = mysqli_query($sql, $dodaj); 
        echo "<script type='text/javascript'>alert('Zarejestrowano Pomyślnie');</script>";
        include 'main.php';
    }else{
        echo "<script type='text/javascript'>alert('Podany email jest już zarejestrowany');</script>";
        include 'register.html';
    }
    mysqli_close($sql);
?>
