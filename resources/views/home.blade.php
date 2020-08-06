@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Meine Seite</div>
                        <div class="card-body">
                            <div class="row">
                                    <h2 class="ml-3">Hallo {{auth()->user()->name }}</h2>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                                        @if($libraries->count() > 0)

                                            <h5>Verliehen:</h5>
                                        @endif
                                        <ul class="list-group">
                                        @foreach($libraries as $library)
                                                @isset($library->verliehen)
                                                <li class="list-group-item">
                                                    @if(file_exists("img/library/" . $library->id . "_thumb.jpg"))
                                                        <a class="mr-1" title="Details anzeigen" href="/library/{{ $library->id }}">
                                                            <img src="/img/library/{{ $library->id }}_thumb.jpg" alt="thumb"></a>
                                                    @endif

                                                    <a class="ml-2 btn btn-sm btn-outline-primary float-right"
                                                       href="/library/{{ $library->id }}/edit"><i class="fas fa-edit"></i> Bearbeiten</a>

                                                    <span class="float-right">{{$library->updated_at->format('d-m-Y')}}</span>
                                                    {{ $library->titel }}
                                                        <a class="ml-2" href="/library/{{ $library->id }} " data-toggle="tooltip" data-placement="top" title="Details" ><i class="fas fa-search-plus"></i></a>

                                                        <br>
                                                    @foreach($library->tags as $tag)
                                                        <a class=" mt-3 badge badge-{{$tag->style}}" href="/library/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                                                    @endforeach
                                                </li>
                                                @endisset
                                                @endforeach
                                        </ul>


                                    <a class="btn btn-success btn-sm mt-3   " href="/library/create" data-toggle="tooltip" data-placement="top" title="Medium hinzufügen"><i class="fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection
