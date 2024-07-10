v
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Legends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .selected {
            border: 2px solid blue;
            box-shadow: 0 0 10px rgba(0, 0, 255, 0.5);
        }
    </style>
</head>

<body>
    @include('layout.navbar')
    <div class="container">
        <div class="card mb-4">
            <div class="card-header">
                Deskripsi dan cara melakukan transaksi
            </div>
            <div class="card-body">
                <h5 class="card-title">Top up ML diamond Mobile Legends harga paling murah. Cara topup MLBB termurah:
                </h5>
                <ol>
                    <li>Masukkan ID & server</li>
                    <li>Pilih Nominal</li>
                    <li>Masukkan jumlah</li>
                    <li>Pilih Pembayaran</li>
                    <li>Tulis Kode Promo (jika ada)</li>
                    <li>Masukkan No WhatsApp</li>
                    <li>Klik Order Now & lakukan Pembayaran</li>
                    <li>Diamonds otomatis masuk ke akun game</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mb-2">
            <div class="card-header">
                Masukkan Informasi Akun Mobile Legends
            </div>
            <div class="card-body">
                <form id="ml-get-player-info-form" method="post" onsubmit="event.preventDefault(); getPlayerInfo();">
                    @csrf
                    <div class="mb-3">
                        <label for="id" class="form-label">ID Akun</label>
                        <input type="text" class="form-control" id="id" name="id" required>
                    </div>
                    <div class="mb-3">
                        <label for="zone" class="form-label">Server</label>
                        <input type="text" class="form-control" id="zone" name="zone" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <div id="player-info" class="mt-3" style="display: none;">
                    <h5>Informasi Pemain</h5>
                    <p><strong>ID:</strong> <span id="player-id"></span></p>
                    <p><strong>Server:</strong> <span id="player-server"></span></p>
                    <p><strong>Nama:</strong> <span id="player-name"></span></p>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-header">
                Pilih Nominal
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Sample item, you need to replace the src and content -->
                    <div class="col">
                        <div class="card" onclick="selectCard(this)">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Weekly Diamond Pass</h5>
                                <p class="card-text">RP 25.000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more items here -->
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-header">
                Masukkan Informasi Pembelian
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="purchase_amount" class="form-label">Jumlah Pembelian</label>
                    <div class="input-group">
                        <button type="button" class="btn btn-outline-secondary" onclick="decrement()">-</button>
                        <input type="number" class="form-control text-center" id="purchase_amount"
                            name="purchase_amount" value="1" min="1" required>
                        <button type="button" class="btn btn-outline-secondary" onclick="increment()">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-header">
                Pilih Metode Pembayaran
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="payment_method" class="form-label">Metode Pembayaran</label>
                    <select class="form-select" id="payment_method" name="payment_method" required>
                        <option value="">Pilih Metode Pembayaran</option>
                        <optgroup label="Bank">
                            <option value="bca">BCA</option>
                            <option value="bank_jago">Bank Jago</option>
                            <option value="seabank">SeaBank</option>
                            <option value="qris">QRIS</option>
                        </optgroup>
                        <optgroup label="E-Wallet">
                            <option value="dana">DANA</option>
                            <option value="ovo">OVO</option>
                            <option value="shopeepay">ShopeePay</option>
                            <option value="gopay">GoPay</option>
                        </optgroup>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </div>
    </div>

    <script>
        function selectCard(card) {
            const cards = document.querySelectorAll('.card');
            cards.forEach(c => c.classList.remove('selected'));
            card.classList.add('selected');
        }

        function increment() {
            var purchaseAmount = document.getElementById('purchase_amount');
            purchaseAmount.value = parseInt(purchaseAmount.value) + 1;
        }

        function decrement() {
            var purchaseAmount = document.getElementById('purchase_amount');
            if (purchaseAmount.value > 1) {
                purchaseAmount.value = parseInt(purchaseAmount.value) - 1;
            }
        }

        function getPlayerInfo() {
            const id = document.getElementById('id').value;
            const zone = document.getElementById('zone').value;

            fetch('', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        id: id,
                        zone: zone
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    document.getElementById('player-id').textContent = data.id;
                    document.getElementById('player-server').textContent = data.zoneId;
                    document.getElementById('player-name').textContent = data.name;
                    document.getElementById('player-info').style.display = 'block';
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @include('layout.footer')

</body>

</html>
