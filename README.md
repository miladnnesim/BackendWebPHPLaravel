# Valorant Mate Finder

## Over het Project

**Valorant Mate Finder** is een webplatform dat spelers van de game Valorant helpt om samen te werken en teams te vormen. De website biedt gebruikers een centrale plek om scrims te organiseren, duo-partners te zoeken, en antwoorden te krijgen op veelgestelde vragen via de FAQ-sectie. Beheerders hebben extra mogelijkheden om gebruikers, nieuwsitems, en FAQ's te beheren.

---

## Functionaliteiten

### Voor Gebruikers

-   **Scrims en Teams Organiseren**:
    -   Gebruikers kunnen zelf scrims aanmaken en eraan deelnemen.
    -   Deelnemers worden getoond met hun **Riot ID** en een link naar hun profiel.
-   **Zoek een Duo**:
    -   Gebruikers kunnen duo-partners vinden door een post te maken (competitief of casual).
    -   Alle duo-posts worden weergegeven in een overzichtelijke tabel.
-   **FAQ**:
    -   Gebruikers kunnen vragen stellen in bestaande categorieën of nieuwe categorieën creëren.
    -   Een admin kan later antwoorden toevoegen.
-   **Profielpagina**:
    -   Gebruikers hebben een persoonlijke profielpagina met informatie zoals hun Riot ID, rang, en voorkeuren.

### Voor Beheerders

-   **Admin Panel**:
    -   Toegang tot een speciale beheerbalk met opties zoals:
        -   **Nieuwsbeheer**: Nieuwsitems toevoegen, verwijderen en bewerken.
        -   **FAQ-beheer**: Vragen beantwoorden, categorieën beheren en nieuwe items toevoegen.
        -   **Gebruikersbeheer**: Gebruikers promoten of verwijderen.
        -   **Contactbeheer**: Beheren van contactformulieren.

---

## Navigeren op de Website

### Gebruiker Navbar

-   **Home**: Bekijk het laatste nieuws.
-   **Looking for Team**: Organiseer scrims, maak duo-posts of zoek naar teams.
-   **FAQ**: Stel vragen of bekijk veelgestelde vragen.
-   **Contact**: Neem contact op met de beheerders.
-   **Profielicoon**: Ga naar je persoonlijke profiel.

### Admin Navbar

-   **Nieuws Beheer**: Voeg nieuwsitems toe, bewerk bestaande items of verwijder ze.
-   **FAQ Beheer**: Beantwoord vragen of voeg nieuwe categorieën en vragen toe.
-   **Beheer Contact Forms**: Bekijk en verwerk contactformulieren.
-   **Beheer Gebruikers**: Bekijk en beheer gebruikersrollen.

---

## Installatie en Gebruik

Volg de onderstaande stappen om het project lokaal op te zetten:

### Vereisten

-   PHP 8.0+
-   Composer
-   MySQL
-   Laravel 11+
-   Node.js & NPM

### Stappen

1. **Clone het project**:

    git clone https://github.com/miladnnesim/BackendWebPHPLaravel.git

    cd BackendWebPHPLaravel/

2. **Configureer of breng uw eigen .env file**:

3. **Voer de migraties en seeders uit en start de server**:

    php artisan migrate:fresh --seed

    php artisan serve

### Belangrijke Informatie

Standaard Beheerdersaccount

Email: admin@ehb.be

Wachtwoord: Password!321

### Seed Data

Bij het seeden van de database worden enkele standaardcategorieën, vragen, en voorbeeldposts toegevoegd.

## Gebruikersregels

Gebruikers moeten hun Riot ID invullen om deel te nemen aan scrims.
Posts voor duo-partners vereisen het specificeren van een rang en voorkeur (casual of competitief).

## Bronnen
chatgpt, voor debuggen en repititiev tasks, ik heb alles gedaan in 1 chat , maar omdat ik fotos heb geupload in de chat kan ik die niet delen.
Chats die ik wel kan delen:

https://chatgpt.com/share/677060f1-90dc-800c-a72b-121ee8400ee8

https://chatgpt.com/share/677061b4-b210-800c-9490-870cdecef2c9

Laravel : https://laravel.com/docs/11.x

W3schools voor css: https://www.w3schools.com/css/

