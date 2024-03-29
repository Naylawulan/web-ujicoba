<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">


                        @csrf
                        @method('PUT')
                        <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control" @error('nama') is-invalid

                                @enderror name="nama" value="{{ old('nama', $siswa->nama) }}" placeholder="Masukkan Nama">

                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label></label>
                                <select class="form-control" @error('kelas')is-invalid @enderror name="kelas">
                                 <option value ="XII PPLG">XII PPLG</option>
                                 <option value ="XII TJKT">XII TJKT</option>
                                 <option value ="XII DKV">XII DKV</option>
                                 <option value ="XII TITL">XII TITL</option>
                                 <option value ="XII ELEKTRONIKA">XII ELEKTRONIKA</option>
                                 <option value ="XII BUSANA">XII BUSANA</option>
                                 <option value ="XII PSPT">XII PSPT</option>
                                 <option value ="XII OTOTRONIKA">XII OTOTRONIKA</option>
                                 <option value ="XII PSPT">XII PSPT</option>
                                </select>


                                <!-- error message untuk title -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('siswa.index') }}" class="btn btn-md btn-secondary ">Kembali</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>

</body>
</html>
