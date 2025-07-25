<?php
use App\Helpers\Core;

Core::init();
Core::AUTH(); // Kalau perlu otentikasi login

if (!isset($_GET['id'])) {
    echo "<script>
        alert('ID tidak ditemukan.');
        window.location.href = '?page=galeri';
    </script>";
    exit;
}

$id = $_GET['id'];

global $conn;

// Pastikan koneksi tersedia
if ($conn) {
    $sql = mysqli_query($conn, "DELETE FROM galeri WHERE id='$id'");

    if ($sql) {
        echo "<script>
            alert('Data berhasil dihapus.');
            window.location.href = '?page=galeri';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menghapus data.');
            window.location.href = '?page=galeri';
        </script>";
    }
} else {
    echo "<script>
        alert('Koneksi database gagal.');
        window.location.href = '?page=galeri';
    </script>";
}
exit;
?>
