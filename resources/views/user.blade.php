<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   @extends('templateDb')   
    @section('content')
        
       <!-- Begin Page Content -->
    <div class="container-fluid py-1" style="margin-bottom: 50px">

        <div class="row py-4">
            <div class="col-md-6">
                <a href="/user/create" class="btn btn-info">Tambah Data</a>
            </div>
            <div class="col-md-6">
                <form action="/user" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="search" name="cari" id="" class="form-control" placeholder="Search">
                        <button class="btn btn-dark" type="submit">Go</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4" style="margin-top: 20px">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Foods</h6>
            </div>
            <div class="card-body" >
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Foto</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($user as $key=>$item)
                            <tr>
                               <td>{{ $key+1}}</td>
                               <td>{{ $item->name}}</td>
                               <td><img src="{{ asset('/storage/public/'.$item->foto)}}" alt="" style="height: 50px;width: 50px;"></td>
                               <td>{{ $item->email }}</td>
                               <td>
                                    <a style="width: 60px;height: 20px;font-size: 10px;" href="/user/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                                    <a style="width: 60px;height: 20px;font-size: 10px;" href="/user/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>

    @endsection
</body>
</html>