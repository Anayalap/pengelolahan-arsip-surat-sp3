@extends('layouts.app')

@section('title', 'Edit sk_menika')

@section('content')
<div class="container">
    <h1>Edit</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('sk_menika.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="no_surat">No Surat</label>
            <input type="text" name="no_surat" class="form-control" value="{{ $data->no_surat }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="nip_pegawai">NIP Pegawai</label>
            <input type="text" name="nip_pegawai" class="form-control" value="{{ $data->nip_pegawai }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="tgl_surat">Tanggal Surat</label>
            <input type="date" name="tgl_surat" class="form-control" value="{{ $data->tgl_surat }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="perihal">Perihal</label>
            <input type="text" name="perihal" class="form-control" value="{{ $data->perihal }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="cetakan_surat">Cetakan Surat (upload file)</label>
            <input type="file" name="cetakan_surat" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('sk_menika.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
