<div>
    <a href="index.php"><< kembali ke halaman utama</a>
</div>
<?php
include ("koneksi.php");

if (isset($_GET['del'])) {
    $delete_kode = $_GET['del'];
    
    $delete_query = "DELETE FROM datamahasiswa WHERE NIM = '$delete_kode' OR NAMA = '$delete_kode'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
    }
}
?>