@extends('layouts.app')
@section('news')
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
    <a class="btn badge-info" href="{{route('new.main')}}">Назад</a>
    <br>
{{--    @foreach($news as $new)--}}
{{--    @endforeach--}}
{{--{{dd($item->id)}}--}}
{{--        @if($item->id == $item->id )--}}
        <br>
    <div class="card text-center">

            <div class="card-header">
                <h3><p class="">{{ $news->title }}</p>
                </h3>
            </div>
            <div class="card-body ">
                <h5 class="card-title"></h5>
                <img src="{{ Storage::url('image/news/thumbnail/'.$news->image) }}" alt="">
                <p class="card-text">{!! $news->body !!}</p>
                {{--                                <p class="card-text">{!! $item->body !!}</p>--}}
                {{--                <a href="#" class="btn btn-primary">Переглянути</a>--}}
            </div>
            <br>

            <div class="card-footer text-muted">
                <p> Дата публікації</p> {{$news->created_at}}
            </div>
{{--            <hr>--}}
        </div>
{{--        @endif--}}


</div>
@endsection
