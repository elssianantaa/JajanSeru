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
        <form action="/food/create" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="foodname" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control" name="foodname" id="foodname" value="{{ old('foodname') }}">
                @error('foodname')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
                @error('foto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Nama Lokasi</label>
                <input type="text" class="form-control" name="lokasi" id="lokasi" value="{{ old('lokasi') }}">
                @error('lokasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" name="latitude" id="latitude" value="{{ old('latitude') }}">
                @error('latitude')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="longtitude" class="form-label">Longtitude</label>
                <input type="text" class="form-control" name="longtitude" id="longtitude" value="{{ old('longtitude') }}">
                @error('longtitude')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jam" class="form-label">Jam Buka</label>
                <input type="text" class="form-control" name="jam" id="jam" value="{{ old('jam') }}">
                @error('jam')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="desk" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="desk" id="desk" value="{{ old('desk') }}">
                @error('desk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" name="rating" id="rating" value="{{ old('rating') }}">
                @error('rating')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kategoris_id" class="form-label">Kategori</label>
                <select name="kategoris_id" id="kategoris_id" class="form-control">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id }}" {{ old('kategoris_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->nm_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('kategoris_id')
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
