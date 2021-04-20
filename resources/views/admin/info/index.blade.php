@extends('layouts.AdminLayouts.index')

@section('styles')
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">

@endsection

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-8">
{{--                @dd($about_us->isEmpty())--}}
                @if($about_us->isEmpty())
                    <div class="card-body flex-center">
                        <a href="{{route('info.create')}}"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                Ավելացնել </button></a>

                    </div>
                @endif
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Տեղեկատվություն</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2_1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Նկարագրություն</th>
                                <th>Նկար</th>
                                <th>Գործողություն</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!$about_us->isEmpty())
                            <tr>
                                <td >  {!!   isset($about_us[0]->translate[0]->content)?Str::limit($about_us[0]->translate[0]->content,500):' - '!!}</td>
                                <td><img  src="{{isset($about_us[0]->file)?asset('storage/about_us/small/'.$about_us[0]->file):' - '}}" alt="" style="width: 100px;height: 100px">  </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{url('my_admin/info/'.$about_us[0]->id.'/edit')}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Խմբագրել
                                    </a>
{{--                                    <a class="btn btn-danger btn-sm"--}}
{{--                                       onclick="deleteItem(this,'{{route('categories.destroy',['category'=>$item->id])}}', 'DELETE')">--}}
{{--                                        <i class="fas fa-trash">--}}
{{--                                        </i>--}}
{{--                                        Ջնջել--}}
{{--                                    </a>--}}
                                </td>

                            </tr>
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
    <script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>

    <script>

        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
            $('#example2_1').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>


@endsection
