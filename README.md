# Backoffice opdracht

Mijn naam is Amin Akhayad, en ik zal wat vertellen over mijn backoffice opdracht. Ik heb ervoor gekozen om een backoffice te maken over sport, waar je sportactiviteiten kunt bekijken, toevoegen, verwijderen en bewerken. In dit document zal ik toelichten hoe ik mijn project heb opgebouwd, welke technologieën ik heb gebruikt, en hoe de functionaliteiten werken.

## Doel van de opdracht

Het doel van deze opdracht was om een backoffice systeem te maken waarmee beheerders gemakkelijk sportactiviteiten kunnen beheren. Dit systeem kan bijvoorbeeld worden gebruikt door sportorganisaties, fitnesscentra, of scholen die een overzicht willen hebben van hun activiteiten en deze flexibel willen aanpassen.

## Functionaliteiten

De belangrijkste functionaliteiten van mijn backoffice systeem zijn:

1. **Sportactiviteiten bekijken**: Beheerders kunnen alle ingevoerde sportactiviteiten in een overzicht zien. Dit overzicht bevat details zoals de naam van de activiteit, beschrijving, locatie, datum, tijd, en andere relevante informatie.

2. **Sportactiviteiten toevoegen**: Via een formulier kunnen nieuwe sportactiviteiten worden toegevoegd. Gebruikers kunnen informatie zoals de naam van de activiteit, omschrijving, datum en tijd invullen. Validatie zorgt ervoor dat alle noodzakelijke velden correct zijn ingevuld.

3. **Sportactiviteiten bewerken**: Beheerders kunnen bestaande activiteiten aanpassen. Dit is handig als er bijvoorbeeld wijzigingen in de tijd of locatie zijn. Het bewerken gebeurt via een formulier dat de huidige gegevens van de activiteit ophaalt en deze vervolgens aanpast in de database.

4. **Sportactiviteiten verwijderen**: Met één klik kunnen beheerders activiteiten verwijderen. Dit kan bijvoorbeeld handig zijn als een activiteit is geannuleerd of verplaatst.

5. **Gebruikersbeheer** (optioneel): Naast activiteitenbeheer, heb ik de mogelijkheid toegevoegd om gebruikers te beheren. Hierdoor kunnen nieuwe gebruikers worden toegevoegd aan het systeem, of bestaande gebruikers worden verwijderd of aangepast.

6. **Filemanager**: Om opgeslagen avatar images van de user te bekijken.
## Technologieën en Taalkeuze

Voor dit project heb ik gebruik gemaakt van de volgende technologieën en programmeertalen:

- **PHP**: Voor de server-side logica en het verwerken van gebruikersinput en database interactie.
- **MySQL**: Voor de database om alle gegevens van activiteiten en gebruikers op te slaan.
- **HTML/CSS**: Voor het opbouwen en stijlen van de interface, zodat het backoffice systeem er gebruiksvriendelijk en overzichtelijk uitziet.
- **JavaScript** (optioneel): Voor de Charts data te renderen en interactieve elementen en validatie aan de client-side.
  
## Beveiliging

Beveiliging is een belangrijk aspect van dit project. Enkele maatregelen die ik heb getroffen om de beveiliging te verbeteren, zijn:

1. **SQL Injection preventie**: Alle database interacties maken gebruik van prepared statements met parameterized queries, wat de kans op SQL injectie aanzienlijk vermindert.
2. **Wachtwoord Hashing**: Gebruikerswachtwoorden worden gehashed met `password_hash` voordat ze worden opgeslagen, wat de wachtwoorden beveiligt tegen onbevoegde toegang.
3. **Input Validatie**: Alle invoervelden zijn voorzien van validatie om ervoor te zorgen dat alleen correcte en verwachte gegevens worden ingevoerd.
4. **File Upload Beveiliging**: Voor het uploaden van bestanden, zoals profielfoto's, zijn er checks op bestandsgrootte en bestandstype om ongewenste bestanden uit te sluiten.

## Interface Ontwerp

Het ontwerp van de interface is eenvoudig en gebruiksvriendelijk, met als doel dat beheerders gemakkelijk hun weg kunnen vinden. De backoffice heeft verschillende secties, waaronder een navigatiemenu met links naar "Exercises", "Users" en "Filemanager". Elke sectie heeft duidelijke knoppen en formulieren voor het uitvoeren van de gewenste acties.

## Conclusie

Dit project heeft mij geholpen om mijn vaardigheden in PHP, MySQL en webontwikkeling te verbeteren. Ik heb geleerd om een backoffice systeem te ontwikkelen dat zowel functioneel als veilig is. Bovendien was het een waardevolle oefening in het implementeren van best practices voor beveiliging en gebruiksvriendelijkheid in een webapplicatie. 

Met dit backoffice systeem kunnen sportorganisaties nu gemakkelijk hun activiteiten beheren en aanpassingen maken waar nodig. Ik ben tevreden met het resultaat en kijk ernaar uit om het systeem verder te verbeteren en uit te breiden met nieuwe functies.

Hier is een voorbeeld van de home pagina:

![My Image]("/public/assets/screenshot/home.png")