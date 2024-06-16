<?php
  include "tampilkan_data.php";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Input Nilai Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal" action="pemrosesan.php" method="POST">
                                      <fieldset>
                                        <legend>Input Nilai Mahasiswa</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="NPM">NPM MAHASISWA :</label>
                                          <div class="controls">
                                          <input type="text" class="input-xlarge focused" id="NPM" name="NPM" value="">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="nama">NAMA MAHASISWA :</label>
                                          <div class="controls">
                                          <input type="hidden" class="input-xlarge focused" id="nama" name="nama" value="">
                                          <input type="text" class="input-xlarge focused" id="nama" name="nama" value="">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="prodi">PRODI :</label>
                                          <div class="controls">
                                          <input type="text" class="input-xlarge focused" id="prodi" name="prodi" value="">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="ulangi">ULANGI :</label>
                                          <div class="controls">
                                          <input type="text" class="input-xlarge focused" id="ulangi" name="ulangi" value="">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="jenis_kelamin">JENIS KELAMIN :</label>
                                        <input type="radio" name="jenis_kelamin" value="L" <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin']=="L") echo "checked";?>> Laki-laki<br>
                                        <input type="radio" name="jenis_kelamin" value="P" <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin']=="P")  echo "checked";?>> Perempuan<br>
                                        </div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">PROSES</button>
                                          <button type="reset" class="btn">CANCEL</button>
                                        </div>
                                    </form>
                                </div>
                             </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Mahasiswa</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>NPM Mahasiswa</th>
						                  <th>Nama Mahasiswa</th>
						                  <th>Prodi Mahasiswa</th>
                              <th>Jenis Kelamin</th>
						                  <th>Aksi</th>
						                </tr>
						              </thead>
						              <tbody>
                                        <?php
                                            while ($data = mysqli_fetch_assoc($proses)){
                                        ?>
						                <tr>
						                  <td> <?php echo $data ['id'] ?> </td>
						                  <td><?php echo $data ['nama_mhs'] ?></td>
						                  <td><?php echo $data ['prodi'] ?></td>
                              <td><?php echo $data ['jenis_klmn'] ?></td>
                              <td><a href="edit_data.php?id=<?php echo $data['id']; ?>"> Edit </a> | <a href="hapus_data.php?id=<?php echo $data['id']; ?>"> Hapus</a></td>
						                </tr>
                            <?php
                                            }
                            ?>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

    </div>
</body>
</html>