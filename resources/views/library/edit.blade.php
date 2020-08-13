@extends('layouts.app')

@section('title', 'Meine Medien')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Medium bearbeiten</b></div>

                    <div class="card-body">

                        <form autocomplete="off" action="/library/{{ $library->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="titel">Titel</label>
                                <input type="text" class="form-control {{ $errors->has('titel') ? 'border-danger' : '' }}" id="titel" name="titel" value="{{ old('titel') ?? $library->titel }}">
                                <small class="form-text text-danger">{!! $errors->first('titel') !!}</small>

                            </div>
                            <div class="mb-2">
                                @if(file_exists("img/library/" . $library->id . "_large.jpg"))
                                        <img style="max-width: 400px; max-height: 300px;"  src="/img/library/{{ $library->id }}_large.jpg" alt="large">
                                        <div class="float-right">
                                            <a class="btn btn-sm btn-outline-danger" href="/delete-image/library/{{ $library->id  }}">Bild löschen</a>
                                        </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="titel">Bild</label>
                                <input type="file" class="form-control {{ $errors->has('bild') ? 'border-danger' : '' }}" id="bild" name="bild" value="">
                                <small class="form-text text-danger">{!! $errors->first('bild') !!}</small>

                            </div>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung</label>
                                <textarea class="form-control {{ $errors->has('beschreibung') ? 'border-danger' : '' }}" id="beschreibung" name="beschreibung" rows="5">{{ old('beschreibung') ?? $library->beschreibung }}</textarea>
                                <small class="form-text text-danger">{!! $errors->first('beschreibung') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="verliehen">Verliehen an:</label>
                                <input type="text" class="form-control {{ $errors->has('verliehen') ? 'border-danger' : '' }}" id="verliehen" name="verliehen" value="{{old('verliehen')?? $library->verliehen}}">
{{--                                <div class="mt-3">--}}
{{--                                    <label class="mr-3"  for="medium">Medium:</label>--}}
{{--                                    <label class="mr-3"><input type="checkbox" name="medium" value="Blu-Ray"> Blu-Ray</label>--}}
{{--                                    <label class="mr-3"><input type="checkbox" name="medium" value="DVD"> DVD</label>--}}
{{--                                    <label><input type="checkbox" name="medium" value="Buch"> Buch</label>--}}
{{--                                </div>--}}
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
