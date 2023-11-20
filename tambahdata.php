<div>
    <a href="index.php"><< kembali ke halaman utama</a>
</div>

<?php
include('koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['nim'];
    $nama = $_POST['nama'];
    $harga = $_POST['prodi'];

    $query = "INSERT INTO datamahasiswa (NIM, NAMA, ProgramStudi) VALUES ('$kode','$nama','$harga')";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>