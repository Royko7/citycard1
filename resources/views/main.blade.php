
@extends('layouts.app')

@section('content')


    <div class="row">
        @foreach($new as $item)

            <div class="col-md-3">

                <h2>{{$item->title}}</h2>
                <p>{!! $item->short_body !!} </p>
                <p><a class="btn btn-secondary" href="{{route('new.show',$item->id)}}" role="button">Переглянути </a></p>
                <hr>
            </div>
            <hr>
        @endforeach
            <hr>
    </div>

@endsection

