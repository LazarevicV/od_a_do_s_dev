## ############################################################################################ ##

# Hakaton ćirilica - OD A DO Š - Tri praseta

## ############################################################################################ ##

# Inicijalno postavljanje projekta(sve što treba da se uradi pre nego se pokrene projekat)

## 1. Kloniranje repozitorijuma
Pronađite lokaciju na vašem računaru gde želite da sačuvate projekat.
Pokrenite bash konzolu tu i klonirajte projekat komandom:
`git clone https://github.com/LazarevicV/od_a_do_s_tri_praseta.git`

## 2. Uđite u projekat
Morate se nalaziti unutar direktorijuma projekta koji je upravo kreiran, komandom:
`cd od_a_do_s_tri_praseta`

## 3. Instalacija Composer-a
`composer install`

## 4. Instalacija NPM-a
NPM - node package manager, neophodan za korišćenje sistema za logovanje, registrovanje i sve vezano za korisnike
`npm install`

## 5. Kopiranje .env fajla
Fajlovi .env se obično ne čuvaju u kontrolnom sistemu verzija iz bezbednosnih razloga. Međutim, postoji .env.example koji predstavlja šablon .env fajla koji je potreban projektu. Komanda:
`cp .env.example .env`

## 6. Generisanje enkripcionog ključa za aplikaciju
Laravel zahteva da imate enkripcioni ključ za aplikaciju koji se obično generiše nasumično i čuva u .env fajlu. Laravel-ovi alati sa komandne linije olakšavaju generisanje ovog ključa. Pokrenite ovu komandu u terminalu da biste generisali ključ:
`php artisan key:generate`

## 7. Kreiranje prazne baze podataka za aplikaciju
Kreirajte praznu bazu podataka za vaš projekat koristeći alate za bazu podataka koje preferirate (moguće je koristiti bilo koji MySQL klijent, ali za Laravel aplikaciju preporuceno je localhost/phpmyadmin).

## 8. U .env fajlu, dodajte informacije o bazi podataka kako bi Laravel mogao da se poveže sa bazom
Omogućite Laravelu da se poveže sa bazom koju ste upravo kreirali u prethodnom koraku. Da biste to postigli, morate dodati podatke o povezivanju u .env fajlu.

U .env fajlu popunite vrednosti za DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME i DB_PASSWORD da odgovaraju podacima o bazi podataka koju ste upravo kreirali. Ovo će vam omogućiti pokretanje migracija u narednom koraku.

## 10. Migracija baze podataka
Kada je sve podešeno po koracima u .env fajlu možete migrirati bazu podataka. Ovo će kreirati sve tabele neophodne aplikaciji u vašoj bazi podataka.
`php artisan migrate`

## ############################################################################################ ##

# Pokretanje projekta na local hostu

## 1. Pokretanje npm-а
`npm run dev`

## Pokretanje lokalnog razvojnog servera
Da biste pokrenuli lokalni razvojni server, možete pokrenuti sledeću komandu. Ovo će pokrenuti razvojni server na http://localhost:8000.
`php artisan serve`

## ############################################################################################ ##

## Dodatne informacije:

## Da biste videli admin deo stranice možete da se prijavite sa podacima:
## -email: peraperic@gmail.com
## -lozinka: perapera

## Ako želite da se prijavite kao obični korisnik možete ga dodati preko register stranice ili se prijaviti sa podacima:
## -email: mikamikic@gmail.com
## -lozinka: mika

## ############################################################################################ ##