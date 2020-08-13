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
                <img class="d-block w-100" src="img/carousel/books.jpg" style="max-height: 90vh; max-width: fit-content" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel/dvds.jpg"  style="max-height: 90vh; max-width: fit-content" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/carousel/vinyls.jpg" style="max-height: 90vh; max-width: fit-content"  alt="Third slide">
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
                <li class="list-group-item active" style="background-color: #BDBDBF"><strong>Was ist Exitheca!</strong></li>
                <li class="list-group-item">Eine Datenbank mit Extras</li>
                <li class="list-group-item">Immer und überall Zugriff auf ihre Daten</li>
                <li class="list-group-item">Übersicht über ihre Schätze</li>
                <li class="list-group-item">Einfach Cool</li>
            </ul>

            <ul class="list-group  mr-4 text-center"  style="width: 33%">
                <li class="list-group-item active" style="background-color: #5580A0"><strong>Was bietet Exitheca!</strong></li>
                <li class="list-group-item">Übersicht</li>
                <li class="list-group-item">Sicherheit</li>
                <li class="list-group-item">Knopf im Taschentuch</li>
                <li class="list-group-item">Ein Must-Have</li>
            </ul>

            <ul class="list-group  mr-4 text-center"  style="width: 33%">
                <li class="list-group-item active"style="background-color: #BDBDBF"><strong>Was kann Exitheca!</strong></li>
                <li class="list-group-item">Übersicht aller Bücher, Filme, Musik</li>
                <li class="list-group-item">Sie können den Regalplatz definieren, so findet man alles wieder.</li>
                <li class="list-group-item">Was verliehen? Kein Problem, auch dafür ist gesorgt.</li>
                <li class="list-group-item">Sie wollen Tags, sie bekommen Tags mit Filterfunktion.</li>
            </ul>
        </div>
            <div class="d-flex justify-content-center mt-4" >
                <ul class="list-group  mr-4 text-center" style="width: 33%">
                    <li class="list-group-item active" style="background-color: #5580A0"><strong>Was tun bei Fehlern?</strong></li>
                    <li class="list-group-item">Der Admin kann es vielleicht richten, gelöscht ist aber futsch.</li>
                    <li class="list-group-item">Nicht verzweifeln, alles ist gut solange du Wild bist. </li>
                    <li class="list-group-item">Kreischend und Haareraufend umherlaufen.</li>
                    <li class="list-group-item">Einfach Cool bleiben, Sie haben bestimmt ein Back-Up ;-).</li>
                </ul>

                <ul class="list-group  mr-4 text-center"  style="width: 33%">
                    <li class="list-group-item active" style="background-color: #BDBDBF"><strong>Was kostet Exitheca?</strong></li>
                    <li class="list-group-item">Unbezahlbar</li>
                    <li class="list-group-item">Nix, weil noch in der Alpha-Phase.</li>
                    <li class="list-group-item">Nerven und Zeit beim eintippen aller Bücher.</li>
                    <li class="list-group-item">Keine Freundschaften oder Beziehungen, weil Sie endlich Ihren Scheiss finden.</li>
                </ul>

                <ul class="list-group  mr-4 text-center"  style="width: 33%">
                    <li class="list-group-item active" style="background-color: #5580A0"><strong>Was kann Exitheca nicht?</strong></li>
                    <li class="list-group-item">Es kümmert sich nicht darum, welche Ordnung sie mögen.</li>
                    <li class="list-group-item">Alles für Sie erledigen.</li>
                    <li class="list-group-item">Verliehenes müssen Sie sich selber wieder besorgen.</li>
                    <li class="list-group-item">Halten Sie Exitheca bitte nicht für die Eierlegendewollmilch Sau. </li>
                </ul>
            </div>
@endsection
