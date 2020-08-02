@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meine Seite</div>

                <div class="card-body">
                    <h2>Hallo {{ auth()->user()->name }}</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @isset($libraries)
                        @if($libraries->count()>0)
                            <h5>Deine Bücher</h5>
                        @endif
                        <ul class="list-group">
                        @foreach($libraries as $library)
                        <li class="list-group-item">
                            {{$library->titel}}
                            <a class=" ml-2" href="/library/{{ $library->id }}">Detail</a>

                            <a class="ml-2 btn btn-outline-primary btn-sm" href="/library/{{ $library->id }}/edit" ><i class="fas fa-pen-alt"></i>Bearbeiten</a>

                            <form style="display: inline" action="/library/{{ $library->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-danger btn-sm ml-2" type="submit" value="löschen">
                            </form>
                            <div class="float-right">

                                {{ $library->created_at }}

                            </div>
                            <br>{{--Tags angeben bei den Einträgen --}}
                            @foreach($library->tags as $tag)
                                <a class="badge badge-{{ $tag->style }}" href="/library/tag/{{$tag->id}}">{{ $tag->name }}</a>
                            @endforeach
                        </li>
                        @endforeach
                        </ul>
                    @endisset
                        <a class="btn btn-success btn-sm mt-3" href="/library/create"><i class="fas fa-plus-circle"></i>neues Buch anlegen</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
