@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>
        <a class="p-2 text-dark" href="{{route('region.index')}}"> Область</a>
        <a class="p-2 text-dark" href="{{route('city.index')}}"> Місто</a>
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
    <div class="row">
        <div class="col-5">
            <a class="btn btn-success" href="{{route('transport.create')}}"> Створити транспорт</a>
        </div>
        <div class="col-5">
            <a class="btn btn-info" href="{{route('course.index')}}"> Маршрути</a>
        </div>
        <div class="col-2">
            <a class="btn btn-warning" href="{{route('city.index')}}"> Міста</a>
        </div>
        <hr>
    </div>

    <hr>
    <table class="table table-dark">
        <thead>
        <tr>

            <th scope="col">№</th>
            <th scope="col">Назва транспорту</th>
            <th scope="col">Назва маршруту</th>
            <th scope="col">Тип транспорту</th>
            @foreach( $transport as $transports)
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"> {{$transports->id ?? ''}}
            </th>
            <td>{{$transports->transport_name ?? ''}}</td>
            <td>{{$transports->courses->title ?? ''}}</td>
            <td>{{$transports->transport_type ?? ''}}</td>

            <td>
                <a type="button" class="btn btn-primary" href="{{route('transport.edit',$transports)}}
                    ">Оновити транспорт</a></td>
            {{----}}
            {{--            <td><a class="btn btn-secondary" href="{{route('transport.show',$transports)}}">Переглянути</a></td>--}}
            {{--            <td><a class="btn btn-secondary" href="{{route('region.show',$course->city_id)}}">Переглянути</a></td>--}}

            <td>
                <form action="{{ route('transport.destroy', $transports->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Видалити маршрут</button>
                </form>

            </td>
            @endforeach

        </tr>
{{--        {{dd($transports->city->id)}}--}}

        </tbody>
    </table>

</div>
