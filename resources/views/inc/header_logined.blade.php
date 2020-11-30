<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4 mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{route('cabinet.index')}}">Особистий кабінет</a>

{{--        <a class="p-2 text-dark" href="{{route('new.index')}}">Новини</a>--}}

    </nav>
    <span class="btn btn-outline-primary" >
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
    Logout
    </a>
    </span>
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
{{--    <a href=""></a>--}}
</div>


