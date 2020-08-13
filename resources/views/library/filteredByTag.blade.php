@extends('layouts.app')

@section('title', 'Meine Medien')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Alle Medien</b></div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($libraries as $library)

                            <li class="list-group-item">

                                @if(file_exists("img/library/" . $library->id . "_thumb.jpg"))
                                    <a class="mr-1" title="Details anzeigen" href="/library/{{ $library->id }}">
                                        <img src="/img/library/{{ $library->id }}_thumb.jpg" alt="thumb"></a>
                                @endif
                                {{-- Titelausgabe in der "Alle Medien" Ansicht--}}
                                <span style="font-size: large"><b>{{$library->titel}}</b></span>

                                <a class=" ml-2" href="/library/{{ $library->id }}" data-toggle="tooltip" data-placement="top" title="Details"><i class="fas fa-search-plus"></i></a>


                                    <form style="display: inline" action="/library/{{ $library->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-outline-danger btn-sm float-right" type="submit" value="löschen">
                                    </form>
                                    <a class="mr-2 btn btn-outline-primary btn-sm float-right" href="/library/{{ $library->id }}/edit" ><i class="fas fa-pen-alt"></i>Bearbeiten</a>
{{--                                    --}}{{--Ausgabe des Mediums --}}
{{--                                    <span class="badge badge-pill badge-danger float-right mr-3" style="font-size: large">{{$library->medium}}</span>--}}
                                    <div>
                                    {{--Tags angeben bei den Einträgen --}}
                                    @foreach($library->tags as $tag)
                                        <a class=" mt-3 badge badge-{{ $tag->style }}" href="/library/tag/{{$tag->id}}">{{ $tag->name }}</a>
                                    @endforeach
                                    </div>
                            </li>

                        @endforeach
                    </ul>
                    @auth
                    <a class="btn btn-success btn-sm mt-3" href="/library/create" data-toggle="tooltip" data-placement="top" title="Medium hinzufügen"><i class="fas fa-plus-circle" ></i></a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        {{ $libraries->links() }}
    </div>
</div>
@endsection
