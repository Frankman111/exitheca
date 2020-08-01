@extends('layouts.app')

@section('title', 'Meine Bücher')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alle Bücher</div>

                    <div class="card-body">

                        <form action = "/library/{{ $library->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titel">Titel</label>
                                <input type="text" class="form-control {{ $errors->has('titel') ? 'border-danger' : '' }}" id="titel" titel="titel" value="{{ $library->titel ?? old('titel') }}">
                                <small class="form-text text-danger">{!! $errors->first('titel') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung</label>
                                <textarea class="form-control {{ $errors->has('beschreibung') ? 'border-danger' : '' }}" id="beschreibung" titel="beschreibung" rows="5">{{ $library->beschreibung ?? old('beschreibung') }}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('beschreibung') !!}</small>
                            </div>
                            <input class="btn btn-primary mt-4" type="submit" value="absenden">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
