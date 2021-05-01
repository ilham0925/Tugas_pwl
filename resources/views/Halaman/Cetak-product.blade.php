<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static{
            position: relative;
            border: 1px solid black;
        }

    </style>
    <title>Cetak Data Product</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Product</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width:95%;">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Categorie</th>
            <th>Brand</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        @foreach ($dtcetakproduct as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->categorie->categorie }}</td>
            <td>{{ $item->brand->brand }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
        </tr>
    
        @endforeach
        
        </table>
    </div>

    <script type="text/javascript">
        window.print();

    </script>

</body>
</html>