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
                                {{$library->titel}}
                                <a class=" ml-2" href="/library/{{ $library->id }}">Detail</a>
                                <a class="ml-2 btn btn-outline-primary btn-sm" href="/library/{{ $library->id }}/edit" ><i class="fas fa-pen-alt"></i>Bearbeiten</a>
                                <form style="display: inline" action="/library/{{ $library->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-outline-danger btn-sm ml-2" type="submit" value="löschen">
                                </form>
                            </li>
                        @endforeach
                    </ul>
                    <a class="btn btn-success btn-sm mt-3" href="/library/create"><i class="fas fa-plus-circle "></i> Neues Buch anlegen</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
