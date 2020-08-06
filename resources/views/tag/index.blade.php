@extends('layouts.app')

@section('title', 'Meine Bücher')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Alle Tags</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($tags as $tag)
                            <li class="list-group-item" >
                               <span style="font-size: 130%" class="mr-2 badge badge-{{ $tag->style }} ">{{$tag->name}}</span> ({{ $tag->style }})

                                <form style="display: inline" action="/tag/{{ $tag->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-outline-danger btn-sm ml-2 float-right" type="submit" value="löschen">
                                </form>
                                <a class="ml-2 btn btn-outline-primary btn-sm float-right" href="/tag/{{ $tag->id }}/edit" ><i class="fas fa-pen-alt"></i>Bearbeiten</a>
                            </li>
                        @endforeach
                    </ul>
                    <a class="btn btn-success btn-sm mt-3" href="/tag/create" data-toggle="tooltip" data-placement="top" title="Tag hinzufügen"><i class="fas fa-plus-circle "></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
