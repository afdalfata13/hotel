<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Fasilitas Hotel</title>
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
        <h2 class="text-center">Kelola Fasilitas Hotel</h2>
        <a href="add_fasilitas.php" class="btn btn-primary mb-3">Tambah Fasilitas</a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID Fasilitas</th>
                    <th scope="col">Nama Fasilitas</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'db_anyahotel');

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM fasilitas_hotel";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id_fasilitas'] . "</td>";
                        echo "<td>" . $row['nama_fasilitas'] . "</td>";
                        echo "<td>" . $row['deskripsi'] . "</td>";
                        echo "<td>";
                        echo "<a href='edit_fasilitas.php?id=" . $row['id_fasilitas'] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                        echo "<a href='delete_fasilitas.php?id=" . $row['id_fasilitas'] . "' class='btn btn-danger btn-sm'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>