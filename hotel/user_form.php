<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header class="bg-primary text-white text-center py-4">
        <h1>Welcome to Our Hotel</h1>
        <p>Your comfort is our priority</p>
        <a href="user_dashboard.php" class="btn btn-light mt-3">Pesan Sekarang</a>
    </header>
    <div class="container mt-5">
        <h2 class="text-center">Form Pemesanan</h2>
        <form action="process_pemesanan.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="id_pemesanan" class="form-label">ID Pemesanan</label>
                <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" required>
            </div>
            <div class="mb-3">
                <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
            </div>
            <div class="mb-3">
                <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" required>
            </div>
            <div class="mb-3">
                <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                <select class="form-select" id="tipe_kamar" name="tipe_kamar" required>
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Family">Family</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pesan" class="form-label">Tanggal Pesan</label>
                <input type="date" class="form-control" id="tanggal_pesan" name="tanggal_pesan" required>
            </div>
            <div class="mb-3">
                <label for="durasi_menginap" class="form-label">Durasi Menginap (malam)</label>
                <input type="number" class="form-control" id="durasi_menginap" name="durasi_menginap" required>
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" id="breakfast" name="breakfast" value="1">
                <label for="breakfast" class="form-check-label">Termasuk Breakfast</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>