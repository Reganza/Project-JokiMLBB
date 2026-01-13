<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Edit ListJoki</h4>
        </div>
        <div class="card-body">

            <form action="{{ route('listjoki.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label">Kode Joki</label>
                    <input type="text" name="kode_joki" class="form-control" value="{{ old('kode_joki', $edit->kode_joki) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Joki</label>
                    <input type="text" name="jenis_joki" class="form-control" value="{{ old('jenis_joki', $edit->jenis_joki) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" step="0.01" name="harga" class="form-control" value="{{ old('harga', $edit->harga) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ old('stok', $edit->stok) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control">{{ old('keterangan', $edit->keterangan) }}</textarea>

                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('listjoki.index') }}" class="btn btn-secondary">Kembali</a>

            </form>
            @if ($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif


        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>