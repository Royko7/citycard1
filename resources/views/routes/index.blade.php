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

{{--@section('content1')--}}
<div class="content ml-5 mr-5 ">
    <table class="table table-striped">
        <a href="{{route('routes.create')}}" class="btn btn-success mb-2 ">Create</a>
        <thead>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
{{--                <button type="button" class="close" data-dismiss="alert">×</button>--}}
                <strong>{{ $message }}</strong>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <tr>
            <th scope="col">#</th>
            <th scope="col">City</th>
            <th scope="col">Ticket type</th>
            <th scope="col">Transport type</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

        </tr>
        </thead>

        <tbody>
        @foreach($routes as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>

                <td>
                    {{$item->city}}
                </td>
                <td>
                    {{$item->ticket_type}}
                </td>
                <td>
                    {{$item->transport_type}}
                </td>

                            <td>
                                <a href="{{route('routes.show',$item)}}" class="btn btn-info">Переглянути</a>

                            </td>
                <td>
                    <a href="{{route('routes.edit',$item)}}" class="btn btn-secondary mb-2 ">Редагувати</a>

                </td>
                <td>
                    <form action="{{route('routes.destroy',$item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mb-2  " type="submit">Видалити маршрут</button>
                    </form>
{{--                    <a href="{{route('routes.destroy',$item)}}" class="btn btn-danger mb-2 ">Delete</a>--}}
                </td>

        @endforeach

        {{--        <tr>--}}
        {{--            <th scope="row">2</th>--}}
        {{--            <td>Jacob</td>--}}
        {{--            <td>Thornton</td>--}}
        {{--            <td>@fat</td>--}}
        {{--            <td><a href="city/create" class="btn btn-success">Create</a></td>--}}
        {{--            <td> <button type="button" class="btn btn-secondary">Edit</button>--}}
        {{--            <td> <button type="button" class="btn btn-danger">Delete</button></td>--}}

        {{--        </tr>--}}

        </tbody>
    </table>
</div>
{{--@endsection--}}
