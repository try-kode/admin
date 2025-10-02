@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="/admin/user">User Management</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    
                                    <div class="form-group">
                                        <label for="">UUID</label>
                                        <input type="text" name="" id="" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Product Code</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Discount</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control select2" name="role" id="role" style="width: 100%;">
                                            <option value="1" selected>Electronics</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Sub Category</label>
                                        <select class="form-control select2" name="role" id="role" style="width: 100%;">
                                            <option value="1" selected>Please select</option>
                                            <option value="1">Laptop</option>
                                            <option value="2">Monitor</option>
                                            <option value="3">Ram</option>
                                            <option value="4">VGA</option>
                                            
                                        </select>
                                    </div>
                                    
                                    <a href="/product" class="btn btn-danger btn-flat">Cancel</a>
                                    <button class="btn btn-primary btn-flat btnCreateUser">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
