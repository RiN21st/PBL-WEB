<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Histori Toko yang Dikunjungi</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Toko</th>
                    <th>Deskripsi Toko</th>
                    <th>Alamat Toko</th>
                    <th>Link Google Maps</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histori as $item)
                    <tr>
                        <td>{{ $item->toko->nama_toko }}</td>
                        <td>{{ $item->toko->Deskripsi_Toko }}</td>
                        <td>{{ $item->toko->Alamat_Toko }}</td>
                        <td>
                            <a href="{{ $item->toko->Link_Gmaps_Toko }}" target="_blank" class="btn btn-primary btn-sm">
                                Buka Maps
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('hapus-histori', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus histori ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>