<?php
include "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($data = mysqli_fetch_assoc($result)) {
        $nama = $data['nama_mhs'];
        $prodi = $data['prodi'];
        $jenis_kelamin = $data['jenis_klmn'];
    } else {
        echo "Data not found!";
        exit;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Edit Data Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" action="update_data.php" method="POST">
                            <fieldset>
                                <legend>Edit Data Mahasiswa</legend>

                                <input type="hidden" name="id" value="<?php echo $id; ?>">

                                

                                <div class="control-group">
                                    <label class="control-label" for="nama">NAMA MAHASISWA :</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="nama" name="nama" value="<?php echo $nama; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="prodi">PRODI :</label>
                                    <div class="controls">
                                        <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="<?php echo $prodi; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="jenis_kelamin">JENIS KELAMIN :</label>
                                    <div class="controls">
                                        <input type="radio" name="jenis_kelamin" value="L" <?php if ($jenis_kelamin == "L") echo "checked"; ?>> Laki-laki<br>
                                        <input type="radio" name="jenis_kelamin" value="P" <?php if ($jenis_kelamin == "P") echo "checked"; ?>> Perempuan<br>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
