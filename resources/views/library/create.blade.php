@extends('layouts.app')

@section('title', 'Meine Bücher')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alle Bücher</div>

                    <div class="card-body">

                        <form autocomplete="off" action="/library" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="titel">Titel</label>
                                <input type="text" class="form-control {{ $errors->has('titel') ? 'border-danger' : '' }}" id="titel" name="titel" value="{{ old('titel') }}">
                                <small class="form-text text-danger">{!! $errors->first('titel') !!}</small>

                            </div>
                            <div class="form-group">
                                <label for="titel">Bild</label>
                                <input type="file" class="form-control {{ $errors->has('bild') ? 'border-danger' : '' }}" id="bild" name="bild" value="">
                                <small class="form-text text-danger">{!! $errors->first('bild') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung</label>
                                <textarea class="form-control {{ $errors->has('beschreibung') ? 'border-danger' : '' }}" id="beschreibung" name="beschreibung" rows="5">{{ old('beschreibung') }}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('beschreibung') !!}</small>
                            </div>
                            <div class="form-group " >

                                <label for="titel">Verliehen</label>
                                <input type="text" class="form-control {{ $errors->has('verliehen') ? 'border-danger' : '' }}" id="verliehen" name="verliehen" value="">

                                <form method="post" action="{{ route('library.store') }}" enctype="multipart/form-data">

                                    @csrf


                                    <div class="form-group form-control {{ $errors->has('medium') ? 'border-danger' : '' }}">

                                        <label><strong>Medium :</strong></label><br>
                                        <label><input type="checkbox" name="medium" value="Blu-Ray"> Blu-Ray</label>
                                        <label><input type="checkbox" name="medium" value="DVD"> DVD</label>
                                        <label><input type="checkbox" name="medium" value="Buch"> Buch</label>
                                    </div>


                            <input class="btn btn-primary mt-4" type="submit" value="absenden">

                            <a class="btn btn-primary btn-sm mt-3 float-right" href="/library"><i class="fas fa-arrow-circle-up "></i> Zurück</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
