@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>
        <a class="p-2 text-dark" href="{{url('/routes')}}"> Crud</a>

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

<div class="card mx-auto" style="width: 18rem;">
    <div class="card-header">
       Місто  |<b> {{$routes->city}}</b>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Тип квитка | <b>{{$routes->ticket_type}}</b> </li>
        <li class="list-group-item">Тип  транспорту  | <b>{{$routes->transport_type}}</b></li>
    </ul>
</div>
