@extends('index')
@section('content')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="popular-products py-5 bg-dark text-light">
        <div class="container">
            <h2 class="text-warning">🔥 Populer Sekarang!</h2>
            <p>Berikut adalah beberapa produk yang paling populer saat ini.</p>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/mobilelegends') }}">
                        <div class="card bg-secondary">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="path_to_mobile_legends_image.png" class="card-img" alt="Mobile Legends">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Mobile Legends</h5>
                                        <p class="card-text">Moonton</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/freefire') }}">
                        <div class="card bg-secondary">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="path_to_free_fire_image.png" class="card-img" alt="Free Fire">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Free Fire</h5>
                                        <p class="card-text">Garena</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/pubgm') }}">
                        <div class="card bg-secondary">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="path_to_pubg_mobile_image.png" class="card-img" alt="PUBG Mobile">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">PUBG Mobile</h5>
                                        <p class="card-text">Tencent Games</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/hok') }}">
                        <div class="card bg-secondary">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="path_to_free_fire_max_image.png" class="card-img" alt="Free Fire MAX">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Honor Of Kings</h5>
                                        <p class="card-text">Tencent Games</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="mt-4 d-flex justify-content-center">
                    <button class="btn btn-success mx-1" onclick="showSection('game-cards')">Top Up Games</button>
                    <button class="btn btn-secondary mx-1" onclick="showSection('voucher-cards')">Voucher</button>
                </div>
            </div>
            <div id="game-cards" class="row row-cols-2 g-4 mt-3">
                <div class="col">
                    <a href="{{ url('/mobilelegends') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">MOBILE LEGENDS</h5>
                                <p class="card-text">MOONTON.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/hok') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">HONOR OF KINGS</h5>
                                <p class="card-text">TENCENT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/pubgm') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">PUBG MOBILE</h5>
                                <p class="card-text">TENCENT</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/valorant') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">VALORANT</h5>
                                <p class="card-text">RIOT.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/genshin') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">GENSHIN IMPACT</h5>
                                <p class="card-text">MIHOYO.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/honkai') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">HONKAI IMPACT</h5>
                                <p class="card-text">MIHOYO.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/freefire') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">FREE FIRE</h5>
                                <p class="card-text">GARENA.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/pointblank') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">POINT BLANK</h5>
                                <p class="card-text">ZEPTTO.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="voucher-cards" class="row row-cols-2 g-4 mt-3" style="display:none;">
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/netflix') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">NETFLIX</h5>
                                <p class="card-text">Netflix,inc.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/youtube') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">YOUTUBE</h5>
                                <p class="card-text">Youtube,inc.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/spotify') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">SPOTIFY</h5>
                                <p class="card-text">Spotify,inc.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/canva') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">CANVA</h5>
                                <p class="card-text">Canva,inc.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/capcut') }}">
                        <div class="card h-100">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="140"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%"
                                    fill="#dee2e6" dy=".3em">Image cap</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">CAPCUT</h5>
                                <p class="card-text">Capcut,inc.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <form id="player-form">
            <input type="text" id="player_name" name="player_name" placeholder="Enter Player Name">
            <button type="button" onclick="getPlayerInfo()">Get Player Info</button>
        </form>
    </section>

    <script>
        function showSection(sectionId) {
            // Menyembunyikan semua bagian
            document.getElementById('game-cards').style.display = 'none';
            document.getElementById('voucher-cards').style.display = 'none';

            // Menampilkan bagian yang dipilih
            document.getElementById(sectionId).style.display = 'flex';
        }
        
    </script>
@endsection
