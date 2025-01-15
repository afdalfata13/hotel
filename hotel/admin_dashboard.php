<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-primary text-white text-center py-4">
        <h2 class="text-center">History Pemesanan</h2>
        <p>Hallo Admin Are You Ready To Make Website Great again?</p>
        <div style="display: inline-text">
            <a href="admin_kamar.php" class="btn btn-light mt-3">Kelola Jenis Kamar</a>
            <a href="admin_fasilitas.php" class="btn btn-light mt-3">Kelola Fasilitas Hotel</a>
            <a href="admin_dashboard.php" class="btn btn-light mt-3">History Pemesanan</a>
        </div>
    </header>

    <div class="container mt-5">
        <table class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID Pemesanan</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Nomor Identitas</th>
                    <th scope="col">Tipe Kamar</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Durasi Menginap</th>
                    <th scope="col">Breakfast</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'db_anyahotel');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM pemesanan";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id_pemesanan'] . "</td>";
                        echo "<td>" . $row['nama_pemesan'] . "</td>";
                        echo "<td>" . $row['nomor_identitas'] . "</td>";
                        echo "<td>" . $row['tipe_kamar'] . "</td>";
                        echo "<td>" . $row['harga'] . "</td>";
                        echo "<td>" . $row['tanggal_pesan'] . "</td>";
                        echo "<td>" . $row['durasi_menginap'] . "</td>";
                        echo "<td>" . ($row['breakfast'] ? 'Yes' : 'No') . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>No data available</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>