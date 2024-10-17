@extends('template')

@section('content')
<div class="container">
    <h1>Detail SK Kematian</h1>

    <table class="table">
        <tr>
            <th>No Surat</th>
            <td>{{ $data->no_surat }}</td>
        </tr>
        <tr>
            <th>NIP Pegawai</th>
            <td>{{ $data->nip_pegawai }}</td>
        </tr>
        <tr>
            <th>Tanggal Surat</th>
            <td>{{ $data->tgl_surat }}</td>
        </tr>
        <tr>
            <th>Perihal</th>
            <td>{{ $data->perihal }}</td>
        </tr>
        <tr>
            <th>Cetakan Surat</th>
            <td>
                @php
                    $fileExtension = strtolower(pathinfo($data->cetakan_surat, PATHINFO_EXTENSION));
                @endphp

                @if($fileExtension === 'pdf')
                    <!-- Tampilkan file PDF -->
                    <iframe src="{{ asset('uploads/sk_kematian/' . $data->cetakan_surat) }}" width="100%" height="500px">
                        <p>Browser Anda tidak mendukung tampilan PDF. 
                        <a href="{{ asset('uploads/sk_kematian/' . $data->cetakan_surat) }}">Unduh file PDF</a>.</p>
                    </iframe>
                @elseif(in_array($fileExtension, ['jpg', 'jpeg', 'png']))
                    <!-- Tampilkan file gambar -->
                    <img src="{{ asset('uploads/sk_kematian/' . $data->cetakan_surat) }}" alt="Cetakan Surat" style="max-width: 100%; height: auto;">
                @elseif(in_array($fileExtension, ['doc', 'docx', 'xls', 'xlsx']))
                    <!-- Tampilkan link unduh untuk file Word/Excel -->
                    <a href="{{ asset('uploads/sk_kematian/' . $data->cetakan_surat) }}" target="_blank">Unduh dokumen</a>
                @else
                    <!-- Tampilkan link unduh untuk file lainnya -->
                    <a href="{{ asset('uploads/sk_kematian/' . $data->cetakan_surat) }}" target="_blank">Unduh file</a>
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('sk_kematian.edit', $data->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('sk_kematian.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
