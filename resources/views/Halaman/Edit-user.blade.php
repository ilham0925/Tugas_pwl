<!DOCTYPE html>
    <!--
    This is a starter template page. Use this page to start your new project from
    scratch. This page gets rid of all links and provides the needed markup only.
    -->
    <html lang="en">
    <head>
        @include('Template.head')
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- Navbar -->
        @include('Template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
        @include('Template.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                
            </div><!-- /.col -->
            
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h3>Edit Barang</h3>
                </div>

                <div class="card-body">
                    <form action="{{ url('update-user',$ser->id)}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama" value="{{ $ser->name }}">
                        </div>                    
                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="email" value="{{ $ser->email }}" >
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control"  value="{{ $ser->password }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        @include('Template.footer')
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
         @include('Template.script')
    <!-- jQuery -->
    
    </body>
    </html>
