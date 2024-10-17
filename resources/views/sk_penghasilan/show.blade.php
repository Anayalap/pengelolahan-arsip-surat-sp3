@extends('template')

@section('content')
<div class="container">
    <h1>Detail</h1>

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
                @if(str_ends_with($data->cetakan_surat, '.pdf'))
                    <iframe src="{{ asset('uploads/sk_penghasilan/' . $data->cetakan_surat) }}" width="100%" height="500px">
                        <p>Browser Anda tidak mendukung tampilan PDF. 
                        <a href="{{ asset('uploads/sk_penghasilan/' . $data->cetakan_surat) }}">Unduh file PDF</a>.</p>
                    </iframe>
                @elseif(str_ends_with($data->cetakan_surat, '.jpg') || str_ends_with($data->cetakan_surat, '.jpeg') || str_ends_with($data->cetakan_surat, '.png'))
                    <img src="{{ asset('uploads/sk_penghasilan/' . $data->cetakan_surat) }}" alt="Cetakan Surat" style="max-width: 100%; height: auto;">
                @elseif(str_ends_with($data->cetakan_surat, '.doc') || str_ends_with($data->cetakan_surat, '.docx') || str_ends_with($data->cetakan_surat, '.xls') || str_ends_with($data->cetakan_surat, '.xlsx'))
                    <a href="{{ asset('uploads/sk_penghasilan/' . $data->cetakan_surat) }}" target="_blank">Unduh dokumen</a>
                @else
                    <a href="{{ asset('uploads/sk_penghasilan/' . $data->cetakan_surat) }}" target="_blank">Unduh</a>
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('sk_penghasilan.edit', $data->id) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('sk_penghasilan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
