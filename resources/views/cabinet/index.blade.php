@extends('layouts.app')
@section('content')


                <div class="row ml-5">
                    <a href="{{route('cabinet.create')}}" class="btn btn-primary">Створити картку</a>
                </div>
{{--<a href="{{route('cabinet.create')}}" class="btn btn-info">Детальніше</a>--}}
                <br>




        {{--<div class="container p-3">--}}
        <div class="row ">
            @foreach($data_user as $user)

            {{--        <div class="col-2">--}}

            @foreach($data_card as $card)
                {{--<ul>--}}
                <div class="card ml-5" style="width: 18rem;">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <svg width="2em" height="1.3em" viewBox="0 0 16 16" class="bi bi-phone-fill"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg> {{$user->phone}}</li>


                        <li class="list-group-item">
                            <svg width="2em" height="1.3em" viewBox="0 0 16 16" class="bi bi-credit-card-fill"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4z"/>
                                <path fill-rule="evenodd"
                                      d="M0 7v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H3z"/>
                            </svg> {{$card->number}} </li>

                        <li class="list-group-item"><i class="fas fa-hryvnia"></i>
                            Баланс : {{$card->balance}} Грн
                        </li>

                    </ul>

                    <div class="card-footer">
                        <h7>Id картки</h7> {{$card->id}}
                    </div>
                    <a href="{{route('cabinet.show' ,$card)}}" class="btn btn-info">Детальніше</a>
{{--                    <button type="button" class="btn btn-info">Детальніше</button>--}}

                </div>
                <br>
                <br>

            @endforeach

            @endforeach


@endsection
