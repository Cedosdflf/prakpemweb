<?php
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style for the table */
        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        /* Style for table header cells */
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Style for alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style for the table header */
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<input type="text" id="myinput" onkeyup="myFunction()" placeholder="Search for prodi..." title="type in a name">
    <table id="myTable">
        <thead>
            <tr>
                
                <th >NIM</th>
                <th >Nama</th>
                <th >Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <TBody>
            <?php
            $sql1   = "select * from datamahasiswa order by NIM desc";
            $q1     = mysqli_query($conn,$sql1);
            while($r1 = mysqli_fetch_array($q1)){
                ?>
                <tr>
                
                <td ><?php echo $r1['NIM']?></td>
                <td ><?php echo $r1['NAMA']?></td>
                <td ><?php echo $r1['ProgramStudi']?></td>
                <td><a href="editdata.php?NIM=<?php echo $r1['NIM']?>">
                        <span class="badge bg-warning text-dark">Edit</span>
                    </a></td>
                </tr>
            <?php
            }
            ?>
        </TBody>
    </table>

    <form action="tambahdata.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <label for="prodi">Program Studi:</label>
        <input type="text" name="prodi" required>
        <input type="submit" value="Tambahkan">
    </form>
    <form action="hapusdata.php" method="get">
        <label for="del">NIM atau nama :</label>
        <input type="text" name="del" required>
        <input type="submit" value="Hapus">
    </form>

    <script src="searchtable.js"></script>
</body>
</html>