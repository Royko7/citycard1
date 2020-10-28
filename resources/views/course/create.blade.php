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
    <br>
    <form method="post" action="{{route('city.store')}}">

        <br>
        <br>
        <br>
        @csrf

        <input class="form-control" type="text" name="city_name" placeholder="Назва міста">

        <br>
{{--        @foreach($region = \App\Models\Regions::all() as $regions)--}}

        <select class="custom-select" name="region_id" id="inputGroupSelect01">

            @foreach($region = \App\Models\Regions::all() as $regions)
{{--            <option >...</option>--}}
                <option name="region_id" value="{{$regions->id}}">
                    {{$regions->region_name}}
                </option>

            @endforeach
        </select>
{{--            <input class="form-control" type="hidden" name="region_id" value="{{$regions->id }}">--}}
        <br>
        <br>
        <br>
            <button type="submit" class="btn btn-primary">Створити</button>
    </form>


</div>
