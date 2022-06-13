<DOCTYPE html>
    <html>
    <div class="p-3 mb-2 bg-dark text-white" style="height: 1000px;">

        <body>
            <header>
                <h3 align="center">Edit Data Siswa</h3>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data detailSiswa->Kode</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </header>
            <form action="<?php echo base_url('/index/updateData') ?>" method="POST">
                <fieldset>
                    <div>
                        <div class="form-group">
                            <label>Kode</label>
                            <input class="form-control" type="text" name="kode" readonly value="<?php echo $detailSiswa->Kode ?>" />
                        </div>
                        <div class="form-group">
                            <label class="form-check-label" for="Nama">Nama</label>
                            <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $detailSiswa->Nama ?>" />
                        </div>
                        <div class="md-form">
                            <label>Alamat</label>
                            <textarea class="md-textarea form-control" name="alamat"><?php echo $detailSiswa->Alamat ?></textarea>
                        </div>
                        <div class="form-check">
                            <label>Jenis Kelamin : </label>
                            <?php $JenisKelamin = $detailSiswa->JenisKelamin ?>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" value=" Laki-laki" <?php echo ($JenisKelamin == 'Laki-laki') ? "checked" : "" ?>>Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" value=" Perempuan" <?php echo ($JenisKelamin == 'Perempuan') ? "checked" : "" ?>>Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Agama : </label>
                            <?php $Agama = $detailSiswa->Agama ?>
                            <select class="form-control" name="agama">
                                <option <?php echo ($Agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                                <option <?php echo ($Agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                <option <?php echo ($Agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                <option <?php echo ($Agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                                <option <?php echo ($Agama == 'Kong Hu Cu') ? "selected" : "" ?>>Kong Hu Cu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input class="form-control" type="text" name="asalSekolah" placeholder="Nama Sekolah" value="<?php echo $detailSiswa->AsalSekolah ?>" />
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-6">
                            <input class="btn btn-outline-success" type="submit" value="Simpan" name="Simpan" />
                        </div>
                    </div>
                </fieldset>
            </form>
        </body>
    </div>

    </html>