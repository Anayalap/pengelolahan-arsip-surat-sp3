@extends('template')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Displaying counts of letters outside the Struktur Organisasi card -->
            <div class="mb-4">
                <h5> KESOS Jumlah Surat yang Masuk</h5>
                <ul class="list-group">
                    <li class="list-group-item">SKTM: <strong>{{ $sktmCount }}</strong></li>
                    <li class="list-group-item">SK MENIKA: <strong>{{ $skMenikaCount }}</strong></li>
                    <li class="list-group-item">SK BELOM MENIKA: <strong>{{ $skBelumMenikaCount }}</strong></li>
                    <li class="list-group-item">SK KEMATIAN: <strong>{{ $skKematianCount }}</strong></li>
                    <li class="list-group-item">SK REKOM RUMAH IBADAH: <strong>{{ $skRekomRumahIbadahCount }}</strong></li>
                </ul>
            </div>

            <div class="mb-4">
                <h5> KSPR Jumlah Surat yang Masuk</h5>
                <ul class="list-group">
                    <li class="list-group-item">SKGR/HIBAH: <strong>{{ $skgrCount }}</strong></li>
                    <li class="list-group-item">SPRPT: <strong>{{ $sprptCount }}</strong></li>
                    <li class="list-group-item">SK PINDAH WILAYA: <strong>{{ $skPindahwilayaCount }}</strong></li>
                    <li class="list-group-item">SURAT TEREGISTRASI: <strong>{{ $suratTeregistrasiCount }}</strong></li>
                </ul>
            </div>

            <div class="mb-4">
                <h5> PPM Jumlah Surat yang Masuk</h5>
                <ul class="list-group">
                    <li class="list-group-item">SK PENGHASILAN: <strong>{{ $skPenghasilanCount }}</strong></li>
                    <li class="list-group-item">SK BEDA DATA: <strong>{{ $skBedaDataCount }}</strong></li>
                    <li class="list-group-item">DOMISILI USAHA: <strong>{{ $domisiliUsahaCount }}</strong></li>
                </ul>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2 class="text-center mt-4">Struktur Organisasi Kelurahan Simpang Tiga</h2>
                    <div class="text-center">
                        <img src="{{ asset('images/siled1.jpg') }}" alt="Struktur Organisasi" class="img-fluid mb-4" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="text-left">
                        <p>Plt LURAH</p>
                        <p><strong>HERMADRA, S.Sos</strong></p>
                    </div>
                    <div class="text-left">
                        <p>SEKRETARIS KELURAHAN</p>
                        <p><strong>LIA PRIMA EVIRA, S.Farm</strong></p>
                    </div>
                    <div class="text-left">
                        <p>PENGELOLA DATA</p>
                        <p><strong>SISKA ADRIANI, A.Md.keb</strong></p>
                    </div>
                    <div class="text-left">
                        <p>PENGADMINISTRASIAN UMUM</p>
                        <p><strong>MUHAMMAD SALEH</strong></p>
                    </div>
                    <div class="text-left">
                        <p>KASIH PEMERINTAHAN</p>
                        <p><strong>WINDRA, S.IP</strong></p>
                    </div>
                    <div class="text-left">
                        <p>KASIH KESEJATERAAN SOSIAL</p>
                        <p><strong>RINI SUSANTI, ST</strong></p>
                    </div>
                    <div class="text-left">
                        <p>Plt. KASIH PENGEMBANGAN & PEMBERDAYAAN MASYARAKAT</p>
                        <p><strong>SISKA ADRIANI, A.Md.keb</strong></p>
                    </div>
                    <div class="text-left">
                        <p>PENGELOLA PEMBERDAYAAN MASYARAKAT</p>
                        <p><strong>MASYUDIN EFFENDI, SKM</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">Maps</h5>
                    <p class="text-center">Alamat: Jl. Unggas Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28288</p>
                </div>
                <div class="card-body text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.684308782217!2d101.4538474744745!3d0.469605763773795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af22b0c01749%3A0xe4fe524935c2a675!2sKantor%20Kelurahan%20Simpang%20Tiga!5e0!3m2!1sid!2sid!4v1728227565457!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <hr />
            </div>
        </div>
    </div>
</div>
@endsection
