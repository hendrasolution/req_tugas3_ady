<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div class="container">

    <div class="daftar">

        <h1>List Anggota</h1>
        <hr>
            <?php
                include "koneksi.php";
                
                $sql    = "SELECT * from tb_daftar";
                $hasil  = $conn->query($sql);

                if ($result->num_rows > 0){

                    while($row = $result->fetch_assoc()) {
                        echo 
                            "Nama: " . $row["nama_lengkap"].
                            "Telp: " . $row["telp"].
                            "Alamat:". $row["alamat"].
                            "Alasan bergabung".$row["alasan"].
                            "Tanggal daftar".$row["tanggal_daftar"];
                }
			?>
    </div>

</div>


</body>
</html>