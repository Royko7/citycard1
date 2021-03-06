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
    <h2>Редагувати  білет</h2>
    <br>
    @foreach($ticket->all()  as $tickets )

    @endforeach
{{--    {{dd($tickets)}}--}}

    <form method="post" action="{{ route('ticket.update',$ticket->id) }}">
        @method('PATCH')
        @csrf
                @csrf
                <div class="row">
                    <div class="col-3">
                        <select class="custom-select" name="course_id" id="inputGroupSelect01">
                            @foreach($tickets->courseType->get()  as $course_type)
                                <option name="course_id" value="{{$course_type->id  }}">
                                    {{$course_type->course_type}}
                                    @endforeach
                                </option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="custom-select" name="transport_id" id="inputGroupSelect01">
                            @foreach($tickets->transportType->get() as $transport_type )
                                <option name="transport_id" value="{{$transport_type->id}}">
                                    {{($transport_type->transport_type)}}
                                    @endforeach
                                </option>
                        </select>
                    </div>
                    <div class="col-3">
                        <select class="custom-select" name="ticket_id" id="inputGroupSelect01">
                            <option value="">
                                Тип былету
                            </option>
                            @foreach($tickets->ticketType->get() as $ticket_type)

                                <option name="course_id" value="{{$ticket_type->id}}">
                                    {{$ticket_type->ticket_type}}
                                    @endforeach
                                </option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <br><input class="form-control" type="text" name="tick_name" placeholder="Назва білету">
                        <br>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Оновити</button>

            </form>
</div>
