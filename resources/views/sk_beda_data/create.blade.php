@extends('template')

@section('content')
<div class="container">
    <h1>Create Data</h1>
    
    <form action="{{ route('sk_beda_data.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>No Surat</label>
            <input type="text" name="no_surat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>NIP Pegawai</label>
            <input type="text" name="nip_pegawai" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Surat</label>
            <input type="date" name="tgl_surat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Perihal</label>
            <input type="text" name="perihal" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Cetakan Surat</label>
            <div class="input-group">
                <input type="file" name="cetakan_surat" class="form-control" required>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <!-- Tombol Kembali -->
    <a href="{{ route('sk_beda_data.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
