---
layout: wpub
---

# Dokumentácia k 3. zadaniu

## Splnenie bodov zadania:
* opis typu dokumentu - pomocou Relax NG - prezentacia.rng
* vytvorenie ukážkovej XML prezentácie - prezentácia o exotických zvieratách - prezentacia.xml
* základný návrh XSL transformácií - viď nižšie
* vytvorenie XSLT pre konverziu prezentácie z XML -> XHTML+CSS - html.xsl
* vytvorenie XSLT pre konverziu prezentácie XML -> PDF - pdf.xsl

## V práci sú použité nasledovné prvky:

* presentation - root element
* info, page - stránky prezentácie
    * možnosť nastaviť atribúty pre pozadie a písmo
* page-content - obsah stránky odsadený od okrajov
    * možnosť nastaviť atribúty pre stránkovanie
* title - názov prezentácie
    * možnosť nastaviť atribúty pre písmo a pozíciu
* author - meno autora prezentácie
    * možnosť nastaviť atribúty pre písmo a pozíciu
* header - názov stránky
    * možnosť nastaviť atribúty pre písmo a pozíciu
* content - obsah stránky
    * možnosť nastaviť atribúty pre pozíciu
* header2 - nadpisy stránky
    * možnosť nastaviť atribúty pre písmo a pozíciu
* text - text stránky
    * možnosť nastaviť atribúty pre písmo a pozíciu
* bold - tučné písmo
* italic - kurzíva
* underline - podčiarknuté písmo
* list - zoznam na stránke
    * možnosť nastaviť atribúty pre pozíciu
* list-item - prvok zoznamu
* table - tabuľka
    * možnosť nastaviť atribúty pre pozíciu
* table-row - riadok tabuľky
* table-cell - bunka tabuľky
* image - obrázok
    * možnosť nastaviť atribúty pre obrázok

## V prvkoch sú použité nasledovné atribúty:

* atribúty pre písmo
    * font-size - veľkosť
    * font-family - typ
    * text-align - zarovnanie ("left"|"right"|"center") - default: vľavo
    * color - farba
* atribúty pre pozíciu
    * top - odsadenie zhora
    * left - odsadenie zľava
    * bottom - odsadenie zdola
    * right - odsadenie sprava
* atribúty pre pozadie
    * background-image - odkaz na obrázok pozadia
    * background-color - farba pozadia
    * background-position - pozícia pozadia
    * background-repeat - nastavenie opakovania pozadia ("repeat"|"no-repeat") - default: opakuje sa
* atribúty pre stránkovanie
    * pagination - nastavenie, či je stránkovanie povolené (-|"none") - default: je viditeľné
    * pagination-position - nastavenie pozície čísla strany ("left"|"right") - default: vpravo
* atribúty pre obrázok
    * width - šírka (povinný)
    * height - výška (povinný)
    * src - odkaz na obrázok (povinný)

    