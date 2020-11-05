@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>
        <a class="p-2 text-dark" href="{{route('city.index')}}"> Місто</a>
        <a class="p-2 text-dark" href="{{route('course.index')}}"> Маршрут</a>
        <a class="p-2 text-dark" href="{{route('transport.index')}}"> Транспорт</a>

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
<div class="col-sm-12">

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
</div>
<div class="container">
    <a type="button" class="btn btn-primary" href="{{route('region.create')}}">Створити Область</a>
    <hr>
    <h2>Список областей</h2>
    <hr>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">№</th>
            @foreach( $region as $regions)
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$regions->id}}</th>
            <td>{{$regions->region_name}}</td>
            <td><a type="button" class="btn btn-primary" href="{{route('region.edit',$regions)}}
                    ">Оновити Область</a></td>
            <td><a class="btn btn-secondary" href="{{route('region.show',$regions->id)}}">Переглянути</a></td>
            <td>
                <form action="{{ route('region.destroy', $regions->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Видалити Область</button>
                </form>
            </td>
            @endforeach
        </tr>
        </tbody>
    </table>
</div>

