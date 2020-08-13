@extends('layouts.app')

@section('title', 'Meine Tags')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Neuen Tag anlegen</b></div>

                    <div class="card-body">

                        <form action="/tag" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" id="name" name="name" value="{{ old('name') }}">
                                <small class="form-text text-danger">{!! $errors->first('name') !!}</small>
                            </div>
                            <div class="form-group">
                                <label for="style">Style</label>
                                <input type="text" class="form-control {{ $errors->has('style') ? 'border-danger' : '' }}" id="style" name="style" value="{{ old('style') }}">
                                <small class="form-text text-danger">{!! $errors->first('style') !!}</small>
                            </div>

                            <input class="btn btn-primary mt-4" type="submit" value="absenden">

                            <a class="btn btn-primary btn-sm mt-3 float-right" href="/tag"><i class="fas fa-arrow-circle-up "></i> Zurück</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
