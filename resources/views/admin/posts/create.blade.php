@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">--}}

    <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <script src="{{asset('admin/js/cropper.min.js')}}"></script>

@endsection

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-sm-8">
                    <h1>Ավելացնել</h1>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                @foreach(config('lang') as $lang)
{{--                                   --}}
                                    <li class="nav-item">
                                        <a class="nav-link  @if($loop->first) active @endif
                                             @if(($errors->has('name_hy') || $errors->has('content_hy') || $errors->has('description_hy'))  && $lang['code'] == 'hy')
                                             error
                                             @endif
                                            @if(($errors->has('name_ru') || $errors->has('content_ru') || $errors->has('description_ru'))  && $lang['code'] == 'ru')
                                             error
                                             @endif
                                            @if(($errors->has('name_en') || $errors->has('content_en') || $errors->has('description_en'))  && $lang['code'] == 'en')
                                             error
                                            @endif
                                            "
                                           id="custom-tabs-three-home-tab" data-toggle="pill"
                                           href="#tab_{{$loop->index}}" role="tab"
                                           aria-controls="custom-tabs-three-home"
                                           aria-selected="true">{{$lang['name']}}</a>
                                    </li>
{{--                                   --}}
                                        @endforeach

                            </ul>
                        </div>
                        {{--                        @dd($errors->has('name_hy'))--}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Խնդրում ենք լրացնել բոլոր դաշտերը․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{route('posts.store')}}" id="form_add"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <label>Կատեգորիա *</label>
                                <select class="select2"  data-placeholder="Ընտրեք կատեգորիա"
                                        style="width: 100%;" name="cat" autoselect="false" id="location">
                                    {{--                                <select class="form-control select2" style="width: 100%;" name="cat">--}}
                                    @if($categories)
                                        @foreach($categories as $item)
                                            <option
                                                @if(old('cat')) {{in_array($item->id,old('cat')) ?'selected':''}}  @endif
                                                value="{{$item->id}}">{{$item->translate[0]->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('cat'))
                                    <span class="valid-error">{{ $errors->first('cat') }}</span>
                                @endif
                            </div>

                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                @foreach(config('lang') as $lang)

                                    <input type="hidden" value="{{$lang['code']}}" id="input_lang">

                                    <div class="tab-pane fade @if($loop->first) show active  @endif"
                                         id="tab_{{$loop->index}}"
                                         role="tabpanel">


                                        <div class="card-body">
                                            <label>Վերնագիր *</label>
                                            <input type="text" name="title_{{$lang['code']}}" class="form-control"
                                                   id="input_title_{{$lang['code']}}"
                                                   value="{{old('title_'.$lang['code'])}}">
                                            <span class="error_message_name_{{$lang['code']}} valid_error"></span>

                                            @if ($errors->has('title_'.$lang['code']))
                                                <span
                                                    class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                            @endif

                                        </div>

                                        <div class="card-body">
                                            <label>Ենթավերնագիր *</label>
                                            <input type="text" name="subtitle_{{$lang['code']}}" class="form-control"
                                                   id="input_name_{{$lang['code']}}"
                                                   value="{{old('subtitle_'.$lang['code'])}}">
                                            <span class="error_message_name_{{$lang['code']}} valid_error"></span>

                                            @if ($errors->has('subtitle_'.$lang['code']))
                                                <span
                                                    class="valid-error">{{ $errors->first('subtitle_'.$lang['code']) }}</span>
                                            @endif

                                        </div>

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Նկարագրություն *</label>
                                                <textarea type="text" id="summary-ckeditor_{{$loop->index}}" name="content_{{$lang['code']}}" class="form-control">{{old('content_'.$lang['code'])}}</textarea>
                                                @if ($errors->has('content_'.$lang['code']))
                                                    <span class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                                @endif
                                            </div>
                                                 <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>
                                                 <script>
                                                  CKEDITOR.replace( 'summary-ckeditor_{{$loop->index}}' );
                                                 </script>
                                        </div>

                                        <div class="card-body">
                                            <label>Նյութի աղբյուր</label>
                                            <input type="text" name="link_{{$lang['code']}}" class="form-control"
                                                   id="input_link_{{$lang['code']}}"
                                                   value="{{old('link_'.$lang['code'])}}">
                                            <span class="error_message_name_{{$lang['code']}} valid_error"></span>

                                            @if ($errors->has('link_'.$lang['code']))
                                                <span
                                                    class="valid-error">{{ $errors->first('link_'.$lang['code']) }}</span>
                                            @endif

                                        </div>

                                    </div>
                                @endforeach
                                    <div class="card-body">
                                        <label for="exampleInputFile">Նկար *</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input viewImage" id="exampleInputFile" accept=".jpeg,.png,.jpg,.png">
                                                <input type="file" name="file" class="custom-file-input viewImage" id="file-input" accept=".jpeg,.png,.jpg,.png">

                                                <label class="custom-file-label" for="exampleInputFile">Ընտրել ֆայլը</label>

                                            </div>
                                            <span class="error_message_file valid_error"></span>
                                        </div>
                                        <div class="addImage"></div>
                                        @if ($errors->has('file'))
                                            <span class="valid-error">{{ $errors->first('file') }}</span>
                                        @endif
{{--                                        <div class="addImage"></div>--}}

                                        <div class="box-2" style="width: 700px">
                                            <div class="result"></div>
                                        </div>
                                        <!--rightbox-->
                                        <div class="box-2 img-result hide" >
                                            <!-- result of crop -->
                                            <img class="cropped" src="" alt="" style="width: 800px;height: 800px">
                                        </div>
                                        <!-- input file -->
                                        <div class="box">
                                            <div class="options hide">
                                                <label> Width</label>
                                                <input type="number" class="img-w" value="400" min="100" max="1200"/>

                                            </div>
                                            <!-- save btn -->
                                            <button class="btn btn-dark save hide">Կտրել նկարը</button>

                                        </div>

                                        <input type='hidden' name="x">
                                    </div>
                            </div>


                            <input type="hidden" name="translate" value="post" id="translate_type">
                            <div class="card-body">
                            </div>
                            <!-- /.card -->
                        </form>
                        <button class="btn btn-primary" data-toggle="modal" id="submit_btn"
                                data-target="#modal-primary">
                            Ավելացնել
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('scripts')
    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>



        var clicked = false;
        $('.btn.btn-primary').click(function () {
            if (!clicked) {
                clicked = true
                $(this).attr('disabled', 'disabled');


                setTimeout(function () {

                        $('.form-horizontal').submit();

                    clicked = false
                }, 100)
                // $('.form-horizontal').submit();
            }


        })


        // $(function () {
        //     //Initialize Select2 Elements
        $('.select2').select2()
        //     //
        //     // //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })


    </script>
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('admin/js/crop-canvas.js')}}"></script>

    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
    <style type="text/css">

        #tab_0 .card-body.ru {
            display: none;
        }

        #tab_0 .card-body.en {
            display: none;
        }

        #tab_1 .card-body.hy {
            display: none;
        }

        #tab_1 .card-body.en {
            display: none;
        }

        #tab_2 .card-body.hy {
            display: none;
        }

        #tab_2 .card-body.ru {
            display: none;
        }
    </style>
@endsection
