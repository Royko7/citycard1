@extends('inc.include')
<div class="d-flex flex-column flex-md-row align-items-center p-1 px-md-4  mb-5 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal ml-4">City Card</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark mr-4" href="/">Головна</a>
        <a class="p-2 text-dark" href="{{url('/admin')}}"> Admin</a>

    </nav>
    <span class="btn btn-outline-primary mr-2">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('frm-logout').submit();">
    Logout
            </a>
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
    <form action="{{route('new.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
        </div>
        {{--        <div class="form-group">--}}
        {{--            <label for="exampleFormControlInput1">Опис новини</label>--}}
        {{--            <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>--}}

        {{--        </div>--}}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" name="body" id="text" rows="6"></textarea>
        </div>
        {{--        <form>--}}
        <div class="form-group">
            <label for="exampleFormControlFile1">Вибрати фото</label>
            <input type="file" class="form-control-file" name="image" id="image">
        </div>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary">Створити</button>
        </div>
        @foreach($news  as $new)
        @endforeach
        <input type="hidden" name="user_id" value="{{$new->users->id}}">
    </form>
    {{--        {{dd($news->users->get())}}--}}
    {{--    </form>--}}

    @push('styles')
        {{--        <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">--}}
        <link href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}" rel="stylesheet">

        <link href="{{ asset('plugins/summernote/summernote.css') }}" rel="stylesheet">


    @endpush
    @push('scripts')

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{asset('plugins/summernote/lang/summernote-uk-UA.min.js')}}"></script>

        <script src="{{asset('plugins/summernote/summernote.min.js')}}"></script>



        <script>
            $(document).ready(function () {
                // $('#image').summernote('insertImage', 'NewController.php', function ($image) {
                //         $image.css('width', $image.width() / 3);
                //         $image.attr('data-filename', 'retriever')})

                $('#text').summernote({
                    height: 200,
                    lang: 'uk-UA',
                    //     callbacks: {
                    //         onImageUpload: function (image) {
                    //             editor = $(this);
                    //
                    //             function uploadImageContent(imageElement, editor) {
                    //                 let data = new FormData();
                    //                 data.append('image', image);
                    //                 $.ajax({
                    //                     url: 'NewsController@upload.php',
                    //                     // url:'NewsController.php' ,
                    //                     cache: false,
                    //                     contentType: false,
                    //                     processData: false,
                    //                     data: data,
                    //                     type: 'get',
                    //                     success: function (url) {
                    //                         let image = $('image').attr('src', url);
                    //                         $(editor).summernote('insertNode', image[0]);
                    //                     },
                    //                     error: function (data) {
                    //                         console.log(data);
                    //                     }
                    //                 });
                    //             }
                    //
                    //
                    //             uploadImageContent(image[0], editor);
                    //         }
                    //     }
                    // });
                    insertImage: 'NewController.php', function($image) {
                        $image.css('width', $image.width() / 3);
                        $image.attr('data-filename', 'retriever')
                    }
                });
            })
        </script>
    @endpush


</div>
