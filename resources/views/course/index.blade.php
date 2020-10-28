@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>
        {{--        <a class="p-2 text-dark" href="{{route('region.index')}}"> Області</a>--}}

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
            <a class="btn btn-success" href="{{route('city.create')}}"> Створити місто</a>
        </div>
        <div class="col-5">
            <a class="btn btn-info" href="{{route('region.index')}}"> Області</a>
        </div>
        <hr>
    </div>

    <hr>
    <table class="table table-dark">
        <thead>
        <tr>

            <th scope="col">№</th>
            @foreach( $city as $cityes)
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$cityes->id}}</th>
            <td>{{$cityes->city_name}}</td>
            <td>
                <a type="button" class="btn btn-primary" href="{{route('region.edit',$cityes)}}
                    ">Оновити Місто</a></td>

            <td><a class="btn btn-secondary" href="{{route('city.show',$cityes->id)}}">Переглянути</a></td>
{{--            <td><a class="btn btn-secondary" href="{{route('region.show',$cityes->region_id)}}">Переглянути</a></td>--}}

            <td>
                <form action="{{ route('city.destroy', $cityes->id)}}" method="post">
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

