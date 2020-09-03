@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-header"> Привіт ! {{Auth::user()->name}}</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
{{--                            @foreach($cards as $card)--}}

{{--                                <h3>{{ $cards->id }}</h3>--}}
{{--                                <h3>{{ $cards->name }}</h3>--}}

{{--                                <ul>--}}
{{--                                </ul>--}}
{{--                            @endforeach--}}
                            @csrf
                            {{ __('Ви увійшли в систему!') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>


@endsection
