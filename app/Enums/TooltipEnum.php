<?php

namespace App\Enums;

class TooltipEnum
{
    // Tooltip dla pola użytkownika
    const EMPTY = 'EMPTY';


    /*
    //
    // SETTINGS SEO
    //
    */

    const SETTINGS_SEO_ROBOTS_INDEX = 'Strona będzie indeksowana przez wyszukiwarki - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_NOINDEX = 'Strona nie będzie indeksowana przez wyszukiwarki - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_FOLLOW = 'Wyszukiwarki mogą podążać za linkami na stronie - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_NOFOLLOW = 'Wyszukiwarki nie będą podążać za linkami na stronie - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_NOARCHIVE = 'Wyszukiwarki nie będą przechowywać kopii strony w pamięci podręcznej - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_NOSNIPPET = 'Wyszukiwarki nie będą wyświetlać podglądu strony w wynikach wyszukiwania - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_NOINDEX_NOFOLLOW = 'Strona nie będzie ani indeksowana, ani linki na niej nie będą śledzone - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_INDEX_NOFOLLOW = 'Strona będzie indeksowana, ale linki nie będą śledzone - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_NOINDEX_FOLLOW = 'Strona nie będzie indeksowana, ale linki na niej będą śledzone - KLIKNIJ, aby dowiedzieć się więcej.';
    const SETTINGS_SEO_ROBOTS_ALL = 'Strona będzie indeksowana, a linki będą śledzone - KLIKNIJ, aby dowiedzieć się więcej.';




    const SETTINGS_SEO_META_TITLE = 'Maksymalnie 55 znaków. Wyświetla w wynikach wyszukiwarki tytuł strony. Istotne aby zawrzeć konkretne informacje i słowa kluczowe.';
    const SETTINGS_SEO_META_DESCRIPTION = 'Zalecane 120 znaków, maksymalnie 400. Zwięzły i konkretny tekst informujący o zawartości strony. Istotne aby na początku zdania zawrzeć słowo klucz.';
    const SETTINGS_SEO_META_KEYWORDS = 'Słowa kluczowe, które dotyczą treści strony. Można podawać proste frazy, pojedyncze wyrazy, odmienione według liczb i przypadków oraz synonimy wyrazów. Unikać słowa niezwiązane z tematem. Słowa kluczowe oddziel przecinkiem.';
    const SETTINGS_SEO_META_ROBOTS = 'Informuje on wyszukiwarki o ich uprawnieniach do odwiedzania oraz indeksowania strony.';
    const SETTINGS_SEO_OG_TYPE = 'Informuje on wyszukiwarki o ich uprawnieniach do odwiedzania oraz indeksowania strony.';



    /*
    //
    // PRODUCTS MODULE
    //
    */


    const TABLE_PRODUCTS_CATEGORIES = 'Informacja do jakich kategorii został przypisany produkt.';
    const TABLE_PRODUCTS_STATUS = 'Informacja czy produkt jest dostępny w sprzedaży.';


    const ADD_PRODUCT_SALE_METHOD = 'Skonfiguruj sposoby sprzedaży.';
    const ADD_PRODUCT_EAN_13 = 'Składa się z 12 cyfr danych i jednej cyfry kontrolnej.';
    const ADD_PRODUCT_EAN_8 = 'Składa się z 7 cyfr danych i jednej cyfry kontrolnej.';
    const ADD_PRODUCT_EAN_128 = 'Ma zmienną liczbę znaków alfanumerycznych i jedną cyfrę kontrolną.';
    const ADD_PRODUCT_EAN_14 = 'Składa się z 13 cyfr danych i jednej cyfry kontrolnej.';
    const ADD_PRODUCT_EAN_CODE = 'Kliknij aby wygenerować i pobrać kod EAN.';
    const ADD_PRODUCT_STATUS = 'Określ czy produkt ma być widoczny w sklepie on-line';
    const ADD_PRODUCT_METHOD_SALES = 'Możesz dodać więcej metod sprzedaży produktów - KLIKNIJ';
    const ADD_PRODUCT_ADD_CATEGORY = 'Jeśli brakuje odpowiedniej kategori dla produktu możesz ją utworzyć - KLIKNIJ.';
    const ADD_PRODUCT_ALERTS = 'Sprawdź lub skonfiguruj metody powiadomień - KLIKNIJ.';




    const ADD_CATEGORY_ADD_PARENT = 'Możesz przypisywać podkategorie do kategorii w sposób nieskończony. Jedna podkategoria nie może być przypisana do kilku kategorii głównych.';
    /*
    //
    // SALES MODULE
    //
    */



    const ORDER_STATUS = 'Zmień status zamówienia zgodnie ze stanem faktycznym.';
    const ORDER_PRODUCTS_LIST = 'Lista produktów zamówienia nie podlega już edycji.';
    const ORDER_NOTE = 'W razie potrzeby możesz dodawać notatki do tego zamówienia, które będą widoczne tylko dla pracowników firmy.';
    const ORDER_ACTION = 'Wybierz akcje, która wykona za Ciebie określoną czynność. Akcja zostanie odnotowana w notatkach zamówienia.';


    /*
    //
    // CLIENTS MODULE
    //
    */


    const CLIENTS_REGISTER = 'Data pierwszej rejestracji klienta.';
    const CLIENTS_LAST_LOG = 'Data ostatniego logowania się do sklepu.';
    const CLIENTS_NO_ORDERS = 'Liczba wszystkich zrealizowanych zamówień.';
    const CLIENTS_TOTAL = 'Suma pieniężna wszystkich zrealizowanych zamówień.';
    const CLIENTS_MEDIUM = 'Średnia wartość zamówień.';
    const CLIENTS_NOTE = 'W razie potrzeby możesz dodawać notatki do tego klienta, które będą widoczne tylko dla pracowników firmy.';


    const CLIENTS_STATUS = 'Możesz zablokować dostęp klienta do systemu poprzez zmianę statusu na nieaktywny';
    const CLIENTS_VERIFICATION = 'Zweryfikuj klienta jeśli jego rodzaj to "Firma" poprzez sprawdzenie danych w CEIDG / KRS';
    const CLIENTS_CAREER = 'Aby przekazać opiekę nad klientem przypypisz klientowi odpowiedniego pracownika';
}
