<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Makanan</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="col-md-10 container pt-5">
        <h3>Tambah Data Makanan</h3>
        <form action="/user/update/{{ $user->id}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                @error('foodname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="" value="{{ $user->password }}"></td>
                @error('password')
                    {{ $message }}
                @enderror
            </tr>
            
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                @if ($user->foto)
                <div>
                    <td><img class="mt-2" src="{{ asset('storage/public/'.$user->foto)}}" alt=""  style="width: 150px; height; 150px;border-radius: 10px"></td>

                </div>
            @endif
                <input type="file" class="form-control" name="foto" id="foto">
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </div>
        </form>
    </div>
</body>
</html>
<script src="{{ asset('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script>


