CREATE DATABASE Flep;
USE Flep

ALTER DATABASE Flep CHARACTER SET utf8 COLLATE utf8_polish_ci;
CREATE USER 'JakubPoleski'@'localhost' IDENTIFIED BY 'password'
CREATE USER 'JakubPoleski'@'localhost' IDENTIFIED BY 'password';
CREATE USER 'SebastianBedecki'@'localhost' IDENTIFIED BY 'password';
CREATE USER 'WiktorKaszubski'@'localhost' IDENTIFIED BY 'password';
Grant all privileges on *.* to 'Jakub Poleski'@'localhost';
Grant all privileges on *.* to 'Sebastian Bedecki'@'localhost';
Grant all privileges on *.* to 'Wiktor Kaszubski'@'localhost';

CREATE TABLE uzytkownik(
    id_uzytkownika INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    imie VARCHAR(30) NOT NULL,
    nazwisko VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefon INT(9) NOT NULL,
    haslo VARCHAR(30) NOT NULL,
    zdjecia BLOB
)

CREATE TABLE ogloszenie(
	id_ogloszenia INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  telefon INT(9) NOT NULL,
  id_uzytkownika INT NOT NULL,
	tytul VARCHAR(70) NOT NULL,
  kategoria VARCHAR(15) NOT NULL,
	opis VARCHAR(1500) NOT NULL,
  lokalizacja VARCHAR(20) NOT NULL,
  cena FLOAT(6),
  ogloszenie_telefon INT(9) NOT NULL,
  zdjecia BLOB,
  data date 
)


ALTER TABLE ogloszenie
ADD FOREIGN KEY (id_uzytkownika)
REFERENCES uzytkownik(id_uzytkownika)



CREATE TABLE zamowienia(
  id_zamowienia INT(11) NOT NULL,
  data_zalozenia_zamowienia date DEFAULT NULL,
  data_wyslania date DEFAULT NULL,
  koszt_wyslki DECIMAL(5,2) DEFAULT NULL,
  id_uzytkownika INT(11) DEFAULT NULL,
  id_faktury INT(11) DEFAULT NULL 
)

CREATE TABLE faktura(
  id_faktury INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nr_faktury INT(11) NOT NULL,
  sposob_platnosci VARCHAR(20) DEFAULT NULL,
  data_wystawienia_faktury date DEFAULT NULL
)
  