@extends('template')

@section('content')
<div class="container">
    <h1>Data Rekom Rumah Ibada</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Form Pencarian --}}
    <form action="{{ route('sk_rekom_rumah_ibadah.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nomor surat atau nama file..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary btn-sm">Cari</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>No Surat</th>
                <th>NIP Pegawai</th>
                <th>Tanggal Surat</th>
                <th>Perihal</th>
                <th>Cetakan Surat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->no_surat }}</td>
                    <td>{{ $item->nip_pegawai }}</td>
                    <td>{{ $item->tgl_surat }}</td>
                    <td>{{ $item->perihal }}</td>
                    <td>
                        <a href="{{ asset('uploads/sk_rekom_rumah_ibadah/' . $item->cetakan_surat) }}" target="_blank">{{ pathinfo($item->cetakan_surat, PATHINFO_FILENAME) }}</a>
                    </td>
                    <td>
                        <a href="{{ route('sk_rekom_rumah_ibadah.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('sk_rekom_rumah_ibadah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('sk_rekom_rumah_ibadah.print', $item->id) }}" class="btn btn-secondary btn-sm">Print</a>

                        <form action="{{ route('sk_rekom_rumah_ibadah.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('sk_rekom_rumah_ibadah.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
</div>
@endsection