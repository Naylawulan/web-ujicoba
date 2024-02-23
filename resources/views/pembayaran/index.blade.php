<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data KasSiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                            <a href="{{ route('pembayaran.create') }}" class="btn btn-md btn-success mb-3">Tambah Pembayaran</a>
                            <a href="{{ route('siswa.index') }}" class="btn btn-md btn-secondary mb-3">Siswa</a>
                            <table class="table table-bordered">
                                  <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Siswa</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Total Bayar</th>
                                    <th scope="col">Terakhir Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($pembayaran as $index =>$pembayaran)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $pembayaran->siswa->nama }}</td>
                                        <td>{{ $pembayaran->siswa->kelas }}</td>
                                        <td>{{ $pembayaran->total_bayar }}</td>
                                        <td>{{ $pembayaran->tgl_bayar_last}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('pembayaran.history', $pembayaran->siswa_id) }}" class="btn btn-sm btn-primary">History</a>
                                            @csrf
                                            @method('DELETE')

                                        </form>
                                    </td>
                                    </tr>
                                  @empty
                                      <div class="alert alert-danger">
                                          Data Post belum Tersedia.
                                      </div>
                                  @endforelse
                                </tbody>
                              </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            //message with toastr
            @if(session()->has('success'))

                toastr.success('{{ session('success') }}', 'BERHASIL!');

            @elseif(session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!');

            @endif
        </script>

    </body>
    </html>
