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

    <div class="row">
        <div class="col-3">
            <a class="btn btn-secondary" href="{{route('course.index' )}}"> << до списоку</a>
        </div>
        <div class="col-3">
        </div>
    </div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Початок</th>
                <th scope="col">Зупинки</th>
                <th scope="col">Кінцева</th>
            </tr>

            </thead>
            <tbody>
{{--            @foreach($course = \App\Models\Course::all() as $courses)--}}
                    <tr>
                        <th scope="row">
{{--                            {{$courses->id}}--}}
                        </th>
                        <th scope="row">
{{--                            {{$courses->start_course}}--}}
                        </th>
                        <th scope="row">
                            <a href="#">1 зупинка</a>
                            <div class="row">
                            </div>
                            <br>
                            <a class="btn btn-primary" href="">Додати зупинку</a>
                        </th>
                        <td>
                        </td>
                    </tr>
            </tbody>
{{--            @endforeach--}}

        </table>

</div>
