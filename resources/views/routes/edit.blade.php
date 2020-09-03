@extends('admin.admin')

@section('content')
    <div class="container ml-5 ">

        <div class="row">

            <div class="col-md-5 mx-auto">
                <h3>Рагувати маршут</h3>
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

                    <form method="post" action="{{route('routes.update',$routes)}}">
                        @csrf
                        @method('PATCH')
                        <input type="text"
                               placeholder="{{$routes->city}}"
                               name="city"
{{--                               value="{{old('city')}}"--}}
                               id="" class="form-control">
                        <br>
                        @csrf
                        <input type="text"
                               placeholder="{{$routes->ticket_type}}"
                               name="ticket_type" id=""
{{--                               value="{{old('ticket_type')}}"--}}
                               class="form-control">
                        <br>
                        <input type="text"
                               placeholder="{{$routes->transport_type}}"
                               name="transport_type" id=""
{{--                               value="{{old('transport_type')}}"--}}
                               class="form-control">
                        <br>

                        <button class="btn btn-success">Редагувати</button>
                        <br>
                        @csrf
                    </form>
                </div>

            </div>
        </div>
@endsection
