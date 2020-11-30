@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>
        <a class="p-2 text-dark" href="{{route('region.index')}}"> Область</a>
        <a class="p-2 text-dark" href="{{route('city.index')}}"> Місто</a>
        <a class="p-2 text-dark" href="{{route('transport.index')}}"> Транспорт</a>
        <a class="p-2 text-dark" href="{{route('ticket.index')}}"> Білет</a>

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
<div class="container ">
    <div class="row">
        <div class="col-10">
            <h2> Новини</h2>
            {{--        @foreach($news as $item)--}}
            {{--                <div class="col">--}}
            {{--                    <h2>{{ $item->title }}</h2>--}}
            {{--                    <p>{{ $item->desc }}</p>--}}
            {{--                    <p>{{ $item->body }}</p>--}}
            {{--                    <img src="{{ Storage::url('image/news/thumbnail/'.$item->image) }}" alt="">--}}

            {{--                </div>--}}
            {{--            @endforeach--}}

        </div>
        <div class="row">
            <a href="{{route('new.create')}}" class="btn btn-dark">Створити новину</a>

        </div>
    </div>
    {{--    <br>--}}
    <hr>
    {{--    <br>--}}
    @foreach($news as $item)
        <div class="card text-center ">
            <div class="card-header ">
                <h3><p class="">{{ $item->title }}</p>
                </h3>

            </div>
            <div class="card-body ">
                <h5 class="card-title"></h5>
                <img src="{{ Storage::url('image/news/thumbnail/'.$item->image) }}" alt="">

            </div>
            <br>
            <div class="card-body  justify-content-center">
                <p class="card-text ">{!! $item->short_body !!}</p>

                <br>
                <a href="{{route('new.show',$item->id)}}" class="btn btn-primary">Переглянути</a>
                <a href="{{route('new.edit',$item->id)}}" class="btn btn-info">Редагувати</a>
                <br>

            </div>
            <form method="post" action="{{route('new.destroy',$item->id)}}" >
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger"> Видалити новину</button>
            </form>

            <div class="card-footer text-muted">
                <p> Дата публікації</p> {{$item->created_at}}
            </div>
            <hr>
        </div>
        {{--        <div class="row"></div>--}}
        {{--        <br>--}}
        {{--        <hr>--}}
    @endforeach

</div>


