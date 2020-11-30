@extends('layouts.app')
@section('content')



    <div class="container ml-5 ">

        <div class="row">

            <div class="col-md-5 mx-auto">
                <h3>Створити Картку</h3>
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

                    <form method="post" action="{{route('cabinet.store')}}">
                        @csrf
                        <input type="text"
                               placeholder=" ххх-хх-ххх"
                               name="number"
                               id="" class="form-control">
                        <br>
                        @csrf

                        <button class="btn btn-success">Створити</button>
                        <br>
                        @csrf
                    </form>
                </div>

            </div>
        </div>



@endsection
