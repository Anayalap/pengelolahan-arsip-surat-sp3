@extends('template')

@section('content')
<div class="container">
    <h1>Cetak</h1>
    
    <p><strong>No Surat:</strong> {{ $data->no_surat }}</p>
    <p><strong>NIP Pegawai:</strong> {{ $data->nip_pegawai }}</p>
    <p><strong>Tanggal Surat:</strong> {{ $data->tgl_surat }}</p>
    <p><strong>Perihal:</strong> {{ $data->perihal }}</p>

    @if($data->cetakan_surat)
        <p><strong>Cetakan Surat:</strong></p>
        <a href="{{ asset('uploads/domisili_usaha/' . $data->cetakan_surat) }}" target="_blank">Lihat Cetakan</a>
    @endif
    
    <button onclick="window.print();" class="btn btn-secondary">Cetak Halaman Ini</button>
</div>
@endsection
