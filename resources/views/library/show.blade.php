@extends('layouts.app')

@section('title', 'Meine Medien')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Medien Details</b></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <p><b>{{ $library->titel }}</b></p>
                            <p>{{ $library->beschreibung }}</p>


                           @isset($library->verliehen)
                               <b>Verliehen an:</b>
                            <p>{{ $library->verliehen }}</p>
                            @endisset

                            @if($library->tags->count()>0)
                            <p>
                                <b>Verknüpfte Tags:</b> (klicken zum entfernen)<br>
                                @foreach($library->tags as $tag)
                                  <a class="badge badge-{{ $tag->style }}" href="/library/{{ $library->id }}/tag/{{ $tag->id }}/detach">{{ $tag->name }}</a> {{--  Tags in der Detailansicht anzeigen--}}
                                @endforeach
                            </p>
                            @endif

                            <p>
                                <b>Verfügbare Tags: </b> (klicken zum hinzufügen)<br>
                                @foreach($openTags as $tag)
                                  <a class="badge badge-{{ $tag->style }}" href="/library/{{ $library->id }}/tag/{{ $tag->id }}/attach">{{ $tag->name }}</a> {{--  Tags in der Detailansicht anzeigen--}}
                                @endforeach
                            </p>
                            </div>
                            <div class="col-md-3">
                                @if(file_exists("img/library/" . $library->id . "_large.jpg"))
                                    <a href="/img/library/{{ $library->id }}_large.jpg" data-lightbox="{{ $library->id }}_large.jpg" data-title="{{ $library->titel }}">
                                        <img class="img-fluid" src="/img/library/{{ $library->id }}_large.jpg" alt="">
                                    </a>
                                    <i class="fa fa-search-plus"></i> Bild anklicken zum Vergrößern
                                @endif


                            </div>


                           @if( !(strstr(URL::previous(), '/library/'))) {{-- Bei Tags zuordnen kein zurück btn -> dreht sich sonst im Kreis--}}
                            <a class="btn btn-success btn-sm mt-3" href="{{ URL::previous() }}"><i class="fas fa-arrow-circle-up"></i> Zurück</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
