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
                         <li class="list-group-item">{{$library->titel}}</li>
                     @endforeach
                 </ul>

                    <!-- create new Book button -->
                    <a class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus-circle"></i> Neues Buch</a>

                    <!-- create new BookModal -->
                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">neues Buch anlegen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Titel</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="beschreibung">Beschreibung</label>
                                            <textarea class="form-control" id="beschreibung" name="beschreibung" rows="5"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Schliessen</button>
                                    <button type="button" class="btn btn-primary">Absenden</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
