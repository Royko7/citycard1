@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>

    </nav>
    <span class="btn btn-outline-primary mr-2>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('frm-logout').submit();">
    Logout
    {{--        </a>--}}
    </span>
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="margin-right: 20px;">
        {{ csrf_field() }}
    </form>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br/>
@endif

@foreach($price as $prices)

@endforeach
{{--{{dd($prices->ticket)}}--}}
{{--{{dd($prices->ticketType)}}--}}
<div class="container">
    <h2>Створити ціну</h2>

    <form method="post" action="{{route('price.store')}}">
        @csrf
        <div class="row">

            <div class="col-3">
                <select class="custom-select" name="course_type_id" id="inputGroupSelect01">
                    @foreach($prices->courseType->get() as $course_type)
                        <option name="course_type_id" value="{{$course_type->id}}">
                            {{$course_type->course_type}}
                            @endforeach
                        </option>
                </select>
            </div>
            <div class="col-3">
                <select class="custom-select" name="transport_id" id="inputGroupSelect01">
                    @foreach($prices->transportType->get() as $transport_type )
                        <option name="transport_id" value="{{$transport_type->id}}">
                            {{($transport_type->transport_type)}}
                            @endforeach
                        </option>
                </select>
            </div>
            <div class="col-3">
                <select class="custom-select" name="ticket_id" id="inputGroupSelect01">
                    @foreach($prices->ticketType->get() as $ticket_type)
                        <option name="course_id" value="{{$ticket_type->id}}">
                            {{$ticket_type->ticket_type}}
                            @endforeach
                        </option>
                </select>
            </div>
            <div class="col-3">
                <select class="custom-select" name="course_id" id="inputGroupSelect01">
                    <option value="">
                        Маршрут

                    </option>
                    @foreach($prices->course->get() as $courses)

                        <option name="course_id" value="{{$courses->id}}">
                            {{$courses->title}}
                            @endforeach
                        </option>
                </select>

                {{--                {{dd($courses)}}--}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <br><input class="form-control" type="text" name="price" placeholder="Ціна">
                <br>
            </div>
            <div class="col-4">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Створити</button>
    </form>
</div>
