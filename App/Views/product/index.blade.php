{{-- kế thừa lại layout master --}}
@extends('layouts.master')

{{-- truyền giá trị cho những phần thay đổi --}}
{{-- @yield('name') ~ @section(name, value) --}}
@section('title', 'Product Page')

{{-- @yield('name') ~ @section(name) nội dung @endsection --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Products List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Product name</th>
                        <th>Product img</th>
                        <th>Product price</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $value)
                        <tr>
                            <td> {{ $value['id'] }} </td>
                            <td> {{ $value['name'] }} </td>
                            <td> <img class="img-fluid img-thumbnail" style="max-width:150px"
                                    src="public/dist/img/{{ $value['img'] }}" alt="User Avatar"> </td>
                            <td> {{ $value['price'] }} </td>
                            <td><a class="btn btn-block btn-success" href="/?url=products-detail/{{ $value['id'] }}">View
                                    Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Product name</th>
                        <th>Product img</th>
                        <th>Product price</th>
                        <th>Function</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


@endsection

@section('title-content', 'Products Page')

@section('insert-js')
    <!-- DataTables  & Plugins -->
    <script src="public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="public/plugins/jszip/jszip.min.js"></script>
    <script src="public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
