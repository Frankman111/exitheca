@extends('layouts.app')

@section('title', 'Meine Bücher')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alle Bücher</div>

                <div class="card-body">
                    <p><b>{{ $library->titel }}</b></p>
                    <p>{{ $library->beschreibung }}</p>
                    <a class="btn btn-success btn-sm mt-3" href="/library"><i class="fas fa-arrow-c#"></i>Zurück</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
