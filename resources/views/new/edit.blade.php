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
    </div><br />
@endif
<div class="container">
{{--    @foreach($region = \App\Models\Regions::all() as $regions)--}}
{{--    @endforeach--}}
    <h2>Редагувати новину</h2>
    <form method="post" action="{{ route('new.update',$news->id) }}">
        <br>
        @method('PATCH')
        @csrf
        <input class="form-control" type="text" value="{{$news->title}}" name="title" placeholder="Назва" >
        <br>

        <textarea class="form-control" value="{{$news->body}}" name="body" id="text" rows="6">{{$news->body}}</textarea>

        <br>
        <div class="form-group">
            <label for="exampleFormControlFile1">Вибрати фото</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Оновити</button>
    </form>



</div>
