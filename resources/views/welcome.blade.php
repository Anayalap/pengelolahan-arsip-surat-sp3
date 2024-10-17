<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan SP3</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}"> 
    <style>
        body {
            background-color: #00BFFF; /* Warna latar belakang */
        }
        .logo {
    
            max-width: 55px; /* Atur ukuran maksimal logo */
            height: auto; /* Memastikan proporsional */
        }
        .contact-info {
            background-color: #87CEFA; /* Warna latar belakang untuk informasi kontak */
            padding: 20px; /* Ruang di dalam div */
            border-radius: 5px; /* Sudut membulat */
            margin-top: 20px; /* Jarak atas */
        }
    </style>
</head>
<body>
  
    <div class="container mt-3">
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/logo_pku.png') }}" alt="Logo Organisasi" class="logo me-4">
            <h1>Selamat Datang di Kelurahan Simpang Tiga</h1>
            <div class="button-container ms-auto d-flex">
                <a href="{{ url('/login') }}" class="btn btn-secondary me-2">LOGIN</a>
            </div>
        </div>

        <h2 class="text-center mt-4">Struktur Organisasi</h2>

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
            <p><strong>RINI SUSAnti, ST</strong></p>
        </div>
        <div class="text-left">
            <p>Plt. KASIH PENGEMBANGAN & PEMBERDAYAAN MASYARAKAT</p>
            <p><strong>SISKA ADRIANI, A.Md.keb</strong></p>
        </div>
        <div class="text-left">
            <p>PENGELOLA PEMBERDAYAAN MASYARAKAT</p>
            <p><strong>MASYUDIN EFFENDI, SKM</strong></p>
        </div>

        <h3 class="text-center mt-4">CONTACT PERSON</h3>

        <p class="text-center">Alamat: Jl. Unggas Simpang Tiga, Kec. Bukit Raya, Kota Pekanbaru, Riau 28288</p>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.684308782217!2d101.4538474744745!3d0.469605763773795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5af22b0c01749%3A0xe4fe524935c2a675!2sKantor%20Kelurahan%20Simpang%20Tiga!5e0!3m2!1sid!2sid!4v1728227565457!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <!-- Informasi Kontak dengan Background Berwarna -->
    <div class="text-center contact-info">
        <p>Email: <a href="mailto:info@kelurahansimpangtiga.com"></a></p>
        <p>Kontak: </p>
    </div>
    
    <div class="text-center contact-info">
        @if(Auth::check())
            <p>Logged in as: {{ Auth::user()->email }}</p>
        @else
            <p>Anda belum masuk.</p>
        @endif
    </div>

</body>
</html>
