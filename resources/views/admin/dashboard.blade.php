@extends('admin.includes.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12 ">
                <div class="box box-body bg-primary">
                    <div class="flexbox">
                        <div id="spark1"></div>
                        <span class="font-size-40 font-weight-200">12,568</span>
                    </div>
                    <div class="text-right">Users</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12 ">
                <div class="box box-body bg-danger">
                    <div class="flexbox">
                        <div id="spark2"></div>
                        <span class="font-size-40 font-weight-200">8,568</span>
                    </div>
                    <div class="text-right">Invoices</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-warning">
                    <div class="flexbox">
                        <div id="spark3"></div>
                        <span class="font-size-40 font-weight-200">+100</span>
                    </div>
                    <div class="text-right">Article</div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xl-3 col-md-6 col-12">
                <div class="box box-body bg-info">
                    <div class="flexbox">
                        <div id="spark4"></div>
                        <span class="font-size-40 font-weight-200">16,568</span>
                    </div>
                    <div class="text-right">Income</div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

    @endsection