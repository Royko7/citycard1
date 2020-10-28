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
<div class="container">
    <div class="row">
        <div class="col-3">
            <a class="btn btn-secondary" href="{{route('region.index')}}"> << Назад</a>
        </div>
        <h2>{{$region->region_name}} область</h2>
        <div class="col-3">
            <a class="btn btn-success" href="{{route('city.create')}}"> Створити місто</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Місто</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        @foreach($region->cities->all() as $regions)
            <tr>
                <th scope="row">{{$regions->id}}</th>
                <td>
                    {{$regions->city_name}}
                </td>
                <td>
                    <a type="button" class="btn btn-primary" href="{{route('city.edit',$regions)}}
                        ">Оновити Місто</a>
                </td>
                <td>
                    <a class="btn btn-secondary" href="{{route('city.show',$regions)}}">Переглянути</a>
                </td>

                <td>
                    <form action="{{ route('city.destroy', $regions->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Видалити місто</button>
                    </form>
                </td>

                {{--                    @endif--}}
                {{--                {{var_dump($cities)}}--}}
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
