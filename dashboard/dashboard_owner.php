<?php
include '../koneksi.php'; // Pastikan koneksi ke database sudah benar
include 'autentikasi.php';

// Periksa apakah pengguna sudah login dan memiliki role 'owner'
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'owner') {
    header("Location: ../login.php"); // Jika tidak login atau bukan owner, arahkan ke login
    exit();
}
//Ambil data event dari database
$query = "SELECT * FROM event"; // Sesuaikan nama tabel dan kolom dengan yang ada di database Anda
$result = mysqli_query($koneksi, $query);

$events = []; // Inisialisasi array kosong untuk menyimpan data event

// Pastikan query berhasil dan ambil hasilnya
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row; // Masukkan setiap baris data event ke dalam array $events
    }
} else {
    // Jika query gagal
    echo "Gagal mengambil data event.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Owner</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Dashboard Owner - Event Management</h1>

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Event</button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Event</th>
                    <th>Waktu</th>
                    <th>PIC</th>
                    <th>Harga Tiket</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?= htmlspecialchars($event['id_event']); ?></td>
                        <td><?= htmlspecialchars($event['nama_event']); ?></td>
                        <td><?= htmlspecialchars($event['waktu']); ?></td>
                        <td><?= htmlspecialchars($event['pic']); ?></td>
                        <td><?= htmlspecialchars($event['harga_tiket']); ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $event['id_event']; ?>">Edit</button>
                            <a href="process_event.php?action=delete&id=<?= $event['id_event']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal<?= $event['id_event']; ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="process_event.php" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="id_event" value="<?= $event['id_event']; ?>">
                                        <div class="mb-3">
                                            <label>Nama Event</label>
                                            <input type="text" name="nama_event" class="form-control" value="<?= $event['nama_event']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Waktu</label>
                                            <input type="datetime-local" name="waktu" class="form-control" value="<?= $event['waktu']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>PIC</label>
                                            <input type="text" name="pic" class="form-control" value="<?= $event['pic']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Harga Tiket</label>
                                            <input type="text" name="harga_tiket" class="form-control" value="<?= $event['harga_tiket']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="action" value="update" class="btn btn-success">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="process_event.php" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Nama Event</label>
                            <input type="text" name="nama_event" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Waktu</label>
                            <input type="datetime-local" name="waktu" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>PIC</label>
                            <input type="text" name="pic" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Harga Tiket</label>
                            <input type="text" name="harga_tiket" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="action" value="create" class="btn btn-primary">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
