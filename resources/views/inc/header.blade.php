@if(Auth::check())
{{--    @include('inc.header')--}}
{{--    @include('inc.header_logined')--}}
@else


<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">


        {{--        <a class="p-2 text-dark" href="/home">Авторизований</a>--}}
{{--        <a class="p-2 text-dark" href="/admin">Admin</a>--}}
    </nav>
    <a class="btn btn-outline-primary mr-2" href="/register">Register </a>
{{--    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--        {{ csrf_field() }}--}}
{{--    </form>--}}
    <a class="btn btn-outline-primary ml-2" href="/login">Sign in</a>
</div>
@endif


