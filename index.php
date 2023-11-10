<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 2</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
            <?php
            include "koneksi.php";
            $query = mysqli_query($conn, "SELECT * FROM pelanggan ORDER BY id ASC");
            ?>
            <h6 class="pb-2"><b>Data Pelanggan : </b></h6>
            <a class="btn btn-info text-light mb-3" href="tambah.php" > Tambah Data </a>
            <form action="" method="post">
                <table class="table table-striped">            
                <tr>
                    <th>No</th>
                    <th>Nama</th> 
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telp</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php if(mysqli_num_rows($query)>0){ ?>
                <?php
                    // $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td>
                        <?php echo $data["id"]; ?>
                    </td>
                    <td>
                        <?php echo $data["nama"];?>
                    </td> 
                    <td>
                        <?php echo $data["jenis_kelamin"];?>
                    </td> 
                    <td>
                        <?php echo $data["telpon"];?> 
                    </td>
                    <td>
                        <?php echo $data["alamat"];?>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="edit.php?id=$data[id]">Ubah</a>
                        <a class="btn btn-danger btn-sm" href="hapus.php?id=$data[id]">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>
                </table>
            </form>
        </div>
        </div>
    </div>
</body>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
</html>