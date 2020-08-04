@extends('layouts.app')

@section('title', 'Meine Bücher')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alle Bücher</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($libraries as $library)

                            <li class="list-group-item">
{{--                                Bilder nach Tags sortiert mit anzeigen--}}
                                @if(file_exists("img/library/" . $library->id . "_thumb.jpg"))
                                    <a class="mr-1" title="Details anzeigen" href="/library/{{ $library->id }}">
                                        <img src="/img/library/{{ $library->id }}_thumb.jpg" alt="thumb"></a>
                                @endif

                                {{$library->titel}}
                                <a class=" ml-2" href="/library/{{ $library->id }}">Detail</a>



                                <a class="ml-2 btn btn-outline-primary btn-sm float-right" href="/library/{{ $library->id }}/edit" ><i class="fas fa-pen-alt"></i>Bearbeiten</a>
                                <form style="display: inline" action="/library/{{ $library->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-outline-danger btn-sm float-right" type="submit" value="löschen">
                                </form>

                                <div>
                                {{--Tags angeben bei den Einträgen --}}
                                @foreach($library->tags as $tag)
                                    <span class="badge badge-{{ $tag->style }} ">{{ $tag->name }}</span>
                                @endforeach
                                </div>
                            </li>

                        @endforeach
                    </ul>
                    @auth
                    <a class="btn btn-success btn-sm mt-3" href="/library/create"><i class="fas fa-plus-circle "></i> Neues Buch anlegen</a>
                    @endauth

{{--                    <div class="mt-3">--}}
{{--                        {{ $libraries->links() }}--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
