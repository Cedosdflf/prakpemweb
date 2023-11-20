<?php
include ("koneksi.php");
echo "hai";

$NIM ="";
$NAMA ="";
$ProgramStudi ="";
$error ="";
$sukses ="";

if(isset($_GET['NIM'])){
    $id = $_GET['NIM'];
  }else{
    $id = "";
  }

  if($id != ""){
    $sql1   = "select * from datamahasiswa where NIM = '$id'";
    $q1     = mysqli_query($conn,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $NIM            = $r1['NIM'];
    $NAMA           = $r1['NAMA'];
    $ProgramStudi   = $r1['ProgramStudi'];
  
    if($NIM == ''){
        $error  = "Data tidak ditemukan";
    }
  }

  if(isset($_POST["simpan"])){
    $NIM            =   $_POST["nim"];
    $NAMA           =   $_POST["nama"];
    $ProgramStudi   =   $_POST["prodi"];

    if($NAMA == "" or $ProgramStudi == ""){
        $error      = "Silahkan masukan semua data.";
    } 
    if(empty($error)){
      if($id != ""){
        $sql1   = "update datamahasiswa set NIM = '$NIM',NAMA='$NAMA',ProgramStudi='$ProgramStudi' where NIM = '$id'";
    }else{
        $sql1       = "insert into datamahasiswa(NIM, NAMA, ProgramStudi) values ('$NIM','$NAMA','$ProgramStudi')";
    }
        $q1       = mysqli_query($conn,$sql1);
        if($q1){
            $sukses     = "Sukses memasukan data";
        } else {
            $error      = "Gagal cuy memasukan data";
        }

    }
}

?>
<div>
    <a href="index.php"><< kembali ke halaman utama</a>
</div>

<?php
if($error) {
?>
    <div class="alert alert-danger" role="alert">
      <?php echo $error?>
</div>
<?php
}
?>
<?php
if($sukses) {
?>
    <div class="alert alert-primary" role="alert">
      <?php echo $sukses?>
</div>
<?php
}
?>

<form action="" method="post">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="<?php echo $NIM?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $NAMA?>">
        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" value="<?php echo $ProgramStudi?>">
        <input type="submit" name="simpan" value="Simpan data">
    </form>