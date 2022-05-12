<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Jakub Poleski, Sebastian Bedecki, Wiktor Kaszubski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut icon" href="Image/Flep.png"/>
    <script src="script.js"></script> 
    <title>Flep - serwis ogłoszeniowy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <a href="main.php"><img class="logo-header" src="Image/Flep.png" alt="logo"></a> 
        <div id="search-header">
            <form action="search.php" method="GET">
                <input type="search" name="search" id="search-form" placeholder="Powiedz co chcesz znaleźć  " reqxuired="">
                <input id="searchsubmit" type="submit" value="Znajdź">
                
            </form>
        </div>  

            <ul class="menu">
                <a class="bottom" href="https://github.com/FlepPL">O nas</a>
                <a class="bottom" href="login.php">Mój Flep</a>
                <a class="bottom" href="announcements.php">Dodaj ogłoszenie</a>
            </ul>
            <button class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>

                <script>
                    const mobileNav = document.querySelector('.menu');
                    const burgerIcon = document.querySelector('.burger');
                    
                    burgerIcon.addEventListener('click', function(){
                        mobileNav.classList.toggle('active');
                        burgerIcon.classList.toggle('active'); 
                       
                    })
    
                    </script>
    </header>
    <nav>
        <h1 class="text-nav">Ogłoszenia</h1>
    </nav>
            
    <div id="ogloszenia">
        <div class="container">
            <?php
                $sql = mysqli_connect('localhost', 'root', '', 'flep');
                $pytanie = "SELECT COUNT(id_ogloszenia) FROM ogloszenie;";
                $sas = mysqli_query($sql, $pytanie); 
                
                while($wiersz = mysqli_fetch_array($sas)) $liczba = $wiersz['COUNT(id_ogloszenia)'];
                
                for ($a=1; $a<$liczba+1; $a++) {
                    $zapytanie = "SELECT * FROM ogloszenie WHERE id_ogloszenia = $a;";
                    $maks = mysqli_query($sql, $zapytanie);  
                    
                    while($laskowski = mysqli_fetch_array($maks)) {
                        $id = $laskowski['id_ogloszenia'];
                        $tytul = $laskowski['tytul'];
                        $kategoria = $laskowski['kategoria'];
                        $opis = $laskowski['opis'];
                     }
                           
                    print("
                    <div class='box'>
                    <a class='sus' href='tak.php?id=$id'> 
                    <h2>$tytul</h2>
                    <h3>$kategoria</h3><hr><br>
                    <p>$opis</p><br>
                    <a class='sus2' href='tak.php?id=$id'> 
                    Sprawdz
                    </a>
                    </div>
                    ");
                }

            ?>

        </div>

    </div>

        <div id="rodo" onload="showrodo();">
           <p>Ta strona używa cookie i innych technologii. Korzystając z niej wyrażasz zgodę na ich używanie, zgodnie z aktualnymi ustawieniami przeglądarki. Możesz je zmienić w dowolnym momencie <a href="https://docs.google.com/document/d/13MFTjvmuqyA2UvlPa4bpNi46N4FfNrQQHyfhD45Kscc/edit?usp=sharing">Szczegółowa polityka - RODO</a></a></p>
           <input tpye="button" class="buttonrodo" onclick="closerodo()" value="Rozumiem">
        </div>
    <footer>
    <div id="footer-links">
            <a class="przyciski" href="https://docs.google.com/document/d/1T0hECqJWrENLCwvt8aeiGTExSJkGIKmbj9-BE4FJifE/edit?usp=sharing">Pomoc</a><br>
            <a class="przyciski" href="aboutus.html">Blog</a><br>
            <a class="przyciski" href="https://docs.google.com/document/d/1vS1vbRqMaGbBcUW11fQHK5V-q9R0OR5d_j2FJnSbMKg/edit?usp=sharing">Regulamin</a><br>
            <a class="przyciski" href="https://docs.google.com/document/d/13MFTjvmuqyA2UvlPa4bpNi46N4FfNrQQHyfhD45Kscc/edit?usp=sharing">Polityka prywatności</a>
        </div>
        <div id="footer-links-2">
            <a class="przyciski" href="https://docs.google.com/document/d/1Z_BOtt0y5D7IUXyyqpG0eEjoTRbWuTtZo9DqJH7zZ_M/edit">Jak działa Flep.pl</a><br>
            <a class="przyciski" href="https://docs.google.com/document/d/14AoSo_oWG5E6EBePkGywRt00FgvDm6SKHqoYKrclhPM/edit?usp=sharing">Zasady bezpieczeństwa</a><br>
            <a class="przyciski" href="https://docs.google.com/document/d/1BBSzC26kqkMTbe7NC8XcMdFxrK3rl2RFn1hhk4CqwB0/edit?usp=sharing">Ustawienia plików cookie</a><br>
            <a class="przyciski" href="https://github.com/FlepPL">Kariera</a>
        </div>
        <div id="footer-icons">
            <img alt="Google Play" class="link-to-app" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQYBOZ-3MyRTt6tELmeqRn6kNmrtbJpiT23dtUl0s6Un45WA34h">
            <img alt="Apple Store" class="link-to-app" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKPXGeVuLqCdqNDe5XDpg6bJraDyEAKo08ui_yXvnd2siTn_0n ">
            <hr><p class="p-footer">Darmowa aplikacja na Twój telefon</p> 
        </div>
    </footer> 
</body>
</html>


