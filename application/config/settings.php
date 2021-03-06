<?php
defined('BASEPATH') OR exit('No direct script access allowed!');

/**
 * Created with ♥ by Verlikylos on 03.05.2017 00:06.
 * Visit www.verlikylos.pro for more.
 * Copyright © vMCShop 2017
*/

// Tytuł strony używany w tagu <title>. Pojawia się w nazwie karty przeglądarki.
$config['page_title'] = "vMCShop.pro";

// Opis strony wyświetlany przez wyszukiwarki internetowe.
$config['page_description'] = "Opis strony";

// Tagi strony pozycjonujące ją w wyszukiwarce internetowej oddzielone przecinkami.
$config['page_tags'] = "";

// Link do ikony o wymiarach 16x16 pixeli. Wyświetlana ona jest obok nazwy karty przeglądarki.
$config['page_favicon'] = "https://vmcshop.pro/assets/images/favicon.png";

// Link do tła nagłówka wyświetlanego na stronie głównej, w zakładce sklepu oraz w zakładce realizacji voucheru.
$config['page_header_image'] = "assets/images/header_background.png";

// Tekst wyświetlany w nagłówku strony.
$config['page_header_title'] = "vMCShop.pro";

// Mniejszy tekst wyświetlany w nałówku strony. Można całkowicie z niego zrezygnować pozostawiając to pole puste.
$config['page_header_subtitle'] = "Nowy wymiar automatycznego sklepu Minecraft!";

// Tekst pojawiający się przed wygenerowanym kodem vouchera. Można w ten sposób stworzyć np. vouchery z nazwą serwera w ich kodzie. Przykład: vMCShop_YOtSTvsVEkeCJcogiBrGWNulAwZdQKxDXUjRapFLhqPIymnf
$config['voucher_prefix'] = "vMCShop_";

// Długość kodu vouchera
$config['voucher_lenght'] = 48;

// Operator płatności SMS.
// Dostępne:
//   - MicroSMS
//   - LvlUp
$config['sms_operator'] = "";

// ID użytkownika w serwisie MicroSMS.pl
$config['microsms_userid'] = "";
$config['lvlup_userid'] = "";
