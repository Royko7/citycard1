@extends('layouts.app')

@section('content')

    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-header">
            Номер картки  |<b> {{$data_card->number}}</b>
        </div>
        @foreach($history as $value)
        @endforeach

        <ul class="list-group list-group-flush">
            <li class="list-group-item">Остання поїздка | {{$value->created_at}}<b></b> </li>
            <li class="list-group-item">Останнє поповнення  | {{$value->updated_at}}<b></b></li>
        </ul>
    </div>


@endsection
