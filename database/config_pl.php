<?php
/*
* Dane konfiguracyjne strony zależne od języka
* Więcej: https://opensolution.org/docs/?p=pl-settings
*/
setlocale( LC_CTYPE, 'pl_PL' );

/*
* Id strony startowej (głównej)
* Więcej: https://opensolution.org/docs/?p=pl-settings#start_page
*/
$config['start_page'] = "1";

/*
* Logo strony. Możesz wstawić tu także obrazek stosując kod HTML
* Więcej: https://opensolution.org/docs/?p=pl-settings#logo
*/
$config['logo'] = "Quick<span>.</span><strong>Cms</strong>";

/*
* Tytuł wyświetlający się w znaczniku TITLE obok nazwy aktualnie przeglądanej podstrony
* Więcej: https://opensolution.org/docs/?p=pl-settings#title
*/
$config['title'] = "Quick.Cms - szybki i prosty system zarządzania treścią";

/*
* Opis strony wyświetlający się w znaczniku META DESCRIPTION, jeśli strona nie posiada wpisanego opisu meta
* Więcej: https://opensolution.org/docs/?p=pl-settings#description
*/
$config['description'] = "Szybki i prosty system zarządzania treścią. Najpopularniejszy polski system CMS";

/*
* Slogan, który wyświetla się domyślnie pod logo. Można tu zastosować kod HTML
* Więcej: https://opensolution.org/docs/?p=pl-settings#slogan
*/
$config['slogan'] = "Szybki i prosty system zarządzania treścią";

/*
* Treść stopki strony, która domyślnie znajduje się po lewej stronie
* Więcej: https://opensolution.org/docs/?p=pl-settings#foot_info
*/
$config['foot_info'] = 'Wszelkie prawa zastrzeżone';
?>