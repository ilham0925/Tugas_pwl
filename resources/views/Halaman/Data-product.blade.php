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
                <h3 class="m-0">Data</h3>
            </div><!-- /.col -->
            
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                    @if (auth()->user()->level=="user")
                    <a href="{{route('create-product')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
                    @endif
                    <a href="{{route('cetak-product')}}" target="_blank" class="btn btn-primary">Cetak Laporan Data <i class="fas fa-print"></i></a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Categorie</th>
                            <th>Brand</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($dtproduct as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->categorie->categorie }}</td>
                            <td>{{ $item->brand->brand }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->gambar }}</td>
                            <td>
                                <a href="{{ url('edit-product',$item->id) }}"><i class="fas fa-edit"></i></a> 
                                |
                                <a href="{{ url('delete-product',$item->id) }}"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
                </div>
                <div class="card-footer">
                    {{ $dtproduct->links() }}
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
         @include('sweetalert::alert')
    <!-- jQuery -->
    
    </body>
    </html>
