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
                                @if(file_exists("img/library/" . $library->id . "_thumb.jpg"))
                                    <a class="mr-1" title="Details anzeigen" href="/library/{{ $library->id }}">
                                        <img src="/img/library/{{ $library->id }}_thumb.jpg" alt="thumb"></a>
                                @endif
                                {{$library->titel}}

                                <a class=" ml-2" href="/library/{{ $library->id }}">Detail</a>
                                 <a class="ml-2 btn btn-outline-primary btn-sm" href="/library/{{ $library->id }}/edit" ><i class="fas fa-pen-alt"></i>Bearbeiten</a>
                                <button onclick=" confirm_delete('Das Medium','{{ $library->name }}', 'library', '{{ $library->id }}')" class="btn btn-outline-danger btn-sm ml-2">Löschen</button>

                                <br>{{--Tags angeben bei den Einträgen --}}
                                @foreach($library->tags as $tag)
                                    <a class="badge badge-{{ $tag->style }}" href="/library/tag/{{$tag->id}}">{{ $tag->name }}</a>
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                    @auth
                    <a class="btn btn-success btn-sm mt-3" href="/library/create"><i class="fas fa-plus-circle"></i> </a>
                    @endauth
{{--                    <div class="mt-3">--}}
{{--                        {{ $library->links() }}--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        @include('_partials.deleteForm')
    </div>

</div>
@endsection
