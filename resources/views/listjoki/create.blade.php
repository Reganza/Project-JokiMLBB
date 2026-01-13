<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Tambah Jenis Joki</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('listjoki.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Joki</label>
                    <input type="text" name="kode_joki" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Joki</label>
                    <input type="text" name="jenis_joki" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" step="0.01" name="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="0" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('listjoki.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">