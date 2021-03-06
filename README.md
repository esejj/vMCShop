# vMCShop
Nowy wymiar automatycznego sklepu Minecraft!

Aktualna wersja: **1.6.1**

<hr>

Demo: [Klik](https://vmcshop.pro/)

Demo ACP: [Klik](https://vmcshop.pro/admin)

Login: **Admin**

Hasło: **password**

<hr>

### Opis

Sklep oferuje obsługę wielu serwerów i usług, dodawanie newsów z obrazkami oraz realizację voucherów. Dashboard ACP zawiera kilka podstawowych informacji takich jak ilosć sprzedanych usług czy zarobki. Znajduje się tam również wykres statystyk sprzedaży w bieżącym tygodniu, status serwerów podpiętych do skryptu, lista ostatnich zakupów oraz logowań do ACP. Panel sklepu obsługuje wiele kont dlatego została dodana zakładka logów sklepu, aby móc zobaczyć co i kiedy dany użytkownik zrobił. Sklep na razie obsługuje tylko serwis MicroSMS.pl w przyszłosci zostanie dodana obsługa płatnosci PayPal, dotpay.pl, LVLUP.pro i kilku innych hostingów serwerów Minecraft. Przed realizacją usługi czy vouchera sprawdzane jest czy serwer na którym komenda ma być wykonana jest aktualnie włączony.

W razie jakichkolwiek pytań/wątpliwosci/problemów/błędów zapraszam do kontaktu [mailowego](mailto:kontakt@verlikylos.pro), przez mój [FanPage](https://www.facebook.com/verlikylos) lub przy pomocy komunikatora [Telegram](https://t.me/Verlikylos).

Używasz tego skryptu sklepu? Napisz do mnie, a dodam Twoją stronę do poniższej listy!

### Lista serwisów używających skryptu vMCShop
- Na razie brak :C

### Obsługiwani operatorzy płatności
- MicroSMS.pl
- LvlUp.pro

### TO-DO
- [x] Strona główna z newsami, ostatnimi zakupami i statusem serwerów
- [x] Strona sklepu z listą usług
- [x] Logowanie do ACP
- [x] Dashboard z wykresem statystyk sprzedaży, statusem serwerów, ostatnimi zakupami dla poszczególnych serwerów, historią logowań do panelu i kilkoma podstawowymi informacjami
- [x] Dodawanie i usuwanie użytkowników ACP
- [x] Ustawienia konta użytkownika ACP ze zmianą hasła i avataru
- [x] Dodawanie i usuwanie serwerów
- [x] Dodawanie i usuwanie usług
- [x] Dodawanie i usuwanie newsów
- [x] Historia zakupów
- [x] Realizacja zakupów (Sprawdzanie czy serwer jest włączony podczas realizacji usługi)
- [x] Obsługa voucherów
- [x] Logi panelu administratora
- [ ] Możliwość edycji serwerów, usług i newsów (Aktualnie można tylko dodawać i usuwać)
- [ ] Własne podstrony
- [ ] Własne zakładki w menu
- [ ] Anty-bot (Weryfikacja nicku gracza poprzez wysyłanie odpowiedniej komendy do serwera)

### Instalacja

Wymagane aktywne ```mod_rewrite```

1. Wgraj pliki na serwer www.
2. Importuj plik ```database.sql``` do swojej bazy danych MySQL.
3. Edytuj plik ```application/config/config.php```. Zmienną ```$config['base_url']``` ustaw na adres do swojej witryny. Przykład ```$config['base_url'] = 'https://vmcshop.pro/'```.
4. Edytuj plik ```application/config/database.php```. Zmienne ```'hostname' => 'adres bazy danych'```, ```'username' => 'nazwa użytkownika bazy danych'```, ```'password' => 'hasło do bazy danych'```, ```'database' => 'nazwa bazy danych'``` ustaw na wartosci odpowiadające Twojej bazie danych.
5. Edytuj plik ```application/config/settings.php```. Skonfiguruj go według upodobań. Ustawiasz tam między innymi dane do integracji z operatorem płatnosci, tło strony, logo itp.
6. Przejdź do witryny ```twojadomena.com/admin``` i zaloguj się używając domyslnych danych. (Login: Admin, Hasło: password).
7. Sklep jest gotowy do użycia.

### Licencja: **GNU GPLv3**