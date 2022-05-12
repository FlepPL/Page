<?php session_start();?>
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
    <?php if(empty($_SESSION['email'])): ?>
        <header>
        <a href="main.php"><img class="logo-header" src="Image/Flep.png" alt="logo"></a> 
            <div id="search-header">
                <form action="search.php" method="GET">
                    <input type="search" name="search" id="search-form" placeholder="Powiedz co chcesz znaleźć  " reqxuired="">
                    <input id="searchsubmit" type="submit" value="Znajdź">
                </form>
            </div>  
            <ul>
                <a class="bottom" href="main.php">Strona Główna</a>
                <a class="bottom" href="https://github.com/FlepPL">O nas</a>
                <a class="bottom" href="announcements.php">Dodaj ogłoszenie</a>
            </ul>
            <button class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>
            <script>
                const mobileNav = document.querySelector('ul');
                const burgerIcon = document.querySelector('.burger');
                
                burgerIcon.addEventListener('click', function(){
                    mobileNav.classList.toggle('active');
                    burgerIcon.classList.toggle('active'); 
                    
                })
                    
                </script>
    </header>
    <nav>
        <h1 class="text-nav">Mój Flep</h1>
    </nav>
    <div id="ogloszenia">
        <div id="login-window">
            <ol class="login">
                <li><a class="login-hover" href="login.php" >Zaloguj się </a></li>
                <li><a class="login-hover" href="register.html" >Rejestracja</a></li>
            </ol>
            <div id="login-form">
                <form action="loginScript.php" method="POST">
                    <br>
                    <p class="input-form">Login:</p> 
                    <input class="input-form" type="text" name="login"> <br><br>
                    <p class="input-form">Hasło:</p> 
                    <input class="input-form" type="password" name="password"> <br><br>
                    <a class="input-a" href="">Przypomnienie hasła</a><br><br>
                    <input class="submit-form" type="submit" value="Zaloguj się"><br><br>
                    <p style="font-size:x-small">
                        Klikając przycisk zarejestruj się, akceptuję Regulamin.
                        Zalogowanie oznacza akceptację Regulaminu serwisu Flep.pl w aktualnym brzmieniu.
                        Jeśli nie akceptujesz warunków zmienionego Regulaminu serwisu Flep.pl,
                        wyślij oświadczenie o rozwiązaniu Umowy w trybie przewidzianym w Regulaminie.
                    </p>     
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div id="footer-links">
            <a class="przyciski" href="">Pomoc</a><br>
            <a class="przyciski" href="">Blog</a><br>
            <a class="przyciski" href="https://docs.google.com/document/d/1vS1vbRqMaGbBcUW11fQHK5V-q9R0OR5d_j2FJnSbMKg/edit?usp=sharing">Regulamin</a><br>
            <a class="przyciski" href="">Polityka prywatności</a>
        </div>
        <div id="footer-links-2">
            <a class="przyciski" href="">Jak działa Flep.pl</a><br>
            <a class="przyciski" href="">Zasady bezpieczeństwa</a><br>
            <a class="przyciski" href="">Ustawienia plików cookie</a><br>
            <a class="przyciski" href="">Kariera</a>
        </div>
        <div id="footer-icons">
            <img alt="Google Play" class="link-to-app" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQYBOZ-3MyRTt6tELmeqRn6kNmrtbJpiT23dtUl0s6Un45WA34h">
            <img alt="Apple Store" class="link-to-app" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKPXGeVuLqCdqNDe5XDpg6bJraDyEAKo08ui_yXvnd2siTn_0n ">
            <hr><p class="p-footer">Darmowa aplikacja na Twój telefon</p>
            
            
        </div>
    </footer> 
    
    <?php else:  ?>
        <header>
        <a href="main.php"><img class="logo-header" src="Image/Flep.png" alt="logo"></a> 
            <div id="search-header">
                <form action="search.php" method="GET">
                    <input type="search" name="search" id="search-form" placeholder="Powiedz co chcesz znaleźć  " reqxuired="">
                    <input id="searchsubmit" type="submit" value="Znajdź">
                </form>
            </div>  
            <ul>
                <a class="bottom" href="announcements.php">Dodaj ogłoszenie</a>
                <a class="bottom" href="login.php">Mój Flep</a>
                <a class="bottom" href="https://github.com/FlepPL">O nas</a>
                <a href="logout.php" class="bottom" >Wyloguj</a>

            </ul>
            <button class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>
            <script>
                const mobileNav = document.querySelector('ul');
                const burgerIcon = document.querySelector('.burger');
                
                burgerIcon.addEventListener('click', function(){
                    mobileNav.classList.toggle('active');
                    burgerIcon.classList.toggle('active'); 
                    
                })
                    
                </script>
    </header>
    <nav>
        <h1 class="text-nav">Mój Flep</h1>
    </nav>
    <div id="ogloszenia">
        <div id="login-window">
            <p>Witaj, <?=$_SESSION['imie']?> </p><br>
            <?php 
            $sql = mysqli_connect('localhost', 'root', '', 'flep');
            $witaj = $_SESSION['id'];
            $zapytanie = "SELECT COUNT(id_ogloszenia) FROM ogloszenie WHERE id_uzytkownika = $witaj;";
            $o = mysqli_query($sql, $zapytanie);  
            while($as = mysqli_fetch_array($o)) $liczba = $as['COUNT(id_ogloszenia)'];
            echo('<p>Liczba twoich ogłoszeń, '.$liczba.'</p>'); 
            ?>
        </div>
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
    <?php endif; ?>
</body>
</html>