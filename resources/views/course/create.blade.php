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
    <h2>Створити маршрут</h2>
    <br>
    <form method="post" action="{{route('course.store')}}">
        @csrf
        <select class="custom-select" name="city_id" id="inputGroupSelect01">
            @foreach($city = \App\Models\City::all() as $cities)
                <option name="city_id" value="{{$cities->id}}">
                    {{$cities->city_name}}
                </option>
            @endforeach
        </select>
        <br>
        <br>
        <input class="form-control" type="text" name="title" placeholder="Назва маршруту">
        <div class="row">
            <div class="col-4">
                <br><input class="form-control" type="text" name="start_course" placeholder="Початок маршруту">
            </div>
            <br>
            <br>
            <div class="col-4">
                <br><input class="form-control" type="text" name="end_course" placeholder="Кінцева точка">
            </div>
            <div class="col-4">
                <br>
                <select class="custom-select" name="type_id" id="inputGroupSelect01">
                    @foreach($course_type = App\Models\CityCourseType::all() as $types)
                        <option name="type_id" value="{{$types->id}}">
                            {{$types->course_type}}


                        </option>
                    @endforeach

                </select>
                <h5> Тип маршруту</h5>
{{--                {{dd($course_type)}}--}}

                {{--                {{dd($types)}}--}}
{{--                {{dd($types)}}--}}
            </div>
{{--            @foreach($courses->courseType() as $course_type)--}}
{{--            @endforeach--}}
{{--            {{dd($types)}}--}}
{{--            {{dd($courses->getCourse())}}--}}
            <br>
{{--            {{dd($course_type->courseType())}}--}}
{{--            {{dd($courses->courseType)}}--}}
{{--            {{dd($course_type)}}--}}

            <br>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Створити</button>
    </form>
</div>
