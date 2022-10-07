{{-- kế thừa lại layout master --}}
@extends('layouts.master')

{{-- truyền giá trị cho những phần thay đổi --}}
{{-- @yield('name') ~ @section(name, value) --}}
@section('title', 'Product Create Page')

{{-- @yield('name') ~ @section(name) nội dung @endsection --}}
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Product price</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product stock</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter stock">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Product image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile"
                                accept="image/jpeg, image/jpg">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </form>
    </div>
    <!-- /.card -->

@endsection

@section('title-content', 'Product Create Page')

@section('insert-js')
    <!-- jQuery -->
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="public/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="public/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
