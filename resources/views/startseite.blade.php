@extends('layouts.app')

@section('title', 'Startseite')

@section('content')
<div class="container-fluid mb-4">
    <div id="carouselExampleIndicators" class="carousel slide mb-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/carousel/books.jpg" style="max-height: 100vh; max-width: fit-content" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel/dvds.jpg"  style="max-height: 100vh; max-width: fit-content" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel/vinyls.jpg" style="max-height: 100vh; max-width: fit-content"  alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="jumbotron" >
        <h1 class="display-4 text-center" style="font-size: 500%">Exitheca</h1>
        <p class="lead text-center">Ihre persönliche Datenbank.</p>
        <hr class="my-4">
        <div class="d-flex justify-content-center " >

            <ul class="list-group  mr-4 text-center" style="width: 33%">
                <li class="list-group-item active" style="background-color: darkturquoise"><strong>Was ist Exitheca!</strong></li>
                <li class="list-group-item">Eine Datenbank mit Extras</li>
                <li class="list-group-item">Immer und überall Zugriff auf ihre Daten</li>
                <li class="list-group-item">Übersicht über ihre Schätze</li>
                <li class="list-group-item">Einfach Cool</li>
            </ul>

            <ul class="list-group  mr-4 text-center"  style="width: 33%">
                <li class="list-group-item active" style="background-color: darkblue"><strong>Was bietet Exitheca!</strong></li>
                <li class="list-group-item">Übersicht</li>
                <li class="list-group-item">Sicherheit</li>
                <li class="list-group-item">Knopf im Taschentuch</li>
                <li class="list-group-item">Ein Must-Have</li>
            </ul>

            <ul class="list-group  mr-4 text-center"  style="width: 33%">
                <li class="list-group-item active"style="background-color: darkturquoise"><strong>Was kann Exitheca!</strong></li>
                <li class="list-group-item">Übersicht aller Bücher, Filme, Musik</li>
                <li class="list-group-item">Sie können den Regalplatz definieren, so findet man alles wieder.</li>
                <li class="list-group-item">Was verliehen? Kein Problem, auch dafür ist gesorgt.</li>
                <li class="list-group-item">Sie wollen Tags, sie bekommen Tags mit Filterfunktion.</li>
            </ul>
        </div>
            <div class="d-flex justify-content-center mb-5" >
                <ul class="list-group  mr-4 text-center" style="width: 33%">
                    <li class="list-group-item active" style="background-color: darkblue"><strong>Was tun bei Fehlern?</strong></li>
                    <li class="list-group-item">Der Admin kann es vielleicht richten, gelöscht ist aber futsch.</li>
                    <li class="list-group-item">Nicht verzweifeln, alles ist gut solange du Wild bist. </li>
                    <li class="list-group-item">Kreischend und Haareraufend umherlaufen.</li>
                    <li class="list-group-item">Einfach Cool bleiben, Sie haben bestimmt ein Back-Up ;-).</li>
                </ul>

                <ul class="list-group  mr-4 text-center"  style="width: 33%">
                    <li class="list-group-item active" style="background-color: darkturquoise"><strong>Was kostet Exitheca?</strong></li>
                    <li class="list-group-item">Unbezahlbar</li>
                    <li class="list-group-item">Nix, weil noch in der Alpha-Phase.</li>
                    <li class="list-group-item">Nerven und Zeit beim eintippen aller Bücher.</li>
                    <li class="list-group-item">Keine Freundschaften oder Beziehungen, weil Sie endlich Ihren Scheiss finden.</li>
                </ul>

                <ul class="list-group  mr-4 text-center"  style="width: 33%">
                    <li class="list-group-item active" style="background-color: darkblue"><strong>Was kann Exitheca nicht?</strong></li>
                    <li class="list-group-item">Es kümmert sich nicht darum, welche Ordnung sie mögen.</li>
                    <li class="list-group-item">Alles für Sie erledigen.</li>
                    <li class="list-group-item">Verliehenes müssen Sie sich selber wieder besorgen.</li>
                    <li class="list-group-item">Halten Sie Exitheca bitte nicht für die Eierlegendewollmilch Sau. </li>
                </ul>
            </div>
    <div>
        <b>Impressum</b>

        Informationspflicht laut §5 E-Commerce Gesetz, §14 Unternehmensgesetzbuch, §63 Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.

        MusterFirma
        Max Mustermann
        Musterstrasse 1, Stiege 1 Tür 1,
        1234 Musterhausen,
        Österreich

        Unternehmensgegenstand: IT Dienstleistungen
        UID-Nummer: ATU12345678

        Tel.: 01234/56789
        Fax: 01234/56789-0

        Mitglied bei: WKO, Landesinnung, etc.
        Berufsrecht: Gewerbeordnung: www.ris.bka.gv.at

        Aufsichtsbehörde/Gewerbebehörde: Bezirkshauptmannschaft Musterhausen
        Berufsbezeichnung: Webdesigner, Grafiker
        Verleihungsstaat: Österreich

        Blattlinie
        z.B. Informationen rund um Schönheitsbehandlungen und Schönheitsoperationen sowie kosmetische Behandlungen und Erfahrungsberichte darüber.

        Quelle: Erstellt mit dem Impressum Generator von firmenwebseiten.at in Kooperation mit pressefeuer.at
        EU-Streitschlichtung

        Angaben zur Online-Streitbeilegung: Verbraucher haben die Möglichkeit, Beschwerden an die OnlineStreitbeilegungsplattform der EU zu richten: https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&lng=DE. Sie können allfällige Beschwerde auch an die oben angegebene E-Mail-Adresse richten.
        Haftung für Inhalte dieser Webseite

        Wir entwickeln die Inhalte dieser Webseite ständig weiter und bemühen uns korrekte und aktuelle Informationen bereitzustellen. Leider können wir keine Haftung für die Korrektheit aller Inhalte auf dieser Webseite übernehmen, speziell für jene die seitens Dritter bereitgestellt wird. Sollten Ihnen problematische oder rechtswidrige Inhalte auffallen, bitte wir Sie uns umgehend zu kontaktieren, Sie finden die Kontaktdaten im Impressum.
        Haftung für Links auf dieser Webseite

        Unsere Webseite enthält Links zu anderen Webseiten für deren Inhalt wir nicht verantwortlich sind. Wenn Ihnen rechtswidrige Links auf unserer Webseite auffallen, bitte wir Sie uns zu kontaktieren, Sie finden die Kontaktdaten im Impressum.
        Urheberrechtshinweis

        Alle Inhalte dieser Webseite (Bilder, Fotos, Texte, Videos) unterliegen dem Urheberrecht. Falls notwendig, werden wir die unerlaubte Nutzung von Teilen der Inhalte unserer Seite rechtlich verfolgen.
        Bildernachweis

        Die Bilder, Fotos und Grafiken auf dieser Webseite sind urheberrechtlich geschützt.

        Die Bilderrechte liegen bei den folgenden Fotografen und Unternehmen:

        Fotograf Mustermann
        AdSimple Bilder

    </div>
@endsection
