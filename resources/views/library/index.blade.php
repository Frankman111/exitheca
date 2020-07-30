@extends('layouts.app')

@section('title', 'Information')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alle Bücher</div>

                <div class="card-body">
                 <ul class="list-group">
                     @foreach($libraries as $library)
                         <li class="list-group-item">{{$library->name}}</li>
                     @endforeach
                 </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
