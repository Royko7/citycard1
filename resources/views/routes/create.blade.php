@extends('layouts.app')

@section('content')
    <div class="container ml-5 ">

        <div class="row">

            <div class="col-md-5 mx-auto">
                <h3>Створити маршут</h3>
                <br>
                <div class="form-group ">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ui>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>

                                @endforeach
                            </ui>
                        </div>
                        <br>
                    @endif

                    <form method="post" action="{{route('routes.store')}}">
                        @csrf
                        <input type="text"
                               placeholder=" Місто"
                               name="city"
                               value="{{old('city')}}"
                               id="" class="form-control">
                        <br>
                        @csrf
                        <input type="text"
                               placeholder="Білет"
                               name="ticket_type" id=""
                               value="{{old('ticket_type')}}"
                               class="form-control">
                        <br>
                        <input type="text"
                               placeholder="Транспорт"
                               name="transport_type" id=""
                               value="{{old('transport_type')}}"
                               class="form-control">
                        <br>

                        <button class="btn btn-success">Створити</button>
                        <br>
                        @csrf
                    </form>
                </div>

            </div>
        </div>
@endsection


