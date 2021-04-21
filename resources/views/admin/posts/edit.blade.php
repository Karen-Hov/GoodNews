@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
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
                    <div id="breadcrumb"> <a href="{{url('my_admin/posts/')}}">Փաթեթներ </a> <a href="#">Խմբագրել  </a></div>

                    <h1>Փաթեթներ</h1>
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                @foreach(config('lang') as $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first)active @endif
                                        @if(($errors->has('name_hy') || $errors->has('content_hy') || $errors->has('description_hy'))  && $lang['code'] == 'hy')
                                            error
                                        @endif
                                        @if(($errors->has('name_pr') || $errors->has('content_pr') || $errors->has('description_pr'))  && $lang['code'] == 'pr')
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
                                        @endforeach
                                    </li>

                            </ul>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    <li class="error">Please fill in all the fields ․․․</li>
                                </ul>
                            </div>
                        @endif
                        <form class="form-horizontal" method="post" id="form_add"
                              action="{{route('posts.update',$post->id)}}" name="edit_partners"
                              enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Խմբագրել կատեգորիան *</label>
                                    <select class="select2" data-placeholder="Select a State"
                                            style="width: 100%;" name="cat" id="location">
                                        @if($categories)
                                            @foreach($categories as $item)
                                                <option value="{{$item->id}}" data-id="{{$item->id}}"
                                                @if(old('category') == $post->type)
                                                     {{'selected'}}
                                                @elseif($item->id == $post->type)
                                                    {{'selected'}}
                                                @endif
                                                >
                                                    {{$item->translate[0]->title}}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                                    <span class="error_message_location valid_error"></span>
                                    @if ($errors->has('cat'))
                                        <span class="valid-error">{{ $errors->first('cat') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                @foreach(config('lang') as $lang)
                                    @foreach($post->translate as $item)
                                        @if($lang['code'] == $item['code'])

                                            <div class="tab-pane fade @if($loop->first) show active  @endif"
                                                 id="tab_{{$loop->index}}"
                                                 role="tabpanel">

                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Խմբագրել վերնագիրը *</label>
                                                        <input type="text" name="title_{{$lang['code']}}"
                                                               class="form-control" id="input_name_{{$lang['code']}}"
                                                               value="{{isset($post->translate[$loop->index]->title)?$post->translate[$loop->index]->title:old('title_'.$lang['code'])}}">
                                                        @if ($errors->has('title_'.$lang['code']))
                                                            <span
                                                                class="valid-error">{{ $errors->first('title_'.$lang['code']) }}</span>
                                                        @endif
                                                        <span class="error_message_name_{{$lang['code']}} valid_error"></span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Խմբագրել ենթավերնագիրը *</label>
                                                        <input type="text" name="subtitle_{{$lang['code']}}"
                                                               class="form-control" id="input_name_{{$lang['code']}}"
                                                               value="{{isset($post->translate[$loop->index]->subtitle)?$post->translate[$loop->index]->subtitle:old('subtitle_'.$lang['code'])}}">
                                                        @if ($errors->has('subtitle_'.$lang['code']))
                                                            <span
                                                                class="valid-error">{{ $errors->first('subtitle_'.$lang['code']) }}</span>
                                                        @endif
                                                        <span class="error_message_name_{{$lang['code']}} valid_error"></span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label>Խմբագրել նկարագրությունը *</label>
                                                        <textarea type="text" id="summary-ckeditor_{{$loop->index}}" name="content_{{$lang['code']}}" class="form-control">{{isset($post->translate[$loop->index]->content)?$post->translate[$loop->index]->content:old('content_'.$lang['code'])}}</textarea>
                                                        @if ($errors->has('content_'.$lang['code']))
                                                            <span class="valid-error">{{ $errors->first('content_'.$lang['code']) }}</span>
                                                        @endif
                                                    </div>
                                                    <script src="{{ asset('vendor/unisharp/ckeditor/ckeditor.js') }}"></script>
                                                    <script>
                                                        CKEDITOR.replace( 'summary-ckeditor_{{$loop->index}}' );
                                                    </script>
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>




                    {{--                            </div>--}}
                    <input type="hidden" name="translate" value="post" id="translate_type">
                    <!-- /.card -->
                        </form>
                        <div class="card-body" >
                            <button type="submit" class="btn btn-primary" data-toggle="modal" id="submit_btn"
                                    data-target="#modal-primary">
                                Խմբագրել
                            </button>
                        </div>
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


        $('.btn.btn-primary').click(function () {
            $(this).attr('disabled', 'disabled');

            $('#text').attr('disabled', false);

            setTimeout(function () {
                    $('.form-horizontal').submit();

            },100)



        })



        $('.select2').select2()
        //
        //Initialize Select2 Elements
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
