@extends('layouts.app')

@section('title', 'Meine Bücher')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alle Bücher</div>

                    <div class="card-body">

                        <form action="">
                            <div class="form-group">
                                <label for="titel">Titel</label>
                                <input type="text" class="form-control" id="titel" name="titel">
                            </div>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung</label>
                                <input type="text" class="form-control" id="beschreibung" name="beschreibung">
                            </div>
                            <input class="btn btn-primary mt-3" type="submit" value="absenden">
                            <a class="btn btn-primary btn-sm mt-3 float-right" href="/library"><i class="fas fa-arrow-circle-up "></i> Zurück</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
