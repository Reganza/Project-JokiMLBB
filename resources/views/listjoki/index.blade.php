@extends('Layout.navbar')

 @section('navbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar JOKI</h3>
        <a href="{{ route('listjoki.create') }}" class="btn btn-primary">+ Tambah Jenis Joki</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Kode Joki</th>
                        <th>Jenis Joki</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Keterangan</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($jokis as $index => $jokis)
                    <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $jokis->kode_joki }}</td>
                            <td>{{ $jokis->jenis_joki }}</td>
                            <td>Rp {{ number_format($jokis->harga, 0, ',', '.') }}</td>
                            <td>{{ $jokis->stok }}</td>
                            <td>{{ $jokis->keterangan }}</td>

                            <td>
                                <a href="{{ route('listjoki.edit', $jokis->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                <form action="{{ route('listjoki.destroy', $jokis->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus jenis joki ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-3">Tidak ada data joki</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
@endsection