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


{{--{{dd($transport)}}--}}
<div class="container">
    <h2>Створити транспорт</h2>
    <br>
    {{--    @foreach($stop as $stops)--}}
    {{--    @endforeach--}}
    {{--    @foreach( $transport as $transports)--}}
    {{--    @endforeach--}}
    {{--    @foreach($transport as $transports)--}}

    {{--                    @endforeach--}}
    {{--    <h2> {{dd($transports->courses->id)}}</h2>--}}

    {{--@foreach()--}}
    <form method="post" action="{{route('transport.store')}}">
        @csrf
        <select class="custom-select" name="course_id" id="inputGroupSelect01">
            @foreach($transport as $transports)
            @endforeach
            @foreach($transports->courses->all() as $tr)
                <option name="course_id" value="{{$tr->id}}">
                    {{($tr->title)}}
                    @endforeach

                </option>

        </select>
        <div class="row">
            <div class="col-4">
                <br><input class="form-control" type="text" name="transport_name" placeholder="Назва транспорту">
                <br>
                <h4>Тип транспорту</h4>
                {{--                {{dd($transports->transportType->all())}}--}}
                <select class="custom-select" name="type_id" id="inputGroupSelect01">

                    @foreach($transports->transportType->all()  as $types)
                        <option name="type_id" value="{{$types->id}}">
                            {{--                                        {{($transports->courses->title)}}--}}
                            {{$types->transport_type}}

                        </option>
                    @endforeach

                </select>
            </div>
            <div class="col-4">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Створити</button>
    </form>
</div>
