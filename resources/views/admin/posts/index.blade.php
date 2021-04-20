@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')
    <div class="card-body flex-center">
        <a href="{{route('posts.create')}}">
            <button type="button" class="btn btn-primary">
                Ավելացնել
            </button>
        </a>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Փաթեթներ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
{{--                                <th>#</th>--}}
                                <th>Վերնագիր</th>
                                <th>Ենթավերնագիր</th>
                                <th>Կատեգորիա</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @dd($posts)--}}
                            @if($posts)
                                @foreach($posts as $item)
                                    <tr>
                                        <td>{{isset($item->translate[0]->title)?Str::limit($item->translate[0]->title,50):''}} </td>
                                        <td>{{isset($item->translate[0]->subtitle)?Str::limit($item->translate[0]->subtitle,50):''}} </td>
{{--                                        <td> @foreach($item->category as $cat)--}}
{{--                                                {{($cat->translate[0]->title) }} <br>--}}
{{--                                            @endforeach--}}
{{--                                        </td>--}}


                                        <td class="project-actions text-right">
                                            <a href="{{route('posts.show',$item->id)}}" class="btn btn-success ">Տեսնել</a>
                                            <a href="{{route('posts.edit',$item->id)}}" class="btn btn-success">Կարգավորել</a>
                                            <a onclick="deleteProducts(this,'{{ url('/my_admin/posts/'.$item->id) }}', 'DELETE')"
                                               class="btn btn-danger ">Ջնջել</a>
                                            </td>

                                    </tr>


                                @endforeach
                            @endif
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('scripts')
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    {{--    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>--}}
    {{--    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>--}}

    <script>

        function deleteProducts(target, url, method) {
            let element = $(target).parents('tr');
            if (confirm("Do you really want to delete?!!!")) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    type: method,

                    success: function () {
                        element.hide(1000, function () {
                            element.remove()

                        });
                    }
                });
            }
        }



        $(function () {
            // $("#example1").DataTable({
            //     "responsive": true,
            //     "autoWidth": false,
            // });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "order":[[0,'desc']]
            });
        });
    </script>


@endsection
