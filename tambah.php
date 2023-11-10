<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    /> 
</head>
<body>
    TAMBAH DATA
    <form action="proses_tambah.php" method="post">
    <table>        
        <tr>
            <td>Nama</td>
            <td> :</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> :</td>
            <td>
                <select name="jns">
                    <option value="" disabled selected hidden>Pilih</option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nomor Telp</td>
            <td> :</td>
            <td><input type="number" name="telp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> :</td>
            <td><input type="text" name="alamat"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="simpan">
    </form>
</body>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
</html>