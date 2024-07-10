@extends('index')

@section('content')
    <div id="carouselExample" class="carousel slide">
        <!-- Isi carousel -->
    </div>

    <section class="popular-products py-5 bg-dark text-light">
        <div class="container">
            <!-- Konten produk populer -->
        </div>
    </section>

    <section class="account-form py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-4">Masukkan Informasi Akun Mobile Legends</h2>
                    <form action="{{ url('/submit-account') }}" method="POST" class="bg-light p-4 shadow-sm rounded">
                        @csrf
                        <div class="mb-3">
                            <label for="account_id" class="form-label">ID Akun</label>
                            <input type="text" class="form-control" id="account_id" name="account_id" placeholder="Masukkan ID Akun Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="server" class="form-label">Server</label>
                            <input type="text" class="form-control" id="server" name="server" placeholder="Masukkan Server Anda" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="game-description py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Top Up Mobile Legends</h2>
            <p>Top up diamond Mobile Legends mudah dan cepat di XinnStore! Masukkan ID dan Server Mobile Legends kamu untuk membeli diamond dengan harga terbaik. Nikmati pengalaman bermain yang lebih seru dengan membeli diamond Mobile Legends di sini.</p>
            <h3>Cara Melihat ID dan Server Mobile Legends</h3>
            <ol>
                <li>Buka aplikasi Mobile Legends di ponsel kamu.</li>
                <li>Masuk ke profil dengan mengetuk avatar di pojok kiri atas.</li>
                <li>ID akun dan server akan terlihat di bagian bawah profil.</li>
            </ol>
            <h3>Kenapa Membeli Diamond Mobile Legends di XinnStore?</h3>
            <ul>
                <li>Transaksi Aman dan Terpercaya</li>
                <li>Proses Cepat dan Mudah</li>
                <li>Harga Terbaik</li>
                <li>Layanan Pelanggan 24/7</li>
            </ul>
        </div>
    </section>

    <script>
        // Skrip tambahan jika diperlukan
    </script>
@endsection
