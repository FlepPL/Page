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
        <?php if(!empty($_SESSION['email'])): ?>
            <header>
                <a href="main.php"><img class="logo-header" src="Image/Flep.png" alt="logo"></a> 
                <div id="search-header">
                    <form action="search.php" method="GET">
                        <input type="search" name="search" id="search-form" placeholder="Powiedz co chcesz znaleźć  " reqxuired="">
                        <input id="searchsubmit" type="submit" value="Znajdź">
                    </form>
                </div>  
                
                <ul class="menu">
                    <a href="main.php" class="bottom">Strona Główna</a>
                    <a class="bottom" href="https://github.com/FlepPL">O nas</a>
                    <a href="login.php" class="bottom">Mój Flep</a>
                    <a href="logout.php" class="bottom" >Wyloguj</a>
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
        <h1 class="text-nav">Dodaj Ogłoszenie</h1>
    </nav>
    <div id="ogloszenia">
        <div id="login-window">
            <h1 class="text-ogloszenie">Dodaj Ogłoszenie</h1>
            <div id="login-form">
                <form action="ogloszenie.php" method="POST">
                    <p class="input-form" id="titleadd">Tytuł ogłoszenia*</p> 
                    <input class="input-form" type="text" name="tytulogloszenia" required> <br><br>
                    <p class="input-form">Kategoria*</p> 
                    <select class="input-form" name="kategoriaogloszenia" required>
                        <optgroup label="Praca">
                            <option>Wynajmę</option>
                            <option>Potrzebuje do pracy</option>
                            <option>Praca dodatkowa / sezonowa</option>
                            <option>TV</option>   
                        </optgroup>
                        <optgroup label="Elektronika">
                            <option>Komputery</option>
                            <option>Części</option>
                            <option>Telefony</option>
                            <option>TV</option>
                            <option>Sprzęt AGD</option>
                            <option>Gry i Konsole</option>
                            <option>TV</option>
                            <option>Sprzęt video</option>
                            <option>Sprzęt audio</option>
                            <option>Pozostałe</option>
                        </optgroup>
                        <optgroup label="Motoryzacja">
                            <option>Samochody osobowe</option>
                            <option>Części </option>
                            <option>Motocykle i Skutery</option>
                            <option>Dostawcze i Ciężarowe</option>
                            <option>Przyczepy i Pojazdy użytkowe</option>
                            <option>Pozostałe</option>
                        </optgroup>
                        <optgroup label="Rolnictwo">
                            <option>Ciągniki</option>
                            <option>Opony</option>
                            <option>Produkty rolne</option>
                            <option>Przyczepy</option>
                            <option>Giełda zwierząt</option>
                            <option>Części do maszyn rolniczych</option>
                            <option>Ryneczek</option>
                            <option>Pozostałe rolnicze</option>
                        </optgroup>
                        <optgroup label="Rolnictwo">
                            <option>Giełda zwierząt</option>
                            <option>Usługi dla zwierząt</option>
                            <option>Akcesoria dla zwierząt</option>
                            <option>Akwarystyka</option>
                        </optgroup>
                        <optgroup label="Dom">
                            <option>Meble</option>
                            <option>Materiały budowlane</option>
                            <option>Ogrzewanie</option>
                            <option>Ogród</option>
                            <option>Wyposażenie wnętrz</option>
                            <option>Narzędzia</option>
                            <option>Pozostałe dom i ogród</option>
                        </optgroup>
                        <optgroup label="Inne">
                            <option>Inne</option>
                        </optgroup>
                        
                    </select> 
                    <br><br><hr><br>
                    <p class="input-form">Zdjęcie główne* </p> 
                    <input type="file" accept="image/heic, image/png, image/jpeg, image/webp" name="photo"><br><br>
                    <p class="input-form">Opis:*</p> 
                    <textarea class="input-form" rows="4" cols="50" name="opis" pattern=".{50,300}"  required placeholder="Wpisz te informacje, które byłyby ważne dla Ciebie podczas przeglądania takiego ogłoszenia"></textarea><br><br>
                    <hr><br>
                    <p class="input-form">Lokalizacja:* </p>
                    <input class="input-form" type="text" required name="location"> <br><br>
                    <p class="input-form">Numer telefonu:*</p>
                    <input class="input-form" type="text" name="numer" placeholder="+48" required pattern=".{9,12}" > <br><br><hr><br>
                    <p class="input-form">Cena:*(Jeśli chcesz wystawić coś za daramo to wpisz w polu wartość 0)</p>
                    <input class="input-form" type="text" required name="cena"> <br><br><hr><br><br>
                    <div id="rule">
                        <p> <input type="checkbox" required>
                        Wyrażam zgodę na używanie przez Grupę Flep sp. z o.o. środków komunikacji elektronicznej oraz
                        telekomunikacyjnych urządzeń końcowych w celu przesyłania mi informacji handlowych oraz 
                        prowadzenia marketingu (np. newsletter, wiadomości SMS) przez Grupę Flep sp. z o.o., 
                        podmioty powiązane i partnerów biznesowych.</p>
                    </div><br><br> 
                    <input class="submit-form" type="submit" value="Dodaj ogłoszenie">
                </form>
            </div>
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
    <?php else:  ?>
    <?php header('Location: login.php'); ?>
    <?php endif; ?>
</body>


</html>


