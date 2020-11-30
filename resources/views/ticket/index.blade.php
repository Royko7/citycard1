@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>
        <a class="p-2 text-dark" href="{{route('region.index')}}"> Область</a>
        <a class="p-2 text-dark" href="{{route('city.index')}}"> Місто</a>
        <a class="p-2 text-dark" href="{{route('ticket.index')}}"> Білет</a>
        <a class="p-2 text-dark" href="{{route('price.create')}}"> Створити ціну</a>
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

{{--{{dd($ticket->getAllTransport)}}--}}

<div class="container">
    <div class="row">
        <div class="col-5">
            <a class="btn btn-success" href="{{route('ticket.create')}}"> Створити білет</a>
        </div>
        <div class="col-5">
            <a class="btn btn-info" href="{{route('transport.index')}}"> Транспорт</a>
        </div>
        <div class="col-2">
            <a class="btn btn-warning" href="{{route('course.index')}}"> Маршрут</a>
        </div>
        <hr>
    </div>

    <hr>
    <table class="table">
        <thead>

        <tr>

            <th scope="col">#</th>
            <th scope="col">Тип маршруту</th>

            <th scope="col">Транспорт</th>
            <th scope="col">Тип білету</th>

            <th scope="col">Ціна</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>

            @foreach($ticket as $tickets)

                {{--            @endforeach--}}

                <th scope="row">{{$tickets->id}}</th>
                <td>{{$tickets->courseType->course_type}}  </td>
                <td>{{$tickets->transportType->transport_type}} </td>

                <td>{{$tickets->ticketType->ticket_type}} </td>

                <td>

{{--                    {{dd($tickets->price)}}--}}
                    @foreach($tickets->getPrice->all() as $price)
                        {{--      @if( $tickets->transportType->id == $price->transport_id && $tickets->courseType->id--}}
                        {{--            == $price->course_id && $tickets->ticketType->id == $price->ticket_id )--}}
                        {{--                             @if($price->ticket_id =1)--}}
                    @endforeach

                    @foreach($price->all() as $all_price)


                        @if($all_price->ticket_id ==  $tickets->getTicketId() && $all_price->transport_id ==  $tickets->getTransportId() )
                            {{$all_price->price}} Грн
                            @else()
                                {{false}}
                        @endif

                    @endforeach

                </td>
                <td>
                    <form action="{{ route('ticket.destroy', $tickets->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Видалити білет</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('ticket.edit',$tickets->id)}}" class ="btn btn-dark">Оновивти </a>

                    <a href="{{route('ticket.show',$tickets->id)}}" class ="btn btn-info">Переглянути</a>

                </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {{--    <a type="button" class="btn btn-primary" href="{{route('ticket.edit',$ticket)}}--}}
    {{--        ">Оновити транспорт</a>--}}

</div>
