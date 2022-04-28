<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Jakub Poleski, Sebastian Bedecki, Wiktor Kaszubski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Shortcut icon" href="Flep.png"/>
    <script src="script.js"></script> 
    <title>Flep - serwis ogłoszeniowy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <a href="main.php"><img class="logo-header" src="Flep.png" alt="logo"></a> 
        <div id="search-header">
            <form action="search.php" method="GET">
                <input type="search" name="search" id="search-form" placeholder="Powiedz co chcesz znaleźć  " reqxuired="">
                <input id="searchsubmit" type="submit" value="Znajdź">
            </form>
        </div>  

            <ul class="menu">
                <a class="bottom" href="aboutus.html">O nas</a>
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
            <div class="box">
                <h1>Hello suss</h1>
            </div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>

    </div>

        <div id="rodo" onload="showrodo();">
           <p>Ta strona używa cookie i innych technologii. Korzystając z niej wyrażasz zgodę na ich używanie, zgodnie z aktualnymi ustawieniami przeglądarki. Możesz je zmienić w dowolnym momencie <a href="https://wezwijfachowca.pl/wp-content/uploads/2019/11/rodo-urban-1.pdf">Szczegółowa polityka - RODO</a></a></p>
           <input tpye="button" class="buttonrodo" onclick="closerodo()" value="Rozumiem">
        </div>
    <footer>
        <div id="footer-links">
            <a class="przyciski" href="">Pomoc</a><br>
            <a class="przyciski" href="">Blog</a><br>
            <a class="przyciski" href="">Regulamin</a><br>
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
</body>
</html>


